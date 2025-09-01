<?php
add_theme_support('post-thumbnails');
// load css into the website's front-end
function cfr_enqueue_style()
{
    global $wp_query;
    wp_enqueue_style('cfr-style', get_stylesheet_uri());
    wp_enqueue_style('custom-style-1', get_stylesheet_directory_uri() . '/assets/css/custom1.css');
    wp_enqueue_style('custom-style-2', get_stylesheet_directory_uri() . '/assets/css/custom2.css');
    wp_enqueue_style('fonts-style', get_stylesheet_directory_uri() . '/assets/css/fonts.css');
    wp_enqueue_style('map-style', get_stylesheet_directory_uri() . '/assets/css/map.css');

    //wp_enqueue_script( 'misc-drupal', get_stylesheet_directory_uri() . '/assets/js/misc-drupal.js', array( 'jquery' ), false, true );
    //wp_enqueue_script( 'misc-drupal-init', get_stylesheet_directory_uri() . '/assets/js/misc-drupal.init.js', array( 'jquery' ), false, true );
    wp_enqueue_script('once-once', get_stylesheet_directory_uri() . '/assets/js/once-once.min.js', array('jquery'), false, true);
    wp_enqueue_script('misc-debounce', get_stylesheet_directory_uri() . '/assets/js/misc-debounce.js', array('jquery'), false, true);
    wp_enqueue_script('dist-purify', get_stylesheet_directory_uri() . '/assets/js/dist-purify.min.js', array('jquery'), false, true);
    wp_enqueue_script('vendor-jquery', get_stylesheet_directory_uri() . '/assets/js/vendor-jquery.fancybox.min.js', array('jquery'), false, true);
    wp_enqueue_script('vendor-select2', get_stylesheet_directory_uri() . '/assets/js/vendor-select2.full.min.js', array('jquery'), false, true);
    wp_enqueue_script('utils-js', get_stylesheet_directory_uri() . '/assets/js/utils.js', array('jquery'), false, true);
    wp_enqueue_script('js-cst', get_stylesheet_directory_uri() . '/assets/js/js-cst.js', array('jquery'), false, true);
    wp_enqueue_script('common-breakpoints', get_stylesheet_directory_uri() . '/assets/js/common-breakpoints.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrap-collapse', get_stylesheet_directory_uri() . '/assets/js/bootstrap-collapse.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrap-modal', get_stylesheet_directory_uri() . '/assets/js/bootstrap-modal.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrap-tooltip', get_stylesheet_directory_uri() . '/assets/js/bootstrap-tooltip.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrap-popover', get_stylesheet_directory_uri() . '/assets/js/bootstrap-popover.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrap-scrollspy', get_stylesheet_directory_uri() . '/assets/js/bootstrap-scrollspy.js', array('jquery'), false, true);
    wp_enqueue_script('mapbox-gl', get_stylesheet_directory_uri() . '/assets/js/v0.50.0-mapbox-gl.js', array('jquery'), false, true);
    wp_enqueue_script('js-cst-map', get_stylesheet_directory_uri() . '/assets/js/js-cst-map.js', array('jquery'), false, true);
    wp_enqueue_script('filter-ajax-script', get_stylesheet_directory_uri() . '/assets/js/ajax-time.js', array('jquery'), false, true);
    wp_enqueue_script('social-share', get_stylesheet_directory_uri() . '/assets/js/js-social-share.js', array('jquery'), false, true);
    wp_localize_script(
        'filter-ajax-script',
        'filter_ajax_obj',
        array(
            'ajaxurl' => admin_url('admin-ajax.php'),
            'query' => json_encode($wp_query->query_vars),
        )
    );
}

add_action('wp_enqueue_scripts', 'cfr_enqueue_style');

//Register Menus
function register_cfr_menus()
{
    register_nav_menus(
        array(
            'header-menu-main' => __('Header Menu', 'cfr-domain'),
            'header-menu-left' => __('Header Left Menu', 'cfr-domain'),
            'footer-menu' => __('Footer Menu', 'cfr-domain')
        )
    );
}
add_action('init', 'register_cfr_menus');

