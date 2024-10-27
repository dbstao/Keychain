<?php

if ( class_exists("Kirki")){

	// LOGO

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'cloth_rental_shop_logo_resizer',
		'label'       => esc_html__( 'Adjust Your Logo Size ', 'cloth-rental-shop' ),
		'section'     => 'title_tagline',
		'default'     => 70,
		'choices'     => [
			'min'  => 10,
			'max'  => 300,
			'step' => 10,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cloth_rental_shop_enable_logo_text',
		'section'     => 'title_tagline',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Site Title and Tagline', 'cloth-rental-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cloth_rental_shop_display_header_title',
		'label'       => esc_html__( 'Site Title Enable / Disable Button', 'cloth-rental-shop' ),
		'section'     => 'title_tagline',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cloth-rental-shop' ),
			'off' => esc_html__( 'Disable', 'cloth-rental-shop' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cloth_rental_shop_display_header_text',
		'label'       => esc_html__( 'Tagline Enable / Disable Button', 'cloth-rental-shop' ),
		'section'     => 'title_tagline',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cloth-rental-shop' ),
			'off' => esc_html__( 'Disable', 'cloth-rental-shop' ),
		],
	] );

	// FONT STYLE TYPOGRAPHY

	Kirki::add_panel( 'cloth_rental_shop_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Typography', 'cloth-rental-shop' ),
	) );

	Kirki::add_section( 'cloth_rental_shop_font_style_section', array(
		'title'      => esc_html__( 'Typography Option',  'cloth-rental-shop' ),
		'priority'   => 2,
		'capability' => 'edit_theme_options',
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cloth-rental-shop' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CLOTH_RENTAL_SHOP_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cloth-rental-shop' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cloth_rental_shop_font_style_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. More Font Family Options </p><p>3. Color Pallete Setup </p><p>4. Section Reordering Facility</p><p>5. For More Options kindly Go For Premium Version.</p>', 'cloth-rental-shop' ) . '</div>',
	    'priority'    => 9,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cloth_rental_shop_all_headings_typography',
		'section'     => 'cloth_rental_shop_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'cloth-rental-shop' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'cloth_rental_shop_all_headings_typography',
		'label'       => esc_html__( 'Heading Typography',  'cloth-rental-shop' ),
		'description' => esc_html__( 'Select the typography options for your heading.',  'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cloth_rental_shop_body_content_typography',
		'section'     => 'cloth_rental_shop_font_style_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'cloth-rental-shop' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'cloth_rental_shop_body_content_typography',
		'label'       => esc_html__( 'Content Typography',  'cloth-rental-shop' ),
		'description' => esc_html__( 'Select the typography options for your content.',  'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_font_style_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

		// PANEL
	Kirki::add_panel( 'cloth_rental_shop_panel_id_2', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Dark Mode', 'cloth-rental-shop' ),
	) );

	// DARK MODE SECTION
	Kirki::add_section( 'cloth_rental_shop_section_dark_mode', array(
	    'title'          => esc_html__( 'Dark Mode', 'cloth-rental-shop' ),
	    'panel'          => 'cloth_rental_shop_panel_id_2',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cloth-rental-shop' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CLOTH_RENTAL_SHOP_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cloth-rental-shop' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cloth_rental_shop_section_dark_mode',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cloth-rental-shop' ) . '</div>',
	]);

	Kirki::add_field( 'theme_config_id', [
	    'type'        => 'custom',
	    'settings'    => 'cloth_rental_shop_dark_colors',
	    'section'     => 'cloth_rental_shop_section_dark_mode',
	    'default'     => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Dark Appearance', 'cloth-rental-shop' ) . '</h3>',
	    'priority'    => 10,
	]);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cloth_rental_shop_is_dark_mode_enabled',
		'label'       => esc_html__( 'Turn To Dark Mode', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_section_dark_mode',
		'default'     => false,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cloth-rental-shop' ),
			'off' => esc_html__( 'Disable', 'cloth-rental-shop' ),
		],
	] );

	// PANEL

	Kirki::add_panel( 'cloth_rental_shop_panel_id', array(
	    'priority'    => 10,
	    'title'       => esc_html__( 'Theme Options', 'cloth-rental-shop' ),
	) );

	// COLOR SECTION

	Kirki::add_section( 'cloth_rental_shop_section_color', array(
	    'title'          => esc_html__( 'Global Color', 'cloth-rental-shop' ),
	    'panel'          => 'cloth_rental_shop_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cloth-rental-shop' ) . '</span>',
		'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CLOTH_RENTAL_SHOP_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cloth-rental-shop' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cloth_rental_shop_section_color',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cloth-rental-shop' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cloth_rental_shop_global_colors',
		'section'     => 'cloth_rental_shop_section_color',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Here you can change your theme color on one click.', 'cloth-rental-shop' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'cloth_rental_shop_global_color',
		'label'       => __( 'choose your Appropriate Color', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_section_color',
		'default'     => '#087450',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'cloth_rental_shop_global_color_2',
		'label'       => __( 'Choose Your Second Color', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_section_color',
		'default'     => '#F6886A',
	] );

	// Additional Settings

	Kirki::add_section( 'cloth_rental_shop_additional_settings', array(
	    'title'          => esc_html__( 'Additional Settings', 'cloth-rental-shop' ),
	    'panel'          => 'cloth_rental_shop_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cloth-rental-shop' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CLOTH_RENTAL_SHOP_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cloth-rental-shop' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cloth_rental_shop_additional_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cloth-rental-shop' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cloth_rental_shop_scroll_enable_setting',
		'label'       => esc_html__( 'Here you can enable or disable your scroller.', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_additional_settings',
		'default'     => '1',
		'priority'    => 10,
	] );

	new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'cloth_rental_shop_scroll_top_position',
		'label'       => esc_html__( 'Alignment for Scroll To Top', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_additional_settings',
		'default'     => 'Right',
		'priority'    => 10,
		'choices'     => [
			'Left'   => esc_html__( 'Left', 'cloth-rental-shop' ),
			'Center' => esc_html__( 'Center', 'cloth-rental-shop' ),
			'Right'  => esc_html__( 'Right', 'cloth-rental-shop' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'dashicons',
		'settings' => 'cloth_rental_shop_scroll_top_icon',
		'label'    => esc_html__( 'Select Appropriate Scroll Top Icon', 'cloth-rental-shop' ),
		'section'  => 'cloth_rental_shop_additional_settings',
		'default'  => 'dashicons dashicons-arrow-up-alt',
		'priority' => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'menu_text_transform_cloth_rental_shop',
		'label'       => esc_html__( 'Menus Text Transform', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_additional_settings',
		'default'     => 'CAPITALISE',
		'placeholder' => esc_html__( 'Choose an option', 'cloth-rental-shop' ),
		'choices'     => [
			'CAPITALISE' => esc_html__( 'CAPITALISE', 'cloth-rental-shop' ),
			'UPPERCASE' => esc_html__( 'UPPERCASE', 'cloth-rental-shop' ),
			'LOWERCASE' => esc_html__( 'LOWERCASE', 'cloth-rental-shop' ),

		],
	]
	);

	new \Kirki\Field\Select(
	[
		'settings'    => 'cloth_rental_shop_menu_zoom',
		'label'       => esc_html__( 'Menu Transition', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_additional_settings',
		'default' => 'None',
		'placeholder' => esc_html__( 'Choose an option', 'cloth-rental-shop' ),
		'choices'     => [
			'None' => __('None','cloth-rental-shop'),
            'Zoominn' => __('Zoom Inn','cloth-rental-shop'),
            
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'cloth_rental_shop_container_width',
		'label'       => esc_html__( 'Theme Container Width', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_additional_settings',
		'default'     => 100,
		'choices'     => [
			'min'  => 50,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cloth_rental_shop_sticky_header',
		'label'       => esc_html__( 'Here you can enable or disable your Sticky Header.', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cloth_rental_shop_site_loader',
		'label'       => esc_html__( 'Here you can enable or disable your Site Loader.', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_additional_settings',
		'default'     => false,
		'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'cloth_rental_shop_page_layout',
		'label'       => esc_html__( 'Page Layout Setting', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_additional_settings',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'cloth-rental-shop' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','cloth-rental-shop'),
            'Right Sidebar' => __('Right Sidebar','cloth-rental-shop'),
            'One Column' => __('One Column','cloth-rental-shop')
		],
	] );

	if ( class_exists("woocommerce")){

		// Woocommerce Settings

		Kirki::add_section( 'cloth_rental_shop_woocommerce_settings', array(
				'title'          => esc_html__( 'Woocommerce Settings', 'cloth-rental-shop' ),
				'panel'          => 'cloth_rental_shop_panel_id',
				'priority'       => 160,
		) );

		Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cloth-rental-shop' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CLOTH_RENTAL_SHOP_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cloth-rental-shop' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cloth_rental_shop_woocommerce_settings',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cloth-rental-shop' ) . '</div>',
		] );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'toggle',
			'settings'    => 'cloth_rental_shop_shop_sidebar',
			'label'       => esc_html__( 'Here you can enable or disable shop page sidebar.', 'cloth-rental-shop' ),
			'section'     => 'cloth_rental_shop_woocommerce_settings',
			'default'     => '1',
			'priority'    => 10,
		] );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'toggle',
			'settings'    => 'cloth_rental_shop_product_sidebar',
			'label'       => esc_html__( 'Here you can enable or disable product page sidebar.', 'cloth-rental-shop' ),
			'section'     => 'cloth_rental_shop_woocommerce_settings',
			'default'     => '1',
			'priority'    => 10,
		] );

		Kirki::add_field( 'theme_config_id', [
			'type'        => 'toggle',
			'settings'    => 'cloth_rental_shop_related_product_setting',
			'label'       => esc_html__( 'Here you can enable or disable your related products.', 'cloth-rental-shop' ),
			'section'     => 'cloth_rental_shop_woocommerce_settings',
			'default'     => true,
			'priority'    => 10,
		] );

		new \Kirki\Field\Number(
		[
			'settings' => 'cloth_rental_shop_per_columns',
			'label'    => esc_html__( 'Product Per Row', 'cloth-rental-shop' ),
			'section'  => 'cloth_rental_shop_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 4,
				'step' => 1,
			],
		]
		);

		new \Kirki\Field\Number(
		[
			'settings' => 'cloth_rental_shop_product_per_page',
			'label'    => esc_html__( 'Product Per Page', 'cloth-rental-shop' ),
			'section'  => 'cloth_rental_shop_woocommerce_settings',
			'default'  => 9,
			'choices'  => [
				'min'  => 1,
				'max'  => 15,
				'step' => 1,
			],
		]
		);

		new \Kirki\Field\Number(
		[
			'settings' => 'custom_related_products_number_per_row',
			'label'    => esc_html__( 'Related Product Per Column', 'cloth-rental-shop' ),
			'section'  => 'cloth_rental_shop_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 4,
				'step' => 1,
			],
		]
		);

		new \Kirki\Field\Number(
		[
			'settings' => 'custom_related_products_number',
			'label'    => esc_html__( 'Related Product Per Page', 'cloth-rental-shop' ),
			'section'  => 'cloth_rental_shop_woocommerce_settings',
			'default'  => 3,
			'choices'  => [
				'min'  => 1,
				'max'  => 10,
				'step' => 1,
			],
		]
		);

		new \Kirki\Field\Select(
		[
			'settings'    => 'cloth_rental_shop_shop_page_layout',
			'label'       => esc_html__( 'Shop Page Layout Setting', 'cloth-rental-shop' ),
			'section'     => 'cloth_rental_shop_woocommerce_settings',
			'default' => 'Right Sidebar',
			'placeholder' => esc_html__( 'Choose an option', 'cloth-rental-shop' ),
			'choices'     => [
				'Left Sidebar' => __('Left Sidebar','cloth-rental-shop'),
	            'Right Sidebar' => __('Right Sidebar','cloth-rental-shop')
			],
		] );

		new \Kirki\Field\Select(
		[
			'settings'    => 'cloth_rental_shop_product_page_layout',
			'label'       => esc_html__( 'Product Page Layout Setting', 'cloth-rental-shop' ),
			'section'     => 'cloth_rental_shop_woocommerce_settings',
			'default' => 'Right Sidebar',
			'placeholder' => esc_html__( 'Choose an option', 'cloth-rental-shop' ),
			'choices'     => [
				'Left Sidebar' => __('Left Sidebar','cloth-rental-shop'),
	            'Right Sidebar' => __('Right Sidebar','cloth-rental-shop')
			],
		] );

		new \Kirki\Field\Radio_Buttonset(
			[
				'settings'    => 'cloth_rental_shop_woocommerce_pagination_position',
				'label'       => esc_html__( 'Woocommerce Pagination Alignment', 'cloth-rental-shop' ),
				'section'     => 'cloth_rental_shop_woocommerce_settings',
				'default'     => 'Center',
				'priority'    => 10,
				'choices'     => [
					'Left'   => esc_html__( 'Left', 'cloth-rental-shop' ),
					'Center' => esc_html__( 'Center', 'cloth-rental-shop' ),
					'Right'  => esc_html__( 'Right', 'cloth-rental-shop' ),
				],
			]
		);

	}

	// POST SECTION

	Kirki::add_section( 'cloth_rental_shop_section_post', array(
	    'title'          => esc_html__( 'Post Settings', 'cloth-rental-shop' ),
	    'panel'          => 'cloth_rental_shop_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cloth-rental-shop' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CLOTH_RENTAL_SHOP_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cloth-rental-shop' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cloth_rental_shop_section_post',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cloth-rental-shop' ) . '</div>',
	] );

		new \Kirki\Field\Sortable(
	[
		'settings' => 'cloth_rental_shop_archive_element_sortable',
		'label'    => __( 'Archive Post Page Element Reordering', 'cloth-rental-shop' ),
		'section'  => 'cloth_rental_shop_section_post',
		'default'  => [ 'option1', 'option2', 'option3' ],
		'choices'  => [
			'option1' => esc_html__( 'Post Meta', 'cloth-rental-shop' ),
			'option2' => esc_html__( 'Post Title', 'cloth-rental-shop' ),
			'option3' => esc_html__( 'Post Content', 'cloth-rental-shop' ),
		],
	]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'slider',
		'settings'    => 'cloth_rental_shop_post_excerpt_number_1',
		'label'       => esc_html__( 'Post Content Range', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_section_post',
		'default'     => 15,
		'choices'     => [
			'min'  => 10,
			'max'  => 100,
			'step' => 1,
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'toggle',
		'settings'    => 'cloth_rental_shop_pagination_setting',
		'label'       => esc_html__( 'Here you can enable or disable your Pagination.', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_section_post',
		'default'     => true,
		'priority'    => 10,
	] );

		new \Kirki\Field\Select(
	[
		'settings'    => 'cloth_rental_shop_archive_sidebar_layout',
		'label'       => esc_html__( 'Archive Post Sidebar Layout Setting', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'cloth-rental-shop' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','cloth-rental-shop'),
            'Right Sidebar' => __('Right Sidebar','cloth-rental-shop'),
            'Three Column' => __('Three Column','cloth-rental-shop'),
            'Four Column' => __('Four Column','cloth-rental-shop'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','cloth-rental-shop'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','cloth-rental-shop'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','cloth-rental-shop')
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'cloth_rental_shop_single_post_sidebar_layout',
		'label'       => esc_html__( 'Single Post Sidebar Layout Setting', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'cloth-rental-shop' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','cloth-rental-shop'),
            'Right Sidebar' => __('Right Sidebar','cloth-rental-shop'),
		],
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'cloth_rental_shop_search_sidebar_layout',
		'label'       => esc_html__( 'Search Page Sidebar Layout Setting', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_section_post',
		'default' => 'Right Sidebar',
		'placeholder' => esc_html__( 'Choose an option', 'cloth-rental-shop' ),
		'choices'     => [
			'Left Sidebar' => __('Left Sidebar','cloth-rental-shop'),
            'Right Sidebar' => __('Right Sidebar','cloth-rental-shop'),
            'Three Column' => __('Three Column','cloth-rental-shop'),
            'Four Column' => __('Four Column','cloth-rental-shop'),
            'Grid Layout Without Sidebar' => __('Grid Layout Without Sidebar','cloth-rental-shop'),
            'Grid Layout With Right Sidebar' => __('Grid Layout With Right Sidebar','cloth-rental-shop'),
            'Grid Layout With Left Sidebar' => __('Grid Layout With Left Sidebar','cloth-rental-shop')
		],
	] );

	Kirki::add_field( 'cloth_rental_shop_config', [
		'type'        => 'select',
		'settings'    => 'cloth_rental_shop_post_column_count',
		'label'       => esc_html__( 'Grid Column for Archive Page', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_section_post',
		'default'    => '2',
		'choices' => [
				'1' => __( '1 Column', 'cloth-rental-shop' ),
				'2' => __( '2 Column', 'cloth-rental-shop' ),
			],
	] );

	// Breadcrumb
	Kirki::add_section( 'cloth_rental_shop_bradcrumb', array(
	    'title'          => esc_html__( 'Breadcrumb Settings', 'cloth-rental-shop' ),
	    'panel'          => 'cloth_rental_shop_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cloth-rental-shop' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CLOTH_RENTAL_SHOP_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cloth-rental-shop' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cloth_rental_shop_bradcrumb',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cloth-rental-shop' ) . '</div>',
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cloth_rental_shop_enable_breadcrumb_heading',
		'section'     => 'cloth_rental_shop_bradcrumb',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Single Page Breadcrumb', 'cloth-rental-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cloth_rental_shop_breadcrumb_enable',
		'label'       => esc_html__( 'Breadcrumb Enable / Disable', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_bradcrumb',
		'default'     => true,
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cloth-rental-shop' ),
			'off' => esc_html__( 'Disable', 'cloth-rental-shop' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'default'     => '/',
        'settings' => 'cloth_rental_shop_breadcrumb_separator' ,
        'label'    => esc_html__( 'Breadcrumb Separator',  'cloth-rental-shop' ),
        'section'  => 'cloth_rental_shop_bradcrumb',
    ] );

	// HEADER SECTION

	Kirki::add_section( 'cloth_rental_shop_section_header', array(
	    'title'          => esc_html__( 'Header Settings', 'cloth-rental-shop' ),
	    'panel'          => 'cloth_rental_shop_panel_id',
	    'priority'       => 160,
	) );

	Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cloth-rental-shop' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CLOTH_RENTAL_SHOP_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cloth-rental-shop' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cloth_rental_shop_section_header',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cloth-rental-shop' ) . '</div>',
	] );
	
	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cloth_rental_shop_enable_search',
		'section'     => 'cloth_rental_shop_section_header',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Search Box', 'cloth-rental-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cloth_rental_shop_search_box_enable',
		'section'     => 'cloth_rental_shop_section_header',
		'default'     => '1',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cloth-rental-shop' ),
			'off' => esc_html__( 'Disable', 'cloth-rental-shop' ),
		],
	] );

	// SLIDER SECTION

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cloth_rental_shop_enable_heading',
		'section'     => 'cloth_rental_shop_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Slider', 'cloth-rental-shop' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_section( 'cloth_rental_shop_blog_slide_section', array(
        'title'          => esc_html__( ' Slider Settings', 'cloth-rental-shop' ),
        'panel'          => 'cloth_rental_shop_panel_id',
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cloth-rental-shop' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CLOTH_RENTAL_SHOP_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cloth-rental-shop' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cloth_rental_shop_blog_slide_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cloth-rental-shop' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cloth_rental_shop_blog_box_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_blog_slide_section',
		'default'     => '0',
		'priority'    => 10,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cloth-rental-shop' ),
			'off' => esc_html__( 'Disable', 'cloth-rental-shop' ),
		],
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cloth_rental_shop_slider_heading',
		'section'     => 'cloth_rental_shop_blog_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Slider', 'cloth-rental-shop' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cloth_rental_shop_slider_product_heading',
		'label'    => esc_html__( 'Product Short Heading', 'cloth-rental-shop' ),
		'section'  => 'cloth_rental_shop_blog_slide_section',
    ] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cloth_rental_shop_slider_offer_heading',
		'label'    => esc_html__( 'Offer Heading', 'cloth-rental-shop' ),
		'section'  => 'cloth_rental_shop_blog_slide_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cloth_rental_shop_slider_offer_text',
		'label'    => esc_html__( 'Offer Text', 'cloth-rental-shop' ),
		'section'  => 'cloth_rental_shop_blog_slide_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cloth_rental_shop_slider_offer_code',
		'label'    => esc_html__( 'Offer Short Heading', 'cloth-rental-shop' ),
		'section'  => 'cloth_rental_shop_blog_slide_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cloth_rental_shop_slider_contact_phone_nember',
		'label'    => esc_html__( 'Phone Number', 'cloth-rental-shop' ),
		'section'  => 'cloth_rental_shop_blog_slide_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cloth_rental_shop_slider_contact_mail_id',
		'label'    => esc_html__( 'Email Id', 'cloth-rental-shop' ),
		'section'  => 'cloth_rental_shop_blog_slide_section',
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'custom',
        'settings'    => 'cloth_rental_shop_enable_socail_link',
        'section'     => 'cloth_rental_shop_blog_slide_section',
            'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Social Media Link', 'cloth-rental-shop' ) . '</h3>',
        'priority'    => 20,
    ] );

    Kirki::add_field( 'theme_config_id', [
        'type'        => 'repeater',
        'section'     => 'cloth_rental_shop_blog_slide_section',
        'priority'    => 20,
        'row_label' => [
            'type'  => 'field',
            'value' => esc_html__( 'Social Icon', 'cloth-rental-shop' ),
            'field' => 'link_text',
        ],
        'button_label' => esc_html__('Add New Social Icon', 'cloth-rental-shop' ),
        'settings'     => 'cloth_rental_shop_social_links_settings',
        'default'      => '',
        'fields'        => [
            'link_text' => [
                'type'        => 'text',
                'label'       => esc_html__( 'Icon', 'cloth-rental-shop' ),
                'description' => esc_html__( 'Add the fontawesome class ex: "fab fa-facebook-f".', 'cloth-rental-shop' ),
                'default'     => '',
            ],
            'link_url' => [
                'type'        => 'url',
                'label'       => esc_html__( 'Social Link', 'cloth-rental-shop' ),
                'description' => esc_html__( 'Add the social icon url here.', 'cloth-rental-shop' ),
                'default'     => '',
            ],
            'link_text_title' => [
                'type'        => 'text',
                'label'       => esc_html__( 'Icon Lable', 'cloth-rental-shop' ),
                'default'     => '',
            ],
        ],
        'choices' => [
            'limit' => 5
        ],
    ] );

	// OUR PRODUCTS SECTION

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cloth_rental_shop_enable_heading',
		'section'     => 'cloth_rental_shop_product_slide_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Featured Product', 'cloth-rental-shop' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_section( 'cloth_rental_shop_products_section', array(
        'title'          => esc_html__( 'Our Products Settings', 'cloth-rental-shop' ),
        'panel'          => 'cloth_rental_shop_panel_id',
        'priority'       => 160,
    ) );

    Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cloth-rental-shop' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CLOTH_RENTAL_SHOP_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cloth-rental-shop' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cloth_rental_shop_products_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cloth-rental-shop' ) . '</div>',
	    'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cloth_rental_shop_products_section_enable_heading',
		'section'     => 'cloth_rental_shop_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Enable / Disable Products Section', 'cloth-rental-shop' ) . '</h3>',
		'priority'    => 1,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'switch',
		'settings'    => 'cloth_rental_shop_products_section_enable',
		'label'       => esc_html__( 'Section Enable / Disable', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_products_section',
		'default'     => '0',
		'priority'    => 2,
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'cloth-rental-shop' ),
			'off' => esc_html__( 'Disable', 'cloth-rental-shop' ),
		],
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cloth_rental_shop_products_heading',
		'section'     => 'cloth_rental_shop_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Our Products Headings',  'cloth-rental-shop' ) . '</h3>',
		'priority'    => 3,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cloth_rental_shop_products_main_sub_heading',
		'label'    => esc_html__( 'Main Sub Heading', 'cloth-rental-shop' ),
		'section'  => 'cloth_rental_shop_products_section',
		'priority' => 5,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cloth_rental_shop_products_main_heading',
		'label'    => esc_html__( 'Main Heading', 'cloth-rental-shop' ),
		'section'  => 'cloth_rental_shop_products_section',
		'priority' => 5,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cloth_rental_shop_our_product_heading',
		'section'     => 'cloth_rental_shop_products_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Hot Products', 'cloth-rental-shop' ) . '</h3>',
		'priority'    => 7,
	] );

	Kirki::add_field( 'theme_config_id', [
        'type'     => 'text',
        'settings' => 'cloth_rental_shop_daily_deals_timmer' ,
        'label'    => esc_html__( 'Add Daily Deals Timer',  'cloth-rental-shop' ),
        'section'  => 'cloth_rental_shop_products_section',
        'description' => esc_html__( 'Ex: 10 March 2024', 'cloth-rental-shop' ),
        'priority'    => 3,
    ] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'number',
		'settings'    => 'cloth_rental_shop_products_per_page',
		'label'       => esc_html__( 'Number of products to show', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_products_section',
		'description'    => esc_html__( 'You have to select product category to show cosmetic section.', 'cloth-rental-shop' ),
		'default'     => 8,
		'choices'     => [
			'min'  => 0,
			'max'  => 25,
			'step' => 1,
		],
	] );

	// FOOTER SECTION

	Kirki::add_section( 'cloth_rental_shop_footer_section', array(
        'title'          => esc_html__( 'Footer Settings', 'cloth-rental-shop' ),
        'panel'          => 'cloth_rental_shop_panel_id',
        'priority'       => 160,
    ) );

     Kirki::add_field( 'theme_config_id', [
	    'label'       => '<span class="custom-label-class">' . esc_html__( 'INFORMATION ABOUT PREMIUM VERSION :-', 'cloth-rental-shop' ) . '</span>',
	    'default'     => '<a class="premium_info_btn" target="_blank" href="' . esc_url( CLOTH_RENTAL_SHOP_BUY_NOW ) . '">' . __( 'GO TO PREMIUM', 'cloth-rental-shop' ) . '</a>',
	    'type'        => 'custom',
	    'section'     => 'cloth_rental_shop_footer_section',
	    'description' => '<div class="custom-description-class">' . __( '<p>1. One Click Demo Importer </p><p>2. Color Pallete Setup </p><p>3. Section Reordering Facility</p><p>4. For More Options kindly Go For Premium Version.</p>', 'cloth-rental-shop' ) . '</div>',
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'cloth_rental_shop_footer_text_heading',
		'section'     => 'cloth_rental_shop_footer_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Text', 'cloth-rental-shop' ) . '</h3>',
		'priority'    => 10,
	] );

    Kirki::add_field( 'theme_config_id', [
		'type'     => 'text',
		'settings' => 'cloth_rental_shop_footer_text',
		'section'  => 'cloth_rental_shop_footer_section',
		'default'  => '',
		'priority' => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'cloth_rental_shop_footer_text_heading_2',
	'section'     => 'cloth_rental_shop_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Alignment', 'cloth-rental-shop' ) . '</h3>',
	'priority'    => 10,
	] );

	new \Kirki\Field\Select(
	[
		'settings'    => 'cloth_rental_shop_copyright_text_alignment',
		'label'       => esc_html__( 'Copyright text Alignment', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_footer_section',
		'default'     => 'LEFT-ALIGN',
		'placeholder' => esc_html__( 'Choose an option', 'cloth-rental-shop' ),
		'choices'     => [
			'LEFT-ALIGN' => esc_html__( 'LEFT-ALIGN', 'cloth-rental-shop' ),
			'CENTER-ALIGN' => esc_html__( 'CENTER-ALIGN', 'cloth-rental-shop' ),
			'RIGHT-ALIGN' => esc_html__( 'RIGHT-ALIGN', 'cloth-rental-shop' ),

		],
	] );

	Kirki::add_field( 'theme_config_id', [
	'type'        => 'custom',
	'settings'    => 'cloth_rental_shop_footer_text_heading_1',
	'section'     => 'cloth_rental_shop_footer_section',
		'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Footer Copyright Background Color', 'cloth-rental-shop' ) . '</h3>',
	'priority'    => 10,
	] );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'cloth_rental_shop_copyright_bg',
		'label'       => __( 'Choose Your Copyright Background Color', 'cloth-rental-shop' ),
		'section'     => 'cloth_rental_shop_footer_section',
		'default'     => '',
	] );

}

