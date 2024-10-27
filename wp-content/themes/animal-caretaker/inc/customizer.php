<?php
/**
 * animal-caretaker Theme Customizer.
 *
 * @package animal-caretaker
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function animal_caretaker_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->get_setting( 'background_color' )->transport = 'postMessage';
	$wp_customize->get_setting('custom_logo')->transport = 'refresh';	
}
add_action( 'customize_register', 'animal_caretaker_customize_register' );

if ( ! defined( 'ANIMAL_CARETAKER_BUY_NOW_1' ) ) {
define('ANIMAL_CARETAKER_BUY_NOW_1',__('https://www.mishkatwp.com/themes/animal-caretaker-wordpress-theme/','animal-caretaker'));
}

if ( class_exists("Kirki")){

	/* Single Post Options */

	new \Kirki\Section(
		'animal_caretaker_single_post_options',
		[
			'title'       => esc_html__( 'Single Post Options', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);
    
    /* Single Post Heading Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_single_post_heading_on_off',
			'label'       => esc_html__( 'Single Post Heading On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	/* Single Post Content Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_single_post_content_on_off',
			'label'       => esc_html__( 'Single Post Content On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	/* Single Post Meta Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_single_meta_on_off',
			'label'       => esc_html__( 'Single Post Meta On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	/* Single Post Feature Image Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_single_post_image_on_off',
			'label'       => esc_html__( 'Single Post Feature Image On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	/* Single Post Pagination Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_single_post_pagination_on_off',
			'label'       => esc_html__( 'Single Post Pagination On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_single_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'animal_caretaker_single_post_options',
    ] );

    /* Page Options */
		new \Kirki\Section(
		'animal_caretaker_single_page_options',
		[
			'title'       => esc_html__( 'Page Sidebar Options', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Radio(
	[
		'settings'    => 'animal_caretaker_single_page_sidebar_option',
		'label'       => esc_html__( 'Page Sidebar Settings', 'animal-caretaker' ),
		'section'     => 'animal_caretaker_single_page_options',
		'default'     => 'right',
		'priority'    => 10,
		'choices'     => [
			'right'   => esc_html__( 'Page With Right Sidebar', 'animal-caretaker' ),
			'left' => esc_html__( 'Page With Left Sidebar', 'animal-caretaker' ),
			'none'  => esc_html__( 'Page With No Sidebar', 'animal-caretaker' ),

		],
	]
);
	/* Page Options End*/

	/* Post Options */

	new \Kirki\Section(
		'animal_caretaker_post_options',
		[
			'title'       => esc_html__( 'Post Options', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);
    
    /* Post Image Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_post_image_on_off',
			'label'       => esc_html__( 'Post Image On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	/* Post Heading Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_post_heading_on_off',
			'label'       => esc_html__( 'Post Heading On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	/* Post Content Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_post_content_on_off',
			'label'       => esc_html__( 'Post Content On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	/* Post Date Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_post_date_on_off',
			'label'       => esc_html__( 'Post Date On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	/* Post Comments Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_post_comment_on_off',
			'label'       => esc_html__( 'Post Comments On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	/* Post Author Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_post_author_on_off',
			'label'       => esc_html__( 'Post Author On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	/* Post Categories Option End */
	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_post_categories_on_off',
			'label'       => esc_html__( 'Post Categories On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_post_options',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	/* Post limit Option End */
	new \Kirki\Field\Slider(
		[
			'settings'    => 'animal_caretaker_post_content_limit',
			'label'       => esc_html__( 'Post Content Limit', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_post_options',
			'default'     => 15,
			'choices'     => [
				'min'  => 0,
				'max'  => 50,
				'step' => 1,
			],
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'animal_caretaker_post_options',
    ] );

	/* Post Options End */

	/* Post Options */

	new \Kirki\Section(
		'animal_caretaker_post_layouts_section',
		[
			'title'       => esc_html__( 'Post Layout Options', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Radio_Image(
		[
			'settings'    => 'animal_caretaker_post_layout',
			'label'       => esc_html__( 'Blog Layout', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_post_layouts_section',
			'default'     => 'two_column_right',
			'priority'    => 10,
			'choices'     => [
				'one_column'   => get_template_directory_uri().'/images/1column.png',
				'two_column_right' => get_template_directory_uri().'/images/right-sidebar.png',
				'two_column_left'  => get_template_directory_uri().'/images/left-sidebar.png',
				'three_column'  => get_template_directory_uri().'/images/3column.png',
				'four_column'  => get_template_directory_uri().'/images/4column.png',
				'grid_post'  => get_template_directory_uri().'/images/grid.png',
			],
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'animal_caretaker_post_layouts_section',
    ] );

	/* Post Options End */

	/* 404 Page */

	new \Kirki\Section(
		'animal_caretaker_404_page_section',
		[
			'title'       => esc_html__( '404 Page', 'animal-caretaker' ),
			'description' => esc_html__( 'Here you can add 404 Page information.', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'animal_caretaker_404_page_heading',
			'label'    => esc_html__( 'Add Heading', 'animal-caretaker' ),
			'section'  => 'animal_caretaker_404_page_section',
			'default'  => esc_html__( '404', 'animal-caretaker' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'animal_caretaker_404_page_content',
			'label'    => esc_html__( 'Add Content', 'animal-caretaker' ),
			'section'  => 'animal_caretaker_404_page_section',
			'default'  => esc_html__( 'Ops! Something happened...', 'animal-caretaker' ),
			'priority' => 10,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'animal_caretaker_404_page_button',
			'label'    => esc_html__( 'Add Button', 'animal-caretaker' ),
			'section'  => 'animal_caretaker_404_page_section',
			'default'  => esc_html__( 'Home', 'animal-caretaker' ),
			'priority' => 10,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'animal_caretaker_404_page_section',
    ] );

	/* 404 Page End */

	/* General Options */

	new \Kirki\Section(
		'animal_caretaker_general_options_section',
		[
			'title'       => esc_html__( 'General Options', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'animal_caretaker_sticky_header_setting',
		'label'       => esc_html__( 'Show Hide Sticky Header', 'animal-caretaker' ),
		'section'     => 'animal_caretaker_general_options_section',
		'default'     => 'off',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
			'off' => esc_html__( 'Disable', 'animal-caretaker' ),
		],
	]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_preloader_setting',
			'label'       => esc_html__( 'Preloader On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_general_options_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_scroll_to_top_setting',
			'label'       => esc_html__( 'Scroll To Top On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_general_options_section',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'animal_caretaker_general_options_section',
    ] );

	/* General Options End */

	/* Logo */

	/* Logo Size limit Option End */
	new \Kirki\Field\Slider(
		[
			'settings'    => 'animal_caretaker_logo_resizer_setting',
			'label'       => esc_html__( 'Logo Size Limit', 'animal-caretaker' ),
			'section'     => 'title_tagline',
			'default'     => 70,
			'choices'     => [
				'min'  => 10,
				'max'  => 300,
				'step' => 10,
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_site_title_setting',
			'label'       => esc_html__( 'Site Title On / Off', 'animal-caretaker' ),
			'section'     => 'title_tagline',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_tagline_setting',
			'label'       => esc_html__( 'Tagline On / Off', 'animal-caretaker' ),
			'section'     => 'title_tagline',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'title_tagline',
    ] );

	/* Logo End */

		/* Typography Section */

	new \Kirki\Section(
		'animal_caretaker_theme_typography_section',
		[
			'title'       => esc_html__( 'Theme Typography', 'animal-caretaker' ),
			'description' => esc_html__( 'Here you can customize Heading or other body text font settings', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'animal_caretaker_all_headings_typography',
		'section'     => 'animal_caretaker_theme_typography_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Heading Of All Sections',  'animal-caretaker' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'animal_caretaker_all_headings_typography',
		'label'       => esc_html__( 'Heading Typography',  'animal-caretaker' ),
		'description' => esc_html__( 'Select the typography options for your heading.',  'animal-caretaker' ),
		'section'     => 'animal_caretaker_theme_typography_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'h1','h2','h3','h4','h5','h6', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'custom',
		'settings'    => 'animal_caretaker_body_content_typography',
		'section'     => 'animal_caretaker_theme_typography_section',
			'default'         => '<h3 style="color: #2271b1; padding:10px; background:#fff; margin:0; border-left: solid 5px #2271b1; ">' . __( 'Body Content',  'animal-caretaker' ) . '</h3>',
		'priority'    => 10,
	] );

	Kirki::add_field( 'global', array(
		'type'        => 'typography',
		'settings'    => 'animal_caretaker_body_content_typography',
		'label'       => esc_html__( 'Content Typography',  'animal-caretaker' ),
		'description' => esc_html__( 'Select the typography options for your content.',  'animal-caretaker' ),
		'section'     => 'animal_caretaker_theme_typography_section',
		'priority'    => 10,
		'default'     => array(
			'font-family'    => '',
			'variant'        => '',
		),
		'output' => array(
			array(
				'element' => array( 'body', ),
			),
		),
	) );

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',
        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'animal_caretaker_theme_typography_section',
    ] );

    /* End Typography */

    /* Global Color Section */

	new \Kirki\Section(
		'animal_caretaker_theme_color_section',
		[
			'title'       => esc_html__( 'Theme Colors Option', 'animal-caretaker' ),
			'description' => esc_html__( 'Here you can change your theme color', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'type'        => 'color',
		'settings'    => 'animal_caretaker_theme_color_1',
		'label'       => __( 'Select Your First Color', 'animal-caretaker' ),
		'section'     => 'animal_caretaker_theme_color_section',
		'default'     => '#ed6436',
	] );

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',
        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'animal_caretaker_theme_color_section',
    ] );

    /* Global Color End */

        /* Breadcrumb Section */

	new \Kirki\Section(
		'animal_caretaker_breadcrumb_section',
		[
			'title'       => esc_html__( 'Theme Breadcrumb Option', 'animal-caretaker' ),
			'description' => esc_html__( 'The breadcrumbs for your theme can be included here.', 'animal-caretaker' ),
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_breadcrumb_setting',
			'label'       => esc_html__( 'Enable Breadcrumbs Option', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_breadcrumb_section',
			'default'     => true,
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);


	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',
        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'animal_caretaker_breadcrumb_section',
    ] );

    /* Breadcrumb section End */
    

	//Home page Setting Panel
	new \Kirki\Panel(
		'animal_caretaker_home_page_section',
		[
			'priority'    => 10,
			'title'       => esc_html__( 'Home Page Sections', 'animal-caretaker' ),
		]
	);

	/* Header Button */

	new \Kirki\Section(
		'animal_caretaker_header_button_section',
		[
			'title'       => esc_html__( 'Header Button', 'animal-caretaker' ),
			'description' => esc_html__( 'Here you can add header button text and link.', 'animal-caretaker' ),
			'panel'		  => 'animal_caretaker_home_page_section',
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'animal_caretaker_header_button_text',
			'label'    => esc_html__( 'Add Button Text', 'animal-caretaker' ),
			'section'  => 'animal_caretaker_header_button_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	new \Kirki\Field\URL(
		[
			'settings' => 'animal_caretaker_header_button_link',
			'label'    => esc_html__( 'Add Button Link', 'animal-caretaker' ),
			'section'  => 'animal_caretaker_header_button_section',
			'default'  => '',
			'priority' => 10,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'animal_caretaker_header_button_section',
    ] );


	/* Home Slider */

	new \Kirki\Section(
		'animal_caretaker_home_slider_section',
		[
			'title'       => esc_html__( 'Home Slider', 'animal-caretaker' ),
			'description' => esc_html__( 'Here you can add slider image, title and text.', 'animal-caretaker' ),
			'panel'		  => 'animal_caretaker_home_page_section',
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_slide_on_off',
			'label'       => esc_html__( 'Slider On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_home_slider_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	new \Kirki\Field\Number(
		[
			'settings' => 'animal_caretaker_slide_count',
			'label'    => esc_html__( 'Slider Number Control', 'animal-caretaker' ),
			'section'  => 'animal_caretaker_home_slider_section',
			'default'  => '',
			'choices'  => [
				'min'  => 1,
				'max'  => 2	,
				'step' => 1,
			],
		]
	);

	$slide_count = get_theme_mod('animal_caretaker_slide_count');

	for ($i=1; $i <= $slide_count; $i++) { 
		
		new \Kirki\Field\Image(
			[
				'settings'    => 'animal_caretaker_slider_image'.$i,
				'label'       => esc_html__( 'Slider Image 0', 'animal-caretaker' ).$i,
				'section'     => 'animal_caretaker_home_slider_section',
				'default'     => '',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'animal_caretaker_slider_heading'.$i,
				'label'    => esc_html__( 'Main Heading 0', 'animal-caretaker' ).$i,
				'section'  => 'animal_caretaker_home_slider_section',
			]
		);

		new \Kirki\Field\Text(
			[
				'settings' => 'animal_caretaker_slider_button_text'.$i,
				'label'    => esc_html__( 'Button Text 0', 'animal-caretaker' ).$i,
				'section'  => 'animal_caretaker_home_slider_section',
			]
		);

		new \Kirki\Field\URL(
			[
				'settings' => 'animal_caretaker_slider_button_link'.$i,
				'label'    => esc_html__( 'Button Url 0', 'animal-caretaker' ).$i,
				'section'  => 'animal_caretaker_home_slider_section',
				'default'  => '',
			]
		);

	}

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'animal_caretaker_home_slider_section',
    ] );


    /* Pro About Us */

    new \Kirki\Section(
		'animal_caretaker_about_us_section',
		[
			'title'       => esc_html__( 'About Us Section', 'animal-caretaker' ),
			'panel'       => 'animal_caretaker_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'section'     => 'animal_caretaker_about_us_section',
        'description' => __( '<p>a. Add more About Us Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For About Us Section</p>', 'animal-caretaker' ),
    ] );

	/* Pro About Us End */

	/* Pro Pet Store */

    new \Kirki\Section(
		'animal_caretaker_pet_store_section',
		[
			'title'       => esc_html__( 'Pet Store Section', 'animal-caretaker' ),
			'panel'       => 'animal_caretaker_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'section'     => 'animal_caretaker_pet_store_section',
        'description' => __( '<p>a. Add more Pet Store Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Pet Store Section</p>', 'animal-caretaker' ),
    ] );

	/* Pro Pet Store End */

	/* Home Products */

	new \Kirki\Section(
		'animal_caretaker_home_product_section',
		[
			'title'       => esc_html__( 'Home Products', 'animal-caretaker' ),
			'description' => esc_html__( 'Here you can select product category to display products.', 'animal-caretaker' ),
			'panel'		  => 'animal_caretaker_home_page_section',
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_product_on_off',
			'label'       => esc_html__( 'Products On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_home_product_section',
			'default'     => 'off',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'animal_caretaker_featured_product_heading',
			'label'    => esc_html__( 'Main Heading', 'animal-caretaker' ),
			'section'  => 'animal_caretaker_home_product_section',
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Buy Our Premium Theme For More Feature', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'priority'    => 100,
        'section'     => 'animal_caretaker_home_product_section',
    ] );

    /* Pro Our Achievenment */

    new \Kirki\Section(
		'animal_caretaker_our_achivenment_section',
		[
			'title'       => esc_html__( 'Our Achivenment Section', 'animal-caretaker' ),
			'panel'       => 'animal_caretaker_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'section'     => 'animal_caretaker_our_achivenment_section',
        'description' => __( '<p>a. Add more Our Achovenment Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Our Achovenment Section</p>', 'animal-caretaker' ),
    ] );

	/* Pro Our Achovenment End */

	/* Pro Our Services */

    new \Kirki\Section(
		'animal_caretaker_our_services_section',
		[
			'title'       => esc_html__( 'Our Services Section', 'animal-caretaker' ),
			'panel'       => 'animal_caretaker_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'section'     => 'animal_caretaker_our_services_section',
        'description' => __( '<p>a. Add more Our Services Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Our Services Section</p>', 'animal-caretaker' ),
    ] );

	/* Pro Our Services End */

	/* Pro Newsletter */

    new \Kirki\Section(
		'animal_caretaker_newsletter_section',
		[
			'title'       => esc_html__( 'Newsletter Section', 'animal-caretaker' ),
			'panel'       => 'animal_caretaker_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'section'     => 'animal_caretaker_newsletter_section',
        'description' => __( '<p>a. Add more Newsletter Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Newsletter Section</p>', 'animal-caretaker' ),
    ] );

	/* Pro Newsletter End */

	/* Pro Testimonial */

    new \Kirki\Section(
		'animal_caretaker_testimonial_section',
		[
			'title'       => esc_html__( 'Testimonial Section', 'animal-caretaker' ),
			'panel'       => 'animal_caretaker_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'section'     => 'animal_caretaker_testimonial_section',
        'description' => __( '<p>a. Add more Testimonial Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Testimonial Section</p>', 'animal-caretaker' ),
    ] );

	/* Pro Testimonial End */

	/* Pro Gallery */

    new \Kirki\Section(
		'animal_caretaker_gallery_section',
		[
			'title'       => esc_html__( 'Gallery Section', 'animal-caretaker' ),
			'panel'       => 'animal_caretaker_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'section'     => 'animal_caretaker_gallery_section',
        'description' => __( '<p>a. Add more Gallery Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Gallery Section</p>', 'animal-caretaker' ),
    ] );

	/* Pro Gallery End */

	/* Pro Latest News */

    new \Kirki\Section(
		'animal_caretaker_recent_blog_section',
		[
			'title'       => esc_html__( 'Latest News Section', 'animal-caretaker' ),
			'panel'       => 'animal_caretaker_home_page_section',
			'priority'    => 30,
		]
	);

	Kirki::add_field( 'theme_config_id', [
		'label'    => esc_html__( 'Details for the Premium Theme', 'animal-caretaker' ),
		'default'  => '<a class="premium_info_btn" target="_blank" href="' . esc_url( ANIMAL_CARETAKER_BUY_NOW_1 ) . '">' . __( 'Buy Pro', 'animal-caretaker' ) . '</a>',

        'type'        => 'custom',
        'section'     => 'animal_caretaker_recent_blog_section',
        'description' => __( '<p>a. Add more Latest News Effortlessly </p><p>b. Easily change the color of specific text elements </p><p>c. Buy Our Premium Theme For Latest News Section</p>', 'animal-caretaker' ),
    ] );

	/* Pro Latest News End */

	/* Footer */

	new \Kirki\Section(
		'animal_caretaker_footer_section',
		[
			'title'       => esc_html__( 'Footer', 'animal-caretaker' ),
			'panel'		  => 'animal_caretaker_home_page_section',
			'priority'    => 30,
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_footer_widgets_on_off',
			'label'       => esc_html__( 'Footer Widgets On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_footer_section',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	new \Kirki\Field\Checkbox_Switch(
		[
			'settings'    => 'animal_caretaker_copyright_on_off',
			'label'       => esc_html__( 'Footer Copyright On / Off', 'animal-caretaker' ),
			'section'     => 'animal_caretaker_footer_section',
			'default'     => 'on',
			'choices'     => [
				'on'  => esc_html__( 'Enable', 'animal-caretaker' ),
				'off' => esc_html__( 'Disable', 'animal-caretaker' ),
			],
		]
	);

	new \Kirki\Field\Text(
		[
			'settings' => 'animal_caretaker_copyright_content_text',
			'label'    => esc_html__( 'Copyright Text', 'animal-caretaker' ),
			'section'  => 'animal_caretaker_footer_section',
		]
	);

}

function animal_caretaker_customizer_settings( $wp_customize ) {

	$animal_caretaker_args = array(
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

	$categories = get_categories($animal_caretaker_args);
	$cat_posts = array();
	$m = 0;
	$cat_posts[]='Select';
	foreach($categories as $category){
		if($m==0){
			$default = $category->slug;
			$m++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('animal_caretaker_featured_product_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'animal_caretaker_sanitize_select',
	));

	$wp_customize->add_control('animal_caretaker_featured_product_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select category to display products ','animal-caretaker'),
		'section' => 'animal_caretaker_home_product_section',
	));

}

add_action( 'customize_register', 'animal_caretaker_customizer_settings' );