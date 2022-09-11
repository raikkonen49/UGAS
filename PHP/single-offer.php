<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_field('offer_title'); ?><br>
<?php the_field('offer_sub_title'); ?>

<ul>
    <?php if( have_rows('offer_left') ): ?>
        <?php while( have_rows('offer_left') ): the_row(); ?>
            <li><?php the_sub_field('option'); ?></li>
        <?php endwhile; ?>
    <?php endif; ?>
</ul>

<ol>
    <?php if( have_rows('offer_right') ): ?>
        <?php while( have_rows('offer_right') ): the_row(); ?>
            <li><?php the_sub_field('option'); ?></li>
        <?php endwhile; ?>
    <?php endif; ?>
</ol>

<br>

<?php the_field('price'); ?>

<br>

<?php $post_object = get_field('related_works'); ?>

<?php $loop = new WP_Query( array( 'post_type' => 'work', 'order' => 'DESC', 'post__in' => $post_object  ) ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

<?php the_title(); ?><br>

<?php wp_reset_query();?>
<?php endwhile; ?>


<?php wp_reset_query();?>
<?php endwhile; else : ?>
<p class="sorry"><?php _e('No content' ); ?></p>
<?php endif; ?>