<?php

add_action( 'wp_enqueue_scripts', 'fifteenchild_enqueue_parent_and_child_styles' );

function fifteenchild_enqueue_parent_and_child_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri(), array( 'parent-style' ) );
}

function meks_which_template_is_loaded() {
	if ( is_super_admin() ) {
		global $template;
		print_r( $template );
	}
}
 
add_action( 'wp_footer', 'meks_which_template_is_loaded' );