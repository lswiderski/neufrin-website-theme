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
?>
