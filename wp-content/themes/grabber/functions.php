<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package grabber
 * @since 1.0.0
 */

/**
 * The theme version.
 *
 * @since 1.0.0
 */
define( 'GRABBER_VERSION', wp_get_theme()->get( 'Version' ) );

/**
 * Add theme support for block styles and editor style.
 *
 * @since 1.0.0
 *
 * @return void
 */
function grabber_setup() {
	add_editor_style( './assets/css/style-shared.min.css' );

	/*
	 * Load additional block styles.
	 * See details on how to add more styles in the readme.txt.
	 */
	$styled_blocks = [ 'button', 'quote', 'navigation', 'search' ];
	foreach ( $styled_blocks as $block_name ) {
		$args = array(
			'handle' => "grabber-$block_name",
			'src'    => get_theme_file_uri( "assets/css/blocks/$block_name.min.css" ),
			'path'   => get_theme_file_path( "assets/css/blocks/$block_name.min.css" ),
		);
		// Replace the "core" prefix if you are styling blocks from plugins.
		wp_enqueue_block_style( "core/$block_name", $args );
	}

}
add_action( 'after_setup_theme', 'grabber_setup' );

/**
 * Enqueue the CSS files.
 *
 * @since 1.0.0
 *
 * @return void
 */
function grabber_styles() {
	wp_enqueue_style(
		'grabber-style',
		get_stylesheet_uri(),
		[],
		GRABBER_VERSION
	);
	wp_enqueue_style(
		'grabber-shared-styles',
		get_theme_file_uri( 'assets/css/style-shared.min.css' ),
		[],
		GRABBER_VERSION
	);
}
add_action( 'wp_enqueue_scripts', 'grabber_styles' );

function grabber_styles_admin($hook) {
	if ( 'appearance_page_grabber-info' != $hook ) {
        return;
    }
	wp_enqueue_style(
		'grabber-admin-style',
		get_stylesheet_uri(),
		[],
		GRABBER_VERSION
	);
	wp_enqueue_style(
		'grabber-shared-styles',
		get_theme_file_uri( 'assets/css/admin-style.css' ),
		[],
		GRABBER_VERSION
	);
}
add_action( 'admin_enqueue_scripts', 'grabber_styles_admin' );

/**
 * Add Menu Page
 *
 * @return void
 */
function grabber_add_menu_page() {
	add_theme_page( 
		esc_html__( 'Grabber', 'grabber' ), 
		esc_html__( 'Grabber', 'grabber' ), 
		'edit_theme_options', 'grabber-info', 'grabber_theme_page_display','2' );
}
add_action( 'admin_menu', 'grabber_add_menu_page' );

/**
 * Display About page
 */
function grabber_theme_page_display() {
	$theme = wp_get_theme();
	include_once 'inc/theme-info.php';
}

// Filters.
require_once get_theme_file_path( 'inc/filters.php' );

// Block variation example.
require_once get_theme_file_path( 'inc/register-block-variations.php' );

// Block style examples.
require_once get_theme_file_path( 'inc/register-block-styles.php' );

// Block pattern and block category examples.
require_once get_theme_file_path( 'inc/register-block-patterns.php' );


add_action( 'after_switch_theme', 'grabber_activation_message' );
function grabber_activation_message() {
  // Get the current user.
  $user = wp_get_current_user();
  $the_theme = wp_get_theme()->get( 'Name' );

  // Check if the user has already dismissed the message.
  if ( get_user_meta( $user->ID, 'grabber_activation_message', true ) ) {
    return;
  }

  // Properly escape all dynamic data
  $message = '<div class="notice notice-success is-dismissible">
    <a href="' . esc_url( admin_url( 'themes.php?page=grabber-info' ) ) . '" target="_blank"><img style="max-width: 100%;" src="' . esc_url( get_template_directory_uri() . '/assets/images/theme-setup.png' ) . '" alt="' . esc_attr( $the_theme ) . '"></a>
    <p>Congratulations on activating the ' . esc_html( $the_theme ) . '! To get started, please visit the <a href="' . esc_url( admin_url( 'site-editor.php' ) ) . '" class="button">Site Editor</a> to customize your theme settings.</p>
    <button type="button" class="notice-dismiss"></button>
  </div>';

  // Display the message.
  add_action( 'admin_notices', function() use ( $message ) {
    echo $message;
  } );
}
