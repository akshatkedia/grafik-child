<?php

/*** Child Theme Function  ***/

if ( ! function_exists( 'grafik_qode_child_theme_enqueue_scripts' ) ) {
	function grafik_qode_child_theme_enqueue_scripts() {
		$parent_style = 'grafik-default-style';

		wp_enqueue_style( 'grafik-child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
		wp_enqueue_script( 'grafik-child-script', get_stylesheet_directory_uri() . '/script.js', array( 'jquery' ), false, true );
	}

	add_action( 'wp_enqueue_scripts', 'grafik_qode_child_theme_enqueue_scripts' );
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );
