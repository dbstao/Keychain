<?php
/**
* Footer Settings.
*
* @package Sneakers Sports Shoes
*/

$sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();

$wp_customize->add_section( 'sneakers_sports_shoes_footer_widget_area',
	array(
	'title'      => esc_html__( 'Footer Settings', 'sneakers-sports-shoes' ),
	'priority'   => 200,
	'capability' => 'edit_theme_options',
	'panel'      => 'sneakers_sports_shoes_theme_option_panel',
	)
);

$wp_customize->add_setting('sneakers_sports_shoes_display_footer',
    array(
        'default' => $sneakers_sports_shoes_default['sneakers_sports_shoes_display_footer'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_checkbox',
    )
);
$wp_customize->add_control('sneakers_sports_shoes_display_footer',
    array(
        'label' => esc_html__('Enable Footer', 'sneakers-sports-shoes'),
        'section' => 'sneakers_sports_shoes_footer_widget_area',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_footer_column_layout',
	array(
	'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_footer_column_layout'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sneakers_sports_shoes_sanitize_select',
	)
);
$wp_customize->add_control( 'sneakers_sports_shoes_footer_column_layout',
	array(
	'label'       => esc_html__( 'Footer Column Layout', 'sneakers-sports-shoes' ),
	'section'     => 'sneakers_sports_shoes_footer_widget_area',
	'type'        => 'select',
	'choices'               => array(
		'1' => esc_html__( 'One Column', 'sneakers-sports-shoes' ),
		'2' => esc_html__( 'Two Column', 'sneakers-sports-shoes' ),
		'3' => esc_html__( 'Three Column', 'sneakers-sports-shoes' ),
	    ),
	)
);

$wp_customize->add_setting( 'sneakers_sports_shoes_footer_widget_title_alignment',
        array(
        'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_footer_widget_title_alignment'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_footer_widget_title_alignment',
        )
);
$wp_customize->add_control( 'sneakers_sports_shoes_footer_widget_title_alignment',
    array(
    'label'       => esc_html__( 'Footer Widget Title Alignment', 'sneakers-sports-shoes' ),
    'section'     => 'sneakers_sports_shoes_footer_widget_area',
    'type'        => 'select',
    'choices'     => array(
        'left' => esc_html__( 'Left', 'sneakers-sports-shoes' ),
        'center'  => esc_html__( 'Center', 'sneakers-sports-shoes' ),
        'right'    => esc_html__( 'Right', 'sneakers-sports-shoes' ),
        ),
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_footer_copyright_text',
	array(
	'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_footer_copyright_text'],
	'capability'        => 'edit_theme_options',
	'sanitize_callback' => 'sanitize_text_field',
	)
);
$wp_customize->add_control( 'sneakers_sports_shoes_footer_copyright_text',
	array(
	'label'    => esc_html__( 'Footer Copyright Text', 'sneakers-sports-shoes' ),
	'section'  => 'sneakers_sports_shoes_footer_widget_area',
	'type'     => 'text',
	)
);

$wp_customize->add_setting('sneakers_sports_shoes_copyright_font_size',
    array(
        'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_copyright_font_size'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_number_range',
    )
);
$wp_customize->add_control('sneakers_sports_shoes_copyright_font_size',
    array(
        'label'       => esc_html__('Copyright Font Size', 'sneakers-sports-shoes'),
        'section'     => 'sneakers_sports_shoes_footer_widget_area',
        'type'        => 'number',
        'input_attrs' => array(
           'min'   => 5,
           'max'   => 30,
           'step'   => 1,
    	),
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_footer_widget_background_color', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_hex_color'
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sneakers_sports_shoes_footer_widget_background_color', array(
    'label'     => __('Footer Widget Background Color', 'sneakers-sports-shoes'),
    'description' => __('It will change the complete footer widget background color.', 'sneakers-sports-shoes'),
    'section' => 'sneakers_sports_shoes_footer_widget_area',
    'settings' => 'sneakers_sports_shoes_footer_widget_background_color',
)));

$wp_customize->add_setting('sneakers_sports_shoes_footer_widget_background_image',array(
    'default'   => '',
    'sanitize_callback' => 'esc_url_raw',
));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'sneakers_sports_shoes_footer_widget_background_image',array(
    'label' => __('Footer Widget Background Image','sneakers-sports-shoes'),
    'section' => 'sneakers_sports_shoes_footer_widget_area'
)));