<?php
/**
 * Post Options
 *
 * @package aster_photography
 */

$wp_customize->add_section(
	'aster_photography_post_options',
	array(
		'title' => esc_html__( 'Post Options', 'aster-photography' ),
		'panel' => 'aster_photography_theme_options',
	)
);

// Post Options - Show / Hide Feature Image.
$wp_customize->add_setting(
	'aster_photography_post_hide_feature_image',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_post_hide_feature_image',
		array(
			'label'   => esc_html__( 'Show / Hide Featured Image', 'aster-photography' ),
			'section' => 'aster_photography_post_options',
		)
	)
);

// Post Options - Show / Hide Post Heading.
$wp_customize->add_setting(
	'aster_photography_post_hide_post_heading',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_post_hide_post_heading',
		array(
			'label'   => esc_html__( 'Show / Hide Post Heading', 'aster-photography' ),
			'section' => 'aster_photography_post_options',
		)
	)
);

// Post Options - Show / Hide Post Content.
$wp_customize->add_setting(
	'aster_photography_post_hide_post_content',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_post_hide_post_content',
		array(
			'label'   => esc_html__( 'Show / Hide Post Content', 'aster-photography' ),
			'section' => 'aster_photography_post_options',
		)
	)
);

// Post Options - Show / Hide Date.
$wp_customize->add_setting(
	'aster_photography_post_hide_date',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_post_hide_date',
		array(
			'label'   => esc_html__( 'Show / Hide Date', 'aster-photography' ),
			'section' => 'aster_photography_post_options',
		)
	)
);

// Post Options - Show / Hide Author.
$wp_customize->add_setting(
	'aster_photography_post_hide_author',
	array(
		'default'           => false,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_post_hide_author',
		array(
			'label'   => esc_html__( 'Show / Hide Author', 'aster-photography' ),
			'section' => 'aster_photography_post_options',
		)
	)
);

// Post Options - Show / Hide Category.
$wp_customize->add_setting(
	'aster_photography_post_hide_category',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_post_hide_category',
		array(
			'label'   => esc_html__( 'Show / Hide Category', 'aster-photography' ),
			'section' => 'aster_photography_post_options',
		)
	)
);


// ---------------------------------------- Post layout ----------------------------------------------------

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_photography_archive_layuout_separator', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Photography_Separator_Custom_Control( $wp_customize, 'aster_photography_archive_layuout_separator', array(
	'label' => __( 'Archive/Blogs Layout Setting', 'aster-photography' ),
	'section' => 'aster_photography_post_options',
	'settings' => 'aster_photography_archive_layuout_separator',
)));

// Archive Layout - Column Layout.
$wp_customize->add_setting(
	'aster_photography_archive_column_layout',
	array(
		'default'           => 'column-1',
		'sanitize_callback' => 'aster_photography_sanitize_select',
	)
);

$wp_customize->add_control(
	'aster_photography_archive_column_layout',
	array(
		// translators: %d is the post number
		'label'   => esc_html__( 'Select Posts Layout', 'aster-photography' ),
		'section' => 'aster_photography_post_options',
		'type'    => 'select',
		'choices' => array(
			'column-1' => __( 'Column 1', 'aster-photography' ),
			'column-2' => __( 'Column 2', 'aster-photography' ),
			'column-3' => __( 'Column 3', 'aster-photography' ),
			'column-4' => __( 'Column 4', 'aster-photography' ),
		),
	)
);

$wp_customize->add_setting('aster_photography_blog_layout_option_setting',array(
	'default' => 'Left',
	'sanitize_callback' => 'aster_photography_sanitize_choices'
  ));
  $wp_customize->add_control(new Aster_Photography_Image_Radio_Control($wp_customize, 'aster_photography_blog_layout_option_setting', array(
	'type' => 'select',
	'label' => __('Blog Content Alignment','aster-photography'),
	'section' => 'aster_photography_post_options',
	'choices' => array(
		'Left' => esc_url(get_template_directory_uri()).'/resource/img/layout-2.png',
		'Default' => esc_url(get_template_directory_uri()).'/resource/img/layout-1.png',
		'Right' => esc_url(get_template_directory_uri()).'/resource/img/layout-3.png',
))));


// ---------------------------------------- Read More ----------------------------------------------------

// Add Separator Custom Control
$wp_customize->add_setting( 'aster_photography_readmore_separators', array(
	'sanitize_callback' => 'sanitize_text_field',
) );

$wp_customize->add_control( new Aster_Photography_Separator_Custom_Control( $wp_customize, 'aster_photography_readmore_separators', array(
	'label' => __( 'Read More Button Settings', 'aster-photography' ),
	'section' => 'aster_photography_post_options',
	'settings' => 'aster_photography_readmore_separators',
)));


// Post Options - Show / Hide Read More Button.
$wp_customize->add_setting(
	'aster_photography_post_readmore_button',
	array(
		'default'           => true,
		'sanitize_callback' => 'aster_photography_sanitize_switch',
	)
);

$wp_customize->add_control(
	new Aster_Photography_Toggle_Switch_Custom_Control(
		$wp_customize,
		'aster_photography_post_readmore_button',
		array(
			'label'   => esc_html__( 'Show / Hide Read More Button', 'aster-photography' ),
			'section' => 'aster_photography_post_options',
		)
	)
);

$wp_customize->add_setting(
    'aster_photography_readmore_btn_icon',
    array(
        'default' => 'fas fa-chevron-right', // Set default icon here
        'sanitize_callback' => 'sanitize_text_field',
        'capability' => 'edit_theme_options',
    )
);

$wp_customize->add_control(new Aster_Photography_Change_Icon_Control(
    $wp_customize, 
    'aster_photography_readmore_btn_icon',
    array(
        'label'    => __('Read More Icon','aster-photography'),
        'section'  => 'aster_photography_post_options',
        'iconset'  => 'fa',
    )
));

$wp_customize->add_setting(
	'aster_photography_readmore_button_text',
	array(
		'default'           => 'Read More',
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'aster_photography_readmore_button_text',
	array(
		'label'           => esc_html__( 'Read More Button Text', 'aster-photography' ),
		'section'         => 'aster_photography_post_options',
		'settings'        => 'aster_photography_readmore_button_text',
		'type'            => 'text',
	)
);