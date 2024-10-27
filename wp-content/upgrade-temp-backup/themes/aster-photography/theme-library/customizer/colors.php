<?php
/**
 * Color Option
 *
 * @package aster_photography
 */

// Primary Color.
$wp_customize->add_setting(
	'primary_color',
	array(
		'default'           => '#000000',
		'sanitize_callback' => 'sanitize_hex_color',
	)
);

$wp_customize->add_control(
	new WP_Customize_Color_Control(
		$wp_customize,
		'primary_color',
		array(
			'label'    => __( 'Primary Color', 'aster-photography' ),
			'section'  => 'colors',
			'priority' => 5,
		)
	)
);
