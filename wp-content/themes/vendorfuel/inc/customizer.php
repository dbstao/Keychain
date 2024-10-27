<?php
/**
 * VendorFuel Theme Customizer
 *
 * @package VendorFuel
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vendorfuel_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'vendorfuel_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'vendorfuel_customize_partial_blogdescription',
			)
		);
	}

	/* Set up color theme options. */
	$wp_customize->add_setting(
		'color_scheme',
		array(
			'default'           => 'light',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'vendorfuel_sanitize_select',
		)
	);
	$wp_customize->add_control(
		'color_scheme',
		array(
			'label'       => __( 'Color Scheme', 'vendorfuel' ),
			'description' => __( 'Change the colors of the header navigation, footer and buttons.', 'vendorfuel' ),
			'section'     => 'colors',
			'type'        => 'radio',
			'choices'     => array(
				'light' => 'Light',
				'rwb'   => 'White and Blue',
				'green' => 'Dark Green',
				'blue'  => 'Navy Blue',
				'gray'  => 'Gray',
				'dark'  => 'Dark',
			),
		)
	);

	// Set up VendorFuel menu options.
	if ( in_array( 'vendorfuel/vendorfuel.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ), true ) ) { // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedHooknameFound

		// Set up VendorFuel section.
		$wp_customize->add_section(
			'vf_section',
			array(
				'title'       => __( 'VendorFuel Settings', 'vendorfuel' ),
				'description' => __( 'Controls for how Vendorfuel integrates with your theme.', 'vendorfuel' ),
			)
		);

		// Set up showing Account dropdown.
		$wp_customize->add_setting(
			'show_accountmenu',
			array(
				'type'              => 'theme_mod',
				'default'           => true,
				'sanitize_callback' => 'vendorfuel_sanitize_checkbox',
			)
		);
		$wp_customize->add_control(
			'show_accountmenu',
			array(
				'label'       => __( 'Show Account Menu', 'vendorfuel' ),
				'description' => __( 'Show the Account dropdown menu in the top navigation.', 'vendorfuel' ),
				'section'     => 'vf_section',
				'type'        => 'checkbox',
			)
		);

		// Set up showing Cart dropdown.
		$wp_customize->add_setting(
			'show_cartmenu',
			array(
				'type'              => 'theme_mod',
				'default'           => true,
				'sanitize_callback' => 'vendorfuel_sanitize_checkbox',
			)
		);
		$wp_customize->add_control(
			'show_cartmenu',
			array(
				'label'       => __( 'Show Cart Menu', 'vendorfuel' ),
				'description' => __( 'Show the Cart dropdown menu in the top navigation.', 'vendorfuel' ),
				'section'     => 'vf_section',
				'type'        => 'checkbox',
			)
		);

		// Set up showing search bar.
		$wp_customize->add_setting(
			'show_search',
			array(
				'type'              => 'theme_mod',
				'default'           => true,
				'sanitize_callback' => 'vendorfuel_sanitize_checkbox',
			)
		);
		$wp_customize->add_control(
			'show_search',
			array(
				'label'       => __( 'Show Search Bar', 'vendorfuel' ),
				'description' => __( 'Show a search bar for your products in the top navigation.', 'vendorfuel' ),
				'section'     => 'vf_section',
				'type'        => 'checkbox',
			)
		);

		// Setup showing account link.
		$wp_customize->add_setting(
			'show_accountlink',
			array(
				'type'              => 'theme_mod',
				'default'           => true,
				'sanitize_callback' => 'vendorfuel_sanitize_checkbox',
			)
		);
		$wp_customize->add_control(
			'show_accountlink',
			array(
				'label'       => __( 'Show Account link', 'vendorfuel' ),
				'description' => __( 'Show a link to the user Account in the side menu.', 'vendorfuel' ),
				'section'     => 'vf_section',
				'type'        => 'checkbox',
			)
		);
	}

	/**
	 * Sanitize checkbox input.
	 *
	 * @param int $input Checkbox input.
	 */
	function vendorfuel_sanitize_checkbox( $input ) {
		if ( 1 == $input ) { // phpcs:ignore WordPress.PHP.StrictComparisons.LooseComparison
			return 1;
		};
		return '';
	}

	/**
	 * Sanitize selection input.
	 *
	 * @param string $input Slug to sanitize.
	 * @param WP_Customize_Setting $setting Setting instance.
	 */
	function vendorfuel_sanitize_select( $input, $setting ) {
		$input   = sanitize_key( $input );
		$choices = $setting->manager->get_control( $setting->id )->choices;
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
	}

}
add_action( 'customize_register', 'vendorfuel_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function vendorfuel_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function vendorfuel_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function vendorfuel_customize_preview_js() {
	wp_enqueue_script( 'vendorfuel-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), THEME_VERSION, true );
}
add_action( 'customize_preview_init', 'vendorfuel_customize_preview_js' );
