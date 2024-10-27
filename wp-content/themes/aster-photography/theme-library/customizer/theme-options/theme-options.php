<?php
/**
 * Header Options
 *
 * @package aster_photography
 */

// ---------------------------------------- GENERAL OPTIONBS ----------------------------------------------------
// ---------------------------------------- PRELOADER ----------------------------------------------------

$wp_customize->add_section(
	'aster_photography_general_options',
	array(
		'panel' => 'aster_photography_theme_options',
		'title' => esc_html__( 'General Options', 'aster-photography' ),
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_photography_preloader_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Photography_Separator_Custom_Control( $wp_customize, 'aster_photography_preloader_separator', array(
	'label' => __( 'Enable / Disable Site Preloader Section', 'aster-photography' ),
	'section' => 'aster_photography_general_options',
	'settings' => 'aster_photography_preloader_separator',
) ) );


// General Options - Enable Preloader.
$wp_customize->add_setting(
	'aster_photography_enable_preloader',
	array(
		'sanitize_callback' => 'aster_photography_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_enable_preloader',
		array(
			'label'   => esc_html__( 'Enable Preloader', 'aster-photography' ),
			'section' => 'aster_photography_general_options',
		)
	)
);

// ---------------------------------------- PAGINATION ----------------------------------------------------

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_photography_pagination_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Photography_Separator_Custom_Control( $wp_customize, 'aster_photography_pagination_separator', array(
	'label' => __( 'Enable / Disable Pagination Section', 'aster-photography' ),
	'section' => 'aster_photography_general_options',
	'settings' => 'aster_photography_pagination_separator',
) ) );

// Pagination - Enable Pagination.
$wp_customize->add_setting(
	'aster_photography_enable_pagination',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_enable_pagination',
		array(
			'label'    => esc_html__( 'Enable Pagination', 'aster-photography' ),
			'section'  => 'aster_photography_general_options',
			'settings' => 'aster_photography_enable_pagination',
			'type'     => 'checkbox',
		)
	)
);

// Pagination - Pagination Type.
$wp_customize->add_setting(
	'aster_photography_pagination_type',
	array(
		'default'           => 'default',
		'sanitize_callback' => 'aster_photography_sanitize_select',
	)
);

$wp_customize->add_control(
	'aster_photography_pagination_type',
	array(
		'label'           => esc_html__( 'Pagination Type', 'aster-photography' ),
		'section'         => 'aster_photography_general_options',
		'settings'        => 'aster_photography_pagination_type',
		'active_callback' => 'aster_photography_is_pagination_enabled',
		'type'            => 'select',
		'choices'         => array(
			'default' => __( 'Default (Older/Newer)', 'aster-photography' ),
			'numeric' => __( 'Numeric', 'aster-photography' ),
		),
	)
);

// ---------------------------------------- BREADCRUMB ----------------------------------------------------

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_photography_breadcrumb_separators', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Photography_Separator_Custom_Control( $wp_customize, 'aster_photography_breadcrumb_separators', array(
	'label' => __( 'Enable / Disable Breadcrumb Section', 'aster-photography' ),
	'section' => 'aster_photography_general_options',
	'settings' => 'aster_photography_breadcrumb_separators',
)));

// Breadcrumb - Enable Breadcrumb.
$wp_customize->add_setting(
	'aster_photography_enable_breadcrumb',
	array(
		'sanitize_callback' => 'aster_photography_sanitize_switch',
		'default'           => true,
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_enable_breadcrumb',
		array(
			'label'   => esc_html__( 'Enable Breadcrumb', 'aster-photography' ),
			'section' => 'aster_photography_general_options',
		)
	)
);

// Breadcrumb - Separator.
$wp_customize->add_setting(
	'aster_photography_breadcrumb_separator',
	array(
		'sanitize_callback' => 'sanitize_text_field',
		'default'           => '/',
	)
);

$wp_customize->add_control(
	'aster_photography_breadcrumb_separator',
	array(
		'label'           => esc_html__( 'Separator', 'aster-photography' ),
		'active_callback' => 'aster_photography_is_breadcrumb_enabled',
		'section'         => 'aster_photography_general_options',
	)
);

// ---------------------------------------- Website layout ----------------------------------------------------


// Add Separator Custom Control
$wp_customize->add_setting( 'aster_photography_layuout_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Photography_Separator_Custom_Control( $wp_customize, 'aster_photography_layuout_separator', array(
	'label' => __( 'Website Layout Setting', 'aster-photography' ),
	'section' => 'aster_photography_general_options',
	'settings' => 'aster_photography_layuout_separator',
)));


