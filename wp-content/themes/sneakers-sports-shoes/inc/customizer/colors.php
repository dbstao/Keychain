<?php
/**
* Color Settings.
* @package Sneakers Sports Shoes
*/

$sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();

$wp_customize->add_setting( 'sneakers_sports_shoes_default_text_color',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'sneakers_sports_shoes_default_text_color',
    array(
        'label'      => esc_html__( 'Text Color', 'sneakers-sports-shoes' ),
        'section'    => 'colors',
        'settings'   => 'sneakers_sports_shoes_default_text_color',
    ) ) 
);

$wp_customize->add_setting( 'sneakers_sports_shoes_border_color',
    array(
    'default'           => '',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'sneakers_sports_shoes_border_color',
    array(
        'label'      => esc_html__( 'Border Color', 'sneakers-sports-shoes' ),
        'section'    => 'colors',
        'settings'   => 'sneakers_sports_shoes_border_color',
    ) ) 
);