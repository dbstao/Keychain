<?php
/**
 * Single Post Options
 *
 * @package aster_photography
 */

$wp_customize->add_section(
	'aster_photography_single_post_options',
	array(
		'title' => esc_html__( 'Single Post Options', 'aster-photography' ),
		'panel' => 'aster_photography_theme_options',
	)
);

// Post Options - Show / Hide Date.
$wp_customize->add_setting(
	'aster_photography_single_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_single_post_hide_date',
		array(
			'label'   => esc_html__( 'Show / Hide Date', 'aster-photography' ),
			'section' => 'aster_photography_single_post_options',
		)
	)
);

// Post Options - Show / Hide Author.
$wp_customize->add_setting(
	'aster_photography_single_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_single_post_hide_author',
		array(
			'label'   => esc_html__( 'Show / Hide Author', 'aster-photography' ),
			'section' => 'aster_photography_single_post_options',
		)
	)
);

// Post Options - Show / Hide Category.
$wp_customize->add_setting(
	'aster_photography_single_post_hide_category',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_single_post_hide_category',
		array(
			'label'   => esc_html__( 'Show / Hide Category', 'aster-photography' ),
			'section' => 'aster_photography_single_post_options',
		)
	)
);

// Post Options - Show / Hide Tag.
$wp_customize->add_setting(
	'aster_photography_post_hide_tags',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_post_hide_tags',
		array(
			'label'   => esc_html__( 'Show / Hide Tag', 'aster-photography' ),
			'section' => 'aster_photography_single_post_options',
		)
	)
);

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_photography_related_post_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Photography_Separator_Custom_Control( $wp_customize, 'aster_photography_related_post_separator', array(
	'label' => __( 'Enable / Disable Related Post Section', 'aster-photography' ),
	'section' => 'aster_photography_single_post_options',
	'settings' => 'aster_photography_related_post_separator',
) ) );

// Post Options - Show / Hide Related Posts.
$wp_customize->add_setting(
	'aster_photography_post_hide_related_posts',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_post_hide_related_posts',
		array(
			'label'   => esc_html__( 'Show / Hide Related Posts', 'aster-photography' ),
			'section' => 'aster_photography_single_post_options',
		)
	)
);

// Register setting for number of related posts
$wp_customize->add_setting(
    'aster_photography_related_posts_count',
    array(
        'default'           => 3,
        'sanitize_callback' => 'absint', // Ensure it's an integer
    )
);

// Add control for number of related posts
$wp_customize->add_control(
    'aster_photography_related_posts_count',
    array(
        'type'        => 'number',
        'label'       => esc_html__( 'Number of Related Posts to Display', 'aster-photography' ),
        'section'     => 'aster_photography_single_post_options',
        'input_attrs' => array(
            'min'  => 1,
            'max'  => 3, // Adjust maximum based on your preference
            'step' => 1,
        ),
    )
);

// Post Options - Related Post Label.
$wp_customize->add_setting(
	'aster_photography_post_related_post_label',
	array(
		'default'           => __( 'Related Posts', 'aster-photography' ),
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'aster_photography_post_related_post_label',
	array(
		'label'    => esc_html__( 'Related Posts Label', 'aster-photography' ),
		'section'  => 'aster_photography_single_post_options',
		'settings' => 'aster_photography_post_related_post_label',
		'type'     => 'text',
	)
);