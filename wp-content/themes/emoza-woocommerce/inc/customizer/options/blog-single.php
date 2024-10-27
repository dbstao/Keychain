<?php
/**
 * Blog Customizer options
 *
 * @package Emoza
 */

/**
 * Single posts
 */
$wp_customize->add_section(
	'emoza_section_blog_singles',
	array(
		'title'         => esc_html__( 'Single posts', 'emoza-woocommerce'),
		'priority'      => 11,
		'panel'         => 'emoza_panel_blog',
	)
);

$wp_customize->add_setting(
	'emoza_blog_single_tabs',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_attr'
	)
);
$wp_customize->add_control(
	new Emoza_Tab_Control (
		$wp_customize,
		'emoza_blog_single_tabs',
		array(
			'label' 				=> '',
			'section'       		=> 'emoza_section_blog_singles',
			'controls_general'		=> json_encode( array( '#customize-control-sidebar_single_post','#customize-control-sidebar_single_post_position','#customize-control-blog_single_divider_1','#customize-control-single_post_header_title','#customize-control-single_post_header_alignment','#customize-control-single_post_header_spacing','#customize-control-blog_single_divider_2','#customize-control-single_post_image_title','#customize-control-single_post_show_featured','#customize-control-single_post_image_placement','#customize-control-single_post_image_spacing','#customize-control-blog_single_divider_3','#customize-control-single_post_meta_title','#customize-control-single_post_meta_position','#customize-control-single_post_meta_elements','#customize-control-single_post_meta_spacing','#customize-control-blog_single_divider_4','#customize-control-single_post_elements_title','#customize-control-single_post_show_tags','#customize-control-single_post_show_author_box','#customize-control-single_post_show_post_nav','#customize-control-single_post_show_related_posts', '#customize-control-single_post_author_box_align' ) ),
			'controls_design'		=> json_encode( array( '#customize-control-single_post_title_size', '#customize-control-single_post_title_color', '#customize-control-single_posts_divider_1', '#customize-control-single_post_meta_size', '#customize-control-single_post_meta_color' ) ),
		)
	)
);

$wp_customize->add_setting(
	'sidebar_single_post',
	array(
		'default'           => '',
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'sidebar_single_post',
		array(
			'label'         	=> esc_html__( 'Enable sidebar', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_blog_singles',
		)
	)
);

$wp_customize->add_setting( 'sidebar_single_post_position',
	array(
		'default' 			=> 'sidebar-right',
		'sanitize_callback' => 'emoza_sanitize_text'
	)
);
$wp_customize->add_control( new Emoza_Radio_Buttons( $wp_customize, 'sidebar_single_post_position',
	array(
		'label' 	=> esc_html__( 'Sidebar position', 'emoza-woocommerce' ),
		'section' 	=> 'emoza_section_blog_singles',
		'choices' 	=> array(
			'sidebar-left' 		=> esc_html__( 'Left', 'emoza-woocommerce' ),
			'sidebar-right' 	=> esc_html__( 'Right', 'emoza-woocommerce' ),
		),
		'active_callback' 	=> 'emoza_callback_sidebar_single_post'
	)
) );

$wp_customize->add_setting( 'blog_single_divider_1',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Divider_Control( $wp_customize, 'blog_single_divider_1',
		array(
			'section' 		=> 'emoza_section_blog_singles',
		)
	)
);

//Header
$wp_customize->add_setting( 'single_post_header_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Text_Control( $wp_customize, 'single_post_header_title',
		array(
			'label'			=> esc_html__( 'Header', 'emoza-woocommerce' ),
			'section' 		=> 'emoza_section_blog_singles',
		)
	)
);

$wp_customize->add_setting( 'single_post_header_alignment',
	array(
		'default' 			=> 'middle',
		'sanitize_callback' => 'emoza_sanitize_text'
	)
);
$wp_customize->add_control( new Emoza_Radio_Buttons( $wp_customize, 'single_post_header_alignment',
	array(
		'label' 	=> esc_html__( 'Header alignment', 'emoza-woocommerce' ),
		'section' 	=> 'emoza_section_blog_singles',
		'choices' 	=> array(
			'left' 		=> esc_html__( 'Left', 'emoza-woocommerce' ),
			'middle' 	=> esc_html__( 'Middle', 'emoza-woocommerce' ),
		),
	)
) );

