<?php
/**
* Custom Addons.
*
* @package Sneakers Sports Shoes
*/

$wp_customize->add_section( 'sneakers_sports_shoes_theme_pagination_options',
    array(
    'title'      => esc_html__( 'Customizer Custom Settings', 'sneakers-sports-shoes' ),
    'priority'   => 10,
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_addons_panel',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_theme_pagination_options_alignment',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_theme_pagination_options_alignment'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sneakers_sports_shoes_sanitize_pagination_meta',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_theme_pagination_options_alignment',
    array(
    'label'       => esc_html__( 'Pagination Alignment', 'sneakers-sports-shoes' ),
    'section'     => 'sneakers_sports_shoes_theme_pagination_options',
    'type'        => 'select',
    'choices'     => array(
        'Center'    => esc_html__( 'Center', 'sneakers-sports-shoes' ),
        'Right' => esc_html__( 'Right', 'sneakers-sports-shoes' ),
        'Left'  => esc_html__( 'Left', 'sneakers-sports-shoes' ),
        ),
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_theme_breadcrumb_options_alignment',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_theme_breadcrumb_options_alignment'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sneakers_sports_shoes_sanitize_pagination_meta',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_theme_breadcrumb_options_alignment',
    array(
    'label'       => esc_html__( 'Breadcrumb Alignment', 'sneakers-sports-shoes' ),
    'section'     => 'sneakers_sports_shoes_theme_pagination_options',
    'type'        => 'select',
    'choices'     => array(
        'Center'    => esc_html__( 'Center', 'sneakers-sports-shoes' ),
        'Right' => esc_html__( 'Right', 'sneakers-sports-shoes' ),
        'Left'  => esc_html__( 'Left', 'sneakers-sports-shoes' ),
        ),
    )
);

$wp_customize->add_setting('sneakers_sports_shoes_breadcrumb_font_size',
    array(
        'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_breadcrumb_font_size'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_number_range',
    )
);
$wp_customize->add_control('sneakers_sports_shoes_breadcrumb_font_size',
    array(
        'label'       => esc_html__('Breadcrumb Font Size', 'sneakers-sports-shoes'),
        'section'     => 'sneakers_sports_shoes_theme_pagination_options',
        'type'        => 'number',
        'input_attrs' => array(
           'min'   => 1,
           'max'   => 45,
           'step'   => 1,
        ),
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_single_page_content_alignment',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_single_page_content_alignment'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sneakers_sports_shoes_sanitize_page_content_alignment',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_single_page_content_alignment',
    array(
    'label'       => esc_html__( 'Single Page Content Alignment', 'sneakers-sports-shoes' ),
    'section'     => 'sneakers_sports_shoes_theme_pagination_options',
    'type'        => 'select',
    'choices'     => array(
        'left' => esc_html__( 'Left', 'sneakers-sports-shoes' ),
        'center'  => esc_html__( 'Center', 'sneakers-sports-shoes' ),
        'right'    => esc_html__( 'Right', 'sneakers-sports-shoes' ),
        ),
    )
);