//Add header Menu li class 
function add_li_class($classes, $item, $args)
{
    // Check if it's the correct menu location (optional)
    if ($args->theme_location == 'header-menu-main') {
        $classes[] = 'navigation-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_li_class', 10, 3);

// Wrap menu item title in a div
function custom_menu_title_wrapper($item_output, $item, $depth, $args)
{
    if ($args->theme_location == 'header-menu-main') {
        // Wrap the title in a div inside <a>
        $item_output = preg_replace(
            '/>([^<]+)<\/a>/',
            '><div class="element-title">$1</div></a>',
            $item_output
        );
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'custom_menu_title_wrapper', 10, 4);

//Add footer Menu li class
function add_ftli_class($classes, $item, $args)
{
    // Check if it's the correct menu location (optional)
    if ($args->theme_location == 'footer-menu') {
        $classes[] = 'main-footer__menu-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_ftli_class', 10, 3);


// Change Category labels to Type
function wpb_change_category_labels()
{
    global $wp_taxonomies;

    if (isset($wp_taxonomies['category'])) {
        $labels = &$wp_taxonomies['category']->labels;
        $labels->name = 'Types';
        $labels->singular_name = 'Type';
        $labels->search_items = 'Search Types';
        $labels->all_items = 'All Types';
        $labels->parent_item = 'Parent Type';
        $labels->parent_item_colon = 'Parent Type:';
        $labels->edit_item = 'Edit Type';
        $labels->view_item = 'View Type';
        $labels->update_item = 'Update Type';
        $labels->add_new_item = 'Add New Type';
        $labels->new_item_name = 'New Type Name';
        $labels->menu_name = 'Types';
    }
}
add_action('init', 'wpb_change_category_labels');

// Change the category slug to "type"
function wpb_change_category_slug($args, $taxonomy)
{
    if ('category' === $taxonomy) {
        $args['rewrite']['slug'] = 'type'; // change slug
    }
    return $args;
}
add_filter('register_taxonomy_args', 'wpb_change_category_slug', 10, 2);


// Add custom AJAX action for getting filter data
function get_filter_data()
{
    // Check if the selected value is set
    if (isset($_POST['selected_value'])) {
        if (isset($_POST['selected_value']) && is_array($_POST['selected_value'])) {
            $selected_values = array_map('sanitize_text_field', $_POST['selected_value']);
        } else {
            $selected_values = [];
        }

        $tax_query = ['relation' => 'AND']; // OR = match any, AND = must match all
        foreach ($selected_values as $term_id) {
            $term = get_term($term_id);
            if ($term && !is_wp_error($term)) {
                $tax_query[] = [
                    'taxonomy' => $term->taxonomy,
                    'field'    => 'term_id',
                    'terms'    => $term_id,
                ];
            }
        }
        $args = [
            'post_type'      => 'post',
            'posts_per_page' => -1,
            'meta_key'       => 'date_of_report',
            'orderby'        => 'meta_value',
            'order'          => 'DESC',
        ];
        // only add tax_query if terms were valid
        if (count($tax_query) > 1) {
            $args['tax_query'] = $tax_query;
        }
        $query = new WP_Query($args);

        ob_start();
?>
        <div class="view-filters__selected">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <ul class="view-filters__selected-list clearfix">
                        <li class="view-filters__selected-list-item view-filters__selected-header">Filtered by</li>
                        <?php

                        if (!empty($tax_query) && is_array($tax_query)) {
                            foreach ($tax_query as $condition) {
                                if (is_array($condition) && isset($condition['terms'])) {
                                    $terms = (array) $condition['terms']; // force into array 
                                    foreach ($terms as $term_id) {
                                        $term = get_term($term_id);
                                        if ($term && !is_wp_error($term)) { ?>
                                            <li class="view-filters__selected-list-item view-filters__selected-filter">
                                                <a href="#" class="view-filters__selected-link" data-target="<?php echo $term_id; ?>"><?php echo $term->name; ?> <svg viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" class="icon icon-close">
                                                        <path d="M10.417 12.5L0 22.917 2.083 25 12.5 14.583 22.917 25 25 22.917 14.583 12.5 25 2.083 22.917 0 12.5 10.417 2.083 0 0 2.083 10.417 12.5z" class="icon-fill" fill="none"></path>
                                                    </svg>
                                                </a>
                                            </li>
                        <?php }
                                    }
                                }
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <?php
        $total_posts = $query->found_posts;
        $current_year = '';
        $i = 1;
        $b = 1;
        if ($query->have_posts()):
            while ($query->have_posts()): $query->the_post();

                $date       = get_field('date_of_report');
                $year       = date('Y', strtotime($date));

        ?>

                <!-- Repeat Year -->
                <?php // Print the year only once

                if ($year !== $current_year):
                    if ($current_year !== '' && $i > 4):
                        echo $current_year . '--' . $year . '--' . $i;
                        echo '</div><div class="collapse-control hello"><a href="#" class="collapse-control-link" data-expanded="false" data-once="click">View All</a></div>';

                    endif; // close previous year list
                    echo '</div></div>';
                    $i = 1;
                ?>
                    <div class="row ">
                        <div class="col-sm-3 col-lg-2">
                            <div class="views-group-header">
                                <div
                                    class="views-field views-field-date-first-reported">
                                    <span class="field-content">
                                        <?php echo $year; ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-9 col-lg-10">
                        <?php
                    endif;
                        ?>
                        <?php if ($i == 4) echo '<div class="collapse-wrapper">'; ?>
                        <div
                            class="field-content cst-issue views-field-title ">
                            <a href="<?php the_permalink() ?>">
                                <?php the_title(); ?>
                            </a>
                        </div>

                    <?php
                    //echo  $b.'-'.$i.'-'.$total_posts;
                    if ($b == $total_posts && $i == 4):
                        echo '</div><div class="collapse-control"><a href="#" class="collapse-control-link" data-expanded="false" data-once="click">View All</a></div></div></div>';
                        $current_year = '';
                    endif;
                    $current_year = $year;

                    $i++;
                    $b++;
                endwhile; ?>
                        </div>
                    <?php else: ?>
                        <div class="row ">
                            <div class="col-sm-12 col-lg-12">
                                <p>No timeline found.</p>
                            </div>
                        </div>
                    <?php endif;
                wp_reset_postdata(); ?>
                    <!-- Repeat Year -->
                    </div>
            <?php
            $filter_posts = ob_get_clean();
            // Example response (replace with your actual data retrieval logic)
            $response = array(
                'status' => 'success',
                'data' => $filter_posts
            );
        } else {
            $response = array(
                'status' => 'error',
                'message' => 'No selected value provided'
            );
        }

        // Return the response as JSON
        wp_send_json($response);
    }
    add_action('wp_ajax_get_filter_data', 'get_filter_data');
    add_action('wp_ajax_nopriv_get_filter_data', 'get_filter_data');



            ?>