<?php
/**
 * Typography Setting
 *
 * @package aster_photography
 */

// Typography Setting
$wp_customize->add_section(
    'aster_photography_typography_setting',
    array(
        'panel' => 'aster_photography_theme_options',
        'title' => esc_html__( 'Typography Setting', 'aster-photography' ),
    )
);

$wp_customize->add_setting(
    'aster_photography_site_title_font',
    array(
        'default'           => 'Dynalight',
        'sanitize_callback' => 'aster_photography_sanitize_google_fonts',
    )
);

$wp_customize->add_control(
    'aster_photography_site_title_font',
    array(
        'label'    => esc_html__( 'Site Title Font Family', 'aster-photography' ),
        'section'  => 'aster_photography_typography_setting',
        'settings' => 'aster_photography_site_title_font',
        'type'     => 'select',
        'choices'  => aster_photography_get_all_google_font_families(),
    )
);

// Typography - Site Description Font.
$wp_customize->add_setting(
	'aster_photography_site_description_font',
	array(
		'default'           => 'Mulish',
		'sanitize_callback' => 'aster_photography_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'aster_photography_site_description_font',
	array(
		'label'    => esc_html__( 'Site Description Font Family', 'aster-photography' ),
		'section'  => 'aster_photography_typography_setting',
		'settings' => 'aster_photography_site_description_font',
		'type'     => 'select',
		'choices'  => aster_photography_get_all_google_font_families(),
	)
);

// Typography - Header Font.
$wp_customize->add_setting(
	'aster_photography_header_font',
	array(
		'default'           => 'Mulish',
		'sanitize_callback' => 'aster_photography_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'aster_photography_header_font',
	array(
		'label'    => esc_html__( 'Heading Font Family', 'aster-photography' ),
		'section'  => 'aster_photography_typography_setting',
		'settings' => 'aster_photography_header_font',
		'type'     => 'select',
		'choices'  => aster_photography_get_all_google_font_families(),
	)
);

// Typography - Body Font.
$wp_customize->add_setting(
	'aster_photography_content_font',
	array(
		'default'           => 'Mulish',
		'sanitize_callback' => 'aster_photography_sanitize_google_fonts',
	)
);

$wp_customize->add_control(
	'aster_photography_content_font',
	array(
		'label'    => esc_html__( 'Content Font Family', 'aster-photography' ),
		'section'  => 'aster_photography_typography_setting',
		'settings' => 'aster_photography_content_font',
		'type'     => 'select',
		'choices'  => aster_photography_get_all_google_font_families(),
	)
);
