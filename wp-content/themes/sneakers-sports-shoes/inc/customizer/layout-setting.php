<?php
/**
* Layouts Settings.
*
* @package Sneakers Sports Shoes
*/

$sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();

// Layout Section.
$wp_customize->add_section( 'sneakers_sports_shoes_layout_setting',
	array(
	'title'      => esc_html__( 'Global Layout Settings', 'sneakers-sports-shoes' ),
	'priority'   => 20,
	'capability' => 'edit_theme_options',
	'panel'      => 'sneakers_sports_shoes_theme_option_panel',
	)
);

$wp_customize->add_setting( 'sneakers_sports_shoes_global_sidebar_layout',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_global_sidebar_layout'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'sneakers_sports_shoes_sanitize_sidebar_option',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_global_sidebar_layout',
    array(
    'label'       => esc_html__( 'Global Sidebar Layout', 'sneakers-sports-shoes' ),
    'section'     => 'sneakers_sports_shoes_layout_setting',
    'type'        => 'select',
    'choices'     => array(
        'right-sidebar' => esc_html__( 'Right Sidebar', 'sneakers-sports-shoes' ),
        'left-sidebar'  => esc_html__( 'Left Sidebar', 'sneakers-sports-shoes' ),
        'no-sidebar'    => esc_html__( 'No Sidebar', 'sneakers-sports-shoes' ),
        ),
    )
);
