<?php 
// Template Name: Home page
get_header();

if(have_posts()){
  while(have_posts()) : the_post();
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
                                    <div class="field field--name-field-top-section field--type-entity-reference-revisions field--label-hidden field--items">
                                        <div class="field--item">
                                            <?php $bannerImage = get_field('banner_image'); ?>
                                            <div class="paragraph--223 paragraph paragraph--type--hero paragraph--background-image paragraph--view-mode--default" style="background-image:url('<?php echo esc_url($bannerImage['url']); ?>')">
                                                <div class="paragraph--type--hero--overlay">
                                                    <div class="container paragraph-alignment-center">
                                                        <div class="paragraph-wrapper">
                                                            <div class="hero-top-section">
                                                                <div class="paragraph-header field field--name-field-paragraph-header field--type-entity-reference-revisions field--label-hidden field--item">
                                                                    <div class="paragraph--228 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                        <?php $banntitle= get_field('banner_title');?>
                                                                        <?php if($banntitle) { ?>
                                                                        <div class="element-title "><?php echo $banntitle; ?></div>
                                                                        <?php } ?>
                                                                        <?php $banntext= get_field('banner_text'); ?>
                                                                         <?php if($banntext) { ?>
                                                                        <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                            <?php echo $banntext; ?>
                                                                        </div>
                                                                        <?php } ?>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="hero-footer">
                                                                <nav role="navigation" aria-labelledby="block-socialnav-menu" id="block-socialnav">
                                                                    <h2 class="visually-hidden" id="block-socialnav-menu">Social Nav</h2>
                                                                    <ul class="menu nav navbar-nav social-nav share-kit">
                                                                        <li class="facebook">
                                                                            <button class="dropdown-toggle" onclick="CFR.Share.facebook(this)">Facebook</button>
                                                                        </li>
                                                                        <li class="instagram"></li>
                                                                        <li class="linkedin"></li>
                                                                        <li class="twitter">
                                                                            <button class="dropdown-toggle" onclick="CFR.Share.twitter(this)">Twitter</button>
                                                                        </li>
                                                                        <li class="youtube"></li>
                                                                    </ul>
                                                                </nav>
                                                                <div class="search-block-form block block-search block-search-form-block" data-drupal-selector="search-block-form" id="block-cfr-interactives-search" role="search">
                                                                    <div class="search-block-form contextual-region block block-search block-search-form-block" data-drupal-selector="search-block-form" role="search">
                                                                        <form action="#" method="get" id="search-block-form" accept-charset="UTF-8" data-drupal-form-fields="edit-keys">
                                                                            <div class="form-item js-form-item form-type-search js-form-type-search form-item-keys js-form-item-keys form-no-label form-group">
                                                                                <div class="input-group">
                                                                                    <input title="" data-drupal-selector="edit-keys" class="form-search form-control" placeholder="Search by Incident, Threat Actor,  Keyword" type="search" id="edit-keys" name="keys" value="" size="15" maxlength="128" data-original-title="Keywords must be at least 3 characters.">
                                                                                    <span class="input-group-btn">
                                              <button type="submit" value="Search" class="button js-form-submit form-submit btn-primary btn icon-only" name="">
                                                <span class="sr-only">Search</span>
                                                                                    <span class="icon glyphicon glyphicon-search" aria-hidden="true"></span>
                                                                                    </button>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-actions form-group js-form-wrapper form-wrapper" data-drupal-selector="edit-actions" id="edit-actions"></div>
                                                                        </form>
                                                                    </div>
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
                                                <div class="paragraph--314 container paragraph paragraph--type--text-with-items paragraph--view-mode--default">
                                                    <div class="paragraph-wrapper paragraph-alignment- paragraph-items-alignment-center ">
                                                        <div class="field field--name-field-anchor-name-link field--type-text field--label-visually_hidden">
                                                            <div class="field--label sr-only">Anchor Name Link</div>
                                                            <div class="field--item">
                                                                <a name="Map" href="#"></a>
                                                            </div>
                                                        </div>
                                                        <div class="paragraph-header field field--name-field-paragraph-header field--type-entity-reference-revisions field--label-hidden field--item">
                                                            <div class="paragraph--18015 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                
                                                            <?php $operation_title= get_field('operations_title'); ?>
                                                            <?php if($operation_title) { ?>
                                                            <div class="element-title "><?php echo $operation_title; ?></div>
                                                            <?php } ?>
                                                            <?php $operation_cont= get_field('operations_content'); ?>
                                                            <?php if($operation_cont) { ?>
                                                                <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                    <p><?php echo $operation_cont; ?></p>
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
                                                                            <select id="edit-sectors" name="sectors" class="form-select cst-filters__dropdown--filter-region" data-ajax="true" data-default-value="Region">
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
                                                                            <select id="edit-years" name="Year" class="form-select cst-filters__dropdown--filter-Year" data-ajax="true" data-default-value="All Years (2005-2024)">
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
                                                                        <br> operations sponsored </div>
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
                                            <div class="paragraph--326 paragraph paragraph--type--block-references paragraph--view-mode--default">
                                                <div class="field field--name-field-anchor-name-link field--type-text field--label-visually_hidden">
                                                    <div class="field--label sr-only">Anchor Name Link</div>
                                                    <div class="field--item">
                                                        <a name="Timeline" href="cyber-operations.html"></a>
                                                    </div>
                                                </div>
                                                <div class="field field--name-field-block field--type-viewfield field--label-hidden">
                                                    <div class="field__item field__item-label-hidden">
                                                        <div class="views-element-container form-group">
                                                            <div class="view view-cst-timeline view-id-cst_timeline view-display-id-block_1 js-view-dom-id-fab35e923eef76969859873313258b4e16f43680dd633000aa54302dcce46d8e">
                                                                <div class="view-header container"> Timeline </div>
                                                                <div class="view-filters container form-group">
                                                                    <div class="view-filters__toggle visible-xs visible-sm">
                                                                        <a href="#" class="view-filters__toggle-link"> Filters <svg viewbox="0 0 8 16" class="icon icon-arrow-right" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M1 1l6 7-6 7" stroke="#766E6C" stroke-width="1.5" class="icon-stroke" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg>
                                        <svg viewbox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" class="icon icon-close">
                                          <path d="M10.417 12.5L0 22.917 2.083 25 12.5 14.583 22.917 25 25 22.917 14.583 12.5 25 2.083 22.917 0 12.5 10.417 2.083 0 0 2.083 10.417 12.5z" class="icon-fill" fill="none"></path>
                                        </svg>
                                      </a>
                                                                    </div>
                                                                    <form class="views-exposed-form" data-drupal-selector="views-exposed-form-cst-timeline-block-1">
                                                                        <div class="form--inline form-inline clearfix">
                                                                            <div class="form-item js-form-item form-type-select js-form-type-select form-item-field-type-target-id js-form-item-field-type-target-id form-group">
                                                                                <label for="edit-field-type-target-id" class="control-label">Type</label>
                                                                                <div class="select-wrapper">
                                                                                    <select style="width:100%;" class="form-select form-control">
                                                                                        <option value="All" selected>- Any -</option>
                                                                                        <option value="280">Incident</option>
                                                                                        <option value="271">Threat actor</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-item js-form-item form-type-select js-form-type-select form-item-field-type-of-incident-target-id js-form-item-field-type-of-incident-target-id form-group">
                                                                                <label class="control-label">Cyber Operations</label>
                                                                                <div class="select-wrapper">
                                                                                    <select style="width:100%;" class="form-select form-control">
                                                                                        <option value="All" selected>- Any -</option>
                                                                                        <option value="275">Data destruction</option>
                                                                                        <option value="283">Defacement</option>
                                                                                        <option value="278">Denial of service</option>
                                                                                        <option value="287">Doxing</option>
                                                                                        <option value="272">Espionage</option>
                                                                                        <option value="3423">Financial Theft</option>
                                                                                        <option value="284">Sabotage</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-item js-form-item form-type-select js-form-type-select form-item-field-suspected-state-sponsor-target-id js-form-item-field-suspected-state-sponsor-target-id form-group">
                                                                                <label for="" class="control-label">State Sponsor</label>
                                                                                <div class="select-wrapper">
                                                                                    <select style="width:100%;" class="form-select form-control">
                                                                                        <option value="All" selected>- Any -</option>
                                                                                        <option value="24">Australia</option>
                                                                                        <option value="28">Bahrain</option>
                                                                                        <option value="31">Belarus</option>
                                                                                        <option value="45">Bulgaria</option>
                                                                                        <option value="9">Canada</option>
                                                                                        <option value="56">China</option>
                                                                                        <option value="76">Egypt</option>
                                                                                        <option value="77">El Salvador</option>
                                                                                        <option value="81">Ethiopia</option>
                                                                                        <option value="86">France</option>
                                                                                        <option value="93">Germany</option>
                                                                                        <option value="94">Ghana</option>
                                                                                        <option value="96">Greece</option>
                                                                                        <option value="110">Hong Kong</option>
                                                                                        <option value="113">India</option>
                                                                                        <option value="114">Indonesia</option>
                                                                                        <option value="115">Iran (Islamic Republic of)</option>
                                                                                        <option value="119">Israel</option>
                                                                                        <option value="122">Japan</option>
                                                                                        <option value="124">Jordan</option>
                                                                                        <option value="125">Kazakhstan</option>
                                                                                        <option value="128">Korea (Democratic People's Republic of)</option>
                                                                                        <option value="129">Korea (Republic of)</option>
                                                                                        <option value="134">Lebanon</option>
                                                                                        <option value="139">Lithuania</option>
                                                                                        <option value="154">Mexico</option>
                                                                                        <option value="161">Morocco</option>
                                                                                        <option value="163">Myanmar</option>
                                                                                        <option value="167">Netherlands</option>
                                                                                        <option value="10">New Zealand</option>
                                                                                        <option value="178">Pakistan</option>
                                                                                        <option value="180">Palestine, State of</option>
                                                                                        <option value="181">Panama</option>
                                                                                        <option value="187">Poland</option>
                                                                                        <option value="193">Russian Federation</option>
                                                                                        <option value="205">Saudi Arabia</option>
                                                                                        <option value="218">South Sudan</option>
                                                                                        <option value="219">Spain</option>
                                                                                        <option value="227">Syrian Arab Republic</option>
                                                                                        <option value="228">Taiwan</option>
                                                                                        <option value="231">Thailand</option>
                                                                                        <option value="185">The Philippines</option>
                                                                                        <option value="233">Togo</option>
                                                                                        <option value="238">Turkey</option>
                                                                                        <option value="242">Uganda</option>
                                                                                        <option value="243">Ukraine</option>
                                                                                        <option value="244">United Arab Emirates</option>
                                                                                        <option value="245">United Kingdom</option>
                                                                                        <option value="8">United States</option>
                                                                                        <option value="246">United States of America</option>
                                                                                        <option value="249">Uzbekistan</option>
                                                                                        <option value="252">Vietnam</option>
                                                                                        <option value="Unknown">Unknown</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-item js-form-item form-type-select js-form-type-select form-item-field-victims-location-target-id js-form-item-field-victims-location-target-id form-group">
                                                                                <label for="" class="control-label">Victim</label>
                                                                                <div class="select-wrapper">
                                                                                    <select style="width:100%;" class="form-select form-control">
                                                                                        <option value="All" selected>- Any -</option>
                                                                                        <option value="11">Afghanistan</option>
                                                                                        <option value="13">Albania</option>
                                                                                        <option value="14">Algeria</option>
                                                                                        <option value="21">Argentina</option>
                                                                                        <option value="22">Armenia</option>
                                                                                        <option value="24">Australia</option>
                                                                                        <option value="25">Austria</option>
                                                                                        <option value="26">Azerbaijan</option>
                                                                                        <option value="28">Bahrain</option>
                                                                                        <option value="29">Bangladesh</option>
                                                                                        <option value="30">Barbados</option>
                                                                                        <option value="31">Belarus</option>
                                                                                        <option value="32">Belgium</option>
                                                                                        <option value="36">Bhutan</option>
                                                                                        <option value="39">Bosnia and Herzegovina</option>
                                                                                        <option value="42">Brazil</option>
                                                                                        <option value="44">Brunei Darussalam</option>
                                                                                        <option value="45">Bulgaria</option>
                                                                                        <option value="48">Cambodia</option>
                                                                                        <option value="9">Canada</option>
                                                                                        <option value="55">Chile</option>
                                                                                        <option value="56">China</option>
                                                                                        <option value="59">Colombia</option>
                                                                                        <option value="64">Costa Rica</option>
                                                                                        <option value="67">Cuba</option>
                                                                                        <option value="69">Cyprus</option>
                                                                                        <option value="70">Czech Republic</option>
                                                                                        <option value="71">Denmark</option>
                                                                                        <option value="72">Djibouti</option>
                                                                                        <option value="75">Ecuador</option>
                                                                                        <option value="76">Egypt</option>
                                                                                        <option value="77">El Salvador</option>
                                                                                        <option value="80">Estonia</option>
                                                                                        <option value="81">Ethiopia</option>
                                                                                        <option value="84">Fiji</option>
                                                                                        <option value="85">Finland</option>
                                                                                        <option value="86">France</option>
                                                                                        <option value="92">Georgia</option>
                                                                                        <option value="93">Germany</option>
                                                                                        <option value="94">Ghana</option>
                                                                                        <option value="96">Greece</option>
                                                                                        <option value="100">Guam</option>
                                                                                        <option value="101">Guatemala</option>
                                                                                        <option value="105">Guyana</option>
                                                                                        <option value="110">Hong Kong</option>
                                                                                        <option value="111">Hungary</option>
                                                                                        <option value="113">India</option>
                                                                                        <option value="114">Indonesia</option>
                                                                                        <option value="115">Iran (Islamic Republic of)</option>
                                                                                        <option value="116">Iraq</option>
                                                                                        <option value="117">Ireland</option>
                                                                                        <option value="119">Israel</option>
                                                                                        <option value="120">Italy</option>
                                                                                        <option value="122">Japan</option>
                                                                                        <option value="124">Jordan</option>
                                                                                        <option value="125">Kazakhstan</option>
                                                                                        <option value="126">Kenya</option>
                                                                                        <option value="127">Kiribati</option>
                                                                                        <option value="128">Korea (Democratic People's Republic of)</option>
                                                                                        <option value="129">Korea (Republic of)</option>
                                                                                        <option value="130">Kuwait</option>
                                                                                        <option value="131">Kyrgyzstan</option>
                                                                                        <option value="132">Lao People's Democratic Republic</option>
                                                                                        <option value="133">Latvia</option>
                                                                                        <option value="134">Lebanon</option>
                                                                                        <option value="137">Libya</option>
                                                                                        <option value="139">Lithuania</option>
                                                                                        <option value="140">Luxembourg</option>
                                                                                        <option value="145">Malaysia</option>
                                                                                        <option value="147">Mali</option>
                                                                                        <option value="148">Malta</option>
                                                                                        <option value="154">Mexico</option>
                                                                                        <option value="158">Mongolia</option>
                                                                                        <option value="159">Montenegro</option>
                                                                                        <option value="161">Morocco</option>
                                                                                        <option value="162">Mozambique</option>
                                                                                        <option value="163">Myanmar</option>
                                                                                        <option value="166">Nepal</option>
                                                                                        <option value="167">Netherlands</option>
                                                                                        <option value="169">New Zealand</option>
                                                                                        <option value="10">New Zealand</option>
                                                                                        <option value="170">Nicaragua</option>
                                                                                        <option value="172">Nigeria</option>
                                                                                        <option value="176">Norway</option>
                                                                                        <option value="177">Oman</option>
                                                                                        <option value="178">Pakistan</option>
                                                                                        <option value="179">Palau</option>
                                                                                        <option value="180">Palestine, State of</option>
                                                                                        <option value="181">Panama</option>
                                                                                        <option value="184">Peru</option>
                                                                                        <option value="187">Poland</option>
                                                                                        <option value="188">Portugal</option>
                                                                                        <option value="190">Qatar</option>
                                                                                        <option value="192">Romania</option>
                                                                                        <option value="193">Russian Federation</option>
                                                                                        <option value="194">Rwanda</option>
                                                                                        <option value="205">Saudi Arabia</option>
                                                                                        <option value="207">Serbia</option>
                                                                                        <option value="210">Singapore</option>
                                                                                        <option value="212">Slovakia</option>
                                                                                        <option value="215">Somalia</option>
                                                                                        <option value="216">South Africa</option>
                                                                                        <option value="218">South Sudan</option>
                                                                                        <option value="219">Spain</option>
                                                                                        <option value="220">Sri Lanka</option>
                                                                                        <option value="221">Sudan</option>
                                                                                        <option value="225">Sweden</option>
                                                                                        <option value="226">Switzerland</option>
                                                                                        <option value="227">Syrian Arab Republic</option>
                                                                                        <option value="228">Taiwan</option>
                                                                                        <option value="229">Tajikistan</option>
                                                                                        <option value="230">Tanzania, United Republic of</option>
                                                                                        <option value="231">Thailand</option>
                                                                                        <option value="185">The Philippines</option>
                                                                                        <option value="233">Togo</option>
                                                                                        <option value="237">Tunisia</option>
                                                                                        <option value="238">Turkey</option>
                                                                                        <option value="239">Turkmenistan</option>
                                                                                        <option value="242">Uganda</option>
                                                                                        <option value="243">Ukraine</option>
                                                                                        <option value="244">United Arab Emirates</option>
                                                                                        <option value="245">United Kingdom</option>
                                                                                        <option value="8">United States</option>
                                                                                        <option value="246">United States of America</option>
                                                                                        <option value="248">Uruguay</option>
                                                                                        <option value="249">Uzbekistan</option>
                                                                                        <option value="251">Venezuela (Bolivarian Republic of)</option>
                                                                                        <option value="252">Vietnam</option>
                                                                                        <option value="257">Yemen</option>
                                                                                        <option value="258">Zambia</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-item js-form-item form-type-select js-form-type-select form-item-field-victim-category-target-id js-form-item-field-victim-category-target-id form-group">
                                                                                <label for="" class="control-label">Victim Category</label>
                                                                                <div class="select-wrapper">
                                                                                    <select style="width:100%;" class="form-select form-control">
                                                                                        <option value="All" selected>- Any -</option>
                                                                                        <option value="296">Civil society</option>
                                                                                        <option value="297">Government</option>
                                                                                        <option value="298">Military</option>
                                                                                        <option value="299">Private sector</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-item js-form-item form-type-select js-form-type-select form-item-field-victim-government-reaction-target-id js-form-item-field-victim-government-reaction-target-id form-group">
                                                                                <label for="" class="control-label">Victim Government Response</label>
                                                                                <div class="select-wrapper">
                                                                                    <select style="width:100%;" class="form-select form-control">
                                                                                        <option value="All" selected>- Any -</option>
                                                                                        <option value="291">Unknown</option>
                                                                                        <option value="292">Yes</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-item js-form-item form-type-select js-form-type-select form-item-field-suspected-state-sponsor-target-id-1 js-form-item-field-suspected-state-sponsor-target-id-1 form-group">
                                                                                <label for="edit-field-suspected-state-sponsor-target-id-1" class="control-label">Suspected State-Sponsor (field_suspected_state_sponsor)</label>
                                                                                <div class="select-wrapper">
                                                                                    <select class="form-select form-control">
                                                                                        <option value="All" selected>- Any -</option>
                                                                                        <option value="1">Unknown</option>
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                            <div data-drupal-selector="edit-actions" class="form-actions form-group js-form-wrapper form-wrapper" id="edit-actions">
                                                                                <button class="button js-form-submit form-submit btn-info btn">Apply</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="view-content container">

                                                                    <!-- Repeat Year -->
                                                                    <div class="row ">
                                                                        <div class="col-sm-3 col-lg-2">
                                                                            <div class="views-group-header">
                                                                                <div class="views-field views-field-date-first-reported">
                                                                                    <span class="field-content"> 2024 </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-9 col-lg-10">
                                                                            <div class="field-content cst-issue views-field-title ">
                                                                                <a href="http://localhost:8080/cyber-operations/hello-world/">Targeting of Czech and German political entities, state institutions, critical infrastructure, and German companies in the logistics, armaments, aerospace, and IT sectors</a>
                                                                            </div>
                                                                            <div class="field-content cst-issue views-field-title ">
                                                                                <a href="#">Storm-842</a>
                                                                            </div>
                                                                            <div class="field-content cst-issue views-field-title ">
                                                                                <a href="#">Targeting of Israeli organizations</a>
                                                                            </div>
                                                                            <div class="collapse-wrapper">
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of governmental organizations in Africa and the Caribbean</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of Indian aerospace, defense, and government sectors</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of telecommunications firms and government agencies in Israel, Turkey, and Africa </a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="">Targeting of Polish government institutions</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of U.S. Departments of Treasury and State, defense contractors, and two New York&ndash;based companies</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of Teamviewer, a German-based company that makes widely used remote-access tools for companies</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Moonstone Sleet</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of Google Chrome users in the United States, South Korea, and Europe, particularly those involved in research into North Korean affairs</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of aerospace and defense organizations worldwide</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of TVP, a public service broadcaster in Poland</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">UAC-0188</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of a high-profile government organization in southeast Asia</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">FlyingYeti</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Velvet Ant</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of Ukrainian citizens who were concerned about facing loss of housing in Ukraine</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of an unnamed company in East Asia</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="collapse-control">
                                                                                <a href="#" class="collapse-control-link" data-expanded="false">View All</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- Repeat Year -->

                                                                    <div class="row ">
                                                                        <div class="col-sm-3 col-lg-2">
                                                                            <div class="views-group-header">
                                                                                <div class="views-field views-field-date-first-reported">
                                                                                    <span class="field-content"> 2023 </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm-9 col-lg-10">
                                                                            <div class="field-content cst-issue views-field-title ">
                                                                                <a href="#">APT-C-23</a>
                                                                            </div>
                                                                            <div class="field-content cst-issue views-field-title ">
                                                                                <a href="#">Sharp Panda</a>
                                                                            </div>
                                                                            <div class="field-content cst-issue views-field-title ">
                                                                                <a href="#">Trisis</a>
                                                                            </div>
                                                                            <div class="collapse-wrapper">
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of the Belgian Federal Public Service Interior as part of espionage campaign</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of CyberLink customers in supply-chain attack</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Agrius</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of Russian aerospace and defense conglomerate </a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of financial institutions in Taiwan </a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of South Korean individuals and organizations with fake Itaewon disaster documents</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Compromises of government embassies, telecommunications companies, and a Russian oil company</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Kimusky</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Leafminer</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of U.S. diplomats in Uganda </a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of a telecommunications firm in the Middle East and a government network in Asia</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Allanite</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of sporting and anti-doping organizations ahead of 2020 Tokyo Olympics </a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">APT 28</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of Association of Southeast Asian Nations (ASEAN) email servers</a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of American defense industry </a>
                                                                                </div>
                                                                                <div class="field-content cst-issue views-field-title ">
                                                                                    <a href="#">Targeting of humanitarian, think tank, and governmental organizations</a>
                                                                                </div>
                                                                            </div>
                                                                            <div class="collapse-control">
                                                                                <a href="#" class="collapse-control-link" data-expanded="false">View All</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="view-footer">
                                                                    <div class="container">
                                                                        <a class="pull-right btn btn-default" href="#">Download the Data</a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="field--item">
                                            <div class="paragraph-background-color- paragraph-outer-wrapper ">
                                                <div class="paragraph--293 container paragraph paragraph--type--text-with-items paragraph--view-mode--default">
                                                    <div class="paragraph-wrapper paragraph-alignment-4columns paragraph-items-alignment-left ">

                                                        <div class="paragraph-header field field--name-field-paragraph-header field--type-entity-reference-revisions field--label-hidden field--item">
                                                            <div class="paragraph--18020 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                <div class="element-title ">Glossary</div>
                                                            </div>
                                                        </div>
                                                        <div class="paragraph-items field field--name-field-paragraph-items field--type-entity-reference-revisions field--label-hidden field--items">
                                                            <div class="field--item">
                                                                <div class="paragraph--5452 paragraph paragraph--type--image-element paragraph--view-mode--default">
                                                                    <div class="element-image field field--name-field-element-image field--type-image field--label-hidden field--item">
                                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/Distributed-Denial-of-Service.png" width="401" height="401" alt="Distributed Denial of Service" class="img-responsive">
                                                                    </div>
                                                                    <div class="paragraph-text field field--name-field-paragraph-text field--type-entity-reference-revisions field--label-hidden field--item">
                                                                        <div class="paragraph--5451 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                            <div class="element-title ">Distributed Denial of Service</div>
                                                                            <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                                <p>The intentional paralyzing of a computer network by flooding it with data sent simultaneously from many individual computers.
                                                                                    <br> &nbsp; </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--5453 paragraph paragraph--type--image-element paragraph--view-mode--default">
                                                                    <div class="element-image field field--name-field-element-image field--type-image field--label-hidden field--item">
                                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/Espionage.png" width="401" height="401" alt="Espionage" class="img-responsive">
                                                                    </div>
                                                                    <div class="paragraph-text field field--name-field-paragraph-text field--type-entity-reference-revisions field--label-hidden field--item">
                                                                        <div class="paragraph--5454 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                            <div class="element-title ">Espionage</div>
                                                                            <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                                <p>The act of obtaining confidential information without the information holder&rsquo;s consent.
                                                                                    <br> &nbsp; </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--5456 paragraph paragraph--type--image-element paragraph--view-mode--default">
                                                                    <div class="element-image field field--name-field-element-image field--type-image field--label-hidden field--item">
                                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/Defacement.png" width="401" height="401" alt="Defacement" class="img-responsive">
                                                                    </div>
                                                                    <div class="paragraph-text field field--name-field-paragraph-text field--type-entity-reference-revisions field--label-hidden field--item">
                                                                        <div class="paragraph--5455 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                            <div class="element-title ">Defacement</div>
                                                                            <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                                <p>The unauthorized act of changing the appearance of a website or social media account.
                                                                                    <br> &nbsp; </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--5458 paragraph paragraph--type--image-element paragraph--view-mode--default">
                                                                    <div class="element-image field field--name-field-element-image field--type-image field--label-hidden field--item">
                                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/Data-Destruction.png" width="401" height="401" alt="Data Destruction" class="img-responsive">
                                                                    </div>
                                                                    <div class="paragraph-text field field--name-field-paragraph-text field--type-entity-reference-revisions field--label-hidden field--item">
                                                                        <div class="paragraph--5457 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                            <div class="element-title ">Data Destruction</div>
                                                                            <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                                <p>The use of malicious software to destroy data on a computer or to render a computer inoperable.
                                                                                    <br> &nbsp; </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--5459 paragraph paragraph--type--image-element paragraph--view-mode--default">
                                                                    <div class="element-image field field--name-field-element-image field--type-image field--label-hidden field--item">
                                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/Sabotage.png" width="401" height="401" alt="Sabotage" class="img-responsive">
                                                                    </div>
                                                                    <div class="paragraph-text field field--name-field-paragraph-text field--type-entity-reference-revisions field--label-hidden field--item">
                                                                        <div class="paragraph--5460 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                            <div class="element-title ">Sabotage</div>
                                                                            <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                                <p>The use of malware that causes a disruption to a physical process, such as the provision of electricity or normal function of nuclear centrifuges.
                                                                                    <br> &nbsp; </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--5462 paragraph paragraph--type--image-element paragraph--view-mode--default">
                                                                    <div class="element-image field field--name-field-element-image field--type-image field--label-hidden field--item">
                                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/Doxing.png" width="401" height="401" alt="Doxing" class="img-responsive">
                                                                    </div>
                                                                    <div class="paragraph-text field field--name-field-paragraph-text field--type-entity-reference-revisions field--label-hidden field--item">
                                                                        <div class="paragraph--5461 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                            <div class="element-title ">Doxing</div>
                                                                            <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                                <p>The act of searching and publishing private or identifying information about an individual or group on the internet, typically with malicious intent.
                                                                                    <br> &nbsp; </p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--18022 paragraph paragraph--type--image-element paragraph--view-mode--default">
                                                                    <div class="element-image field field--name-field-element-image field--type-image field--label-hidden field--item">
                                                                        <img loading="lazy" src="<?php echo get_template_directory_uri(); ?>/assets/images/Financial-Theft.png" width="418" height="417" alt="Financial Theft." class="img-responsive">
                                                                    </div>
                                                                    <div class="paragraph-text field field--name-field-paragraph-text field--type-entity-reference-revisions field--label-hidden field--item">
                                                                        <div class="paragraph--18021 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                            <div class="element-title ">Financial Theft</div>
                                                                            <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                                <p>The theft of assets, such as cryptocurrencies or cash, for financial gain.</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
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
                                            <div class="paragraph-background-color-white paragraph-outer-wrapper cst-old-glossary-paragraph">
                                                <div class="paragraph--283 container paragraph paragraph--type--text-with-items paragraph--view-mode--default">

                                                    <div class="paragraph-wrapper paragraph-alignment-2columns paragraph-items-alignment-left ">


                                                        <div class="paragraph-header field field--name-field-paragraph-header field--type-entity-reference-revisions field--label-hidden field--item">
                                                            <div class="paragraph--18023 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                    <p>These terms were adapted using definitions from U.S. CERT, the UK National Cyber Security Centre, and the SANS Institute.</p>
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="paragraph-items field field--name-field-paragraph-items field--type-entity-reference-revisions field--label-hidden field--items">
                                                            <div class="field--item">
                                                                <div class="paragraph--279 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Advanced Persistent Threat (APT)</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>A set of stealthy and continuous computer hacking processes, often orchestrated by a person or group targeting a specific entity, such as a business or government.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--280 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Botnet</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>A network of computers infected with malicious software and controlled as a group.�Botnets are often used to spread spam and launch distributed denial of service attacks.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--281 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Critical infrastructure</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>Systems and assets so vital to a country that their incapacity or destruction would have a debilitating effect on a country’s national security, economy, or public health.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--282 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Cyber espionage</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>The use of computer networks to collect information on the activities, movements, and plans of a target.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--822 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Distributed denial of service (DDoS)</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>Intentionally paralyzing a computer network by flooding it with data sent simultaneously from many individual computers.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--823 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Doxing</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>Searching and publishing private or identifying information about an individual or group on the internet, typically with malicious intent.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--824 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Encryption</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>Transformation of data into an illegible form to conceal the data’s original meaning and prevent it from being known or used.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--825 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Exfiltrate</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>The unauthorized transfer of data from one computer to another.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--826 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">False flag</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>A ruse designed to attribute an operation to a person or a group other than those who actually planned and executed it.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--4242 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Incident</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>A discrete event or series of events in which a threat actor compromises a computer network.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--827 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Industrial espionage</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>Spying directed toward discovering commercial secrets from a rival manufacturer, other company, or held by a government.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--828 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Malware</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>Software designed to interfere with a computer’s normal functioning.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--829 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Phishing</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>The practice of sending emails purporting to be from reputable sources in order to induce individuals to reveal information, such as passwords or credit card numbers.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--830 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Security certificate</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>A small data file that digitally authenticates the identity of a server on the internet.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--831 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">U.S. Cyber Command</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>The U.S. military organization assigned with defending U.S. military networks and conducting offensive operations in cyberspace.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--832 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Watering hole attack</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>A technique used to compromise a target by inserting malware on a website the target is likely to visit.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="field--item">
                                                                <div class="paragraph--833 paragraph paragraph--type--text-element paragraph--view-mode--default">

                                                                    <div class="element-title field field--name-field-element-title field--type-string field--label-hidden field--item">Zero-day</div>

                                                                    <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                        <p>A vulnerability in software or hardware that is unknown to its vendor.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="paragraph-collapse-link">
                                                            <a class=""></a>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="field--item">
                                            <div class="paragraph-background-color-white paragraph-outer-wrapper ">
                                                <div class="paragraph--276 container paragraph paragraph--type--text-with-items paragraph--view-mode--default">
                                                    <div class="paragraph-wrapper paragraph-alignment-collapsible paragraph-items-alignment- ">
                                                        <div id="paragraph-collapse-276" class="paragraph-collapse no-transition">
                                                            <div class="field field--name-field-anchor-name-link field--type-text field--label-visually_hidden">
                                                                <div class="field--label sr-only">Anchor Name Link</div>
                                                                <div class="field--item">
                                                                    <a name="OurMethodology" href="cyber-operations.html"></a>
                                                                </div>
                                                            </div>
                                                            <div class="paragraph-header field field--name-field-paragraph-header field--type-entity-reference-revisions field--label-hidden field--item">
                                                                <div class="paragraph--274 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                    <div class="element-title ">Our Methodology</div>
                                                                </div>
                                                            </div>
                                                            <div class="paragraph-items field field--name-field-paragraph-items field--type-entity-reference-revisions field--label-hidden field--items">
                                                                <div class="field--item">
                                                                    <div class="paragraph--275 paragraph paragraph--type--text-element paragraph--view-mode--default">
                                                                        <div class="element-body field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                            <p>The cyber operations&nbsp;tracker categorizes all instances of publicly known state-sponsored cyber activity since 2005. The tracker only contains data in which the perpetrator,
                                                                                also known as the threat actor, is suspected to be affiliated with a nation-state.</p>
                                                                            <p>The tracker focuses on state-sponsored actors because its purpose is to identify when states and their proxies conduct cyber operations in pursuit of their foreign policy interests.
                                                                                Furthermore, state-sponsored incidents generally have the most accurate and comprehensive reporting. Reporting on nonstate actors, such as hacktivist groups, tends to be murkier
                                                                                and makes for less reliable data.</p>
                                                                            <p>The data exclusively tracks incidents and threat actors engaged in denial of service attacks, espionage, defacement, destruction of data, sabotage, and doxing. For term definitions,
                                                                                please see the <a href="https://www.cfr.org/interactive/cyber-operations#Glossary">glossary</a>. </p>
                                                                            <p>All data collected for the tracker is open source. It is collected from existing repositories of state-sponsored incidents, such as <a href="https://docs.google.com/spreadsheets/d/1H9_xaxQHpWaa4O_Son4Gx0YOIzlcBWMsdvePFX68EKU/pubhtml">Florian Roth&rsquo;s APT Groups and Operations</a>                                                                                spreadsheet, the Center for Strategic and International Studies&rsquo; <a href="https://www.csis.org/programs/technology-policy-program/cybersecurity/other-projects-cybersecurity/significant-cyber">list of significant cyber events</a>,
                                                                                and Kaspersky Lab&rsquo;s <a href="https://apt.securelist.com/">Targeted Cyberattacks Logbook</a>. This data was then supplemented with incidents and threat actors that were
                                                                                more recently disclosed in the media and by cybersecurity companies. Additional information was supplied by books, some of which provided more accurate in-depth reporting
                                                                                and detail. Where possible, efforts were made to link together the multiple aliases for various threat actors; one actor can be referred to in different ways by various cybersecurity
                                                                                companies. The tracker also attempts to identify which threat actors were responsible for a specific incident. </p>
                                                                            <p>The information contained in the data set comes from a combination of primary sources, such as government press releases and cybersecurity companies, and secondary sources, such
                                                                                as press reports and trade publications.</p>
                                                                            <p>The tracker is updated quarterly. Changes will be made public via the Net Politics blog and will identify which incidents or threat actors were added, as well as any changes to
                                                                                data already in the tracker, such as changing the suspected state sponsor of an attack if new evidence is made public.</p>
                                                                            <p>The tracker also has a feature that allows people to submit additional data. This crowdsourcing element allows cybersecurity firms and the general public to contribute incident
                                                                                or threat actor data to the project.</p>
                                                                            <h2>Known Limitations</h2>
                                                                            <h3>Attribution</h3>
                                                                            <p>Attributing a cyber incident to a particular actor, let alone a state-sponsored actor, is a tricky and laborious process. The ability to attribute an incident has been the subject
                                                                                of <a href="http://www.robertmlee.org/the-problems-with-seeking-and-avoiding-true-attribution-to-cyber-attacks/">longstanding debate</a> within the cybersecurity community.
                                                                                Threat actors have been known to deliberately plant &ldquo; <a href="https://securelist.com/analysis/publications/76273/wave-your-false-flags/">false flags</a>&rdquo; in code
                                                                                to obfuscate attribution, use malware in the public domain to hide their tracks, and <a href="https://www.theguardian.com/world/2013/dec/02/history-of-5-eyes-explainer">share code with allies</a>.
                                                                                Although some cybersecurity companies expressly refuse to attribute cyber incidents to specific threat actors, a significant number of cybersecurity companies, researchers,
                                                                                and intelligence agencies <a href="http://www.tandfonline.com/doi/abs/10.1080/01402390.2014.977382">can deduce [PDF] a threat actor&rsquo;s responsibility</a> by using a combination
                                                                                of technical data, open-source information, and an understanding of the threat actor&rsquo;s foreign policy priorities. </p>
                                                                            <p>This data set identifies suspected threat actors and their state sponsors based on what the reporting suggests and whether the tools, techniques, and procedures used by the threat
                                                                                actor conform to what is known about a state sponsor&rsquo;s preferred methods of intrusion.</p>
                                                                            <h3>Completeness of Data</h3>
                                                                            <p>No claims are made that the data contained within the tracker is entirely complete. There are three reasons for this disclaimer.</p>
                                                                            <p>First, due to resource and language constraints, this database has an inherent bias toward over-reporting incidents or threat actors affecting countries where English is widely
                                                                                spoken, cybersecurity companies publish in English, or there is English-language media. This explains why most of the incidents in the data set identify victims in the United
                                                                                States, the United Kingdom, Australia, Canada, and India.</p>
                                                                            <p>Second, the database relies on publicly accessible data. State intelligence agencies and private cybersecurity firms are likely to have the most complete data about state-sponsored
                                                                                actors, but may not make what they know public to protect national security or trade secrets. Furthermore, some reporting from the media or cybersecurity companies can be
                                                                                vague or incomplete, making it difficult to confirm incidents for which data is only available from a single source.</p>
                                                                            <p>Third, complete and accurate information about cyber incidents and threat actors take time to emerge. For example, the attack on TV5 Monde in 2015 was initially believed to be
                                                                                the work of a terrorist-affiliated group calling itself the Cyber Caliphate. Months later, further evidence surfaced that French intelligence suspected Russian intelligence
                                                                                was behind the operation. It is also probable that, in some instances, state actors have masqueraded as non-state groups and have yet to be unmasked. Investigating cyber incidents
                                                                                is an iterative process that involves chasing leads and testing hypotheses. For this reason, it is possible that information about incidents or threat actors could change
                                                                                as new evidence comes to light. It is also possible that some state-sponsored incidents have been missed entirely.</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="paragraph-collapse-link">
                                                                <a class="" data-toggle="collapse" data-target="#paragraph-collapse-276 .paragraph-items" aria-expanded="false" aria-controls="paragraph-collapse-276"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field--item">
                                            <div class="paragraph-background-color- paragraph-outer-wrapper paragraph-subfooter-freeform-area">
                                                <div class="paragraph--327 subfooter-freeform-area paragraph paragraph--type--subfooter-freeform-area paragraph--view-mode--default">
                                                    <div class="container-fluid">
                                                        <div class="paragraph-wrapper paragraph-alignment- paragraph-items-alignment-">
                                                            <div class="field field--name-field-element-body field--type-text-long field--label-hidden field--item">
                                                                <p>
                                                                    <a href="#" target="_blank">About the Digital and Cyberspace Policy Program</a>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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