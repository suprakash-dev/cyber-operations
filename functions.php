<?php
add_theme_support( 'post-thumbnails' );
// load css into the website's front-end
function cfr_enqueue_style() {
    wp_enqueue_style( 'cfr-style', get_stylesheet_uri() ); 
    wp_enqueue_style( 'custom-style-1', get_stylesheet_directory_uri().'/assets/css/custom1.css' ); 
    wp_enqueue_style( 'custom-style-2', get_stylesheet_directory_uri().'/assets/css/custom2.css' ); 
    wp_enqueue_style( 'fonts-style', get_stylesheet_directory_uri().'/assets/css/fonts.css' ); 
    wp_enqueue_style( 'map-style', get_stylesheet_directory_uri().'/assets/css/map.css' ); 

    //wp_enqueue_script( 'misc-drupal', get_stylesheet_directory_uri() . '/assets/js/misc-drupal.js', array( 'jquery' ), false, true );
    //wp_enqueue_script( 'misc-drupal-init', get_stylesheet_directory_uri() . '/assets/js/misc-drupal.init.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'once-once', get_stylesheet_directory_uri() . '/assets/js/once-once.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'misc-debounce', get_stylesheet_directory_uri() . '/assets/js/misc-debounce.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'dist-purify', get_stylesheet_directory_uri() . '/assets/js/dist-purify.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'vendor-jquery', get_stylesheet_directory_uri() . '/assets/js/vendor-jquery.fancybox.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'vendor-select2', get_stylesheet_directory_uri() . '/assets/js/vendor-select2.full.min.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'utils-js', get_stylesheet_directory_uri() . '/assets/js/utils.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'js-cst', get_stylesheet_directory_uri() . '/assets/js/js-cst.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'common-breakpoints', get_stylesheet_directory_uri() . '/assets/js/common-breakpoints.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'bootstrap-collapse', get_stylesheet_directory_uri() . '/assets/js/bootstrap-collapse.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'bootstrap-modal', get_stylesheet_directory_uri() . '/assets/js/bootstrap-modal.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'bootstrap-tooltip', get_stylesheet_directory_uri() . '/assets/js/bootstrap-tooltip.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'bootstrap-popover', get_stylesheet_directory_uri() . '/assets/js/bootstrap-popover.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'bootstrap-scrollspy', get_stylesheet_directory_uri() . '/assets/js/bootstrap-scrollspy.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'mapbox-gl', get_stylesheet_directory_uri() . '/assets/js/v0.50.0-mapbox-gl.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'js-cst-map', get_stylesheet_directory_uri() . '/assets/js/js-cst-map.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'ajax-js', get_stylesheet_directory_uri() . '/assets/js/ajax-time.js', array( 'jquery' ), false, true );
}
    
