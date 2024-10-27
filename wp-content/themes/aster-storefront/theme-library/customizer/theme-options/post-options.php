<?php

/**
 * Post Options
 *
 * @package aster_storefront
 */

$wp_customize->add_section(
	'aster_storefront_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'aster-storefront' ),
		'panel' => 'aster_storefront_theme_options',
	)
);

// Post Options - Show / Hide Feature Image.
$wp_customize->add_setting(
	'aster_storefront_post_hide_feature_image',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_post_hide_feature_image',
		array(
			'label'   => esc_html__( 'Show / Hide Featured Image', 'aster-storefront' ),
			'section' => 'aster_storefront_post_options',
		)
	)
);

// Post Options - Show / Hide Post Heading.
$wp_customize->add_setting(
	'aster_storefront_post_hide_post_heading',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_post_hide_post_heading',
		array(
			'label'   => esc_html__( 'Show / Hide Post Heading', 'aster-storefront' ),
			'section' => 'aster_storefront_post_options',
		)
	)
);

// Post Options - Show / Hide Post Content.
$wp_customize->add_setting(
	'aster_storefront_post_hide_post_content',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_post_hide_post_content',
		array(
			'label'   => esc_html__( 'Show / Hide Post Content', 'aster-storefront' ),
			'section' => 'aster_storefront_post_options',
		)
	)
);

// Post Options - Show / Hide Date.
$wp_customize->add_setting(
	'aster_storefront_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_post_hide_date',
		array(
			'label'   => esc_html__( 'Show / Hide Date', 'aster-storefront' ),
			'section' => 'aster_storefront_post_options',
		)
	)
);

// Post Options - Show / Hide Author.
$wp_customize->add_setting(
	'aster_storefront_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_post_hide_author',
		array(
			'label'   => esc_html__( 'Show / Hide Author', 'aster-storefront' ),
			'section' => 'aster_storefront_post_options',
		)
	)
);

// Post Options - Show / Hide Category.
$wp_customize->add_setting(
	'aster_storefront_post_hide_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_post_hide_category',
		array(
			'label'   => esc_html__( 'Show / Hide Category', 'aster-storefront' ),
			'section' => 'aster_storefront_post_options',
		)
	)
);


// ---------------------------------------- Post layout ----------------------------------------------------

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_storefront_archive_layuout_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Storefront_Separator_Custom_Control( $wp_customize, 'aster_storefront_archive_layuout_separator', array(
	'label' => __( 'Archive/Blogs Layout Setting', 'aster-storefront' ),
	'section' => 'aster_storefront_post_options',
	'settings' => 'aster_storefront_archive_layuout_separator',
)));

// Archive Layout - Column Layout.
$wp_customize->add_setting(
	'aster_storefront_archive_column_layout',
	array(
		'default'           => 'column-1',
		'sanitize_callback' => 'aster_storefront_sanitize_select',
	)
);

$wp_customize->add_control(
	'aster_storefront_archive_column_layout',
	array(
		'label'   => esc_html__( 'Select Posts Layout', 'aster-storefront' ),
		'section' => 'aster_storefront_post_options',
		'type'    => 'select',
		'choices' => array(
			'column-1' => __( 'Column 1', 'aster-storefront' ),
			'column-2' => __( 'Column 2', 'aster-storefront' ),
			'column-3' => __( 'Column 3', 'aster-storefront' ),
			'column-4' => __( 'Column 4', 'aster-storefront' ),
		),
	)
);

$wp_customize->add_setting('aster_storefront_blog_layout_option_setting',array(
	'default' => 'Left',
	'sanitize_callback' => 'aster_storefront_sanitize_choices'
  ));
  $wp_customize->add_control(new Aster_Storefront_Image_Radio_Control($wp_customize, 'aster_storefront_blog_layout_option_setting', array(
	'type' => 'select',
	'label' => __('Blog Content Alignment','aster-storefront'),
	'section' => 'aster_storefront_post_options',
	'choices' => array(
		'Left' => esc_url(get_template_directory_uri()).'/resource/img/layout-2.png',
		'Default' => esc_url(get_template_directory_uri()).'/resource/img/layout-1.png',
		'Right' => esc_url(get_template_directory_uri()).'/resource/img/layout-3.png',
))));


// ---------------------------------------- Read More ----------------------------------------------------

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_storefront_readmore_separators', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Storefront_Separator_Custom_Control( $wp_customize, 'aster_storefront_readmore_separators', array(
	'label' => __( 'Read More Button Settings', 'aster-storefront' ),
	'section' => 'aster_storefront_post_options',
	'settings' => 'aster_storefront_readmore_separators',
)));


// Post Options - Show / Hide Read More Button.
$wp_customize->add_setting(
	'aster_storefront_post_readmore_button',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_storefront_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Storefront_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_storefront_post_readmore_button',
		array(
			'label'   => esc_html__( 'Show / Hide Read More Button', 'aster-storefront' ),
			'section' => 'aster_storefront_post_options',
		)
	)
);

$wp_customize->add_setting(
    'aster_storefront_readmore_btn_icon',
    array(
        'default' => 'fas fa-chevron-right', // Set default icon here
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
    )
);

$wp_customize->add_control(new Aster_Storefront_Change_Icon_Control(
    $wp_customize, 
    'aster_storefront_readmore_btn_icon',
    array(
        'label'    => __('Read More Icon','aster-storefront'),
        'section'  => 'aster_storefront_post_options',
        'iconset'  => 'fa',
    )
));

$wp_customize->add_setting(
	'aster_storefront_readmore_button_text',
	array(
		'default'           => 'Read More',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'aster_storefront_readmore_button_text',
	array(
		'label'           => esc_html__( 'Read More Button Text', 'aster-storefront' ),
		'section'         => 'aster_storefront_post_options',
		'settings'        => 'aster_storefront_readmore_button_text',
		'type'            => 'text',
	)
);