<?php

/*** Child Theme Function  ***/

function grafik_qodef_child_theme_enqueue_scripts() {
	wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
	wp_enqueue_style( 'childstyle' );
	wp_enqueue_script('childscript', get_stylesheet_directory_uri() . '/assets/js/theme.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'grafik_qodef_child_theme_enqueue_scripts', 100);

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );
