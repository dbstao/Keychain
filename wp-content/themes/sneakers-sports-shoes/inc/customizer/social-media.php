<?php
/**
* Header Options.
*
* @package Sneakers Sports Shoes
*/

$sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();

// Header Section.
$wp_customize->add_section( 'sneakers_sports_shoes_social_media_setting',
	array(
	'title'      => esc_html__( 'Social Media Settings', 'sneakers-sports-shoes' ),
	'priority'   => 10,
	'capability' => 'edit_theme_options',
	'panel'      => 'sneakers_sports_shoes_theme_option_panel',
	)
);

$wp_customize->add_setting( 'sneakers_sports_shoes_header_layout_facebook_link',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_header_layout_facebook_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_header_layout_facebook_link',
    array(
    'label'    => esc_html__( 'Facebook Link', 'sneakers-sports-shoes' ),
    'section'  => 'sneakers_sports_shoes_social_media_setting',
    'type'     => 'url',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_header_layout_twitter_link',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_header_layout_twitter_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_header_layout_twitter_link',
    array(
    'label'    => esc_html__( 'Twitter Link', 'sneakers-sports-shoes' ),
    'section'  => 'sneakers_sports_shoes_social_media_setting',
    'type'     => 'url',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_header_layout_pintrest_link',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_header_layout_pintrest_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_header_layout_pintrest_link',
    array(
    'label'    => esc_html__( 'Pintrest Link', 'sneakers-sports-shoes' ),
    'section'  => 'sneakers_sports_shoes_social_media_setting',
    'type'     => 'url',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_header_layout_instagram_link',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_header_layout_instagram_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_header_layout_instagram_link',
    array(
    'label'    => esc_html__( 'Instagram Link', 'sneakers-sports-shoes' ),
    'section'  => 'sneakers_sports_shoes_social_media_setting',
    'type'     => 'url',
    )
);

$wp_customize->add_setting( 'sneakers_sports_shoes_header_layout_youtube_link',
    array(
    'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_header_layout_youtube_link'],
    'capability'        => 'edit_theme_options',
    'sanitize_callback' => 'esc_url_raw',
    )
);
$wp_customize->add_control( 'sneakers_sports_shoes_header_layout_youtube_link',
    array(
    'label'    => esc_html__( 'Youtube Link', 'sneakers-sports-shoes' ),
    'section'  => 'sneakers_sports_shoes_social_media_setting',
    'type'     => 'url',
    )
);