add_action( 'customize_register', 'cloth_rental_shop_customizer_settings' );
function cloth_rental_shop_customizer_settings( $wp_customize ) {

	$cloth_rental_shop_args = array(
	       'type'                     => 'product',
	        'child_of'                 => 0,
	        'parent'                   => '',
	        'orderby'                  => 'term_group',
	        'order'                    => 'ASC',
	        'hide_empty'               => false,
	        'hierarchical'             => 1,
	        'number'                   => '',
	        'taxonomy'                 => 'product_cat',
	        'pad_counts'               => false
	    );
		$categories = get_categories($cloth_rental_shop_args);
		$daily_deals_cat_posts = array();
		$m = 0;
		$daily_deals_cat_posts[]='Select';
		foreach($categories as $category){
			if($m==0){
				$default = $category->slug;
				$m++;
			}
			$daily_deals_cat_posts[$category->slug] = $category->name;
		}

		$wp_customize->add_setting('cloth_rental_shop_blog_slide_category_',array(
			'default'	=> 'select',
			'sanitize_callback' => 'cloth_rental_shop_sanitize_select',
		));
		$wp_customize->add_control('cloth_rental_shop_blog_slide_category_',array(
			'type'    => 'select',
			'choices' => $daily_deals_cat_posts,
			'label' => __('Select category to display products ','cloth-rental-shop'),
			'section' => 'cloth_rental_shop_blog_slide_section',
			'priority' => 10,
		));
	$cloth_rental_shop_args = array(
       'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
	$categories = get_categories($cloth_rental_shop_args);
	$cloth_rental_shop_cat_posts = array();
	$cloth_rental_shop_m = 0;
	$cloth_rental_shop_cat_posts[]='Select';
	foreach($categories as $category){
		if($cloth_rental_shop_m==0){
			$default = $category->slug;
			$cloth_rental_shop_m++;
		}
		$cloth_rental_shop_cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('cloth_rental_shop_products_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'cloth_rental_shop_sanitize_select',
	));

	$wp_customize->add_control('cloth_rental_shop_products_category',array(
		'type'    => 'select',
		'choices' => $cloth_rental_shop_cat_posts,
		'label' => __('Select category to display products ','cloth-rental-shop'),
		'section' => 'cloth_rental_shop_products_section',
	));

	$cloth_rental_shop_args = array(
       'type'                     => 'product',
        'child_of'                 => 0,
        'parent'                   => '',
        'orderby'                  => 'term_group',
        'order'                    => 'ASC',
        'hide_empty'               => false,
        'hierarchical'             => 1,
        'number'                   => '',
        'taxonomy'                 => 'product_cat',
        'pad_counts'               => false
    );
	$categories = get_categories($cloth_rental_shop_args);
	$cloth_rental_shop_cat_posts = array();
	$cloth_rental_shop_m = 0;
	$cloth_rental_shop_cat_posts[]='Select';
	foreach($categories as $category){
		if($cloth_rental_shop_m==0){
			$default = $category->slug;
			$cloth_rental_shop_m++;
		}
		$cloth_rental_shop_cat_posts[$category->slug] = $category->name;
	}
}

/*
 *  Customizer Notifications
 */

$cloth_rental_shop_config_customizer = array(
    'recommended_plugins' => array( 
        'kirki' => array(
            'recommended' => true,
            'description' => sprintf( 
                /* translators: %s: plugin name */
                esc_html__( 'If you want to show all the sections of the FrontPage, please install and activate %s plugin', 'cloth-rental-shop' ), 
                '<strong>' . esc_html__( 'Kirki Customizer', 'cloth-rental-shop' ) . '</strong>'
            ),
        ),
    ),
    'cloth_rental_shop_recommended_actions'       => array(),
    'cloth_rental_shop_recommended_actions_title' => esc_html__( 'Recommended Actions', 'cloth-rental-shop' ),
    'cloth_rental_shop_recommended_plugins_title' => esc_html__( 'Recommended Plugin', 'cloth-rental-shop' ),
    'cloth_rental_shop_install_button_label'      => esc_html__( 'Install and Activate', 'cloth-rental-shop' ),
    'cloth_rental_shop_activate_button_label'     => esc_html__( 'Activate', 'cloth-rental-shop' ),
    'cloth_rental_shop_deactivate_button_label'   => esc_html__( 'Deactivate', 'cloth-rental-shop' ),
);

Cloth_Rental_Shop_Customizer_Notify::init( apply_filters( 'cloth_rental_shop_customizer_notify_array', $cloth_rental_shop_config_customizer ) );