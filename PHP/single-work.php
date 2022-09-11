<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="bg-img" style="background:url(<?php the_field('top_header_image'); ?>) no-repeat center center"></div>

<div class="row">
    <div class="small-12 columns container-title text-center">
        <?php the_title(); ?>
        <span>
            <?php
            $term_list = wp_get_post_terms($post->ID, 'type', array("fields" => "all"));
            foreach($term_list as $term_single) {
                echo $term_single->name;
            }
            ?>
        </span>
        <div class="sub-title">
            <?php the_content(); ?>
        </div>
    </div>
    
    <div class="small-12 columns web-img">
        <ul>
            <?php if( have_rows('3_images_list') ): ?>
                <?php while( have_rows('3_images_list') ): the_row(); ?>
                    <li><img src="<?php the_sub_field('image'); ?>"></li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>

    <?php if (get_field('top_page_title') && get_field('top_page_sub_title') && get_field('top_page_text')) { ?>
    <div class="small-12 columns container-title text-center">
        <?php the_field('top_page_title'); ?>
        <span><?php the_field('top_page_sub_title'); ?></span>
        <div class="sub-title">
            <?php the_field('top_page_text'); ?>
        </div>
    </div>
    <?php } ?>

    <?php if (get_field('front_image')) { ?>
    <div class="small-12 columns web-page-img">
        <img src="<?php the_field('front_image'); ?>">
    </div>
    <?php } ?>

    <?php if (get_field('left_work_title') && get_field('left_work_sub_title') && get_field('left_work_text') && get_field('left_work_image')) { ?>
    <div class="small-12 columns web-text-block">
        <div class="small-12 medium-6 medium-push-6 large-6 large-push-6 columns web-text-item">
            <div class="web-text-title">
                <?php the_field('left_work_title'); ?>
                <span><?php the_field('left_work_sub_title'); ?></span>
            </div>
            <div class="web-text">
                <?php the_field('left_work_text'); ?>
            </div>
        </div>
        <div class="small-12 medium-6 medium-pull-6 large-6 large-pull-6 columns nopad">
            <div class="web-text-img" style="background:url(<?php the_field('left_work_image'); ?>) no-repeat center center"></div>
        </div>
    </div>
    <?php } ?>

    <?php if (get_field('right_work_title') && get_field('right_work_sub_title') && get_field('right_work_text') && get_field('right_work_image')) { ?>
    <div class="small-12 columns web-text-block">
        <div class="small-12 medium-6 large-6 columns web-text-item">
            <div class="web-text-title">
                <?php the_field('right_work_title'); ?>
                <span><?php the_field('right_work_sub_title'); ?></span>
            </div>
            <div class="web-text">
                <?php the_field('right_work_text'); ?>
            </div>
        </div>
        <div class="small-12 medium-6 large-6 columns nopad">
            <div class="web-text-img" style="background:url(<?php the_field('right_work_image'); ?>) no-repeat center center"></div>
        </div>
    </div>
    <?php } ?>

    <?php if (get_field('bottom_page_title') && get_field('bottom_page_sub_title') && get_field('bottom_page_text')) { ?>
        <div class="small-12 columns container-title text-center">
            <?php the_field('bottom_page_title'); ?>
            <span><?php the_field('bottom_page_sub_title'); ?></span>
            <div class="sub-title">
                <?php the_field('bottom_page_text'); ?>
            </div>
        </div>
    <?php } ?>

    <div class="small-12 columns example text-center">
        <ul>
            <?php if( have_rows('2_images_list') ): ?>
                <?php while( have_rows('2_images_list') ): the_row(); ?>
                    <li><img src="<?php the_sub_field('image'); ?>"></li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>

    <?php if (get_field('link')) { ?>
    <div class="small-12 columns text-center works-btn-hold">
        <a class="btn btn-pink" target="_blank" href="<?php the_field('link'); ?>">Live version</a>
    </div>
    <?php } ?>
</div>

<?php wp_reset_query();?>
<?php endwhile; else : ?>
<p class="sorry"><?php _e('No content' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
