<?php

// sidebars
if(function_exists('register_sidebar'))
{
	register_sidebar( 'name=Sidebar right&id=sideright');
}

// image sizes
if ( function_exists( 'add_theme_support' ) ) {

add_image_size( 'category-thumb', 300, 9999 ); //300 pixels wide (and unlimited height)

add_theme_support( 'post-thumbnails', array( 'soc' ) );
add_theme_support( 'post-thumbnails' );

set_post_thumbnail_size( 150, 150, true ); // default Post Thumbnail dimensions (cropped)


add_image_size( 'full', 9999, 9999 );
add_image_size( 'work-thumb', 700, 9999 );
add_image_size( 'thumb', 275, 9999, true );

}

// option page

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}


// work CPT
function my_custom_post_work() {
    $labels = array(
        'name'               => _x( 'Work', 'post type general name' ),
        'singular_name'      => _x( 'Work', 'post type singular name' ),
        'add_new'            => _x( 'Add new', 'book' ),
        'add_new_item'       => __( 'Add new' ),
        'edit_item'          => __( 'Edit' ),
        'new_item'           => __( 'New work' ),
        'all_items'          => __( 'All works' ),
        'view_item'          => __( 'View work' ),
        'search_items'       => __( 'Search work' ),
        'not_found'          => __( 'Nėra' ),
        'not_found_in_trash' => __( 'Nėra' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Works'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'Work desc.',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes'),
        'has_archive'   => true,
        'hierarchical'  => true,
        'rewrite'       => array('slug' => 'works','with_front' => false),
        'query_var'     => true,
        // 'taxonomies'    => array( 'category' ),
        //'rewrite'     => true,
        //'publicly_queryable' => false,
    );
    register_post_type( 'work', $args );
}
add_action( 'init', 'my_custom_post_work' );

// CUSTOM TAXONOMY

add_action( 'init', 'create_type_tax' );

function create_type_tax() {
    register_taxonomy(
        'type',
        'work', // custom post type slogan
        array(
            'label' => __( 'Work type' ),
            'rewrite' => array('slug' => 'type', 'with_front' => false ), // SLUG!
            'hierarchical' => true,
            'show_ui' => true,
        )
    );
}

// offer CPT
function my_custom_post_offer() {
    $labels = array(
        'name'               => _x( 'offer', 'post type general name' ),
        'singular_name'      => _x( 'offer', 'post type singular name' ),
        'add_new'            => _x( 'Add new', 'book' ),
        'add_new_item'       => __( 'Add new' ),
        'edit_item'          => __( 'Edit' ),
        'new_item'           => __( 'New offer' ),
        'all_items'          => __( 'All offers' ),
        'view_item'          => __( 'View offer' ),
        'search_items'       => __( 'Search offer' ),
        'not_found'          => __( 'Nėra' ),
        'not_found_in_trash' => __( 'Nėra' ),
        'parent_item_colon'  => '',
        'menu_name'          => 'Offers'
    );
    $args = array(
        'labels'        => $labels,
        'description'   => 'offer desc.',
        'public'        => true,
        'menu_position' => 5,
        'supports'      => array( 'title', 'editor', 'thumbnail', 'page-attributes'),
        'has_archive'   => true,
        'hierarchical'  => true,
        'rewrite'       => array('slug' => 'offers','with_front' => false),
        'query_var'     => true,
        // 'taxonomies'    => array( 'category' ),
        //'rewrite'     => true,
        //'publicly_queryable' => false,
    );
    register_post_type( 'offer', $args );
}
add_action( 'init', 'my_custom_post_offer' );


// excerpt length (chars)
function wpdocs_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

?>
