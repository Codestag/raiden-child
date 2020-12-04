<?php
/**
 * Raiden Child Theme
 *
 * Place any custom functionality/code snippets here.
 *
 * @since Raiden Child 1.0.1
 */

/**
 * Include child theme styles.
 *
 * @return void
 */
function raiden_child_styles() {
	$theme = wp_get_theme();
	wp_enqueue_style( 'raiden-style', get_template_directory_uri() . '/style.css', array(), $theme->parent()->get( 'Version' ) );
	wp_enqueue_style( 'raiden-child-style', get_stylesheet_uri(), array( 'raiden-style' ), $theme->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'raiden_child_styles' );
