<?php
/**
* Layouts Settings.
*
* @package Sneakers Sports Shoes
*/

$sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();

// Layout Section.
$wp_customize->add_section( 'sneakers_sports_shoes_global_color_setting',
	array(
	'title'      => esc_html__( 'Global Color Settings', 'sneakers-sports-shoes' ),
	'priority'   => 21,
	'capability' => 'edit_theme_options',
	'panel'      => 'sneakers_sports_shoes_theme_option_panel',
	)
);

$wp_customize->add_setting( 'sneakers_sports_shoes_global_color',
    array(
    'default'           => '#F36B63',
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sanitize_hex_color',
    )
);
$wp_customize->add_control( 
    new WP_Customize_Color_Control( 
    $wp_customize, 
    'sneakers_sports_shoes_global_color',
    array(
        'label'      => esc_html__( 'Global Color', 'sneakers-sports-shoes' ),
        'section'    => 'sneakers_sports_shoes_global_color_setting',
        'settings'   => 'sneakers_sports_shoes_global_color',
    ) ) 
);