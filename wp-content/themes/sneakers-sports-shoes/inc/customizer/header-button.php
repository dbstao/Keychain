<?php
/**
* Header Options.
*
* @package Sneakers Sports Shoes
*/

$sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();

// Header Section.
$wp_customize->add_section( 'sneakers_sports_shoes_button_header_setting',
	array(
	'title'      => esc_html__( 'Header Settings', 'sneakers-sports-shoes' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'panel'      => 'sneakers_sports_shoes_theme_option_panel',
	)
);

$wp_customize->add_setting( 'sneakers_sports_shoes_header_layout_phone_number',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_header_layout_phone_number'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_header_layout_phone_number',
    array(
    'label'    => esc_html__( 'Header Phone Number', 'sneakers-sports-shoes' ),
    'section'  => 'sneakers_sports_shoes_button_header_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_sneakers_sports_shoes_header_layout_text',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_sneakers_sports_shoes_header_layout_text'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_sneakers_sports_shoes_header_layout_text',
    array(
    'label'    => esc_html__( 'Header Discount Text', 'sneakers-sports-shoes' ),
    'section'  => 'sneakers_sports_shoes_button_header_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting('sneakers_sports_shoes_menu_font_size',
    array(
        'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_menu_font_size'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_number_range',
    )
);
$wp_customize->add_control('sneakers_sports_shoes_menu_font_size',
    array(
        'label'       => esc_html__('Menu Font Size', 'sneakers-sports-shoes'),
        'section'     => 'sneakers_sports_shoes_button_header_setting',
        'type'        => 'number',
        'input_attrs' => array(
           'min'   => 1,
           'max'   => 30,
           'step'   => 1,
        ),
    )
);


$wp_customize->add_setting( 'sneakers_sports_shoes_menu_text_transform',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_menu_text_transform'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sneakers_sports_shoes_sanitize_menu_transform',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_menu_text_transform',
    array(
    'label'       => esc_html__( 'Menu Text Transform', 'sneakers-sports-shoes' ),
    'section'     => 'sneakers_sports_shoes_button_header_setting',
    'type'        => 'select',
    'choices'     => array(
        'capitalize' => esc_html__( 'Capitalize', 'sneakers-sports-shoes' ),
        'uppercase'  => esc_html__( 'Uppercase', 'sneakers-sports-shoes' ),
        'lowercase'    => esc_html__( 'Lowercase', 'sneakers-sports-shoes' ),
        ),
    )
);


$wp_customize->add_setting('sneakers_sports_shoes_sticky',
    array(
        'default' => $sneakers_sports_shoes_default['sneakers_sports_shoes_sticky'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_checkbox',
    )
);
$wp_customize->add_control('sneakers_sports_shoes_sticky',
    array(
        'label' => esc_html__('Enable Sticky Header', 'sneakers-sports-shoes'),
        'section' => 'sneakers_sports_shoes_button_header_setting',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('sneakers_sports_shoes_header_layout_enable_translator',
    array(
        'default' => $sneakers_sports_shoes_default['sneakers_sports_shoes_header_layout_enable_translator'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_checkbox',
    )
);
$wp_customize->add_control('sneakers_sports_shoes_header_layout_enable_translator',
    array(
        'label' => esc_html__('Enable Translator', 'sneakers-sports-shoes'),
        'section' => 'sneakers_sports_shoes_button_header_setting',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_header_layout_wishlist',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_header_layout_wishlist'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_header_layout_wishlist',
    array(
    'label'    => esc_html__( 'Wishlist Link', 'sneakers-sports-shoes' ),
    'section'  => 'sneakers_sports_shoes_button_header_setting',
    'type'     => 'url',
    )
);