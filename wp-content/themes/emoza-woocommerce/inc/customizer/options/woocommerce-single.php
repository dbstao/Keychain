<?php
/**
 * Woocommerce Customizer options
 *
 * @package Emoza
 */

/**
 * General
 */
$wp_customize->add_section(
	'emoza_section_single_product',
	array(
		'title'      => esc_html__( 'Single products', 'emoza-woocommerce'),
		'panel'      => 'woocommerce',
		'priority'	 => 8
	)
); 

$wp_customize->add_setting(
	'emoza_single_product_tabs',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_attr'
	)
);
$wp_customize->add_control(
	new Emoza_Tab_Control (
		$wp_customize,
		'emoza_single_product_tabs',
		array(
			'label' 				=> '',
			'section'       		=> 'emoza_section_single_product',
			'controls_general'		=> json_encode( array( '#customize-control-single_gallery_slider','#customize-control-single_product_gallery','#customize-control-single_zoom_effects','#customize-control-single_breadcrumbs','#customize-control-single_product_tabs','#customize-control-single_upsell_products','#customize-control-single_related_products', ) ),
			'controls_design'		=> json_encode( array( '#customize-control-single_product_title_color','#customize-control-single_product_title_size','#customize-control-single_product_styling_divider_1','#customize-control-single_product_price_color','#customize-control-single_product_price_size', ) ),
		)
	)
);

$wp_customize->add_setting(
	'single_product_gallery',
	array(
		'default'           => 'gallery-default',
		'sanitize_callback' => 'sanitize_key',
	)
);
$wp_customize->add_control(
	new Emoza_Radio_Images(
		$wp_customize,
		'single_product_gallery',
		array(
			'label'    	=> esc_html__( 'Layout', 'emoza-woocommerce' ),
			'section'  	=> 'emoza_section_single_product',
			'cols'		=> 3,
			'choices'  => array(
				'gallery-default' => array(
					'label' => esc_html__( 'Layout 1', 'emoza-woocommerce' ),
					'url'   => '%s/assets/img/sg1.svg'
				),
				'gallery-single' => array(
					'label' => esc_html__( 'Layout 2', 'emoza-woocommerce' ),
					'url'   => '%s/assets/img/sg2.svg'
				),	
				'gallery-vertical' => array(
					'label' => esc_html__( 'Layout 3', 'emoza-woocommerce' ),
					'url'   => '%s/assets/img/sg3.svg'
				),															
			)
		)
	)
);

$wp_customize->add_setting(
	'single_gallery_slider',
	array(
		'default'           => 1,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'single_gallery_slider',
		array(
			'label'         	=> esc_html__( 'Gallery thumbnail slider', 'emoza-woocommerce' ),
			'description'       => esc_html__( 'Requires page refresh after saving', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_single_product',
		)
	)
);

$wp_customize->add_setting(
	'single_zoom_effects',
	array(
		'default'           => 1,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'single_zoom_effects',
		array(
			'label'         	=> esc_html__( 'Image zoom effects', 'emoza-woocommerce' ),
			'description'       => esc_html__( 'Requires page refresh after saving', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_single_product',
		)
	)
);

$wp_customize->add_setting(
	'single_breadcrumbs',
	array(
		'default'           => 1,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'single_breadcrumbs',
		array(
			'label'         	=> esc_html__( 'Breadcrumbs', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_single_product',
		)
	)
);

$wp_customize->add_setting(
	'single_product_tabs',
	array(
		'default'           => 1,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'single_product_tabs',
		array(
			'label'         	=> esc_html__( 'Product tabs', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_single_product',
		)
	)
);

$wp_customize->add_setting(
	'single_upsell_products',
	array(
		'default'           => 1,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'single_upsell_products',
		array(
			'label'         	=> esc_html__( 'Upsell products', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_single_product',
		)
	)
);

$wp_customize->add_setting(
	'single_related_products',
	array(
		'default'           => 1,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'single_related_products',
		array(
			'label'         	=> esc_html__( 'Related products', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_single_product',
		)
	)
);

/**
 * Styling
 */

$wp_customize->add_setting( 'single_product_title_size_desktop', array(
	'default'   		=> 32,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_setting( 'single_product_title_size_tablet', array(
	'default'   		=> 32,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_setting( 'single_product_title_size_mobile', array(
	'default'   		=> 32,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			


$wp_customize->add_control( new Emoza_Responsive_Slider( $wp_customize, 'single_product_title_size',
	array(
		'label' 		=> esc_html__( 'Product title size', 'emoza-woocommerce' ),
		'section' 		=> 'emoza_section_single_product',
		'is_responsive'	=> 1,
		'settings' 		=> array (
			'size_desktop' 		=> 'single_product_title_size_desktop',
			'size_tablet' 		=> 'single_product_title_size_tablet',
			'size_mobile' 		=> 'single_product_title_size_mobile',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 200
		)		
	)
) );

$wp_customize->add_setting(
	'single_product_title_color',
	array(
		'default'           => '#212121',
		'sanitize_callback' => 'emoza_sanitize_hex_rgba',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new Emoza_Alpha_Color(
		$wp_customize,
		'single_product_title_color',
		array(
			'label'         	=> esc_html__( 'Product title color', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_single_product',
		)
	)
);

$wp_customize->add_setting( 'single_product_styling_divider_1',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Divider_Control( $wp_customize, 'single_product_styling_divider_1',
		array(
			'section' 		=> 'emoza_section_single_product',
		)
	)
);

$wp_customize->add_setting( 'single_product_price_size_desktop', array(
	'default'   		=> 24,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_setting( 'single_product_price_size_tablet', array(
	'default'   		=> 24,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_setting( 'single_product_price_size_mobile', array(
	'default'   		=> 24,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_control( new Emoza_Responsive_Slider( $wp_customize, 'single_product_price_size',
	array(
		'label' 		=> esc_html__( 'Product price size', 'emoza-woocommerce' ),
		'section' 		=> 'emoza_section_single_product',
		'is_responsive'	=> 1,
		'settings' 		=> array (
			'size_desktop' 		=> 'single_product_price_size_desktop',
			'size_tablet' 		=> 'single_product_price_size_tablet',
			'size_mobile' 		=> 'single_product_price_size_mobile',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 200
		)		
	)
) );