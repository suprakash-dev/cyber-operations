<?php 
get_header();
?>
<div role="main" class="main-container container-fluid js-quickedit-main-content">
<?php if (have_posts()) : ?>
    <div class="view view-cst-timeline view-id-cst_timeline">
       <div class="view-content container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 postlist">
                    <?php while (have_posts()) : the_post(); ?>
                    <div class="field-content cst-issue views-field-title ">
                            <?php the_title('<h2>','</h2>'); ?>
                            <?php the_content(); ?>
                    </div>
                    <?php endwhile; ?>
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