<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'nivritti_setup' ) ) {
	add_action( 'after_setup_theme', 'nivritti_setup' );
	// Sets up theme defaults and registers support for various WordPress features.
	function nivritti_setup() {
		
		add_editor_style( 'style.css' );
		
	}
}

// Overwrite parent theme background defaults and registers support for WordPress features.
add_action( 'after_setup_theme', 'martanda_background_setup' );
function martanda_background_setup() {
	add_theme_support( "custom-background",
		array(
			'default-color' 		 => 'f5ecdd',
			'default-image'          => '',
			'default-repeat'         => 'repeat',
			'default-position-x'     => 'center',
			'default-position-y'     => 'top',
			'default-size'           => 'auto',
			'default-attachment'     => '',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => ''
		)
	);
}

// Replace default fonts from parent theme
function martanda_get_font_face_styles() {
	return "
	@font-face{
		font-family: 'Poppins';
		font-weight: 100;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Poppins-Thin.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Poppins';
		font-weight: 200;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Poppins-ExtraLight.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Poppins';
		font-weight: 300;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Poppins-Light.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Poppins';
		font-weight: 400;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Poppins-Regular.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Poppins';
		font-weight: 500;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Poppins-Medium.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Poppins';
		font-weight: 600;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Poppins-SemiBold.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Poppins';
		font-weight: 700;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Poppins-Bold.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Poppins';
		font-weight: 800;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Poppins-ExtraBold.woff2') format('woff2');
	}
	@font-face{
		font-family: 'Poppins';
		font-weight: 900;
		font-style: normal;
		font-stretch: normal;
		font-display: swap;
		src: url('" . get_stylesheet_directory_uri() . "/fonts/Poppins-Black.woff2') format('woff2');
	}
	";
}

function martanda_font_family_css() {
	// Get our settings
	$martanda_settings = wp_parse_args(
		get_option( 'martanda_settings', array() ),
		martanda_get_defaults()
	);

	// Initiate our class
	$css = new martanda_css;
	
	$og_defaults = martanda_get_defaults( false );
	
	$bodyclass = 'body';
	if ( is_admin() ) {
		$bodyclass = '.editor-styles-wrapper';
	}
	
	$bodyfont = $martanda_settings[ 'font_body' ];
	if ( $bodyfont == 'inherit' ) { $bodyfont = 'Poppins'; }
	
	$font_site_title = $martanda_settings[ 'font_site_title' ];
	if ( $font_site_title == 'inherit' ) { $font_site_title = 'Poppins'; }
	$font_navigation = $martanda_settings[ 'font_navigation' ];
	if ( $font_navigation == 'inherit' ) { $font_navigation = 'Poppins'; }
	$font_buttons = $martanda_settings[ 'font_buttons' ];
	if ( $font_buttons == 'inherit' ) { $font_buttons = 'Poppins'; }
	$font_heading_1 = $martanda_settings[ 'font_heading_1' ];
	if ( $font_heading_1 == 'inherit' ) { $font_heading_1 = 'Poppins'; }
	$font_heading_2 = $martanda_settings[ 'font_heading_2' ];
	if ( $font_heading_2 == 'inherit' ) { $font_heading_2 = 'Poppins'; }
	$font_heading_3 = $martanda_settings[ 'font_heading_3' ];
	if ( $font_heading_3 == 'inherit' ) { $font_heading_3 = 'Poppins'; }
	$font_heading_4 = $martanda_settings[ 'font_heading_4' ];
	if ( $font_heading_4 == 'inherit' ) { $font_heading_4 = 'Poppins'; }
	$font_heading_5 = $martanda_settings[ 'font_heading_5' ];
	if ( $font_heading_5 == 'inherit' ) { $font_heading_5 = 'Poppins'; }
	$font_heading_6 = $martanda_settings[ 'font_heading_6' ];
	if ( $font_heading_6 == 'inherit' ) { $font_heading_6 = 'Poppins'; }
	$font_footer = $martanda_settings[ 'font_footer' ];
	if ( $font_footer == 'inherit' ) { $font_footer = 'Poppins'; }
	$font_fixed_side = $martanda_settings[ 'font_fixed_side' ];
	if ( $font_fixed_side == 'inherit' ) { $font_fixed_side = 'Poppins'; }
	
	$css->set_selector( $bodyclass );
	$css->add_property( '--martanda--font-body', esc_attr( $bodyfont ) );
	$css->add_property( '--martanda--font-site-title', esc_attr( $font_site_title ) );
	$css->add_property( '--martanda--font-navigation', esc_attr( $font_navigation ) );
	$css->add_property( '--martanda--font-buttons', esc_attr( $font_buttons ) );
	$css->add_property( '--martanda--font-heading-1', esc_attr( $font_heading_1 ) );
	$css->add_property( '--martanda--font-heading-2', esc_attr( $font_heading_2 ) );
	$css->add_property( '--martanda--font-heading-3', esc_attr( $font_heading_3 ) );
	$css->add_property( '--martanda--font-heading-4', esc_attr( $font_heading_4 ) );
	$css->add_property( '--martanda--font-heading-5', esc_attr( $font_heading_5 ) );
	$css->add_property( '--martanda--font-heading-6', esc_attr( $font_heading_6 ) );
	$css->add_property( '--martanda--font-footer', esc_attr( $font_footer ) );
	$css->add_property( '--martanda--font-fixed-side', esc_attr( $font_fixed_side ) );
	
	$css->set_selector( '.editor-styles-wrapper .top-bar-socials button' );
	$css->add_property( 'background-color', 'inherit' );
	
	// Allow us to hook CSS into our output
	do_action( 'martanda_font_family_css', $css );

	return apply_filters( 'martanda_font_family_css_output', $css->css_output() );
}