$wp_customize->add_setting( 'single_post_header_spacing', array(
	'default'   		=> 40,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_control( new Emoza_Responsive_Slider( $wp_customize, 'single_post_header_spacing',
	array(
		'label' 		=> esc_html__( 'Header spacing', 'emoza-woocommerce' ),
		'section' 		=> 'emoza_section_blog_singles',
		'is_responsive'	=> 0,
		'settings' 		=> array (
			'size_desktop' 		=> 'single_post_header_spacing',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 60,
			'step'  => 1
		),
	)
) );

$wp_customize->add_setting( 'blog_single_divider_2',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Divider_Control( $wp_customize, 'blog_single_divider_2',
		array(
			'section' 		=> 'emoza_section_blog_singles',
		)
	)
);


//Image
$wp_customize->add_setting( 'single_post_image_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Text_Control( $wp_customize, 'single_post_image_title',
		array(
			'label'			=> esc_html__( 'Image', 'emoza-woocommerce' ),
			'section' 		=> 'emoza_section_blog_singles',
		)
	)
);

$wp_customize->add_setting(
	'single_post_show_featured',
	array(
		'default'           => 1,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'single_post_show_featured',
		array(
			'label'         	=> esc_html__( 'Show featured image', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_blog_singles',
		)
	)
);

$wp_customize->add_setting( 'single_post_image_placement',
	array(
		'default' 			=> 'below',
		'sanitize_callback' => 'emoza_sanitize_text'
	)
);
$wp_customize->add_control( new Emoza_Radio_Buttons( $wp_customize, 'single_post_image_placement',
	array(
		'label' 	=> esc_html__( 'Image placement', 'emoza-woocommerce' ),
		'section' 	=> 'emoza_section_blog_singles',
		'choices' 	=> array(
			'below' 	=> esc_html__( 'Below', 'emoza-woocommerce' ),
			'above' 	=> esc_html__( 'Above', 'emoza-woocommerce' ),
		),
	)
) );

$wp_customize->add_setting( 'single_post_image_spacing', array(
	'default'   		=> 38,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_control( new Emoza_Responsive_Slider( $wp_customize, 'single_post_image_spacing',
	array(
		'label' 		=> esc_html__( 'Image spacing', 'emoza-woocommerce' ),
		'section' 		=> 'emoza_section_blog_singles',
		'is_responsive'	=> 0,
		'settings' 		=> array (
			'size_desktop' 		=> 'single_post_image_spacing',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 60,
			'step'  => 1
		),
	)
) );

$wp_customize->add_setting( 'blog_single_divider_3',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Divider_Control( $wp_customize, 'blog_single_divider_3',
		array(
			'section' 		=> 'emoza_section_blog_singles',
		)
	)
);

//Meta
$wp_customize->add_setting( 'single_post_meta_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Text_Control( $wp_customize, 'single_post_meta_title',
		array(
			'label'			=> esc_html__( 'Meta', 'emoza-woocommerce' ),
			'section' 		=> 'emoza_section_blog_singles',
		)
	)
);

$wp_customize->add_setting( 'single_post_meta_position',
	array(
		'default' 			=> 'above-title',
		'sanitize_callback' => 'emoza_sanitize_text'
	)
);
$wp_customize->add_control( new Emoza_Radio_Buttons( $wp_customize, 'single_post_meta_position',
	array(
		'label' 	=> esc_html__( 'Position', 'emoza-woocommerce' ),
		'section' 	=> 'emoza_section_blog_singles',
		'choices' 	=> array(
			'above-title' 	=> esc_html__( 'Above title', 'emoza-woocommerce' ),
			'below-title' 	=> esc_html__( 'Below title', 'emoza-woocommerce' ),
		),
	)
) );

$wp_customize->add_setting( 'single_post_meta_elements', array(
	'default'  			=> array( 'emoza_posted_on', 'emoza_posted_by' ),
	'sanitize_callback'	=> 'emoza_sanitize_single_meta_elements'
) );

$wp_customize->add_control( new \Kirki\Control\Sortable( $wp_customize, 'single_post_meta_elements', array(
	'label'   		=> esc_html__( 'Meta elements', 'emoza-woocommerce' ),
	'section' => 'emoza_section_blog_singles',
	'choices' => array(
		'emoza_posted_on' 			=> esc_html__( 'Post date', 'emoza-woocommerce' ),
		'emoza_posted_by' 			=> esc_html__( 'Post author', 'emoza-woocommerce' ),
		'emoza_post_categories'	=> esc_html__( 'Post categories', 'emoza-woocommerce' ),
		'emoza_entry_comments' 	=> esc_html__( 'Post comments', 'emoza-woocommerce' ),
	),
) ) );

$wp_customize->add_setting( 'single_post_meta_spacing', array(
	'default'   		=> 8,
	'sanitize_callback' => 'absint',
	'transport'			=> 'postMessage',
) );			

$wp_customize->add_control( new Emoza_Responsive_Slider( $wp_customize, 'single_post_meta_spacing',
	array(
		'label' 		=> esc_html__( 'Spacing', 'emoza-woocommerce' ),
		'section' 		=> 'emoza_section_blog_singles',
		'is_responsive'	=> 0,
		'settings' 		=> array (
			'size_desktop' 		=> 'single_post_meta_spacing',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 60,
			'step'  => 1
		),
	)
) );

$wp_customize->add_setting( 'blog_single_divider_4',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Divider_Control( $wp_customize, 'blog_single_divider_4',
		array(
			'section' 		=> 'emoza_section_blog_singles',
		)
	)
);

//Elements
$wp_customize->add_setting( 'single_post_elements_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Text_Control( $wp_customize, 'single_post_elements_title',
		array(
			'label'			=> esc_html__( 'Elements', 'emoza-woocommerce' ),
			'section' 		=> 'emoza_section_blog_singles',
		)
	)
);
$wp_customize->add_setting(
	'single_post_show_tags',
	array(
		'default'           => 1,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'single_post_show_tags',
		array(
			'label'         	=> esc_html__( 'Post tags', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_blog_singles',
		)
	)
);
$wp_customize->add_setting(
	'single_post_show_author_box',
	array(
		'default'           => 0,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'single_post_show_author_box',
		array(
			'label'         	=> esc_html__( 'Author box', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_blog_singles',
		)
	)
);
$wp_customize->add_setting( 'single_post_author_box_align',
	array(
		'default' 			=> 'center',
		'sanitize_callback' => 'emoza_sanitize_text'
	)
);
$wp_customize->add_control( new Emoza_Radio_Buttons( $wp_customize, 'single_post_author_box_align',
	array(
		'label'   => esc_html__( 'Author box alignment', 'emoza-woocommerce' ),
		'section' => 'emoza_section_blog_singles',
		'choices' => array(
			'left' 		=> '<svg width="16" height="13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0 0h10v1H0zM0 4h16v1H0zM0 8h10v1H0zM0 12h16v1H0z"/></svg>',
			'center' 	=> '<svg width="16" height="13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3 0h10v1H3zM0 4h16v1H0zM3 8h10v1H3zM0 12h16v1H0z"/></svg>',
			'right' 	=> '<svg width="16" height="13" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6 0h10v1H6zM0 4h16v1H0zM6 8h10v1H6zM0 12h16v1H0z"/></svg>',
		),
		'active_callback' => 'emoza_callback_single_post_show_author_box'
	)
) );
$wp_customize->add_setting(
	'single_post_show_post_nav',
	array(
		'default'           => 1,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'single_post_show_post_nav',
		array(
			'label'         	=> esc_html__( 'Post navigation', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_blog_singles',
		)
	)
);
$wp_customize->add_setting(
	'single_post_show_related_posts',
	array(
		'default'           => 0,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'single_post_show_related_posts',
		array(
			'label'         	=> esc_html__( 'Related posts', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_blog_singles',
		)
	)
);

/**
 * Styling
 */
$wp_customize->add_setting( 'single_post_title_size_desktop', array(
	'default'   		=> 32,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_setting( 'single_post_title_size_tablet', array(
	'default'   		=> 32,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_setting( 'single_post_title_size_mobile', array(
	'default'   		=> 32,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			


$wp_customize->add_control( new Emoza_Responsive_Slider( $wp_customize, 'single_post_title_size',
	array(
		'label' 		=> esc_html__( 'Post title size', 'emoza-woocommerce' ),
		'section' 		=> 'emoza_section_blog_singles',
		'is_responsive'	=> 1,
		'settings' 		=> array (
			'size_desktop' 		=> 'single_post_title_size_desktop',
			'size_tablet' 		=> 'single_post_title_size_tablet',
			'size_mobile' 		=> 'single_post_title_size_mobile',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 200
		)		
	)
) );

$wp_customize->add_setting(
	'single_post_title_color',
	array(
		'default'           => '#212121',
		'sanitize_callback' => 'emoza_sanitize_hex_rgba',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new Emoza_Alpha_Color(
		$wp_customize,
		'single_post_title_color',
		array(
			'label'         	=> esc_html__( 'Title color', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_blog_singles',
		)
	)
);


$wp_customize->add_setting( 'single_posts_divider_1',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Divider_Control( $wp_customize, 'single_posts_divider_1',
		array(
			'section' 		=> 'emoza_section_blog_singles',
		)
	)
);

$wp_customize->add_setting( 'single_post_meta_size_desktop', array(
	'default'   		=> 14,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_setting( 'single_post_meta_size_tablet', array(
	'default'   		=> 14,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_setting( 'single_post_meta_size_mobile', array(
	'default'   		=> 14,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			


$wp_customize->add_control( new Emoza_Responsive_Slider( $wp_customize, 'single_post_meta_size',
	array(
		'label' 		=> esc_html__( 'Meta size', 'emoza-woocommerce' ),
		'section' 		=> 'emoza_section_blog_singles',
		'is_responsive'	=> 1,
		'settings' 		=> array (
			'size_desktop' 		=> 'single_post_meta_size_desktop',
			'size_tablet' 		=> 'single_post_meta_size_tablet',
			'size_mobile' 		=> 'single_post_meta_size_mobile',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 200
		)		
	)
) );

$wp_customize->add_setting(
	'single_post_meta_color',
	array(
		'default'           => '#666666',
		'sanitize_callback' => 'emoza_sanitize_hex_rgba',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new Emoza_Alpha_Color(
		$wp_customize,
		'single_post_meta_color',
		array(
			'label'         	=> esc_html__( 'Meta color', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_blog_singles',
		)
	)
);