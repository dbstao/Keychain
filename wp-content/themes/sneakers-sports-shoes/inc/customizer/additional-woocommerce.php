<?php
/**
* Additional Woocommerce Settings.
*
* @package Sneakers Sports Shoes
*/

$sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();

// Additional Woocommerce Section.
$wp_customize->add_section( 'sneakers_sports_shoes_additional_woocommerce_options',
	array(
	'title'      => esc_html__( 'Additional Woocommerce Options', 'sneakers-sports-shoes' ),
	'priority'   => 210,
	'capability' => 'edit_theme_options',
	'panel'      => 'sneakers_sports_shoes_theme_option_panel',
	)
);

	$wp_customize->add_setting('sneakers_sports_shoes_per_columns',
		array(
		'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_per_columns'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sneakers_sports_shoes_sanitize_number_range',
		)
	);
	$wp_customize->add_control('sneakers_sports_shoes_per_columns',
		array(
		'label'       => esc_html__('Product Per Column', 'sneakers-sports-shoes'),
		'section'     => 'sneakers_sports_shoes_additional_woocommerce_options',
		'type'        => 'number',
		'input_attrs' => array(
		'min'   => 1,
		'max'   => 10,
		'step'   => 1,
		),
		)
	);

	$wp_customize->add_setting('sneakers_sports_shoes_product_per_page',
		array(
		'default'           => $sneakers_sports_shoes_default['sneakers_sports_shoes_product_per_page'],
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'sneakers_sports_shoes_sanitize_number_range',
		)
	);
	$wp_customize->add_control('sneakers_sports_shoes_product_per_page',
		array(
		'label'       => esc_html__('Product Per Page', 'sneakers-sports-shoes'),
		'section'     => 'sneakers_sports_shoes_additional_woocommerce_options',
		'type'        => 'number',
		'input_attrs' => array(
		'min'   => 1,
		'max'   => 15,
		'step'   => 1,
		),
		)
	);

	$wp_customize->add_setting('sneakers_sports_shoes_show_hide_related_product',
    array(
        'default' => $sneakers_sports_shoes_default['sneakers_sports_shoes_show_hide_related_product'],
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sneakers_sports_shoes_sanitize_checkbox',
    )
	);
	$wp_customize->add_control('sneakers_sports_shoes_show_hide_related_product',
	    array(
	        'label' => esc_html__('Enable Related Products', 'sneakers-sports-shoes'),
	        'section' => 'sneakers_sports_shoes_additional_woocommerce_options',
	        'type' => 'checkbox',
	    )
	);