add_action( 'wp_enqueue_scripts', 'cfr_enqueue_style' );


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

    function add_li_class($classes, $item, $args)
    {
        // Check if it's the correct menu location (optional)
        if ($args->theme_location == 'header-menu-main') {
            $classes[] = 'navigation-item';
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_li_class', 10, 3);

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

    function add_ftli_class($classes, $item, $args)
    {
        // Check if it's the correct menu location (optional)
        if ($args->theme_location == 'footer-menu') {
            $classes[] = 'main-footer__menu-item';
        }
        return $classes;
    }
    add_filter('nav_menu_css_class', 'add_ftli_class', 10, 3);



    
    add_action('init', 'create_operations_hierarchical_taxonomy', 0);
    function create_operations_hierarchical_taxonomy()
    {
        $labels = array (
            'name' => _x('Cyber Operations', 'taxonomy general name'),
            'singular_name' => _x('Cyber Operation', 'taxonomy singular name'),
            'search_items' => __('Search Cyber Operations'),
            'all_items' => __('All Cyber Operations'),
            'parent_item' => __('Parent Cyber Operation'),
            'parent_item_colon' => __('Parent Cyber Operation:'),
            'edit_item' => __('Edit Cyber Operation'),
            'update_item' => __('Update Cyber Operation'),
            'add_new_item' => __('Add New Cyber Operation'),
            'new_item_name' => __('New Cyber Operation Name'),
            'menu_name' => __('Cyber Operations'),
        );
        register_taxonomy('cyber_operation', array('post'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'cyber_operation'),
        ));
    }

    add_action('init', 'create_state_sponsor_hierarchical_taxonomy', 0);
    function create_state_sponsor_hierarchical_taxonomy()
    {
        $labels = array (
            'name' => _x('State Sponsors', 'taxonomy general name'),
            'singular_name' => _x('State Sponsor', 'taxonomy singular name'),
            'search_items' => __('Search State Sponsors'),
            'all_items' => __('All State Sponsors'),
            'parent_item' => __('Parent State Sponsor'),
            'parent_item_colon' => __('Parent State Sponsor:'),
            'edit_item' => __('Edit State Sponsor'),
            'update_item' => __('Update State Sponsor'),
            'add_new_item' => __('Add New State Sponsor'),
            'new_item_name' => __('New State Sponsor Name'),
            'menu_name' => __('State Sponsors'),
        );
        register_taxonomy('state_sponsor', array('post'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'state_sponsor'),
        ));
    }

    add_action('init', 'create_victim_hierarchical_taxonomy', 0);
    function create_victim_hierarchical_taxonomy()
    {
        $labels = array (
            'name' => _x('Victims', 'taxonomy general name'),
            'singular_name' => _x('Victim', 'taxonomy singular name'),
            'search_items' => __('Search Victims'),
            'all_items' => __('All Victims'),
            'parent_item' => __('Parent Victim'),
            'parent_item_colon' => __('Parent Victim:'),
            'edit_item' => __('Edit Victim'),
            'update_item' => __('Update Victim'),
            'add_new_item' => __('Add New Victim'),
            'new_item_name' => __('New Victim Name'),
            'menu_name' => __('Victims'),
        );
        register_taxonomy('victim', array('post'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'victim'),
        ));
    }

    add_action('init', 'create_victim_category_hierarchical_taxonomy', 0);
    function create_victim_category_hierarchical_taxonomy()
    {
        $labels = array (
            'name' => _x('Victim Categories', 'taxonomy general name'),
            'singular_name' => _x('Victim Category', 'taxonomy singular name'),
            'search_items' => __('Search Victim Categories'),
            'all_items' => __('All Victim Categories'),
            'parent_item' => __('Parent Victim Category'),
            'parent_item_colon' => __('Parent Victim Category:'),
            'edit_item' => __('Edit Victim Category'),
            'update_item' => __('Update Victim Category'),
            'add_new_item' => __('Add New Victim Category'),
            'new_item_name' => __('New Victim Category Name'),
            'menu_name' => __('Victim Categories'),
        );
        register_taxonomy('victim_category', array('post'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'victim_category'),
        ));
    }


    add_action('init', 'create_victim_government_response_hierarchical_taxonomy', 0);
    function create_victim_government_response_hierarchical_taxonomy()
    {
        $labels = array (
            'name' => _x('Victim Government Responses', 'taxonomy general name'),
            'singular_name' => _x('Victim Government Response', 'taxonomy singular name'),
            'search_items' => __('Search Victim Government Responses'),
            'all_items' => __('All Victim Government Responses'),
            'parent_item' => __('Parent Victim Government Response'),
            'parent_item_colon' => __('Parent Victim Government Response:'),
            'edit_item' => __('Edit Victim Government Response'),
            'update_item' => __('Update Victim Government Response'),
            'add_new_item' => __('Add New Victim Government Response'),
            'new_item_name' => __('New Victim Government Response Name'),
            'menu_name' => __('Victim Government Responses'),
        );
        register_taxonomy('victim_government_response', array('post'), array(
            'hierarchical' => true,
            'labels' => $labels,
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'query_var' => true,
            'rewrite' => array('slug' => 'victim_government_response'),
        ));
    }

    // Change Category labels to Type
function wpb_change_category_labels() {
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
add_action( 'init', 'wpb_change_category_labels' );

// Change the category slug to "type"
function wpb_change_category_slug( $args, $taxonomy ) {
    if ( 'category' === $taxonomy ) {
        $args['rewrite']['slug'] = 'type'; // change slug
    }
    return $args;
}
add_filter( 'register_taxonomy_args', 'wpb_change_category_slug', 10, 2 );



?>