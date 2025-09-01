<?php
// Template Name: Home page
get_header();

if (have_posts()) {
    while (have_posts()) : the_post();
?>
        <div role="main" class="main-container container-fluid js-quickedit-main-content">
            <div class="row row-top"></div>
            <!-- END .row-top -->
            <div class="row row-middle">
                <section>
                    <div class="highlighted">
                        <div class="region region-highlighted">
                            <div class="container">
                                <div data-drupal-messages-fallback class="hidden"></div>
                            </div>
                        </div>
                    </div>
                    <a id="main-content" href="cyber-operations.html"></a>
                    <div class="region region-content">
                        <article data-history-node-id="1" class="interactive-article-1 full clearfix">
                            <div class="content">
                                <div class="top-section" id="ia1-top-section">
                                    <div
                                        class="field field--name-field-top-section field--type-entity-reference-revisions field--label-hidden field--items">
                                        <div class="field--item">
                                            <?php $bannerImage = get_field('banner_image'); ?>
                                            <div class="paragraph--223 paragraph paragraph--type--hero paragraph--background-image paragraph--view-mode--default"
                                                style="background-image:url('<?php echo esc_url($bannerImage['url']); ?>')">
                                                <div class="paragraph--type--hero--overlay">
                                                    <div class="container paragraph-alignment-center">
                                                        <div class="paragraph-wrapper">
                                                            <div class="hero-top-section">
                                                                <div
                                                                    class="paragraph-header field field--name-field-paragraph-header field--type-entity-reference-revisions field--label-hidden field--item">
                                                                    <div
                                                                        class="paragraph--228 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                        <?php $banntitle = get_field('banner_title'); ?>
                                                                        <?php if ($banntitle) { ?>
                                                                            <div class="element-title ">
                                                                                <?php echo $banntitle; ?>
                                                                            </div>
                                                                        <?php } ?>
                                                                        <?php $banntext = get_field('banner_text'); ?>
                                                                        <?php if ($banntext) { ?>
                                                                            <div
                                                                                class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                                <?php echo $banntext; ?>
                                                                            </div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hero-footer">
                                                                <nav role="navigation" aria-labelledby="block-socialnav-menu"
                                                                    id="block-socialnav">
                                                                    <h2 class="visually-hidden" id="block-socialnav-menu">Social
                                                                        Nav</h2>
                                                                    <ul class="menu nav navbar-nav social-nav share-kit">
                                                                        <li class="facebook">
                                                                        <button class="dropdown-toggle social__item-link share-btn" data-network="facebook" data-url="<?php echo esc_url(get_permalink($post->ID)); ?>" data-title="<?php echo esc_attr(get_the_title($post->ID)); ?>"> 
                                                                        Facebook</button>
                                                                        </li>
                                                                        <li class="instagram"></li>
                                                                        <li class="linkedin"></li>
                                                                        <li class="twitter">
                                                                            <button class="social__item-link share-btn" data-network="twitter" data-url="<?php echo esc_url(get_permalink($post->ID)); ?>" data-title="<?php echo esc_attr(get_the_title($post->ID)); ?>">Twitter</button>
                                                                        </li>
                                                                        <li class="youtube"></li>
                                                                    </ul>
                                                                </nav>
                                                                <div class="search-block-form block block-search block-search-form-block"
                                                                    data-drupal-selector="search-block-form"
                                                                    id="block-cfr-interactives-search" role="search">
                                                                    <?php get_search_form(); ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="ia1-article-body" id="ia1-main-content">
                                    <div class="article-body-section ">
                                        <div class="field--item">
                                            <div class="paragraph-background-color- paragraph-outer-wrapper ">
                                                <div
                                                    class="paragraph--314 container paragraph paragraph--type--text-with-items paragraph--view-mode--default">
                                                    <div
                                                        class="paragraph-wrapper paragraph-alignment- paragraph-items-alignment-center ">
                                                        <div
                                                            class="field field--name-field-anchor-name-link field--type-text field--label-visually_hidden">
                                                            <div class="field--label sr-only">Anchor Name Link</div>
                                                            <div class="field--item">
                                                                <a name="Map" href="#"></a>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="paragraph-header field field--name-field-paragraph-header field--type-entity-reference-revisions field--label-hidden field--item">
                                                            <div
                                                                class="paragraph--18015 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                <?php $operation_title = get_field('operations_title'); ?>
                                                                <?php if ($operation_title) { ?>
                                                                    <div class="element-title ">
                                                                        <?php echo $operation_title; ?>
                                                                    </div>
                                                                <?php } ?>
                                                                <?php $operation_cont = get_field('operations_content'); ?>
                                                                <?php if ($operation_cont) { ?>
                                                                    <div
                                                                        class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>
                                                                            <?php echo $operation_cont; ?>
                                                                        </p>
                                                                    </div>
                                                                <?php } ?>
                                                            </div>
                                                        </div>



                                                        <div class="cst-map">
                                                            <div class="cst-filters" id="cst-filters">
                                                                <div class="cst-filters__list main-wrapper">
                                                                    <div class="views-exposed-form " data-ajax="true">
                                                                        <div class="    ">
                                                                            <span class="cst-divider cst-divider--left"></span>
                                                                            <span class="cst-divider cst-divider--right"></span>
                                                                            <label for="edit-sectors">Sectors targeted:</label>
                                                                            <select id="edit-sectors" name="sectors"
                                                                                class="form-select cst-filters__dropdown--filter-region"
                                                                                data-ajax="true" data-default-value="Region">
                                                                                <option value="">All sectors</option>
                                                                                <option value="296">Civil society</option>
                                                                                <option value="297">Government</option>
                                                                                <option value="298">Military</option>
                                                                                <option value="299">Private sector</option>
                                                                            </select>
                                                                        </div>
                                                                        <div class="cst-filters__dropdown ">
                                                                            <span class="cst-divider cst-divider--right"></span>
                                                                            <label for="edit-topics">Year:</label>
                                                                            <select id="edit-years" name="Year"
                                                                                class="form-select cst-filters__dropdown--filter-Year"
                                                                                data-ajax="true"
                                                                                data-default-value="All Years (2005-2024)">
                                                                                <option value="">All years (2005-2024)</option>
                                                                                <option value="2005">2005</option>
                                                                                <option value="2006">2006</option>
                                                                                <option value="2007">2007</option>
                                                                                <option value="2008">2008</option>
                                                                                <option value="2009">2009</option>
                                                                                <option value="2010">2010</option>
                                                                                <option value="2011">2011</option>
                                                                                <option value="2012">2012</option>
                                                                                <option value="2013">2013</option>
                                                                                <option value="2014">2014</option>
                                                                                <option value="2015">2015</option>
                                                                                <option value="2016">2016</option>
                                                                                <option value="2017">2017</option>
                                                                                <option value="2018">2018</option>
                                                                                <option value="2019">2019</option>
                                                                                <option value="2020">2020</option>
                                                                                <option value="2021">2021</option>
                                                                                <option value="2022">2022</option>
                                                                                <option value="2023">2023</option>
                                                                                <option value="2024">2024</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="cst-map-view loading" id="cst-map-view">
                                                                <div id="map-view__content"></div>
                                                                <div class="map-view__legend">
                                                                    <div class="map-view__legend_title">Number of cyber
                                                                        <br> operations sponsored
                                                                    </div>
                                                                    <div class="map-view__legend_indicators">
                                                                        <div class="map-view__legend_one"></div>
                                                                        <div class="map-view__legend_fifty"></div>
                                                                        <div class="map-view__legend_hundred"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="loading"></div>
                                                            </div>
                                                        </div>
                                                        <div class="paragraph-collapse-link">
                                                            <a class="" href="cyber-operations.html"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field--item">
                                            <div
                                                class="paragraph--326 paragraph paragraph--type--block-references paragraph--view-mode--default">
                                                <div
                                                    class="field field--name-field-anchor-name-link field--type-text field--label-visually_hidden">
                                                    <div class="field--label sr-only">Anchor Name Link</div>
                                                    <div class="field--item">
                                                        <a name="Timeline" href="cyber-operations.html"></a>
                                                    </div>
                                                </div>
                                                <div
                                                    class="field field--name-field-block field--type-viewfield field--label-hidden">
                                                    <div class="field__item field__item-label-hidden">
                                                        <div class="views-element-container form-group">
                                                            <div
                                                                class="view view-cst-timeline view-id-cst_timeline view-display-id-block_1 js-view-dom-id-fab35e923eef76969859873313258b4e16f43680dd633000aa54302dcce46d8e">
                                                                <div class="view-header container"> Timeline </div>
                                                                <div class="view-filters container form-group">
                                                                    <div class="view-filters__toggle visible-xs visible-sm">
                                                                        <a href="#" class="view-filters__toggle-link"> Filters
                                                                            <svg viewbox="0 0 8 16"
                                                                                class="icon icon-arrow-right"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path d="M1 1l6 7-6 7" stroke="#766E6C"
                                                                                    stroke-width="1.5" class="icon-stroke"
                                                                                    fill="none" fill-rule="evenodd"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"></path>
                                                                            </svg>
                                                                            <svg viewbox="0 0 25 25"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="icon icon-close">
                                                                                <path
                                                                                    d="M10.417 12.5L0 22.917 2.083 25 12.5 14.583 22.917 25 25 22.917 14.583 12.5 25 2.083 22.917 0 12.5 10.417 2.083 0 0 2.083 10.417 12.5z"
                                                                                    class="icon-fill" fill="none"></path>
                                                                            </svg>
                                                                        </a>
                                                                    </div>
                                                                    <form class="views-exposed-form"
                                                                        data-drupal-selector="views-exposed-form-cst-timeline-block-1">
                                                                        <div class="form--inline form-inline clearfix">
                                                                            <div
                                                                                class="form-item js-form-item form-type-select js-form-type-select form-item-field-type-target-id js-form-item-field-type-target-id form-group">
                                                                                <label for="edit-field-type-target-id"
                                                                                    class="control-label">Type</label>
                                                                                <div class="select-wrapper">
                                                                                    <select style="width:100%;"
                                                                                        class="form-select form-control">
                                                                                        <option value="All" selected>- Any -
                                                                                        </option>
                                                                                        <?php
                                                                                        // Fetch the terms from taxonomy
                                                                                        $terms = get_terms(array(
                                                                                            'taxonomy' => 'category',
                                                                                            'hide_empty' => false,
                                                                                        ));
                                                                                        // Loop through each term and create an option
                                                                                        foreach ($terms as $term) {
                                                                                            echo '<option value="' . esc_attr($term->term_id) . '">' . esc_html($term->name) . '</option>';
                                                                                        } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="form-item js-form-item form-type-select js-form-type-select form-item-field-type-of-incident-target-id js-form-item-field-type-of-incident-target-id form-group">
                                                                                <label class="control-label">Cyber
                                                                                    Operations</label>
                                                                                <div class="select-wrapper">
                                                                                    <select style="width:100%;"
                                                                                        class="form-select form-control">
                                                                                        <option value="All" selected>- Any -
                                                                                        </option>
                                                                                        <?php
                                                                                        // Fetch the terms from taxonomy
                                                                                        $Operations = get_terms(array(
                                                                                            'taxonomy' => 'cyber_operation',
                                                                                            'hide_empty' => false,
                                                                                        ));
                                                                                        // Loop through each term and create an option
                                                                                        foreach ($Operations as $Operation) {
                                                                                            echo '<option value="' . esc_attr($Operation->term_id) . '">' . esc_html($Operation->name) . '</option>';
                                                                                        } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="form-item js-form-item form-type-select js-form-type-select form-item-field-suspected-state-sponsor-target-id js-form-item-field-suspected-state-sponsor-target-id form-group">
                                                                                <label for="" class="control-label">State
                                                                                    Sponsor</label>
                                                                                <div class="select-wrapper">
                                                                                    <select style="width:100%;"
                                                                                        class="form-select form-control">
                                                                                        <option value="All" selected>- Any -
                                                                                        </option>
                                                                                        <?php
                                                                                        // Fetch the terms from taxonomy
                                                                                        $sponsors = get_terms(array(
                                                                                            'taxonomy' => 'state_sponsor',
                                                                                            'hide_empty' => false,
                                                                                        ));
                                                                                        // Loop through each term and create an option
                                                                                        foreach ($sponsors as $sponsor) {
                                                                                            echo '<option value="' . esc_attr($sponsor->term_id) . '">' . esc_html($sponsor->name) . '</option>';
                                                                                        } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="form-item js-form-item form-type-select js-form-type-select form-item-field-victims-location-target-id js-form-item-field-victims-location-target-id form-group">
                                                                                <label for=""
                                                                                    class="control-label">Victim</label>
                                                                                <div class="select-wrapper">
                                                                                    <select style="width:100%;"
                                                                                        class="form-select form-control">
                                                                                        <option value="All" selected>- Any -
                                                                                        </option>
                                                                                        <?php
                                                                                        // Fetch the terms from taxonomy
                                                                                        $victims = get_terms(array(
                                                                                            'taxonomy' => 'victim',
                                                                                            'hide_empty' => false,
                                                                                        ));
                                                                                        // Loop through each term and create an option
                                                                                        foreach ($victims as $victim) {
                                                                                            echo '<option value="' . esc_attr($victim->term_id) . '">' . esc_html($victim->name) . '</option>';
                                                                                        } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="form-item js-form-item form-type-select js-form-type-select form-item-field-victim-category-target-id js-form-item-field-victim-category-target-id form-group">
                                                                                <label for="" class="control-label">Victim
                                                                                    Category</label>
                                                                                <div class="select-wrapper">
                                                                                    <select style="width:100%;"
                                                                                        class="form-select form-control">
                                                                                        <option value="All" selected>- Any -
                                                                                        </option>
                                                                                        <?php
                                                                                        // Fetch the terms from taxonomy
                                                                                        $victimcategories = get_terms(array(
                                                                                            'taxonomy' => 'victim_category',
                                                                                            'hide_empty' => false,
                                                                                        ));
                                                                                        // Loop through each term and create an option
                                                                                        foreach ($victimcategories as $victimcategory) {
                                                                                            echo '<option value="' . esc_attr($victimcategory->term_id) . '">' . esc_html($victimcategory->name) . '</option>';
                                                                                        } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="form-item js-form-item form-type-select js-form-type-select form-item-field-victim-government-reaction-target-id js-form-item-field-victim-government-reaction-target-id form-group">
                                                                                <label for="" class="control-label">Victim
                                                                                    Government Response</label>
                                                                                <div class="select-wrapper">
                                                                                    <select style="width:100%;"
                                                                                        class="form-select form-control">
                                                                                        <option value="All" selected>- Any -
                                                                                        </option>
                                                                                        <?php
                                                                                        // Fetch the terms from taxonomy
                                                                                        $vgresponses = get_terms(array(
                                                                                            'taxonomy' => 'victim_government_response',
                                                                                            'hide_empty' => false,
                                                                                        ));
                                                                                        // Loop through each term and create an option
                                                                                        foreach ($vgresponses as $vgresponse) {
                                                                                            echo '<option value="' . esc_attr($vgresponse->term_id) . '">' . esc_html($vgresponse->name) . '</option>';
                                                                                        } ?>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="form-item js-form-item form-type-select js-form-type-select form-item-field-suspected-state-sponsor-target-id-1 js-form-item-field-suspected-state-sponsor-target-id-1 form-group">
                                                                                <label
                                                                                    for="edit-field-suspected-state-sponsor-target-id-1"
                                                                                    class="control-label">Suspected
                                                                                    State-Sponsor
                                                                                    (field_suspected_state_sponsor)</label>
                                                                                <div class="select-wrapper">
                                                                                    <select class="form-select form-control">
                                                                                        <option value="All" selected>- Any -
                                                                                        </option>
                                                                                        <option value="1">Unknown</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div data-drupal-selector="edit-actions"
                                                                                class="form-actions form-group js-form-wrapper form-wrapper"
                                                                                id="edit-actions">
                                                                                <button
                                                                                    class="button js-form-submit form-submit btn-info btn">Apply</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                                <div id="timelineContent" class="view-content container">
                                                                    <?php
                                                                    $args = [
                                                                        'post_type'      => 'post', // change to your CPT if needed
                                                                        'posts_per_page' => -1,
                                                                        'meta_key'       => 'date_of_report',
                                                                        'orderby'        => 'meta_value',
                                                                        'order'          => 'DESC',
                                                                    ];
                                                                    $query = new WP_Query($args);
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
                                                                                    echo '</div><div class="collapse-control"><a href="#" class="collapse-control-link" data-expanded="false" data-once="click">View All</a></div></div></div>';
                                                                                elseif ($current_year !== ''):
                                                                                    echo '</div></div>';
                                                                                endif; // close previous year list
                                                                                //echo '</div>';
                                                                                $i = 1;
                                                                            ?>
                                                                                <div class="row">
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
                                                                                else:
                                                                                    $current_year = $year;
                                                                                endif;
                                                                                $i++;
                                                                                $b++;
                                                                            endwhile; ?>
                                                                                    </div>
                                                                                <?php endif;
                                                                            wp_reset_postdata(); ?>
                                                                                <!-- Repeat Year -->
                                                                                </div>
                                                                                <div class="view-footer">
                                                                                    <div class="container">
                                                                                        <a class="pull-right btn btn-default"
                                                                                            href="#">Download the Data</a>
                                                                                    </div>
                                                                                </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if (have_rows('glossary_items')): ?>
                                                    <div class="field--item">
                                                        <div class="paragraph-background-color- paragraph-outer-wrapper ">
                                                            <div
                                                                class="paragraph--293 container paragraph paragraph--type--text-with-items paragraph--view-mode--default">
                                                                <div
                                                                    class="paragraph-wrapper paragraph-alignment-4columns paragraph-items-alignment-left ">
                                                                    <div class="field field--name-field-anchor-name-link field--type-text field--label-visually_hidden">
                                                                        <div class="field--label sr-only">Anchor Name Link</div>
                                                                        <div class="field--item"><a name="Glossary" target="_blank"></a></div>
                                                                    </div>
                                                                    <div
                                                                        class="paragraph-header field field--name-field-paragraph-header field--type-entity-reference-revisions field--label-hidden field--item">
                                                                        <div
                                                                            class="paragraph--18020 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                            <div class="element-title ">Glossary</div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="paragraph-items field field--name-field-paragraph-items field--type-entity-reference-revisions field--label-hidden field--items">
                                                                        <?php while (have_rows('glossary_items')): the_row();
                                                                            $gloimage = get_sub_field('add_glossary_image');
                                                                            $imgurl = $gloimage['url'];
                                                                            $imgalt = $gloimage['alt'];
                                                                            $glotitle = get_sub_field('add_glossary_title');
                                                                            $globody = get_sub_field('add_glossary_content');
                                                                        ?>
                                                                            <div class="field--item">
                                                                                <div
                                                                                    class="paragraph--5452 paragraph paragraph--type--image-element paragraph--view-mode--default">
                                                                                    <?php if (!empty($gloimage)): ?>
                                                                                        <div
                                                                                            class="element-image field field--name-field-element-image field--type-image field--label-hidden field--item">
                                                                                            <img loading="lazy" src="<?php echo $imgurl; ?>"
                                                                                                width="401" height="401"
                                                                                                alt="<?php echo $imgalt; ?>"
                                                                                                class="img-responsive">
                                                                                        </div>
                                                                                    <?php endif; ?>
                                                                                    <div
                                                                                        class="paragraph-text field field--name-field-paragraph-text field--type-entity-reference-revisions field--label-hidden field--item">
                                                                                        <div
                                                                                            class="paragraph--5451 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                                            <div class="element-title ">
                                                                                                <?php echo $glotitle; ?>
                                                                                            </div>
                                                                                            <div
                                                                                                class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                                                <p>
                                                                                                    <?php echo $globody; ?>
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        <?php endwhile; ?>
                                                                    </div>
                                                                    <div class="paragraph-collapse-link">
                                                                        <a class="" href="cyber-operations.html"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="field--item">
                                                    <div
                                                        class="paragraph-background-color-white paragraph-outer-wrapper cst-old-glossary-paragraph">
                                                        <div
                                                            class="paragraph--283 container paragraph paragraph--type--text-with-items paragraph--view-mode--default">

                                                            <div
                                                                class="paragraph-wrapper paragraph-alignment-2columns paragraph-items-alignment-left ">

                                                                <?php
                                                                $readcollapse = get_field('read_more_description'); ?>
                                                                <?php if ($readcollapse): ?>
                                                                    <div
                                                                        class="paragraph-header field field--name-field-paragraph-header field--type-entity-reference-revisions field--label-hidden field--item">
                                                                        <div
                                                                            class="paragraph--18023 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                            <div
                                                                                class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                                <p>
                                                                                    <?php echo $readcollapse; ?>
                                                                                </p>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                <?php endif; ?>
                                                                <?php if (have_rows('read_more_items')): ?>
                                                                    <div
                                                                        class="paragraph-items field field--name-field-paragraph-items field--type-entity-reference-revisions field--label-hidden field--items">
                                                                        <?php while (have_rows('read_more_items')): the_row();
                                                                            $title = get_sub_field('title_text');
                                                                            $content = get_sub_field('description_text');
                                                                        ?>
                                                                            <div class="field--item">
                                                                                <div
                                                                                    class="paragraph--279 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                                    <?php if ($title): ?>
                                                                                        <div
                                                                                            class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">
                                                                                            <?php echo $title; ?>
                                                                                        </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($content): ?>
                                                                                        <div
                                                                                            class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                                            <p>
                                                                                                <?php echo $content; ?>
                                                                                            </p>
                                                                                        </div>
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                            </div>
                                                                        <?php endwhile; ?>
                                                                    </div>
                                                                <?php endif; ?>

                                                                <div class="paragraph-collapse-link">
                                                                    <a class=""></a>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="field--item">
                                                    <div class="paragraph-background-color-white paragraph-outer-wrapper ">
                                                        <div
                                                            class="paragraph--276 container paragraph paragraph--type--text-with-items paragraph--view-mode--default">
                                                            <div
                                                                class="paragraph-wrapper paragraph-alignment-collapsible paragraph-items-alignment- ">
                                                                <div id="paragraph-collapse-276"
                                                                    class="paragraph-collapse no-transition">
                                                                    <div
                                                                        class="field field--name-field-anchor-name-link field--type-text field--label-visually_hidden">
                                                                        <div class="field--label sr-only">Anchor Name Link</div>
                                                                        <div class="field--item">
                                                                            <a name="OurMethodology"
                                                                                href="cyber-operations.html"></a>
                                                                        </div>
                                                                    </div>
                                                                    <?php $methoheading = get_field('our_methodology_heading');
                                                                    if ($methoheading):
                                                                    ?>
                                                                        <div
                                                                            class="paragraph-header field field--name-field-paragraph-header field--type-entity-reference-revisions field--label-hidden field--item">
                                                                            <div
                                                                                class="paragraph--274 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                                <div class="element-title ">
                                                                                    <?php echo $methoheading; ?>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                    <?php $methododesc = get_field('our_methodology_description');
                                                                    if ($methododesc): ?>
                                                                        <div
                                                                            class="paragraph-items field field--name-field-paragraph-items field--type-entity-reference-revisions field--label-hidden field--items">
                                                                            <div class="field--item">
                                                                                <div
                                                                                    class="paragraph--275 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                                    <div
                                                                                        class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                                        <?php echo $methododesc; ?>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    <?php endif; ?>
                                                                    <div class="paragraph-collapse-link">
                                                                        <a class="" data-toggle="collapse"
                                                                            data-target="#paragraph-collapse-276 .paragraph-items"
                                                                            aria-expanded="false"
                                                                            aria-controls="paragraph-collapse-276"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php
                                                $bottomlink = get_field('add_bottom_link');
                                                if ($bottomlink):
                                                    $linkurl = $bottomlink['url'];
                                                    $linktitle = $bottomlink['title'];
                                                    $linktarget = $bottomlink['target'] ? $bottomlink['target'] : '_self';
                                                ?>
                                                    <div class="field--item">
                                                        <div
                                                            class="paragraph-background-color- paragraph-outer-wrapper paragraph-subfooter-freeform-area">
                                                            <div
                                                                class="paragraph--327 subfooter-freeform-area paragraph paragraph--type--subfooter-freeform-area paragraph--view-mode--default">
                                                                <div class="container-fluid">
                                                                    <div
                                                                        class="paragraph-wrapper paragraph-alignment- paragraph-items-alignment-">
                                                                        <div
                                                                            class="field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                            <p>
                                                                                <a href="<?php echo esc_url($linkurl); ?>"
                                                                                    target="<?php echo esc_attr($linktarget); ?>">
                                                                                    <?php echo esc_html($linktitle); ?>
                                                                                </a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                        </article>
                    </div>
                </section>
            </div>
        </div>

<?php
    endwhile;
}
get_footer();
?>