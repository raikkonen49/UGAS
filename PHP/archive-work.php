
<?php get_header(); ?>

    <div class="works-block works-block-hold text-center">
        <div class="small-12 columns nopad works-row">
            <?php $i = 0;?>
            <?php $loop = new WP_Query( array( 'post_type' => 'work', 'order' => 'ASC', 'orderby' => 'menu_order') ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); $i++; ?>
                <div class="small-12 medium-6 large-6 columns nopad works">
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
                <?php if ($i % 2 == 0 ) {
                    $newRow = '</div>
                                <div class="small-12 columns nopad works-row">';
                        }
                    else {
                        $newRow = ' ';
                    }
                        echo $newRow;
                ?>


            <?php wp_reset_query();?>
            <?php endwhile; ?>
        </div> <!-- last works-row ends -->

    </div>

<?php get_footer(); ?>
