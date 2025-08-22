<!DOCTYPE html>
<html lang="en" dir="ltr" prefix="og: https://ogp.me/ns#">

<head>
    <meta charset="utf-8">
    <link rel="canonical" href="">
    <link rel="shortlink" href="">
    <meta name="Generator" content="">
    <meta name="MobileOptimized" content="width">
    <meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/vnd.microsoft.icon">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/<?php echo get_template_directory_uri(); ?>/assets/images/favicon-16x16.png">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/misc-drupal.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/misc-drupal.init.js"></script>
    <?php wp_head(); ?>
</head>

<body <?php is_front_page() ? body_class("page-project-cst page-skin- page-node-1 immersive-banner cfr-interactives path-node page-node-type-interactive-article-1 has-glyphicons") : body_class("page-project-cst cfr-interactives path-node page-node-type-cst-issue has-glyphicons eu-cookie-compliance-status-2 reverse-scroll"); ?>>
    <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas>
        <header class="navbar navbar-default" id=<?php echo is_front_page()?"cst-navbar":"navbar"?> role="banner">
            <div class="container-fluid">
                <div class="main-nav-overlay"></div>
                <div class="navbar-header row main-nav">
                    <div class="region region-navigation">

                        <!--logo-->
                        <section id="block-cfrglobalbrandingblock" class="block block-cfr-cyber">
                            <a href="https://www.cfr.org/" class="main-nav__logo-btn">
                                <img class="main-nav__logo-signature" src="<?php echo get_template_directory_uri(); ?>/assets/images/assets-cfr-logo.svg">
                            </a>
                            <a class="main-nav__logo-monogram main-nav__logo-monogram--grey" href="https://www.cfr.org/">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/assets-cfr-monogram.svg">
                            </a>
                            <a class="main-nav__logo-monogram main-nav__logo-monogram--white" href="https://www.cfr.org/">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/assets-cfr-monogram-white.svg">
                            </a>
                            <a href="https://www.cfr.org/" class="main-nav__logo-btn-menu-open">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/assets-cfr-logo-grey.svg">
                            </a>
                            <div class="main-nav__menu-hotspot">
                                <div class="main-nav__menu-btn" tabindex="0">
                                    <span class="main-nav__menu-btn-bar"></span>
                                </div>
                            </div>
                        </section>
                        <!--logo-end-->

                        <!--section id="block-mainnavigationleft" class="block block-block-content  clearfix">
                <div class="field field--name-field-navigation-bar field--type-entity-reference-revisions field--label-hidden field--item">
                  <div class="paragraph--3059 container navigation-bar navigation-item-type- navigation-bar-align- paragraph paragraph--type--navigation-paragraph paragraph--view-mode--default">
                    <div class="paragraph-alignment- paragraph-items-alignment-space-between"></div>
                  </div>
                </div>
              </section-->


                        <!--page-menu-->
                        <section id="block-cstsecondarynavigation" class="block block-block-content  clearfix">
                            <div class="field field--name-field-navigation-bar field--type-entity-reference-revisions field--label-hidden field--item">
                                <div class="container navigation-bar navigation-item-type- navigation-bar-align- paragraph paragraph--type--navigation-paragraph paragraph--view-mode--default">
                                    <div class="paragraph-alignment- paragraph-items-alignment-space-between">
                                        <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'header-menu-main',
                                                'menu_class' => 'navigation-items',
                                                'container' => false,
                                                'fallback_cb' => false,
                                            )
                                        );
                                        ?>
                                        <!-- <div class="navigation-items">
                                            <div class="navigation-item">
                                                <a href="/cyber-operations#Map">
                                                    <div class="element-title"> Map </div>
                                                </a>
                                            </div>
                                            <div class="navigation-item">
                                                <a href="/cyber-operations#Timeline">
                                                    <div class="element-title"> Timeline </div>
                                                </a>
                                            </div>
                                            <div class="navigation-item">
                                                <a href="/cyber-operations#Glossary">
                                                    <div class="element-title"> Glossary </div>
                                                </a>
                                            </div>
                                            <div class="navigation-item">
                                                <a href="/cyber-operations#OurMethodology">
                                                    <div class="element-title"> Methodology </div>
                                                </a>
                                            </div>
                                        </div> -->
                                        <div class="navigation-items-separator"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- <nav role="navigation" aria-labelledby="block-reportanincident-menu" id="block-reportanincident">
                            <h2 class="visually-hidden" id="block-reportanincident-menu">Report an Incident</h2>
                            <ul class="menu nav navbar-nav report-an-incident">
                                <li class="report an incident">
                                    <a href="report-an-incident.html" target="" rel="" title="Report an Incident" data-drupal-link-system-path="node/370">Report an Incident</a>
                                </li>
                            </ul>
                        </nav> -->
                        <!--page-maneu-end-->


                        <!--main-menu-->
                        <div class="main-nav__menu-container">
                            <ul class="main-nav__categories dropdown-list">
                                <li class="main-nav__category">
                                    <h4 class="main-nav__title">
                                        <a href="#" class="main-nav__category-title-link">Topics</a>
                                    </h4>
                                    <div class="main-nav__sub-categories">
                                        <ul class="main-nav__sub-categories-list dropdown-sublist">
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">All Topics</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Defense &amp; Security</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Diplomacy &amp; International Institutions</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Economics</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Energy &amp; Environment</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Health</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Human Rights</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Politics &amp; Government</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Social Issues</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="main-nav__category">
                                    <h4 class="main-nav__title">
                                        <a href="#" class="main-nav__category-title-link">Regions</a>
                                    </h4>
                                    <div class="main-nav__sub-categories">
                                        <ul class="main-nav__sub-categories-list dropdown-sublist">
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">All Regions</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Americas</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Asia</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Europe &amp; Eurasia</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Global Commons</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Middle East &amp; North Africa</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Oceania</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Sub-Saharan Africa</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="main-nav__category">
                                    <h4 class="main-nav__title">
                                        <a href="#" class="main-nav__category-title-link">Explainers</a>
                                    </h4>
                                    <div class="main-nav__sub-categories">
                                        <ul class="main-nav__sub-categories-list dropdown-sublist">
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">More Explainers</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Backgrounders</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">In Briefs</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Podcasts</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Videos</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Timelines</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Special Projects</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">InfoGuides</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="main-nav__category">
                                    <h4 class="main-nav__title">
                                        <a href="#" class="main-nav__category-title-link">Research &amp; Analysis</a>
                                    </h4>
                                    <div class="main-nav__sub-categories">
                                        <ul class="main-nav__sub-categories-list dropdown-sublist">
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Research &amp; Analysis</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link">Experts</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Centers &amp; Programs</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Books &amp; Reports</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Blogs</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Independent Task Force Program</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Fellowships</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="main-nav__category">
                                    <h4 class="main-nav__title">
                                        <a href="#" class="main-nav__category-title-link">Communities</a>
                                    </h4>
                                    <div class="main-nav__sub-categories">
                                        <ul class="main-nav__sub-categories-list dropdown-sublist">
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">All Communities</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Members</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Media</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Academics</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Congress</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">State &amp; Local Officials</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Religion Leaders</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Local Journalists</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="main-nav__category">
                                    <h4 class="main-nav__title">
                                        <a href="#" class="main-nav__category-title-link">Events</a>
                                    </h4>
                                    <div class="main-nav__sub-categories">
                                        <ul class="main-nav__sub-categories-list dropdown-sublist">
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Events</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Lectureship Series</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Webinars &amp; Conference Calls</a>
                                            </li>
                                            <li class="main-nav__sub-category">
                                                <a href="#" class="main-nav__sub-category-link ">Symposia</a>
                                            </li>
                                            <div class="share-kit  share-kit--icon-color-grey share-kit--bg-color-white  share-kit--theme-none" data-share-anchor="" data-share-query="" data-share-name="" data-share-description="" data-share-caption="" data-share-picture="" data-share-type="">
                                                <div class="share-kit__icons desktop-soc-icon">
                                                    <a class="share-kit__hotspot share-kit__facebook" href="#" target="_blank">
                                                        <i class="fab fa fa-facebook-f"></i>
                                                    </a>
                                                    <a class="share-kit__hotspot share-kit__twitter" href="#" target="_blank">
                                                        <i class="fab fa fa-x-twitter"></i>
                                                    </a>
                                                    <a class="share-kit__hotspot share-kit__youtube" rel="noopener" href="#" target="_blank">
                                                        <i class="fab fa fa-youtube"></i>
                                                    </a>
                                                    <a class="share-kit__hotspot share-kit__instagram" href="#" target="_blank">
                                                        <i class="fab fa fa-instagram"></i>
                                                    </a>
                                                    <a class="share-kit__hotspot share-kit__linkedin" href="#" target="_blank">
                                                        <i class="fab fa fa-linkedin"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!--main-menu-end-->

                    </div>
                    <div class="mobile-menu">
                        <div class="region region-navigation mobile-region">
                            <a href="#" class="main-nav__logo-btn">
                                <svg viewbox="0 0 125 60" width="132" height="66" class="main-nav__logo-signature icon-logo-signature" xmlns="http://www.w3.org/2000/svg">
                                    <title>Logo</title>
                                    <path d="M106.909 13.178c-.502.92-1.081 1.458-1.854 1.458-.713 0-1.01-.522-.975-1.458.062-1.772 1.163-4.833 2.824-4.833.6 0 .999.416.97 1.371-.026.912-.386 2.406-.965 3.462m-.055-5.377c-2.64 0-4.56 2.264-4.63 4.755-.04 1.428.743 2.647 2.703 2.647 3.06 0 4.676-2.7 4.73-4.714.053-1.57-.944-2.688-2.803-2.688m17.484 3.789c0-.612-.316-1.01-.782-1.01-.404 0-.679.3-.679.677 0 .483.45.613.45 1.239-.001.259-.103.519-.32.765-.31.297-.748.513-2.042.513h-3.142c-.364 0-.465-.154-.313-.587.468-1.341 1.109-2.92 1.241-3.587.176-.876-.203-1.687-1.315-1.687-1.749 0-2.89 1.524-4.426 4.42h-.089s1.115-2.606 1.115-3.464c0-.61-.367-.946-1.026-.946-1.009 0-2.041 1.05-2.486 1.63l.31.302c.203-.255.51-.557.737-.733.402-.312.808-.263.687.407-.155.866-1.328 3.959-1.961 5.535h1.827c1.875-3.756 3.251-6.174 4.345-6.174.317 0 .483.196.483.53 0 .675-.985 2.959-1.389 4.312-.238.8-.183 1.332.52 1.332h3.498c1.451 0 2.618-.677 3.122-1.04 1.003-.68 1.635-1.614 1.635-2.433M10.751 24.923v-2.138H2.058v14.48h2.448V30.94h5.657v-2.143H4.506v-3.874zm71.256-.185c-1.474-1.462-3.291-2.302-5.748-2.302-4.258 0-7.677 3.079-7.676 7.66-.001 4.576 3.074 7.48 7.453 7.48h.014c4.075 0 7.1-2.548 7.115-6.755v-.448h-7.093v2.06h4.397c-.473 2.002-2.291 2.938-4.271 2.938-3.055 0-5.025-2.035-5.028-5.347.008-3.065 2.025-5.4 4.976-5.405 2.104 0 3.426.977 4.223 1.776l1.638-1.657zM4.49 51.483v-4.486h2.005c2.614 0 2.919 1.203 2.919 2.105 0 .888-.377 2.381-2.901 2.381H4.49zm3.519 1.851s-.018-.018.112-.034c2.109-.247 3.73-1.928 3.73-4.252 0-2.538-1.893-4.18-4.818-4.18H2.058v14.535H4.49v-6.019h.592l4.895 6.02h3.09l-5.06-6.07zm9.314-8.445v14.533h9.205v-2.114h-6.68v-4.337h5.546v-2.108h-5.546v-3.866h6.21v-2.108zm13.937-.022v14.535h8.865v-2.094h-6.343v-12.44zm24.952 0v2.13h4.494v12.407h2.438V46.995h4.49v-2.13zM71.44 59.402h2.529V44.866H71.44zm35.288-5.305l-9.756-9.776v15.082h2.43v-9.167c.423.418 9.757 9.764 9.757 9.764V44.867h-2.431v9.23zm11.854-3.111c-1.794-.892-2.6-1.555-2.6-2.6 0-1.58 1.623-1.775 2.107-1.775 1.029 0 1.988.344 2.834 1.133l1.234-1.761c-1.366-1.073-2.622-1.393-4.068-1.393-2.648 0-4.5 1.61-4.5 3.924 0 2.215 1.455 3.317 3.917 4.575 1.699.867 2.557 1.632 2.557 2.654 0 1.142-.993 1.819-2.301 1.819-1.38 0-2.47-.465-3.567-1.488l-1.375 1.721c1.582 1.46 3.24 1.87 4.763 1.87 3.286 0 4.942-1.864 4.942-4.14 0-2.331-1.765-3.454-3.943-4.54M12.08 11.201c-1.172 1.342-2.672 2.016-4.33 2.016-2.959 0-5.17-2.004-5.17-5.403 0-3.105 2.076-5.258 4.862-5.258 1.55 0 2.882.51 4.066 1.695l1.618-1.64C11.686 1.083 9.828.363 7.47.363 3.244.363 0 3.586 0 7.884c0 4.511 3.088 7.523 7.433 7.523 2.561 0 4.584-.862 6.046-2.523l-1.399-1.683zm66.172.03c-1.172 1.341-2.547 1.975-4.422 1.975-3.084 0-5.17-2.004-5.17-5.402 0-3.104 2.084-5.267 4.87-5.267 1.55 0 2.883.51 4.066 1.695l1.6-1.619c-1.39-1.536-3.287-2.25-5.645-2.25-4.343 0-7.472 3.223-7.472 7.521 0 4.511 3 7.523 7.435 7.523 2.677 0 4.676-.822 6.137-2.483l-1.4-1.693zm-38.644 4.05c3.432 0 5.411-1.862 5.973-4.36.11-.496.165-1.217.165-1.834V.548H43.31v8.468c0 2.721-1.342 4.075-3.68 4.075-2.41 0-3.854-1.398-3.854-4.075V.548H33.34v8.54c0 .642.057 1.338.17 1.833.573 2.498 2.598 4.36 6.1 4.36m13.05-9.512c.425.419 9.83 9.91 9.83 9.91V.548h-2.372v9.365L50.294 0v15.082h2.366V5.769zm30.062 9.313h2.525V.548h-2.525zM90.25.548V15.08h8.942v-2.095h-6.41V.548zM22.66 2.403c-2.794 0-5.06 2.216-5.06 5.466s2.154 5.467 5.06 5.467c2.904 0 5.056-2.217 5.056-5.467 0-3.25-2.264-5.466-5.057-5.466m-7.613 5.464C15.042 3.503 18.316.25 22.66.25c4.344 0 7.614 3.254 7.613 7.618.001 4.362-3.136 7.617-7.613 7.617-4.478 0-7.617-3.255-7.613-7.617m5.94 16.692c-2.793 0-5.057 2.216-5.057 5.467 0 3.25 2.152 5.467 5.057 5.467 2.906 0 5.057-2.217 5.057-5.467 0-3.251-2.263-5.467-5.057-5.467m-7.613 5.465c-.005-4.365 3.269-7.62 7.613-7.62 4.345 0 7.616 3.255 7.614 7.62.002 4.363-3.137 7.617-7.614 7.617s-7.618-3.254-7.613-7.617m36.748.788h5.546v-2.108h-5.546v-3.866h6.208v-2.108h-8.734v14.534h9.205v-2.114h-6.679zm11.533 6.452h2.525V22.73h-2.525zm-26.489-7.92v-4.487h2.004c2.613 0 2.919 1.203 2.919 2.107 0 .887-.378 2.38-2.901 2.38h-2.022zm3.519 1.85s-.019-.017.111-.033c2.108-.247 3.73-1.928 3.73-4.252 0-2.538-1.894-4.182-4.818-4.182h-4.975v14.537h2.433v-6.018h.592l4.895 6.018h3.09l-5.058-6.07zm3.449 28.204h2.541l1.416-3.376h5.558l1.393 3.376h2.682l-6.774-15.49-6.816 15.49zm6.732-10.073l1.89 4.542h-3.789l1.9-4.542zm36.612-2.6c-2.792 0-5.056 2.216-5.056 5.466 0 3.251 2.153 5.468 5.056 5.468 2.907 0 5.06-2.217 5.06-5.468 0-3.25-2.264-5.466-5.06-5.466m-7.613 5.464c-.004-4.365 3.27-7.617 7.614-7.617 4.344 0 7.617 3.252 7.614 7.617.002 4.362-3.138 7.618-7.615 7.618s-7.617-3.256-7.613-7.618m11.558-24.238c.424.419 9.829 9.909 9.829 9.909V22.73h-2.37v9.366l-9.823-9.913v15.082h2.364v-9.313z"
                                        fill="#412c26"></path>
                                </svg>
                            </a>


                        </div>


                        <h3 class="cyber-title">
                            <a href="#">Cyber Operations Tracker</a>
                        </h3>
                        <section id="block-cstsecondarynavigation" class="block   ">
                            <div class="field">
                                <div class="container navigation-bar  ">
                                    <div class="">
                                        <div class="navigation-items">
                                            <div class="navigation-item">
                                                <a href="/cyber-operations#Map">
                                                    <div class="element-title"> Map </div>
                                                </a>
                                            </div>
                                            <div class="navigation-item">
                                                <a href="/cyber-operations#Timeline">
                                                    <div class="element-title"> Timeline </div>
                                                </a>
                                            </div>
                                            <div class="navigation-item">
                                                <a href="/cyber-operations#Glossary">
                                                    <div class="element-title"> Glossary </div>
                                                </a>
                                            </div>
                                            <div class="navigation-item">
                                                <a href="/cyber-operations#OurMethodology">
                                                    <div class="element-title"> Methodology </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="navigation-items-separator"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <div class="mobile-report-incident">
                            <a href="report-an-incident.html">Report an Incident</a>
                        </div>

                        <div class="global menu">
                            <h3>
                                <a href="#">CFR.org</a>
                            </h3>
                            <div id="accordion">
                                <ul>
                                    <li>
                                        <h4 data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Topics</h4>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                            <ul class="main-nav__sub-categories-list dropdown-sublist">
                                                <li class="main-nav__sub-category">
                                                    <a href="topics.html" class="main-nav__sub-category-link ">All Topics</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="defense-and-security.html" class="main-nav__sub-category-link ">Defense &amp; Security</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="diplomacy-and-international-institutions.html" class="main-nav__sub-category-link ">Diplomacy &amp; International Institutions</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="economics.html" class="main-nav__sub-category-link ">Economics</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="energy-and-environment.html" class="main-nav__sub-category-link ">Energy &amp; Environment</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="health.html" class="main-nav__sub-category-link ">Health</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="human-rights.html" class="main-nav__sub-category-link ">Human Rights</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="politics-and-government.html" class="main-nav__sub-category-link ">Politics &amp; Government</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="social-issues.html" class="main-nav__sub-category-link ">Social Issues</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Regions</h4>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                            <ul class="main-nav__sub-categories-list dropdown-sublist">
                                                <li class="main-nav__sub-category">
                                                    <a href="regions.html" class="main-nav__sub-category-link ">All Regions</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="americas.html" class="main-nav__sub-category-link ">Americas</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="asia.html" class="main-nav__sub-category-link ">Asia</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="europe-and-eurasia.html" class="main-nav__sub-category-link ">Europe &amp; Eurasia</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="global-commons.html" class="main-nav__sub-category-link ">Global Commons</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="middle-east-and-north-africa.html" class="main-nav__sub-category-link ">Middle East &amp; North Africa</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="oceania.html" class="main-nav__sub-category-link ">Oceania</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="sub-saharan-africa.html" class="main-nav__sub-category-link ">Sub-Saharan Africa</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">Explainers</h4>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                            <ul class="main-nav__sub-categories-list dropdown-sublist">
                                                <li class="main-nav__sub-category">
                                                    <a href="explainers.html" class="main-nav__sub-category-link ">More Explainers</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="backgrounders.html" class="main-nav__sub-category-link ">Backgrounders</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="inbriefs.html" class="main-nav__sub-category-link ">In Briefs</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="podcasts.html" class="main-nav__sub-category-link ">Podcasts</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="videos.html" class="main-nav__sub-category-link ">Videos</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="timelines.html" class="main-nav__sub-category-link ">Timelines</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="special-projects.html" class="main-nav__sub-category-link ">Special Projects</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="infoguides.html" class="main-nav__sub-category-link ">InfoGuides</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">Research &amp; Analysis</h4>
                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                            <ul class="main-nav__sub-categories-list dropdown-sublist">
                                                <li class="main-nav__sub-category">
                                                    <a href="think-tank.html" class="main-nav__sub-category-link ">Research &amp; Analysis</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="experts.html" class="main-nav__sub-category-link ">Experts</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="programs.html" class="main-nav__sub-category-link ">Centers &amp; Programs</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="publications.html" class="main-nav__sub-category-link ">Books &amp; Reports</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="blog.html" class="main-nav__sub-category-link ">Blogs</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="independent-task-force-program.html" class="main-nav__sub-category-link ">Independent Task Force Program</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="fellowships.html" class="main-nav__sub-category-link ">Fellowships</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">Communities</h4>
                                        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                            <ul class="main-nav__sub-categories-list dropdown-sublist">
                                                <li class="main-nav__sub-category">
                                                    <a href="outreach.html" class="main-nav__sub-category-link ">All Communities</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="membership.html" class="main-nav__sub-category-link ">Members</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="media.html" class="main-nav__sub-category-link ">Media</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="cfr-academic.html" class="main-nav__sub-category-link ">Academics</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="congressional-program.html" class="main-nav__sub-category-link ">Congress</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="state-and-local.html" class="main-nav__sub-category-link ">State &amp; Local Officials</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="religion-and-foreign-policy-program.html" class="main-nav__sub-category-link ">Religion Leaders</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="localjournalists.html" class="main-nav__sub-category-link ">Local Journalists</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <h4 data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">Events</h4>
                                        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                            <ul class="main-nav__sub-categories-list dropdown-sublist">
                                                <li class="main-nav__sub-category">
                                                    <a href="event.html" class="main-nav__sub-category-link ">Events</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="event-series.html" class="main-nav__sub-category-link ">Lectureship Series</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="conference-call-series.html" class="main-nav__sub-category-link ">Webinars &amp; Conference Calls</a>
                                                </li>
                                                <li class="main-nav__sub-category">
                                                    <a href="symposia.html" class="main-nav__sub-category-link ">Symposia</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mobile-footer-list">
                                    <div class="main-nav__members main-nav__members--mobile main-nav__members--loaded">
                                        <ul class="main-nav__members-list">
                                            <li class="main-nav__members-list-item">
                                                <a href="login.html" class="main-nav__members-link">Member Login</a>
                                            </li>
                                            <li class="main-nav__members-list-item">
                                                <a class="main-nav__foreign-link" href="https://www.foreignaffairs.com/" target="_blank">ForeignAffairs.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="mobile-social-icons">
                                        <a class="share-kit__hotspot share-kit__facebook" href="https://www.facebook.com/councilonforeignrelations" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/images-fb.png" alt="Facebook">
                                        </a>
                                        <a class="share-kit__hotspot share-kit__twitter" href="https://twitter.com/CFR_org" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/images-tw.png" alt="Twitter">
                                        </a>
                                        <a class="share-kit__hotspot share-kit__linkedin" href="https://www.linkedin.com/company/council-on-foreign-relations" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/images-linkedin.png" alt="Linkedin">
                                        </a>
                                        <a class="share-kit__hotspot share-kit__email" href="/cdn-cgi/l/email-protection#0b6a6f6662654b686d792564796c" target="_blank">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/images-email.png" alt="Email">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>