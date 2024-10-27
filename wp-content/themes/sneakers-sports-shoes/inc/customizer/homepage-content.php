<?php
/**
* Header Banner Options.
*
* @package Sneakers Sports Shoes
*/

$sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();
$sneakers_sports_shoes_post_category_list = sneakers_sports_shoes_post_category_list();

$wp_customize->add_section( 'sneakers_sports_shoes_header_banner_setting',
    array(
    'title'      => esc_html__( 'Slider Settings', 'sneakers-sports-shoes' ),
    'priority'   => 10,
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_home_pannel',
    )
);

$wp_customize->add_setting('sneakers_sports_shoes_display_header_text',
    array(
        'default' => $sneakers_sports_shoes_default['sneakers_sports_shoes_header_banner'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_checkbox',
    )
);
$wp_customize->add_control('sneakers_sports_shoes_display_header_text',
    array(
        'label' => esc_html__('Enable / Disable Tagline', 'sneakers-sports-shoes'),
        'section' => 'title_tagline',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting('sneakers_sports_shoes_header_banner',
    array(
        'default' => $sneakers_sports_shoes_default['sneakers_sports_shoes_header_banner'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_checkbox',
    )
);
$wp_customize->add_control('sneakers_sports_shoes_header_banner',
    array(
        'label' => esc_html__('Enable Slider', 'sneakers-sports-shoes'),
        'section' => 'sneakers_sports_shoes_header_banner_setting',
        'type' => 'checkbox',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_slider_section_title',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_slider_section_title'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_slider_section_title',
    array(
    'label'    => esc_html__( 'Slider Title', 'sneakers-sports-shoes' ),
    'section'  => 'sneakers_sports_shoes_header_banner_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_header_banner_cat',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sneakers_sports_shoes_sanitize_select',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_header_banner_cat',
    array(
    'label'       => esc_html__( 'Slider Post Category', 'sneakers-sports-shoes' ),
    'section'     => 'sneakers_sports_shoes_header_banner_setting',
    'type'        => 'select',
    'choices'     => $sneakers_sports_shoes_post_category_list,
    )
);

// Deals Settings

$wp_customize->add_section( 'product_column_setting',
    array(
    'title'      => esc_html__( 'Deals Settings', 'sneakers-sports-shoes' ),
    'priority'   => 10,
    'capability' => 'edit_theme_options',
    'panel'      => 'theme_home_pannel',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_section_short_title_1',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_short_title_1'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_section_short_title_1',
    array(
    'label'    => esc_html__( 'Deals Short Title 1', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_section_heading_1',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_heading_1'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_section_heading_1',
    array(
    'label'    => esc_html__( 'Deals Heading 1', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_section_price_1',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_price_1'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_section_price_1',
    array(
    'label'    => esc_html__( 'Deals Price 1', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_button_text_1',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_button_text_1'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_button_text_1',
    array(
    'label'    => esc_html__( 'Deals Button Text 1', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_button_url_1',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_button_url_1'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_button_url_1',
    array(
    'label'    => esc_html__( 'Deals Button Url 1', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'url',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_section_short_title_2',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_short_title_2'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_section_short_title_2',
    array(
    'label'    => esc_html__( 'Deals Short Title 2', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_section_heading_2',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_heading_2'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_section_heading_2',
    array(
    'label'    => esc_html__( 'Deals Heading 2', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_section_price_2',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_price_2'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_section_price_2',
    array(
    'label'    => esc_html__( 'Deals Price 2', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_button_text_2',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_button_text_2'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_button_text_2',
    array(
    'label'    => esc_html__( 'Deals Button Text 2', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_button_url_2',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_button_url_2'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_button_url_2',
    array(
    'label'    => esc_html__( 'Deals Button Url 2', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'url',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_section_offter_text_2',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_offter_text_2'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_section_offter_text_2',
    array(
    'label'    => esc_html__( 'Deals Offer Text 2', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'text',
    )
);


$wp_customize->add_setting( 'sneakers_sports_shoes_product_section_short_title_3',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_short_title_3'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_section_short_title_3',
    array(
    'label'    => esc_html__( 'Deals Short Title 3', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_section_heading_3',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_heading_3'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_section_heading_3',
    array(
    'label'    => esc_html__( 'Deals Heading 3', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_section_price_3',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_section_price_3'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_section_price_3',
    array(
    'label'    => esc_html__( 'Deals Price 3', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_button_text_3',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_button_text_3'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_button_text_3',
    array(
    'label'    => esc_html__( 'Deals Button Text 3', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'text',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_product_button_url_3',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_button_url_3'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_product_button_url_3',
    array(
    'label'    => esc_html__( 'Deals Button Url 3', 'sneakers-sports-shoes' ),
    'section'  => 'product_column_setting',
    'type'     => 'url',
    )
);