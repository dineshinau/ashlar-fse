<?php
/**
 * Ashlar FSE functions and definitions.
 *
 * @package Ashlar_FSE
 */

if ( ! function_exists( 'ashlar_fse_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for WordPress features.
	 */
	function ashlar_fse_setup() {
		add_theme_support( 'wp-block-styles' );
		add_editor_style( 'style.css' );
	}
}
add_action( 'after_setup_theme', 'ashlar_fse_setup' );

if ( ! function_exists( 'ashlar_fse_enqueue_styles' ) ) {
	/**
	 * Enqueues the theme stylesheet on the front end.
	 */
	function ashlar_fse_enqueue_styles() {
		wp_enqueue_style(
			'ashlar-fse-style',
			get_stylesheet_uri(),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'ashlar_fse_enqueue_styles' );
