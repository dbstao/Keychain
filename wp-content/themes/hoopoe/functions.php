<?php
/**
 * Hoopoe functions and definitions
 */

if ( ! function_exists( 'hoopoe_support' ) ) {

	// Sets up theme defaults and registers support for various WordPress features.
	function hoopoe_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
}
add_action( 'after_setup_theme', 'hoopoe_support' );

if ( ! function_exists( 'hoopoe_styles' ) ) {
	// Enqueue styles.
	function hoopoe_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'hoopoe-style',
			get_template_directory_uri() . '/assets/css/theme.min.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'hoopoe-style' );

	}
}
add_action( 'wp_enqueue_scripts', 'hoopoe_styles' );

if ( ! function_exists( 'hoopoe_editor_styles' ) ) {
	// Enqueue editor styles.
	function hoopoe_editor_styles() {
		add_editor_style(
			get_template_directory_uri() . '/assets/css/theme.min.css'
		);
	}
}
add_action( 'admin_init', 'hoopoe_editor_styles' );


// Add script to Editor
if ( ! function_exists( 'hoopoe_admin_add_scripts' ) ) {
	function hoopoe_admin_add_scripts( $hook ){
		if ( 'appearance_page_hoopoe' != $hook ) {
			return;
		}
		
		wp_register_style( 'hoopoe-settings-css',  get_template_directory_uri() . '/assets/css/admin.min.css' , '1.0.0' );
		wp_enqueue_style( 'hoopoe-settings-css');
	
	}
}
add_action( 'admin_enqueue_scripts', 'hoopoe_admin_add_scripts');

// Add admin page content
get_template_part( 'inc/theme' );

// Add admin page
if ( ! function_exists( 'hoopoe_create_menu' ) ) {
	add_action( 'admin_menu', 'hoopoe_create_menu' );
	// Adds our dashboard menu item
	function hoopoe_create_menu() {
		add_theme_page( 'Hoopoe WordPress Theme', 'Hoopoe', 'edit_theme_options', 'hoopoe', 'hoopoe_admin_theme_page' );
	}
}