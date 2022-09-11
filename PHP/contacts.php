<?php
/*
Template Name: Contacts template
*/
 ?>

<?php get_header(); ?>

    <div data-equalizer class="contacts-info-block text-center">

        <?php if( have_rows('contacts_info') ): ?>
            <?php while( have_rows('contacts_info') ): the_row(); ?>

                <div data-equalizer-watch class="small-12 medium-4 large-4 columns nopad contacts-item" style="background-color:<?php the_sub_field('background_color'); ?>">
                    <div class="small-12 columns nopad contacts-img">
                        <img src="<?php the_sub_field('icon'); ?>">
                    </div>
                    <div class="small-12 columns nopad contacts-title">
                        <?php the_sub_field('title'); ?>
                    </div>
                    <div class="small-12 columns contacts-text">
                        <?php the_sub_field('text'); ?>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php endif; ?>

    </div>

<?php get_footer(); ?>