// Overwrite theme URL
function martanda_theme_uri_link() {
	return 'https://wpkoi.com/nivritti-wpkoi-wordpress-theme/';
}

// Extra cutomizer functions
if ( ! function_exists( 'nivritti_customize_register' ) ) {
	add_action( 'customize_register', 'nivritti_customize_register' );
	function nivritti_customize_register( $wp_customize ) {
				
		// Add Nivritti customizer section
		$wp_customize->add_section(
			'nivritti_layout_effects',
			array(
				'title' => __( 'Navigation color effect', 'nivritti' ),
				'priority' => 24,
			)
		);
		
		// Navigation backgrounds
		$wp_customize->add_setting(
			'nivritti_settings[nav_bg]',
			array(
				'default' => 'enable',
				'type' => 'option',
				'sanitize_callback' => 'nivritti_sanitize_choices'
			)
		);

		$wp_customize->add_control(
			'nivritti_settings[nav_bg]',
			array(
				'type' => 'select',
				'label' => __( 'Navigation backgrounds', 'nivritti' ),
				'choices' => array(
					'enable' => __( 'Enable', 'nivritti' ),
					'disable' => __( 'Disable', 'nivritti' )
				),
				'settings' => 'nivritti_settings[nav_bg]',
				'section' => 'nivritti_layout_effects',
				'priority' => 30
			)
		);
		
		// Nivritti effect colors
		$wp_customize->add_setting(
			'nivritti_settings[nivritti_color_1]', array(
				'default' => '#ffe805',
				'type' => 'option',
				'sanitize_callback' => 'nivritti_sanitize_hex_color',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'nivritti_settings[nivritti_color_1]',
				array(
					'label' => __( 'Effect color 1', 'nivritti' ),
					'section' => 'nivritti_layout_effects',
					'settings' => 'nivritti_settings[nivritti_color_1]',
					'priority' => 45
				)
			)
		);
		
		$wp_customize->add_setting(
			'nivritti_settings[nivritti_color_2]', array(
				'default' => '#a0dcf8',
				'type' => 'option',
				'sanitize_callback' => 'nivritti_sanitize_hex_color',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'nivritti_settings[nivritti_color_2]',
				array(
					'label' => __( 'Effect color 2', 'nivritti' ),
					'section' => 'nivritti_layout_effects',
					'settings' => 'nivritti_settings[nivritti_color_2]',
					'priority' => 45
				)
			)
		);
		
		$wp_customize->add_setting(
			'nivritti_settings[nivritti_color_3]', array(
				'default' => '#f4afcc',
				'type' => 'option',
				'sanitize_callback' => 'nivritti_sanitize_hex_color',
			)
		);

		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'nivritti_settings[nivritti_color_3]',
				array(
					'label' => __( 'Effect color 3', 'nivritti' ),
					'section' => 'nivritti_layout_effects',
					'settings' => 'nivritti_settings[nivritti_color_3]',
					'priority' => 45
				)
			)
		);
		
	}
}

