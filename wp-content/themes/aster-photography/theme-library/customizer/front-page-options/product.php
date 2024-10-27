<?php
/**
 * Product Section
 *
 * @package aster_photography
 */

$wp_customize->add_section(
	'aster_photography_product_section',
	array(
		'panel'    => 'aster_photography_front_page_options',
		'title'    => esc_html__( 'Product Section', 'aster-photography' ),
		'priority' => 10,
	)
);

// Product Section - Enable Section.
$wp_customize->add_setting(
	'aster_photography_enable_service_section',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_enable_service_section',
		array(
			'label'    => esc_html__( 'Enable Product Section', 'aster-photography' ),
			'section'  => 'aster_photography_product_section',
			'settings' => 'aster_photography_enable_service_section',
		)
	)
);

if ( isset( $wp_customize->selective_refresh ) ) {
	$wp_customize->selective_refresh->add_partial(
		'aster_photography_enable_service_section',
		array(
			'selector' => '#aster_photography_service_section .section-link',
			'settings' => 'aster_photography_enable_service_section',
		)
	);
}

// Product Section - Button Label.
$wp_customize->add_setting(
	'aster_photography_trending_product_heading',
	array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'aster_photography_trending_product_heading',
	array(
		'label'           => esc_html__( 'Heading', 'aster-photography' ),
		'section'         => 'aster_photography_product_section',
		'settings'        => 'aster_photography_trending_product_heading',
		'type'            => 'text',
		'active_callback' => 'aster_photography_is_service_section_enabled',
	)
);

if(class_exists('woocommerce')){

	$aster_photography_args = array(
		'type'                     => 'product',
		'child_of'                 => 0,
		'parent'                   => '',
		'orderby'                  => 'term_group',
		'order'                    => 'ASC',
		'hide_empty'               => false,
		'hierarchical'             => 1,
		'number'                   => '',
		'taxonomy'                 => 'product_cat',
		'pad_counts'               => false
	);
	$aster_photography_categories = get_categories($aster_photography_args);
	$cat_posts = array();
	$m = 0;
	$cat_posts[]='Select';
	foreach($aster_photography_categories as $category){
		if($m==0){
			$default = $category->slug;
			$m++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('aster_photography_trending_product_category',array(
		'default'	=> 'uncategorized',
		'sanitize_callback' => 'aster_photography_sanitize_select',
	));
	$wp_customize->add_control('aster_photography_trending_product_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select category to display products ','aster-photography'),
		'section' => 'aster_photography_product_section',
		'active_callback' => 'aster_photography_is_service_section_enabled',
	));
}