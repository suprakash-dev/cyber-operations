<?php get_header(); ?>

<div role="main" class="main-container container-fluid js-quickedit-main-content">
  <div class="row row-middle">
    <section>
      <div class="region region-content">
        <div class="cst-issue is-promoted full clearfix">
          <div class="content">

            <?php while (have_posts()) : the_post(); ?>

              <!-- HEADER LINK -->
              <div class="cst-issue__wrapper cst-issue__main-header">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="cst-issue__main-header-wrapper">
                        <a href="<?php bloginfo('url'); ?>" class="cst-issue__main-header-link">Cyber Operations Home</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- DYNAMIC PAGE TITLE -->
              <div class="cst-issue__wrapper cst-issue__header">
                <div class="container">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="cst-issue__title"><?php the_title(); ?></div>
                      <div class="cst-issue__close">
                        <a href="#" class="cst-issue__close-link">
                          <svg viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" class="icon icon-close">
                            <path d="M10.417 12.5L0 22.917 2.083 25 12.5 14.583 22.917 25 25 22.917 14.583 12.5 25 2.083 22.917 0 12.5 10.417 2.083 0 0 2.083 10.417 12.5z" class="icon-fill" fill="none" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="cst-issue__social">
                        <div class="social clearfix">
                          <?php
                          $post_url   = get_permalink();
                          $post_title = get_the_title();
                          $post_desc  = get_the_excerpt();
                          ?>
                          <ul class="social__list clearfix share-kit">
                            <li class="social__list-item social__facebook">
                              <button class="social__item-link share-btn" data-network="facebook" data-url="<?php echo $post_url; ?>" data-title="<?php echo $post_title; ?>" data-desc="<?php echo $post_desc; ?>"> <svg viewBox="0 0 9 19" class="icon icon-facebook" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M0 5.993h1.861V4.171c0-.801.021-2.04.6-2.807C3.071.552 3.91 0 5.35 0c2.347 0 3.336.336 3.336.336l-.465 2.777s-.776-.226-1.5-.226c-.723 0-1.371.26-1.371.99v2.116h2.967l-.206 2.71H5.35v9.42H1.86v-9.42H0v-2.71l4.203 4.532" class="icon-fill" fill="none"></path>
                                </svg>
                              </button>
                            </li>
                            <li class="social__list-item social__twitter">
                              <button class="social__item-link share-btn" data-network="twitter" data-url="<?php echo esc_url($post_url); ?>" data-title="<?php echo esc_attr($post_title); ?>"> <svg class="icon icon-twitter" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="19px" height="19px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                  <path d="M14.095479,10.316482L22.286354,1h-1.940718l-7.115352,8.087682L7.551414,1H1l8.589488,12.231093L1,23h1.940717  l7.509372-8.542861L16.448587,23H23L14.095479,10.316482z M11.436522,13.338465l-0.871624-1.218704l-6.924311-9.68815h2.981339  l5.58978,7.82155l0.867949,1.218704l7.26506,10.166271h-2.981339L11.436522,13.338465z" class="icon-fill" fill="none"></path>
                                </svg></button>
                            </li>
                            <li class="social__list-item social__linkedin">
                              <button class="social__item-link share-btn" data-network="linkedin" data-url="<?php echo $post_url; ?>" data-title="<?php echo $post_title; ?>" data-desc="<?php echo $post_desc; ?>"> <svg viewBox="0 0 19 18" class="icon icon-linkedin" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M18.447 17.014h-3.799c0-.163.008-4.169-.007-6.075a4.948 4.948 0 0 0-.151-1.214c-.366-1.386-1.929-1.876-3.037-.962-.536.442-.823 1.013-.822 1.727.007 2.038.003 4.485.003 6.524 0 .144 0-.175 0 0h-3.77V5.599h3.752v1.552c.122-.135.19-.199.244-.274.98-1.347 2.348-1.718 3.906-1.52 1.548.197 2.66 1.037 3.213 2.52.227.61.316 1.272.468 1.91v7.227zM.941 17.013h3.75V5.603H.941v11.41zM2.802 3.99c-.97-.001-1.764-.533-2.018-1.353C.523 1.795.794.887 1.5.422 2.286-.1 3.135-.133 3.969.298c.728.376 1.016 1.04.986 1.842-.04 1.09-.935 1.852-2.153 1.85z" class="icon-fill" fill="none"></path>
                                </svg>
                              </button>
                            </li>
                            <li class="social__list-item social__e-mail">
                              <button class="social__item-link share-btn" data-network="email" data-url="<?php echo $post_url; ?>" data-title="<?php echo $post_title; ?>"> <svg viewBox="0 0 23 14" class="icon icon-e-mail-filled" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M.915 0l10.258 7.808L21.673 0H.915zm10.258 8.804L0 .297V14h22.615V.297L11.173 8.804z" class="icon-fill" fill="none"></path>
                                </svg>
                              </button>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- SOCIAL SHARE: Optional (can keep as is) -->
              <?php
              $reportDate = get_field('date_of_report');
              $affiliations = get_field('affiliations');
              if (!empty($reportDate) || !empty($affiliations)):
              ?>
                <div class="cst-issue__wrapper">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <div class="row">
                          <?php if (!empty($reportDate)):
                            $month = date('M', strtotime($reportDate));
                            $year = date('Y', strtotime($reportDate));
                          ?>
                            <div class="col-md-3">
                              <div class="cst-issue__list-wrapper">
                                <div class="cst-issue__list-header">Date of report</div>
                                <ul class="cst-issue__list">
                                  <li class="cst-issue__list-item"><?php echo $month . ' ' . $year; ?></li>
                                </ul>
                              </div>
                            </div>
                          <?php endif; ?>
                          <?php if (!empty($affiliations)): ?>
                            <div class="col-md-9">
                              <div class="cst-issue__list-wrapper cst-issue__affiliations">
                                <div class="cst-issue__list-header">Affiliations</div>
                                <ul class="cst-issue__list">
                                  <li class="cst-issue__list-item"><a href="<?php echo esc_html(get_post_permalink($affiliations->ID)); ?>"><?php echo esc_html($affiliations->post_title); ?></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
              <!-- MAIN CONTENT BODY -->
              <?php if (!empty(get_the_content())) { ?>
                <div class="cst-issue__wrapper cst-issue__description-wrapper">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-10 col-sm-offset-2">
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="cst-issue__description">
                              <?php the_content(); ?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } ?>

              <?php
              $suspectedV = get_field('suspected_victims');
              if (!empty($suspectedV)):
              ?>
                <div class="cst-issue__wrapper cst-issue__victims">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="cst-issue__list-wrapper">
                              <div class="cst-issue__list-header">Suspected victims</div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="cst-issue__victims-lists">
                            <div class="col-md-4">
                              <div class="cst-issue__list-wrapper">
                                <ul class="cst-issue__list">
                                  <li class="cst-issue__list-item"><?php echo $suspectedV; ?></li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

              <?php $sponsors = get_the_terms(get_the_ID(), 'state_sponsor');
              $incidents = get_the_terms(get_the_ID(), 'cyber_operation');
              $categories = get_the_terms(get_the_ID(), 'victim_category');

              if (!empty($sponsors) || !empty($incidents) || !empty($categories)):
              ?>
                <div class="cst-issue__wrapper">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <div class="row">
                          <?php if (!empty($sponsors)): ?>
                            <div class="col-md-4">
                              <div class="cst-issue__list-wrapper">
                                <div class="cst-issue__list-header">Suspected state sponsor</div>
                                <ul class="cst-issue__list">
                                  <?php foreach ($sponsors as $sponsor): ?>
                                    <li class="cst-issue__list-item"><?php echo $sponsor->name ?></li>
                                  <?php endforeach; ?>
                                </ul>
                              </div>
                            </div>
                          <?php endif; ?>
                          <?php if (!empty($incidents)): ?>
                            <div class="col-md-4">
                              <div class="cst-issue__list-wrapper">
                                <div class="cst-issue__list-header">Type of incident</div>
                                <ul class="cst-issue__list">
                                  <?php foreach ($incidents as $incident): ?>
                                    <li class="cst-issue__list-item"><?php echo $incident->name ?></li>
                                  <?php endforeach; ?>
                                </ul>
                              </div>
                            </div>
                          <?php endif; ?>
                          <?php if (!empty($categories)): ?>
                            <div class="col-md-4">
                              <div class="cst-issue__list-wrapper">
                                <div class="cst-issue__list-header">Target category</div>
                                <ul class="cst-issue__list">
                                  <?php foreach ($categories as $category): ?>
                                    <li class="cst-issue__list-item"><?php echo $category->name ?></li>
                                  <?php endforeach; ?>
                                </ul>
                              </div>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
              <?php
              $governmentReactions = get_the_terms(get_the_ID(), 'victim_government_response');
              $policyResponse = get_field('policy_response');
              $suspectedResponse = get_field('suspected_response');
              if (!empty($governmentReactions) || !empty($policyResponse) || !empty($suspectedResponse)):
              ?>
                <div class="cst-issue__wrapper">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <div class="row">
                          <?php if (!empty($governmentReactions)): ?>
                            <div class="col-md-4">
                              <div class="cst-issue__list-wrapper">
                                <div class="cst-issue__list-header">Victim government reaction</div>
                                <ul class="cst-issue__list">
                                  <?php foreach ($governmentReactions as $governmentReaction): ?>
                                    <li class="cst-issue__list-item"><?php echo $governmentReaction->name; ?></li>
                                  <?php endforeach; ?>
                                </ul>
                              </div>
                            </div>
                          <?php endif; ?>
                          <?php if (!empty($policyResponse)):
                            $purl = $policyResponse['url'];
                            $ptitle = $policyResponse['title'];
                            $ptarget = $policyResponse['target'] ? $policyResponse['target'] : '_blank';
                          ?>
                            <div class="col-md-4">
                              <div class="cst-issue__list-wrapper">
                                <div class="cst-issue__list-header">Policy response</div>
                                <ul class="cst-issue__list">
                                  <li class="cst-issue__list-item">
                                    <a href="<?php echo esc_url($purl); ?>" class="cst-issue__source-link" target="<?php echo esc_attr($ptarget); ?>">
                                      <?php echo esc_html($ptitle); ?>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          <?php endif; ?>
                          <?php if (!empty($suspectedResponse)):
                            $surl = $suspectedResponse['url'];
                            $stitle = $suspectedResponse['title'];
                            $starget = $suspectedResponse['target'] ? $suspectedResponse['target'] : '_blank';

                          ?>
                            <div class="col-md-4">
                              <div class="cst-issue__list-wrapper">
                                <div class="cst-issue__list-header">Suspected state sponsor response</div>
                                <ul class="cst-issue__list">
                                  <li class="cst-issue__list-item">
                                    <a href="<?php echo esc_url($surl); ?>" class="cst-issue__source-link" target="<?php echo esc_attr($starget); ?>">
                                      <?php echo esc_html($stitle); ?>
                                    </a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
              endif;
              if (have_rows('read_more_links')):
              ?>
                <div class="cst-issue__wrapper cst-issue__sources">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-8 col-sm-offset-2">
                        <div class="row">
                          <div class="col-xs-12">
                            <div class="cst-issue__sources-list-wrapper">
                              <div class="cst-issue__sources-list-header">Read more</div>
                              <ul class="cst-issue__sources-list">
                                <?php while (have_rows('read_more_links')): the_row();
                                  $readmore = get_sub_field('add_read_more_link');
                                  $url = $readmore['url'];
                                  $title = $readmore['title'];
                                  $target = $readmore['target'] ? $readmore['target'] : '_blank';
                                ?>
                                  <li class="cst-issue__source-list-item">
                                    <a href="<?php echo esc_url($url); ?>" class="cst-issue__source-link" target="<?php echo esc_attr($target); ?>">
                                      <?php echo $title; ?> <svg viewBox="0 0 18 18" class="icon icon-link-out" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.872 1.381H1.381v15.238h15.238v-8.19m-6.095-.953l6.095-6.095m-3.809 0h3.809v3.81" class="icon-stroke" fill="none"></path>
                                      </svg>

                                    </a>
                                  </li>
                                <?php endwhile; ?>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            <?php endwhile; ?>

          </div>
        </div>
      </div>
    </section>
  </div>
</div>

<?php get_footer(); ?>