//Sanitize choices.
if ( ! function_exists( 'nivritti_sanitize_choices' ) ) {
	function nivritti_sanitize_choices( $input, $setting ) {
		// Ensure input is a slug
		$input = sanitize_key( $input );

		// Get list of choices from the control
		// associated with the setting
		$choices = $setting->manager->get_control( $setting->id )->choices;

		// If the input is a valid key, return it;
		// otherwise, return the default
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
	}
}

// Sanitize colors. Allow blank value.
if ( ! function_exists( 'nivritti_sanitize_hex_color' ) ) {
	function nivritti_sanitize_hex_color( $color ) {
	    if ( '' === $color ) {
	        return '';
		}

	    // 3 or 6 hex digits, or the empty string.
	    if ( preg_match('|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
	        return $color;
		}

	    return '';
	}
}

// Nivritti effects colors css
if ( ! function_exists( 'nivritti_effect_colors_css' ) ) {
	function nivritti_effect_colors_css() {
		// Get Customizer settings
		$nivritti_settings = get_option( 'nivritti_settings' );
		
		$nivritti_color_1	 = isset( $nivritti_settings['nivritti_color_1'] ) ? $nivritti_settings['nivritti_color_1'] : '#ffe805';
		$nivritti_color_2	 = isset( $nivritti_settings['nivritti_color_2'] ) ? $nivritti_settings['nivritti_color_2'] : '#a0dcf8';
		$nivritti_color_3	 = isset( $nivritti_settings['nivritti_color_3'] ) ? $nivritti_settings['nivritti_color_3'] : '#f4afcc';
		
		$nivritti_extracolors = 'body {--martanda--nivritti-color-1: ' . esc_attr( $nivritti_color_1 ) . ';--martanda--nivritti-color-2: ' . esc_attr( $nivritti_color_2 ) . ';--martanda--nivritti-color-3: ' . esc_attr( $nivritti_color_3 ) . ';}';
		
		return $nivritti_extracolors;
	}
}

// The dynamic styles of the parent theme added inline to the parent stylesheet.
// For the customizer functions it is better to enqueue after the child theme stylesheet.
if ( ! function_exists( 'nivritti_remove_parent_dynamic_css' ) ) {
	add_action( 'init', 'nivritti_remove_parent_dynamic_css' );
	function nivritti_remove_parent_dynamic_css() {
		remove_action( 'wp_enqueue_scripts', 'martanda_enqueue_dynamic_css', 50 );
	}
}

// Enqueue this CSS after the child stylesheet, not after the parent stylesheet.
if ( ! function_exists( 'nivritti_enqueue_parent_dynamic_css' ) ) {
	add_action( 'wp_enqueue_scripts', 'nivritti_enqueue_parent_dynamic_css', 50 );
	function nivritti_enqueue_parent_dynamic_css() {
		$css = martanda_get_font_face_styles() . martanda_font_family_css() . martanda_base_css() . nivritti_effect_colors_css();

		// escaped secure before in parent theme
		wp_add_inline_style( 'martanda-child', $css );
	}
}

//Adds custom classes to the array of body classes.
if ( ! function_exists( 'nivritti_body_classes' ) ) {
	add_filter( 'body_class', 'nivritti_body_classes' );
	function nivritti_body_classes( $classes ) {
		// Get Customizer settings
		$nivritti_settings = get_option( 'nivritti_settings' );
		
		$nav_bg     = 'enable';
		
		if ( isset( $nivritti_settings['nav_bg'] ) ) {
			$nav_bg = $nivritti_settings['nav_bg'];
		}
		
		// Navigation backgrounds
		if ( $nav_bg != 'disable' ) {
			$classes[] = 'nivritti-nav-bg';
		}
		
		return $classes;
	}
}
