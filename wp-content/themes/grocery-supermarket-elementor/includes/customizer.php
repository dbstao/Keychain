<?php

if ( class_exists("Kirki")){

	Kirki::add_config('theme_config_id', array(
		'capability'   =>  'edit_theme_options',
		'option_type'  =>  'theme_mod',
	));

	Kirki::add_field( 'theme_config_id', [
		'label'       => esc_html__( 'Logo Size','grocery-supermarket-elementor' ),
		'section'     => 'title_tagline',
		'priority'    => 9,
		'type'        => 'range',
		'settings'    => 'logo_size',
		'choices' => [
			'step'             => 5,
			'min'              => 0,
			'max'              => 100,
			'aria-valuemin'    => 0,
			'aria-valuemax'    => 100,
			'aria-valuenow'    => 50,
			'aria-orientation' => 'horizontal',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_enable_logo_text',
		'section'     => 'title_tagline',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'grocery-supermarket-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

  	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_supermarket_elementor_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'grocery-supermarket-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-supermarket-elementor' ),
			'off' => esc_html__( 'Disable', 'grocery-supermarket-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_supermarket_elementor_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'grocery-supermarket-elementor' ),
		'section'     => 'title_tagline',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-supermarket-elementor' ),
			'off' => esc_html__( 'Disable', 'grocery-supermarket-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_site_tittle_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Title Font Size', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'grocery_supermarket_elementor_site_tittle_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo a'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_site_tagline_font_heading',
		'section'     => 'title_tagline',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Site Tagline Font Size', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'grocery_supermarket_elementor_site_tagline_font_size',
		'type'        => 'number',
		'section'     => 'title_tagline',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.logo span'),
				'property' => 'font-size',
				'suffix' => 'px'
			),
		),
	) );

	// Theme color

	Kirki::add_section( 'grocery_supermarket_elementor_theme_color_setting', array(
		'title'    => __( 'Color Option', 'grocery-supermarket-elementor' ),
		'priority' => 10,
	) );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'grocery_supermarket_elementor_theme_color',
		'label'       => __( 'Theme color', 'grocery-supermarket-elementor'),
		'description'    => esc_html__( 'To customize the colors of the homepage, use the Elementor editor', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_theme_color_setting',
		'type'        => 'color',
		'default'     => '#3E7B51',
	) );
	
	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'grocery_supermarket_elementor_second_theme_color',
		'label'       => __( 'Second Theme color', 'grocery-supermarket-elementor'),
		'section'     => 'grocery_supermarket_elementor_theme_color_setting',
		'type'        => 'color',
		'default'     => '#BFD5B9',
	) );


	// TYPOGRAPHY SETTINGS
	
	Kirki::add_panel( 'grocery_supermarket_elementor_typography_panel', array(
		'priority' => 10,
		'title'    => __( 'Typography', 'grocery-supermarket-elementor' ),
	) );

	//Heading 1 Section

	Kirki::add_section( 'grocery_supermarket_elementor_h1_typography_setting', array(
		'title'    => __( 'Heading 1', 'grocery-supermarket-elementor' ),
		'panel'    => 'grocery_supermarket_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_h1_typography_heading',
		'section'     => 'grocery_supermarket_elementor_h1_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 1 Typography', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'grocery_supermarket_elementor_h1_typography_font',
		'section'   =>  'grocery_supermarket_elementor_h1_typography_setting',
		'default'   =>  [
			'font-family'   =>  '"Varela Round", sans-serif',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h1',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 2 Section

	Kirki::add_section( 'grocery_supermarket_elementor_h2_typography_setting', array(
		'title'    => __( 'Heading 2', 'grocery-supermarket-elementor' ),
		'panel'    => 'grocery_supermarket_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_h2_typography_heading',
		'section'     => 'grocery_supermarket_elementor_h2_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 2 Typography', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'grocery_supermarket_elementor_h2_typography_font',
		'section'   =>  'grocery_supermarket_elementor_h2_typography_setting',
		'default'   =>  [
			'font-family'   =>  '"Varela Round", sans-serif',
			'font-size'       => '',
			'variant'       =>  '700',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h2',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 3 Section

	Kirki::add_section( 'grocery_supermarket_elementor_h3_typography_setting', array(
		'title'    => __( 'Heading 3', 'grocery-supermarket-elementor' ),
		'panel'    => 'grocery_supermarket_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_h3_typography_heading',
		'section'     => 'grocery_supermarket_elementor_h3_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 3 Typography', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'grocery_supermarket_elementor_h3_typography_font',
		'section'   =>  'grocery_supermarket_elementor_h3_typography_setting',
		'default'   =>  [
			'font-family'   =>  '"Varela Round", sans-serif',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h3',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 4 Section

	Kirki::add_section( 'grocery_supermarket_elementor_h4_typography_setting', array(
		'title'    => __( 'Heading 4', 'grocery-supermarket-elementor' ),
		'panel'    => 'grocery_supermarket_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_h4_typography_heading',
		'section'     => 'grocery_supermarket_elementor_h4_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 4 Typography', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'grocery_supermarket_elementor_h4_typography_font',
		'section'   =>  'grocery_supermarket_elementor_h4_typography_setting',
		'default'   =>  [
			'font-family'   =>  '"Varela Round", sans-serif',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h4',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 5 Section

	Kirki::add_section( 'grocery_supermarket_elementor_h5_typography_setting', array(
		'title'    => __( 'Heading 5', 'grocery-supermarket-elementor' ),
		'panel'    => 'grocery_supermarket_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_h5_typography_heading',
		'section'     => 'grocery_supermarket_elementor_h5_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 5 Typography', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'grocery_supermarket_elementor_h5_typography_font',
		'section'   =>  'grocery_supermarket_elementor_h5_typography_setting',
		'default'   =>  [
			'font-family'   =>  '"Varela Round", sans-serif',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h5',
				'suffix' => '!important'
			],
		],
	) );

	//Heading 6 Section

	Kirki::add_section( 'grocery_supermarket_elementor_h6_typography_setting', array(
		'title'    => __( 'Heading 6', 'grocery-supermarket-elementor' ),
		'panel'    => 'grocery_supermarket_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_h6_typography_heading',
		'section'     => 'grocery_supermarket_elementor_h6_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading 6 Typography', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'grocery_supermarket_elementor_h6_typography_font',
		'section'   =>  'grocery_supermarket_elementor_h6_typography_setting',
		'default'   =>  [
			'font-family'   =>  '"Varela Round", sans-serif',
			'variant'       =>  '700',
			'font-size'       => '',
			'line-height'   =>  '',
			'letter-spacing'    =>  '',
			'text-transform'    =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   =>  'h6',
				'suffix' => '!important'
			],
		],
	) );

	//body Typography

	Kirki::add_section( 'grocery_supermarket_elementor_body_typography_setting', array(
		'title'    => __( 'Content Typography', 'grocery-supermarket-elementor' ),
		'panel'    => 'grocery_supermarket_elementor_typography_panel',
		'priority' => 0,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_body_typography_heading',
		'section'     => 'grocery_supermarket_elementor_body_typography_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Content  Typography', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'  =>  'typography',
		'settings'  => 'grocery_supermarket_elementor_body_typography_font',
		'section'   =>  'grocery_supermarket_elementor_body_typography_setting',
		'default'   =>  [
			'font-family'   =>  '"Varela Round", sans-serif',
			'variant'       =>  '',
		],
		'transport'     =>  'auto',
		'output'        =>  [
			[
				'element'   => 'body',
				'suffix' => '!important'
			],
		],
	) );

	// Theme Options Panel

	Kirki::add_panel( 'grocery_supermarket_elementor_theme_options_panel', array(
		'priority' => 10,
		'title'    => __( 'Theme Options', 'grocery-supermarket-elementor' ),
	) );

	// HEADER SECTION

	Kirki::add_section( 'grocery_supermarket_elementor_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'grocery-supermarket-elementor' ),
	    'description'    => esc_html__( 'Here you can add header information.', 'grocery-supermarket-elementor' ),
	    'panel'    => 'grocery_supermarket_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_supermarket_elementor_sticky_header',
		'label'       => esc_html__( 'Enable/Disable Sticky Header', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_section_header',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-supermarket-elementor' ),
			'off' => esc_html__( 'Disable', 'grocery-supermarket-elementor' ),
		],
	] );

	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_header_advertisement_heading',
		'section'     => 'grocery_supermarket_elementor_section_header',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Advertisement Text', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'grocery_supermarket_elementor_header_advertisement_text',
		'section'  => 'grocery_supermarket_elementor_section_header',
		'default'  => '',
	] );

	// WOOCOMMERCE SETTINGS

	Kirki::add_section( 'grocery_supermarket_elementor_woocommerce_settings', array(
		'title'          => esc_html__( 'Woocommerce Settings', 'grocery-supermarket-elementor' ),
		'description'    => esc_html__( 'Woocommerce Settings of themes', 'grocery-supermarket-elementor' ),
		'panel'    => 'woocommerce',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_supermarket_elementor_shop_page_sidebar',
		'label'       => esc_html__( 'Enable/Disable Shop Page Sidebar', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_woocommerce_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Shop Page Layouts', 'grocery-supermarket-elementor' ),
		'settings'    => 'grocery_supermarket_elementor_shop_page_layout',
		'section'     => 'grocery_supermarket_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'grocery-supermarket-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'grocery-supermarket-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'grocery_supermarket_elementor_shop_page_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]

	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'select',
		'label'       => esc_html__( 'Products Per Row', 'grocery-supermarket-elementor' ),
		'settings'    => 'grocery_supermarket_elementor_products_per_row',
		'section'     => 'grocery_supermarket_elementor_woocommerce_settings',
		'default'     => '4',
		'priority'    => 10,
		'choices'     => [
			'2' => '2',
			'3' => '3',
			'4' => '4',
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'label'       => esc_html__( 'Products Per Page', 'grocery-supermarket-elementor' ),
		'settings'    => 'grocery_supermarket_elementor_products_per_page',
		'section'     => 'grocery_supermarket_elementor_woocommerce_settings',
		'default'     => '9',
		'priority'    => 10,
		'choices'  => [
					'min'  => 0,
					'max'  => 50,
					'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_supermarket_elementor_single_product_sidebar',
		'label'       => esc_html__( 'Enable / Disable Single Product Sidebar', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_woocommerce_settings',
		'default'     => 'true',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'label'       => esc_html__( 'Single Product Layout', 'grocery-supermarket-elementor' ),
		'settings'    => 'grocery_supermarket_elementor_single_product_sidebar_layout',
		'section'     => 'grocery_supermarket_elementor_woocommerce_settings',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'grocery-supermarket-elementor' ),
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'grocery-supermarket-elementor' ),
		],
		'active_callback'  => [
			[
				'setting'  => 'grocery_supermarket_elementor_single_product_sidebar',
				'operator' => '===',
				'value'    => true,
			],
		]
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_products_button_border_radius_heading',
		'section'     => 'grocery_supermarket_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Products Button Border Radius', 'grocery-supermarket-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'grocery_supermarket_elementor_products_button_border_radius',
		'section'     => 'grocery_supermarket_elementor_woocommerce_settings',
		'default'     => '1',
		'priority'    => 10,
		'choices'  => [
					'min'  => 1,
					'max'  => 50,
					'step' => 1,
				],
		'output' => array(
			array(
				'element'  => array('.woocommerce ul.products li.product .button',' a.checkout-button.button.alt.wc-forward','.woocommerce #respond input#submit', '.woocommerce a.button', '.woocommerce button.button','.woocommerce input.button','.woocommerce #respond input#submit.alt','.woocommerce button.button.alt','.woocommerce input.button.alt'),
				'property' => 'border-radius',
				'units' => 'px',
			),
		),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_sale_badge_position_heading',
		'section'     => 'grocery_supermarket_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Badge Position', 'grocery-supermarket-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'grocery_supermarket_elementor_sale_badge_position',
		'section'     => 'grocery_supermarket_elementor_woocommerce_settings',
		'default'     => 'right',
		'choices'     => [
			'right' => esc_html__( 'Right', 'grocery-supermarket-elementor' ),
			'left' => esc_html__( 'Left', 'grocery-supermarket-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_products_sale_font_size_heading',
		'section'     => 'grocery_supermarket_elementor_woocommerce_settings',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Sale Font Size', 'grocery-supermarket-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'text',
		'settings'    => 'grocery_supermarket_elementor_products_sale_font_size',
		'section'     => 'grocery_supermarket_elementor_woocommerce_settings',
		'priority'    => 10,
		'output' => array(
			array(
				'element'  => array('.woocommerce span.onsale','.woocommerce ul.products li.product .onsale'),
				'property' => 'font-size',
				'units' => 'px',
			),
		),
	] );
	
	//ADDITIONAL SETTINGS

	Kirki::add_section( 'grocery_supermarket_elementor_additional_setting', array(
		'title'          => esc_html__( 'Additional Settings', 'grocery-supermarket-elementor' ),
		'description'    => esc_html__( 'Additional Settings of themes', 'grocery-supermarket-elementor' ),
		'panel'    => 'grocery_supermarket_elementor_theme_options_panel',
		'priority'       => 10,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_supermarket_elementor_preloader_hide',
		'label'       => esc_html__( 'Here you can enable or disable your preloader.', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );
 
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_supermarket_elementor_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_additional_setting',
		'default'     => '0',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_single_page_layout_heading',
		'section'     => 'grocery_supermarket_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Page Layout', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'grocery_supermarket_elementor_single_page_layout',
		'section'     => 'grocery_supermarket_elementor_additional_setting',
		'default'     => 'One Column',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'grocery-supermarket-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'grocery-supermarket-elementor' ),
			'One Column' => esc_html__( 'One Column', 'grocery-supermarket-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_header_background_attachment_heading',
		'section'     => 'grocery_supermarket_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Attachment', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'grocery_supermarket_elementor_header_background_attachment',
		'section'     => 'grocery_supermarket_elementor_additional_setting',
		'default'     => 'scroll',
		'choices'     => [
			'scroll' => esc_html__( 'Scroll', 'grocery-supermarket-elementor' ),
			'fixed' => esc_html__( 'Fixed', 'grocery-supermarket-elementor' ),
		],
		'output' => array(
			array(
				'element'  => '.header-image-box',
				'property' => 'background-attachment',
			),
		),
	 ) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_header_overlay_heading',
		'section'     => 'grocery_supermarket_elementor_additional_setting',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Header Image Overlay', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'grocery_supermarket_elementor_header_overlay_setting',
		'label'       => __( 'Overlay Color', 'grocery-supermarket-elementor' ),
		'type'        => 'color',
		'section'     => 'grocery_supermarket_elementor_additional_setting',
		'transport' => 'auto',
		'default'     => '#00000061',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.header-image-box:before',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_supermarket_elementor_header_page_title',
		'label'       => esc_html__( 'Enable / Disable Header Image Page Title.', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_supermarket_elementor_header_breadcrumb',
		'label'       => esc_html__( 'Enable / Disable Header Image Breadcrumb.', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_additional_setting',
		'default'     => '1',
		'priority'    => 10,
	] );

	// POST SECTION

	Kirki::add_section( 'grocery_supermarket_elementor_blog_post', array(
		'title'          => esc_html__( 'Post Settings', 'grocery-supermarket-elementor' ),
		'description'    => esc_html__( 'Here you can add post information.', 'grocery-supermarket-elementor' ),
		'panel'    => 'grocery_supermarket_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_post_layout_heading',
		'section'     => 'grocery_supermarket_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Layout', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'        => 'select',
		'settings'    => 'grocery_supermarket_elementor_post_layout',
		'section'     => 'grocery_supermarket_elementor_blog_post',
		'default'     => 'Right Sidebar',
		'choices'     => [
			'Left Sidebar' => esc_html__( 'Left Sidebar', 'grocery-supermarket-elementor' ),
			'Right Sidebar' => esc_html__( 'Right Sidebar', 'grocery-supermarket-elementor' ),
			'One Column' => esc_html__( 'One Column', 'grocery-supermarket-elementor' ),
			'Three Columns' => esc_html__( 'Three Columns', 'grocery-supermarket-elementor' ),
			'Four Columns' => esc_html__( 'Four Columns', 'grocery-supermarket-elementor' ),
		],
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_supermarket_elementor_date_hide',
		'label'       => esc_html__( 'Enable / Disable Post Date', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_supermarket_elementor_author_hide',
		'label'       => esc_html__( 'Enable / Disable Post Author', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_supermarket_elementor_comment_hide',
		'label'       => esc_html__( 'Enable / Disable Post Comment', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_supermarket_elementor_blog_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Post Image', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_length_setting_heading',
		'section'     => 'grocery_supermarket_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Blog Post Content Limit', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'grocery_supermarket_elementor_length_setting',
		'section'     => 'grocery_supermarket_elementor_blog_post',
		'default'     => '15',
		'priority'    => 10,
		'choices'  => [
					'min'  => -10,
					'max'  => 40,
		 			'step' => 1,
				],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Tag', 'grocery-supermarket-elementor' ),
		'settings'    => 'grocery_supermarket_elementor_single_post_tag',
		'section'     => 'grocery_supermarket_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'label'       => esc_html__( 'Enable / Disable Single Post Category', 'grocery-supermarket-elementor' ),
		'settings'    => 'grocery_supermarket_elementor_single_post_category',
		'section'     => 'grocery_supermarket_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'grocery_supermarket_elementor_single_post_featured_image',
		'label'       => esc_html__( 'Enable / Disable Single Post Image', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_blog_post',
		'default'     => '1',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_single_post_radius',
		'section'     => 'grocery_supermarket_elementor_blog_post',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Single Post Image Border Radius(px)', 'grocery-supermarket-elementor' ) . '</h3>',
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'grocery_supermarket_elementor_single_post_border_radius',
		'label'       => __( 'Enter a value in pixels. Example:15px', 'grocery-supermarket-elementor' ),
		'type'        => 'text',
		'section'     => 'grocery_supermarket_elementor_blog_post',
		'transport' => 'auto',
		'output' => array(
			array(
				'element'  => array('.post-img img'),
				'property' => 'border-radius',
			),
		),
	) );

	// No Results Page Settings

	Kirki::add_section( 'grocery_supermarket_elementor_no_result_section', array(
		'title'          => esc_html__( '404 & No Results Page Settings', 'grocery-supermarket-elementor' ),
		'panel'    => 'grocery_supermarket_elementor_theme_options_panel',
		'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_page_not_found_title_heading',
		'section'     => 'grocery_supermarket_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Title', 'grocery-supermarket-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'grocery_supermarket_elementor_page_not_found_title',
		'section'  => 'grocery_supermarket_elementor_no_result_section',
		'default'  => esc_html__('404 Error!', 'grocery-supermarket-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_page_not_found_text_heading',
		'section'     => 'grocery_supermarket_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( '404 Page Text', 'grocery-supermarket-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'grocery_supermarket_elementor_page_not_found_text',
		'section'  => 'grocery_supermarket_elementor_no_result_section',
		'default'  => esc_html__('The page you are looking for may have been moved, deleted, or possibly never existed.', 'grocery-supermarket-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', array(
		'type'     => 'custom',
		'settings' => 'grocery_supermarket_elementor_page_not_found_line_break',
		'section'  => 'grocery_supermarket_elementor_no_result_section',
		'default'  => '<hr>',
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_no_results_title_heading',
		'section'     => 'grocery_supermarket_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Title', 'grocery-supermarket-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'grocery_supermarket_elementor_no_results_title',
		'section'  => 'grocery_supermarket_elementor_no_result_section',
		'default'  => esc_html__('Nothing Found', 'grocery-supermarket-elementor'),
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_no_results_content_heading',
		'section'     => 'grocery_supermarket_elementor_no_result_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'No Results Content', 'grocery-supermarket-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'grocery_supermarket_elementor_no_results_content',
		'section'  => 'grocery_supermarket_elementor_no_result_section',
		'default'  => esc_html__('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'grocery-supermarket-elementor'),
	] );
	
	// FOOTER SECTION

	Kirki::add_section( 'grocery_supermarket_elementor_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'grocery-supermarket-elementor' ),
        'description'    => esc_html__( 'Here you can change copyright text', 'grocery-supermarket-elementor' ),
        'panel'    => 'grocery_supermarket_elementor_theme_options_panel',
		'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_footer_text_heading',
		'section'     => 'grocery_supermarket_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'grocery-supermarket-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'grocery_supermarket_elementor_footer_text',
		'section'  => 'grocery_supermarket_elementor_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_footer_enable_heading',
		'section'     => 'grocery_supermarket_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Footer Link', 'grocery-supermarket-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'grocery_supermarket_elementor_copyright_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_footer_section',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'grocery-supermarket-elementor' ),
			'off' => esc_html__( 'Disable', 'grocery-supermarket-elementor' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_footer_background_widget_heading',
		'section'     => 'grocery_supermarket_elementor_footer_section',
		'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Widget Background', 'grocery-supermarket-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id',
	[
		'settings'    => 'grocery_supermarket_elementor_footer_background_widget',
		'type'        => 'background',
		'section'     => 'grocery_supermarket_elementor_footer_section',
		'default'     => [
			'background-color'      => 'rgba(18,18,18,1)',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.footer-widget',
			],
		],
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_footer_copright_color_heading',
		'section'     => 'grocery_supermarket_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Background Color', 'grocery-supermarket-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'grocery_supermarket_elementor_footer_copright_color',
		'type'        => 'color',
		'label'       => __( 'Background Color', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#121212',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => '.footer-copyright',
				'property' => 'background',
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'grocery_supermarket_elementor_footer_copright_text_color_heading',
		'section'     => 'grocery_supermarket_elementor_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Copyright Text Color', 'grocery-supermarket-elementor' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', array(
		'settings'    => 'grocery_supermarket_elementor_footer_copright_text_color',
		'type'        => 'color',
		'label'       => __( 'Text Color', 'grocery-supermarket-elementor' ),
		'section'     => 'grocery_supermarket_elementor_footer_section',
		'transport' => 'auto',
		'default'     => '#ffffff',
		'choices'     => [
			'alpha' => true,
		],
		'output' => array(
			array(
				'element'  => array( '.footer-copyright a', '.footer-copyright p'),
				'property' => 'color',
			),
		),
	) );

	load_template( trailingslashit( get_template_directory() ) . '/includes/logo/logo-resizer.php' );
}
