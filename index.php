<?php
get_header(); ?>

<div role="main" class="main-container container-fluid js-quickedit-main-content">
<?php if (have_posts()) : ?>
    <div class="view view-cst-timeline view-id-cst_timeline">
       <div class="view-content container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 postlist">
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="field-content cst-issue views-field-title ">
                        <a href="<?php the_permalink() ?>">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <?php endwhile; ?>
                    <?php the_posts_navigation(); ?>
                </div>
            </div>
        </div>
    </div>
<?php
else :
    echo '<p>No content found</p>';
endif; ?>
</div>
<?php
get_footer();
?>