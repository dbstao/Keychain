<?php
/**
 * Sidebar Position
 *
 * @package aster_photography
 */

$wp_customize->add_section(
	'aster_photography_sidebar_position',
	array(
		'title' => esc_html__( 'Sidebar Position', 'aster-photography' ),
		'panel' => 'aster_photography_theme_options',
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_photography_global_sidebar_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Photography_Separator_Custom_Control( $wp_customize, 'aster_photography_global_sidebar_separator', array(
	'label' => __( 'Global Sidebar Position', 'aster-photography' ),
	'section' => 'aster_photography_sidebar_position',
	'settings' => 'aster_photography_global_sidebar_separator',
)));

// Sidebar Position - Global Sidebar Position.
$wp_customize->add_setting(
	'aster_photography_sidebar_position',
	array(
		'sanitize_callback' => 'aster_photography_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'aster_photography_sidebar_position',
	array(
		'label'   => esc_html__( 'Select Sidebar Position', 'aster-photography' ),
		'section' => 'aster_photography_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'aster-photography' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'aster-photography' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'aster-photography' ),
		),
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_photography_post_sidebar_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Photography_Separator_Custom_Control( $wp_customize, 'aster_photography_post_sidebar_separator', array(
	'label' => __( 'Post Sidebar Position', 'aster-photography' ),
	'section' => 'aster_photography_sidebar_position',
	'settings' => 'aster_photography_post_sidebar_separator',
)));

// Sidebar Position - Post Sidebar Position.
$wp_customize->add_setting(
	'aster_photography_post_sidebar_position',
	array(
		'sanitize_callback' => 'aster_photography_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'aster_photography_post_sidebar_position',
	array(
		'label'   => esc_html__( 'Select Sidebar Position', 'aster-photography' ),
		'section' => 'aster_photography_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'aster-photography' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'aster-photography' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'aster-photography' ),
		),
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_photography_page_sidebar_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Photography_Separator_Custom_Control( $wp_customize, 'aster_photography_page_sidebar_separator', array(
	'label' => __( 'Page Sidebar Position', 'aster-photography' ),
	'section' => 'aster_photography_sidebar_position',
	'settings' => 'aster_photography_page_sidebar_separator',
)));

// Sidebar Position - Page Sidebar Position.
$wp_customize->add_setting(
	'aster_photography_page_sidebar_position',
	array(
		'sanitize_callback' => 'aster_photography_sanitize_select',
		'default'           => 'right-sidebar',
	)
);

$wp_customize->add_control(
	'aster_photography_page_sidebar_position',
	array(
		'label'   => esc_html__( 'Select Sidebar Position', 'aster-photography' ),
		'section' => 'aster_photography_sidebar_position',
		'type'    => 'select',
		'choices' => array(
			'right-sidebar' => esc_html__( 'Right Sidebar', 'aster-photography' ),
			'left-sidebar'  => esc_html__( 'Left Sidebar', 'aster-photography' ),
			'no-sidebar'    => esc_html__( 'No Sidebar', 'aster-photography' ),
		),
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_photography_sidebar_width_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Photography_Separator_Custom_Control( $wp_customize, 'aster_photography_sidebar_width_separator', array(
	'label' => __( 'Sidebar Width Setting', 'aster-photography' ),
	'section' => 'aster_photography_sidebar_position',
	'settings' => 'aster_photography_sidebar_width_separator',
)));


$wp_customize->add_setting( 'aster_photography_sidebar_width', array(
	'default'           => '30',
	'sanitize_callback' => 'aster_photography_sanitize_range_value',
) );

$wp_customize->add_control(new Aster_Photography_Customize_Range_Control($wp_customize, 'aster_photography_sidebar_width', array(
	'section'     => 'aster_photography_sidebar_position',
	'label'       => __( 'Adjust Sidebar Width', 'aster-photography' ),
	'description' => __( 'Adjust the width of the sidebar.', 'aster-photography' ),
	'input_attrs' => array(
		'min'  => 10,
		'max'  => 50,
		'step' => 1,
	),
)));