$wp_customize->add_setting(
	'aster_photography_website_layout',
	array(
		'sanitize_callback' => 'aster_photography_sanitize_switch',
		'default'           => false,
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_website_layout',
		array(
			'label'   => esc_html__('Boxed Layout', 'aster-photography'),
			'section' => 'aster_photography_general_options',
		)
	)
);

$wp_customize->add_setting('aster_photography_layout_width_margin', array(
	'default'           => 50,
	'sanitize_callback' => 'aster_photography_sanitize_range_value',
));

$wp_customize->add_control(new Aster_Photography_Customize_Range_Control($wp_customize, 'aster_photography_layout_width_margin', array(
		'label'       => __('Set Width', 'aster-photography'),
		'description' => __('Adjust the width around the website layout by moving the slider. Use this setting to customize the appearance of your site to fit your design preferences.', 'aster-photography'),
		'section'     => 'aster_photography_general_options',
		'settings'    => 'aster_photography_layout_width_margin',
		'active_callback' => 'aster_photography_is_layout_enabled',
		'input_attrs' => array(
			'min'  => 0,
			'max'  => 130,
			'step' => 1,
		),
)));

// ---------------------------------------- HEADER OPTIONS ----------------------------------------------------

$wp_customize->add_section(
	'aster_photography_header_options',
	array(
		'panel' => 'aster_photography_theme_options',
		'title' => esc_html__( 'Header Options', 'aster-photography' ),
	)
);


// Add setting for sticky header
$wp_customize->add_setting(
	'aster_photography_enable_sticky_header',
	array(
		'sanitize_callback' => 'aster_photography_sanitize_switch',
		'default'           => false,
	)
);

// Add control for sticky header setting
$wp_customize->add_control(
	new aster_photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_enable_sticky_header',
		array(
			'label'   => esc_html__( 'Enable Sticky Header', 'aster-photography' ),
			'section' => 'aster_photography_header_options',
		)
	)
);

$wp_customize->add_setting( 'menu_text_transform', array(
    'default'           => 'capitalize', // Default value for text transform
    'sanitize_callback' => 'sanitize_text_field',
) );

// Add control for menu text transform
$wp_customize->add_control( 'menu_text_transform', array(
    'type'     => 'select',
    'section'  => 'aster_photography_header_options', // Adjust the section as needed
    'label'    => __( 'Menu Text Transform', 'aster-photography' ),
    'choices'  => array(
        'none'       => __( 'None', 'aster-photography' ),
        'capitalize' => __( 'Capitalize', 'aster-photography' ),
        'uppercase'  => __( 'Uppercase', 'aster-photography' ),
        'lowercase'  => __( 'Lowercase', 'aster-photography' ),
    ),
) );

// Banner Section - Enable Section.
$wp_customize->add_setting(
	'aster_photography_enable_header_search_section',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_enable_header_search_section',
		array(
			'label'    => esc_html__( 'Enable Search Section', 'aster-photography' ),
			'section'  => 'aster_photography_header_options',
			'settings' => 'aster_photography_enable_header_search_section',
		)
	)
);

// ----------------------------------------SITE IDENTITY----------------------------------------------------

$wp_customize->add_setting( 'aster_photography_site_title_size', array(
    'default'           => 30, // Default font size in pixels
    'sanitize_callback' => 'absint', // Sanitize the input as a positive integer
) );

// Add control for site title size
$wp_customize->add_control( 'aster_photography_site_title_size', array(
    'type'        => 'number',
    'section'     => 'title_tagline', // You can change this section to your preferred section
    'label'       => __( 'Site Title Font Size ', 'aster-photography' ),
    'input_attrs' => array(
        'min'  => 10,
        'max'  => 100,
        'step' => 1,
    ),
) );

// Site Title - Enable Setting.
$wp_customize->add_setting(
	'aster_photography_enable_site_title_setting',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_enable_site_title_setting',
		array(
			'label'    => esc_html__( 'Disable Site Title', 'aster-photography' ),
			'section'  => 'title_tagline',
			'settings' => 'aster_photography_enable_site_title_setting',
		)
	)
);

// Tagline - Enable Setting.
$wp_customize->add_setting(
	'aster_photography_enable_tagline_setting',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_enable_tagline_setting',
		array(
			'label'    => esc_html__( 'Enable Tagline', 'aster-photography' ),
			'section'  => 'title_tagline',
			'settings' => 'aster_photography_enable_tagline_setting',
		)
	)
);