<?php
/**
* Posts Settings.
*
* @package Sneakers Sports Shoes
*/

$sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();

// Single Post Section.
$wp_customize->add_section( 'sneakers_sports_shoes_posts_settings',
	array(
	'title'      => esc_html__( 'Metainformation Settings', 'sneakers-sports-shoes' ),
	'priority'   => 35,
	'capability' => 'edit_theme_options',
	'panel'      => 'sneakers_sports_shoes_theme_option_panel',
	)
);

$wp_customize->add_setting('sneakers_sports_shoes_post_author',
    array(
        'default' => $sneakers_sports_shoes_default['sneakers_sports_shoes_post_author'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_checkbox',
    )
);
$wp_customize->add_control('sneakers_sports_shoes_post_author',
    array(
        'label' => esc_html__('Enable Posts Author', 'sneakers-sports-shoes'),
        'section' => 'sneakers_sports_shoes_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('sneakers_sports_shoes_post_date',
    array(
        'default' => $sneakers_sports_shoes_default['sneakers_sports_shoes_post_date'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_checkbox',
    )
);
$wp_customize->add_control('sneakers_sports_shoes_post_date',
    array(
        'label' => esc_html__('Enable Posts Date', 'sneakers-sports-shoes'),
        'section' => 'sneakers_sports_shoes_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('sneakers_sports_shoes_post_category',
    array(
        'default' => $sneakers_sports_shoes_default['sneakers_sports_shoes_post_category'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_checkbox',
    )
);
$wp_customize->add_control('sneakers_sports_shoes_post_category',
    array(
        'label' => esc_html__('Enable Posts Category', 'sneakers-sports-shoes'),
        'section' => 'sneakers_sports_shoes_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('sneakers_sports_shoes_post_tags',
    array(
        'default' => $sneakers_sports_shoes_default['sneakers_sports_shoes_post_tags'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_checkbox',
    )
);
$wp_customize->add_control('sneakers_sports_shoes_post_tags',
    array(
        'label' => esc_html__('Enable Posts Tags', 'sneakers-sports-shoes'),
        'section' => 'sneakers_sports_shoes_posts_settings',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('sneakers_sports_shoes_excerpt_limit',
    array(
        'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_excerpt_limit'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_number_range',
    )
);
$wp_customize->add_control('sneakers_sports_shoes_excerpt_limit',
    array(
        'label'       => esc_html__('Blog Post Excerpt limit', 'sneakers-sports-shoes'),
        'section'     => 'sneakers_sports_shoes_posts_settings',
        'type'        => 'number',
        'input_attrs' => array(
           'min'   => 1,
           'max'   => 45,
           'step'   => 1,
        ),
    )
);