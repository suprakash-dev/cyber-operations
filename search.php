
<?php
get_header();
?>
<div role="main" class="main-container container-fluid js-quickedit-main-content">
    <div class="row row-top">
    </div><!-- END .row-top -->
    <div class="row row-middle">


        <section>

            <div class="highlighted">
                <div class="region region-highlighted">
                    <div class="container">
                        <div data-drupal-messages-fallback="" class="hidden"></div>
                    </div>

                </div>
            </div>




            <a id="main-content"></a>
            <div class="region region-content">


                <div class="views-element-container form-group">

                    <div
                        class="view view-cst-timeline view-id-cst_timeline view-display-id-search_results js-view-dom-id-020b169916cfe8291916bdb62951f4996d46bcc45d88c7f1ed2159305fce56a8">

                        <?php global $wp_query; ?>
                        
                        <div class="view-header container">
                            <span class="search-results search-results-581"><?php echo $wp_query->found_posts; ?> <span
                                    class="search-results-single">Result</span><span
                                    class="search-results-multiple">Results</span> for: </span>
                        </div>
                        <div class="view-filters container form-group">
                            <div class="view-filters__toggle visible-xs visible-sm">
                                <a href="#" class="view-filters__toggle-link">
                                    Filters
                                    <svg viewBox="0 0 8 16" class="icon icon-arrow-right"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1l6 7-6 7" stroke="#766E6C" stroke-width="1.5" class="icon-stroke"
                                            fill="none" fill-rule="evenodd" stroke-linecap="round"
                                            stroke-linejoin="round"></path>
                                    </svg>
                                    <svg viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" class="icon icon-close">
                                        <path
                                            d="M10.417 12.5L0 22.917 2.083 25 12.5 14.583 22.917 25 25 22.917 14.583 12.5 25 2.083 22.917 0 12.5 10.417 2.083 0 0 2.083 10.417 12.5z"
                                            class="icon-fill" fill="none"></path>
                                    </svg>

                                </a>
                            </div>
                            <div class="views-exposed-form search-page-form">
                           <?php get_search_form(); ?>
                                </div>
                        </div>
                           <?php if ( have_posts() ) : ?>
                        <div class="view-content container">
                            <div class="row ">
                                <div class="col-sm-3 col-lg-2">

                                </div>
                                <div class="col-sm-9 col-lg-10">
                                    <?php while ( have_posts() ) : the_post(); ?>
                                        <div class="views-field views-field-title"><span class="field-content"><a
                                                    href="<?php the_permalink(); ?>" hreflang="en"><?php the_title(); ?>
                                                </a></span></div>
                                     <?php endwhile; ?>
                                    </div>
                                   
                                    <div class="collapse-control">
                                        <a href="#" class="collapse-control-link" data-expanded="false"
                                            data-once="click">View All</a>
                                    </div>
                                </div>
                            </div>
                             <?php else : ?>
                            <div class="col-sm-9 col-lg-10"><?php echo "No post found" ?></div>
                

            <?php endif; ?>

                        </div>

                        <div class="view-footer">
                            <div class="container"><a class="pull-right btn btn-default"
                                    href="/interactive/cyber-operations/export-incidents?_format=csv">Download the
                                    Data</a></div>
                        </div>
                    </div>
                </div>


            </div>

        </section>

    </div><!-- END .row-middle -->
    <div class="row row-bottom">
    </div><!-- END .row-bottom -->
</div>

<?php
get_footer();
?>