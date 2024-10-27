<?php
/**
 * Excerpt
 *
 * @package aster_photography
 */

$wp_customize->add_section(
	'aster_photography_excerpt_options',
	array(
		'panel' => 'aster_photography_theme_options',
		'title' => esc_html__( 'Excerpt', 'aster-photography' ),
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'aster_photography_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'absint',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'aster_photography_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'aster-photography' ),
		'section'     => 'aster_photography_excerpt_options',
		'settings'    => 'aster_photography_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 10,
			'max'  => 200,
			'step' => 1,
		),
	)
);