<?php
/**
 * Front Page Options
 *
 * @package Aster Photography
 */

$wp_customize->add_panel(
	'aster_photography_front_page_options',
	array(
		'title'    => esc_html__( 'Front Page Options', 'aster-photography' ),
		'priority' => 20,
	)
);

// Banner Section.
require get_template_directory() . '/theme-library/customizer/front-page-options/banner.php';

// Tranding Product Section.
require get_template_directory() . '/theme-library/customizer/front-page-options/product.php';