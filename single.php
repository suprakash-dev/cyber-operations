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
                </div>
              </div>

              <!-- SOCIAL SHARE: Optional (can keep as is) -->
              <?php 
              $reportDate = get_field('date_of_report');
              $affiliations = get_field('affiliations');
              if(!empty($reportDate ) || !empty($affiliations )):
              ?>
              <div class="cst-issue__wrapper">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <div class="row">
                        <?php if(!empty($reportDate )): 
                          $month= date('M', strtotime($reportDate));
                          $year= date('Y', strtotime($reportDate));
                          ?>
                        <div class="col-md-3">
                          <div class="cst-issue__list-wrapper">
                            <div class="cst-issue__list-header">Date of report</div>
                            <ul class="cst-issue__list">
                              <li class="cst-issue__list-item"><?php echo $month.' '.$year; ?></li>
                            </ul>
                          </div>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($affiliations )): ?>
                        <div class="col-md-9">
                          <div class="cst-issue__list-wrapper cst-issue__affiliations">
                            <div class="cst-issue__list-header">Affiliations</div>
                            <ul class="cst-issue__list">
                              <li class="cst-issue__list-item"><a href="<?php echo esc_html( get_post_permalink( $affiliations->ID ) ); ?>"><?php echo esc_html( $affiliations->post_title ); ?></a>
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
              <?php if ( !empty( get_the_content() ) ){ ?>
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
              $suspectedV=get_field('suspected_victims'); 
              if(!empty($suspectedV)):
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

              <?php $sponsors = get_the_terms( get_the_ID(), 'state_sponsor' );
                    $incidents = get_the_terms( get_the_ID(), 'cyber_operation' );
                    $categories = get_the_terms( get_the_ID(), 'victim_category' );

              if(!empty($sponsors) || !empty($incident) || !empty($category)):
              ?>
              <div class="cst-issue__wrapper">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <div class="row">
                        <?php if(!empty($sponsors)): ?>
                        <div class="col-md-4">
                          <div class="cst-issue__list-wrapper">
                            <div class="cst-issue__list-header">Suspected state sponsor</div>
                            <ul class="cst-issue__list">
                              <?php foreach($sponsors as $sponsor): ?>
                              <li class="cst-issue__list-item"><?php echo $sponsor->name ?></li>
                              <?php endforeach; ?>
                            </ul>
                          </div>
                        </div>
                        <?php endif; ?> 
                        <?php if(!empty($incidents)): ?> 
                        <div class="col-md-4">
                          <div class="cst-issue__list-wrapper">
                            <div class="cst-issue__list-header">Type of incident</div>
                            <ul class="cst-issue__list">
                              <?php foreach($incidents as $incident): ?>   
                              <li class="cst-issue__list-item"><?php echo $incident->name ?></li>
                              <?php endforeach; ?> 
                            </ul>
                          </div>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($categories)): ?> 
                        <div class="col-md-4">
                          <div class="cst-issue__list-wrapper">
                            <div class="cst-issue__list-header">Target category</div>
                            <ul class="cst-issue__list">
                              <?php foreach($categories as $category): ?>   
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
              $suspectedStateSponsorResponse = get_field('Suspected_state_sponsor_response');
              ?>
              <div class="cst-issue__wrapper">
                <div class="container">
                  <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                      <div class="row">
                        <?php if(!empty($governmentReactions)): ?>
                        <div class="col-md-4">
                          <div class="cst-issue__list-wrapper">
                            <div class="cst-issue__list-header">Victim government reaction</div>
                            <ul class="cst-issue__list">
                              <?php foreach($governmentReactions as $governmentReaction): ?>
                              <li class="cst-issue__list-item"><?php echo $governmentReaction->name; ?></li>
                            <?php endforeach; ?>
                            </ul>
                          </div>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($policyResponse)): ?>
                        <div class="col-md-4">
                          <div class="cst-issue__list-wrapper">
                            <div class="cst-issue__list-header">Policy response</div>
                            <ul class="cst-issue__list">
                              <li class="cst-issue__list-item">
                                <a href="" class="cst-issue__source-link" target="_blank">
                                  <?php echo $policyResponse; ?>
                                </a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <?php endif; ?>
                        <?php if(!empty($suspectedStateSponsorResponse)): ?>
                        <div class="col-md-4">
                          <div class="cst-issue__list-wrapper">
                            <div class="cst-issue__list-header">Suspected state sponsor response</div>
                            <ul class="cst-issue__list">
                              <li class="cst-issue__list-item">
                                <a href="" class="cst-issue__source-link" target="_blank">
                                  <?php echo $suspectedStateSponsorResponse; ?>
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
              <?php $readmore = get_field('read_more_link'); 
              $url=$readmore['url'];
              $title=$readmore['title'];
              $target=$readmore['target'] ? $readmore['target'] : '_blank';
              if(!empty($readmore)):
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
                              <li class="cst-issue__source-list-item">
                                <a href="<?php echo esc_url($url); ?>" class="cst-issue__source-link" target="<?php echo esc_attr( $target ); ?>">
                                  <?php echo $title; ?> <svg viewBox="0 0 18 18" class="icon icon-link-out" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.872 1.381H1.381v15.238h15.238v-8.19m-6.095-.953l6.095-6.095m-3.809 0h3.809v3.81" class="icon-stroke" fill="none"></path>
                                  </svg>

                                </a>
                              </li>
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