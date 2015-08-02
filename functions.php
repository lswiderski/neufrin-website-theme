<?php

function custom_excerpt_length( $length ) {
	return 20;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_theme_support( 'post-thumbnails' ); 

add_action( 'after_setup_theme', 'wpt_setup' );
    if ( ! function_exists( 'wpt_setup' ) ):
        function wpt_setup() {  
            register_nav_menu( 'primary', __( 'Primary navigation', 'wptuts' ) );
        } endif;




require_once('wp_bootstrap_navwalker.php');

if (class_exists('MultiPostThumbnails')) {
    new MultiPostThumbnails(
        array(
            'label' => 'Page Header',
            'id' => 'page-header',
            'post_type' => 'post'
        )
    );
}
function get_custom_cat_template($single_template) {
     global $post;
 
       if ( in_category( 'adventure' )) {
          $single_template = dirname( __FILE__ ) . '/single-adventure.php';
     }
     return $single_template;
}
 
add_filter( "single_template", "get_custom_cat_template" ) ;
?>
