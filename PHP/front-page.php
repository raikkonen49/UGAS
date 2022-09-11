
<?php get_header(); ?>

    <div class="works-block text-center" id="works">
        <div class="works-after"></div>
        <?php $loop = new WP_Query( array( 'post_type' => 'work', 'posts_per_page' => 4, 'order' => 'ASC', 'meta_key' => 'show_in_home_page') ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <div class="small-12 medium-12 large-6 columns nopad works">
                <a href="<?php the_permalink(); ?>" style="background:url(<?php the_post_thumbnail_url('full'); ?>) no-repeat center center">
                    <div class="works-item">
                        <h2><?php the_title(); ?></h2>
                        <div>
                        <ul>
                            <?php
                            $term_list = wp_get_post_terms($post->ID, 'type', array("fields" => "all"));
                            foreach($term_list as $term_single) {
                                echo '<li>'.$term_single->name.'</li>' ;
                            }
                            ?>
                        </ul>
                        </div>
                    </div>
                </a>
            </div>
        <?php wp_reset_query();?>
        <?php endwhile; ?>
    </div>
    <div class="works-more-hold">
        <div class="works-more-after"></div>
        <div class="row">
            <div class="small-12 columns btn-hold text-center">
                <a class="btn btn-pink" href="<?php echo get_post_type_archive_link( 'work' ); ?>">Show more</a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
