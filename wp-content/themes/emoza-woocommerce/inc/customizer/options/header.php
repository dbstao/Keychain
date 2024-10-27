<?php
/**
 * Header Customizer options
 *
 * @package Emoza
 */

/**
 * Header
 */
$wp_customize->add_panel(
	'emoza_panel_header',
	array(
		'title'         => esc_html__( 'Header', 'emoza-woocommerce'),
		'priority'      => 1,
	)
);

/**
 * Site identity
 */
$wp_customize->add_setting( 'site_logo_size_desktop', array(
	'default'   		=> 180,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_setting( 'site_logo_size_tablet', array(
	'default'   		=> 100,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );

$wp_customize->add_setting( 'site_logo_size_mobile', array(
	'default'   		=> 100,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			


$wp_customize->add_control( new Emoza_Responsive_Slider( $wp_customize, 'site_logo_size',
	array(
		'label' 		=> esc_html__( 'Logo width', 'emoza-woocommerce' ),
		'section' 		=> 'title_tagline',
		'is_responsive'	=> 1,
		'settings' 		=> array (
			'size_desktop' 		=> 'site_logo_size_desktop',
			'size_tablet' 		=> 'site_logo_size_tablet',
			'size_mobile' 		=> 'site_logo_size_mobile',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 500
		)		
	)
) );


$wp_customize->add_setting(
	'site_title_color',
	array(
		'default'           => '#212121',
		'sanitize_callback' => 'emoza_sanitize_hex_rgba',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new Emoza_Alpha_Color(
		$wp_customize,
		'site_title_color',
		array(
			'label'         	=> esc_html__( 'Site title color', 'emoza-woocommerce' ),
			'section'       	=> 'title_tagline',
		)
	)
);

$wp_customize->add_setting(
	'site_description_color',
	array(
		'default'           => '#212121',
		'sanitize_callback' => 'emoza_sanitize_hex_rgba',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new Emoza_Alpha_Color(
		$wp_customize,
		'site_description_color',
		array(
			'label'         	=> esc_html__( 'Site description color', 'emoza-woocommerce' ),
			'section'       	=> 'title_tagline',
		)
	)
);

/**
 * Main header
 */
$wp_customize->add_section(
	'emoza_section_main_header',
	array(
		'title'      => esc_html__( 'Main header', 'emoza-woocommerce'),
		'panel'      => 'emoza_panel_header',
	)
);

$wp_customize->add_setting(
	'emoza_main_header_tabs',
	array(
		'default'           => '',
		'sanitize_callback' => 'esc_attr'
	)
);
$wp_customize->add_control(
	new Emoza_Tab_Control (
		$wp_customize,
		'emoza_main_header_tabs',
		array(
			'label' 				=> '',
			'section'       		=> 'emoza_section_main_header',
			'controls_general'		=> json_encode( array( '#customize-control-header_layout_desktop','#customize-control-header_divider_1','#customize-control-main_header_settings_title','#customize-control-main_header_menu_position','#customize-control-header_container','#customize-control-enable_sticky_header','#customize-control-sticky_header_type','#customize-control-header_divider_2','#customize-control-main_header_elements_title','#customize-control-header_components_l1','#customize-control-header_components_l3left','#customize-control-header_components_l3right','#customize-control-header_components_l4top','#customize-control-header_components_l4bottom','#customize-control-header_components_l5topleft','#customize-control-header_components_l5topright','#customize-control-header_components_l5bottom','#customize-control-header_divider_3','#customize-control-main_header_cart_account_title','#customize-control-enable_header_cart','#customize-control-enable_header_account','#customize-control-header_divider_4','#customize-control-main_header_button_title','#customize-control-header_button_text','#customize-control-header_button_link','#customize-control-header_button_newtab','#customize-control-header_divider_5','#customize-control-main_header_contact_info_title','#customize-control-header_contact_mail','#customize-control-header_contact_phone', ) ),
			'controls_design'		=> json_encode( array( '#customize-control-main_header_submenu_color','#customize-control-main_header_submenu_background','#customize-control-main_header_bottom_padding','#customize-control-main_header_bottom_background', '#customize-control-main_header_bottom_color','#customize-control-main_header_divider_7','#customize-control-main_header_background','#customize-control-main_header_color','#customize-control-main_header_divider_6','#customize-control-main_header_padding','#customize-control-main_header_divider_size','#customize-control-main_header_divider_color','#customize-control-main_header_divider_width' ) ),
		)
	)
);

//Layout
$choices = emoza_header_layouts();

$wp_customize->add_setting(
	'header_layout_desktop',
	array(
		'default'           => 'header_layout_1',
		'sanitize_callback' => 'sanitize_key',
	)
);
$wp_customize->add_control(
	new Emoza_Radio_Images(
		$wp_customize,
		'header_layout_desktop',
		array(
			'label'    	=> esc_html__( 'Layout', 'emoza-woocommerce' ),
			'section'  	=> 'emoza_section_main_header',
			'cols'		=> 2,
			'choices'  	=> $choices
		)
	)
); 

$wp_customize->add_setting( 'header_divider_1',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Divider_Control( $wp_customize, 'header_divider_1',
		array(
			'section' 		=> 'emoza_section_main_header',
		)
	)
);

//General
$wp_customize->add_setting( 'main_header_settings_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Text_Control( $wp_customize, 'main_header_settings_title',
		array(
			'label'			=> esc_html__( 'Settings', 'emoza-woocommerce' ),
			'section' 		=> 'emoza_section_main_header',
		)
	)
);

$wp_customize->add_setting( 'main_header_menu_position',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'emoza_sanitize_text'
	)
);
$wp_customize->add_control( new Emoza_Radio_Buttons( $wp_customize, 'main_header_menu_position',
	array(
		'label' 		=> esc_html__( 'Menu position', 'emoza-woocommerce' ),
		'section' => 'emoza_section_main_header',
		'choices' => array(
			'left' 		=> esc_html__( 'Left', 'emoza-woocommerce' ),
			'center' 	=> esc_html__( 'Center', 'emoza-woocommerce' ),
			'right' 	=> esc_html__( 'Right', 'emoza-woocommerce' ),
		),
		'active_callback' => 'emoza_callback_header_layout_not_1'
	)
) );

$wp_customize->add_setting( 'header_container',
	array(
		'default' 			=> 'container-fluid',
		'sanitize_callback' => 'emoza_sanitize_text'
	)
);
$wp_customize->add_control( new Emoza_Radio_Buttons( $wp_customize, 'header_container',
	array(
		'label' 		=> esc_html__( 'Container type', 'emoza-woocommerce' ),
		'section' => 'emoza_section_main_header',
		'choices' => array(
			'container' 		=> esc_html__( 'Contained', 'emoza-woocommerce' ),
			'container-fluid' 	=> esc_html__( 'Fullwidth', 'emoza-woocommerce' ),
		)
	)
) );

$wp_customize->add_setting(
	'enable_sticky_header',
	array(
		'default'           => 0,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'enable_sticky_header',
		array(
			'label'         	=> esc_html__( 'Enable sticky header', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_main_header',
		)
	)
);

$wp_customize->add_setting( 'sticky_header_type',
	array(
		'default' 			=> 'always',
		'sanitize_callback' => 'emoza_sanitize_text'
	)
);
$wp_customize->add_control( new Emoza_Radio_Buttons( $wp_customize, 'sticky_header_type',
	array(
		'label' 		=> esc_html__( 'Sticky header type', 'emoza-woocommerce' ),
		'section' => 'emoza_section_main_header',
		'choices' => array(
			'always' 		=> esc_html__( 'Always sticky', 'emoza-woocommerce' ),
			'scrolltop' 	=> esc_html__( 'On scroll to top', 'emoza-woocommerce' ),
		),
		'active_callback' => 'emoza_callback_sticky_header',
	)
) );

$wp_customize->add_setting( 'header_divider_2',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Divider_Control( $wp_customize, 'header_divider_2',
		array(
			'section' 		=> 'emoza_section_main_header',
		)
	)
);

$wp_customize->add_setting( 'main_header_elements_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Text_Control( $wp_customize, 'main_header_elements_title',
		array(
			'label'			=> esc_html__( 'Elements', 'emoza-woocommerce' ),
			'section' 		=> 'emoza_section_main_header',
		)
	)
);

$header_components 	= emoza_header_elements();
$default_components = emoza_get_default_header_components();

//Layout 1&2 elements
$wp_customize->add_setting( 'header_components_l1', array(
	'default'  			=> $default_components['l1'],
	'sanitize_callback'	=> 'emoza_sanitize_header_components'
) );

$wp_customize->add_control( new \Kirki\Control\Sortable( $wp_customize, 'header_components_l1', array(
	'label'   			=> '',
	'section' 			=> 'emoza_section_main_header',
	'choices' 			=> $header_components,
	'active_callback' 	=> 'emoza_callback_header_layout_1_2',
) ) );

//Layout 3 elements
$wp_customize->add_setting( 'header_components_l3left', array(
	'default'  			=> $default_components['l3left'],
	'sanitize_callback'	=> 'emoza_sanitize_header_components'
) );

$wp_customize->add_control( new \Kirki\Control\Sortable( $wp_customize, 'header_components_l3left', array(
	'label'   			=> esc_html__( 'Left', 'emoza-woocommerce' ),
	'section' 			=> 'emoza_section_main_header',
	'choices' 			=> $header_components,
	'active_callback' 	=> 'emoza_callback_header_layout_3',
) ) );

$wp_customize->add_setting( 'header_components_l3right', array(
	'default'  			=> $default_components['l3right'],
	'sanitize_callback'	=> 'emoza_sanitize_header_components'
) );

$wp_customize->add_control( new \Kirki\Control\Sortable( $wp_customize, 'header_components_l3right', array(
	'label'   			=> esc_html__( 'Right', 'emoza-woocommerce' ),
	'section' 			=> 'emoza_section_main_header',
	'choices' 			=> $header_components,
	'active_callback' 	=> 'emoza_callback_header_layout_3',
) ) );

//Layout 4 elements
$wp_customize->add_setting( 'header_components_l4top', array(
	'default'  			=> $default_components['l4top'],
	'sanitize_callback'	=> 'emoza_sanitize_header_components'
) );

$wp_customize->add_control( new \Kirki\Control\Sortable( $wp_customize, 'header_components_l4top', array(
	'label'   			=> esc_html__( 'Top row', 'emoza-woocommerce' ),
	'section' 			=> 'emoza_section_main_header',
	'choices' 			=> $header_components,
	'active_callback' 	=> 'emoza_callback_header_layout_4',
) ) );

$wp_customize->add_setting( 'header_components_l4bottom', array(
	'default'  			=> $default_components['l4bottom'],
	'sanitize_callback'	=> 'emoza_sanitize_header_components'
) );

$wp_customize->add_control( new \Kirki\Control\Sortable( $wp_customize, 'header_components_l4bottom', array(
	'label'   			=> esc_html__( 'Bottom row', 'emoza-woocommerce' ),
	'section' 			=> 'emoza_section_main_header',
	'choices' 			=> $header_components,
	'active_callback' 	=> 'emoza_callback_header_layout_4',
) ) );

//Layout 5 elements
$wp_customize->add_setting( 'header_components_l5topleft', array(
	'default'  			=> $default_components['l5topleft'],
	'sanitize_callback'	=> 'emoza_sanitize_header_components'
) );

$wp_customize->add_control( new \Kirki\Control\Sortable( $wp_customize, 'header_components_l5topleft', array(
	'label'   			=> esc_html__( 'Top left', 'emoza-woocommerce' ),
	'section' 			=> 'emoza_section_main_header',
	'choices' 			=> $header_components,
	'active_callback' 	=> 'emoza_callback_header_layout_5',
) ) );

$wp_customize->add_setting( 'header_components_l5topright', array(
	'default'  			=> $default_components['l5topleft'],
	'sanitize_callback'	=> 'emoza_sanitize_header_components'
) );

$wp_customize->add_control( new \Kirki\Control\Sortable( $wp_customize, 'header_components_l5topright', array(
	'label'   			=> esc_html__( 'Top right', 'emoza-woocommerce' ),
	'section' 			=> 'emoza_section_main_header',
	'choices' 			=> $header_components,
	'active_callback' 	=> 'emoza_callback_header_layout_5',
) ) );

$wp_customize->add_setting( 'header_components_l5bottom', array(
	'default'  			=> $default_components['l5topleft'],
	'sanitize_callback'	=> 'emoza_sanitize_header_components'
) );

$wp_customize->add_control( new \Kirki\Control\Sortable( $wp_customize, 'header_components_l5bottom', array(
	'label'   			=> esc_html__( 'Bottom', 'emoza-woocommerce' ),
	'section' 			=> 'emoza_section_main_header',
	'choices' 			=> $header_components,
	'active_callback' 	=> 'emoza_callback_header_layout_5',
) ) );

/**
 * Elements
 */
//Cart&account icons
$wp_customize->add_setting( 'header_divider_3',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Divider_Control( $wp_customize, 'header_divider_3',
		array(
			'section' 		=> 'emoza_section_main_header',
			'active_callback' 	=> function() { return emoza_callback_header_elements( 'woocommerce_icons' ); }
		)
	)
);

$wp_customize->add_setting( 'main_header_cart_account_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Text_Control( $wp_customize, 'main_header_cart_account_title',
		array(
			'label'				=> esc_html__( 'Cart &amp; account icons', 'emoza-woocommerce' ),
			'section' 			=> 'emoza_section_main_header',
			'active_callback' 	=> function() { return emoza_callback_header_elements( 'woocommerce_icons' ); }
		)
	)
);

$wp_customize->add_setting(
	'enable_header_cart',
	array(
		'default'           => 1,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'enable_header_cart',
		array(
			'label'         	=> esc_html__( 'Enable cart icon', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_main_header',
			'active_callback' 	=> function() { return emoza_callback_header_elements( 'woocommerce_icons' ); }
		)
	)
);

$wp_customize->add_setting(
	'enable_header_account',
	array(
		'default'           => 1,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'enable_header_account',
		array(
			'label'         	=> esc_html__( 'Enable account icon', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_main_header',
			'active_callback' 	=> function() { return emoza_callback_header_elements( 'woocommerce_icons' ); }
		)
	)
);

//Button
$wp_customize->add_setting( 'header_divider_4',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Divider_Control( $wp_customize, 'header_divider_4',
		array(
			'section' 			=> 'emoza_section_main_header',
			'active_callback' 	=> function() { return emoza_callback_header_elements( 'button' ); }
		)
	)
);

$wp_customize->add_setting( 'main_header_button_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Text_Control( $wp_customize, 'main_header_button_title',
		array(
			'label'				=> esc_html__( 'Button', 'emoza-woocommerce' ),
			'section' 			=> 'emoza_section_main_header',
			'active_callback' 	=> function() { return emoza_callback_header_elements( 'button' ); }
		)
	)
);

$wp_customize->add_setting(
	'header_button_text',
	array(
		'sanitize_callback' => 'emoza_sanitize_text',
		'default'           => esc_html__( 'Click me', 'emoza-woocommerce' ),
	)       
);
$wp_customize->add_control( 'header_button_text', array(
	'label'       => esc_html__( 'Button text', 'emoza-woocommerce' ),
	'type'        => 'text',
	'section'     => 'emoza_section_main_header',
	'active_callback' 	=> function() { return emoza_callback_header_elements( 'button' ); }
) );

$wp_customize->add_setting(
	'header_button_link',
	array(
		'sanitize_callback' => 'esc_url_raw',
		'default'           => '#',
	)       
);
$wp_customize->add_control( 'header_button_link', array(
	'label'       => esc_html__( 'Button link', 'emoza-woocommerce' ),
	'type'        => 'text',
	'section'     => 'emoza_section_main_header',
	'active_callback' 	=> function() { return emoza_callback_header_elements( 'button' ); }
) );

$wp_customize->add_setting(
	'header_button_newtab',
	array(
		'default'           => 0,
		'sanitize_callback' => 'emoza_sanitize_checkbox',
	)
);
$wp_customize->add_control(
	new Emoza_Toggle_Control(
		$wp_customize,
		'header_button_newtab',
		array(
			'label'         	=> esc_html__( 'Open in a new tab?', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_main_header',
			'active_callback' 	=> function() { return emoza_callback_header_elements( 'button' ); }
		)
	)
);

//Contact info
$wp_customize->add_setting( 'header_divider_5',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Divider_Control( $wp_customize, 'header_divider_5',
		array(
			'section' 			=> 'emoza_section_main_header',
			'active_callback' 	=> function() { return emoza_callback_header_elements( 'contact_info' ); }
		)
	)
);

$wp_customize->add_setting( 'main_header_contact_info_title',
	array(
		'default' 			=> '',
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Text_Control( $wp_customize, 'main_header_contact_info_title',
		array(
			'label'				=> esc_html__( 'Contact info', 'emoza-woocommerce' ),
			'section' 			=> 'emoza_section_main_header',
			'active_callback' 	=> function() { return emoza_callback_header_elements( 'contact_info' ); }
		)
	)
);

$wp_customize->add_setting(
	'header_contact_mail',
	array(
		'sanitize_callback' => 'emoza_sanitize_text',
		'default'           => esc_html__( 'office@example.org', 'emoza-woocommerce' ),
	)       
);
$wp_customize->add_control( 'header_contact_mail', array(
	'label'       => esc_html__( 'Email address', 'emoza-woocommerce' ),
	'type'        => 'text',
	'section'     => 'emoza_section_main_header',
	'active_callback' 	=> function() { return emoza_callback_header_elements( 'contact_info' ); }
) );

$wp_customize->add_setting(
	'header_contact_phone',
	array(
		'sanitize_callback' => 'emoza_sanitize_text',
		'default'           => esc_html__( '111222333', 'emoza-woocommerce' ),
	)       
);
$wp_customize->add_control( 'header_contact_phone', array(
	'label'       => esc_html__( 'Phone number', 'emoza-woocommerce' ),
	'type'        => 'text',
	'section'     => 'emoza_section_main_header',
	'active_callback' 	=> function() { return emoza_callback_header_elements( 'contact_info' ); }
) );

/**
 * Styling
 */
$wp_customize->add_setting(
	'main_header_background',
	array(
		'default'           => '#fff',
		'sanitize_callback' => 'emoza_sanitize_hex_rgba',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new Emoza_Alpha_Color(
		$wp_customize,
		'main_header_background',
		array(
			'label'         	=> esc_html__( 'Background color', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_main_header',
		)
	)
);

$wp_customize->add_setting(
	'main_header_color',
	array(
		'default'           => '#212121',
		'sanitize_callback' => 'emoza_sanitize_hex_rgba',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new Emoza_Alpha_Color(
		$wp_customize,
		'main_header_color',
		array(
			'label'         	=> esc_html__( 'Text color', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_main_header',
		)
	)
);

$wp_customize->add_setting(
	'main_header_bottom_background',
	array(
		'default'           => '#fff',
		'sanitize_callback' => 'emoza_sanitize_hex_rgba',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new Emoza_Alpha_Color(
		$wp_customize,
		'main_header_bottom_background',
		array(
			'label'         	=> esc_html__( 'Bottom row background color', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_main_header',
            'active_callback'   => 'emoza_callback_header_bottom'
		)
	)
);

$wp_customize->add_setting(
	'main_header_bottom_color',
	array(
		'default'           => '#212121',
		'sanitize_callback' => 'emoza_sanitize_hex_rgba',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new Emoza_Alpha_Color(
		$wp_customize,
		'main_header_bottom_color',
		array(
			'label'         	=> esc_html__( 'Bottom row text color', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_main_header',
            'active_callback'   => 'emoza_callback_header_bottom'
		)
	)
);

$wp_customize->add_setting(
	'main_header_submenu_background',
	array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'emoza_sanitize_hex_rgba',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new Emoza_Alpha_Color(
		$wp_customize,
		'main_header_submenu_background',
		array(
			'label'         	=> esc_html__( 'Submenu background', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_main_header',
		)
	)
);

$wp_customize->add_setting(
	'main_header_submenu_color',
	array(
		'default'           => '#212121',
		'sanitize_callback' => 'emoza_sanitize_hex_rgba',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new Emoza_Alpha_Color(
		$wp_customize,
		'main_header_submenu_color',
		array(
			'label'         	=> esc_html__( 'Submenu color', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_main_header',
		)
	)
);

$wp_customize->add_setting( 'main_header_divider_6',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Divider_Control( $wp_customize, 'main_header_divider_6',
		array(
			'section' 			=> 'emoza_section_main_header',
		)
	)
);

$wp_customize->add_setting( 'main_header_padding', array(
	'default'   		=> 15,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_control( new Emoza_Responsive_Slider( $wp_customize, 'main_header_padding',
	array(
		'label' 		=> esc_html__( 'Padding', 'emoza-woocommerce' ),
		'section' 		=> 'emoza_section_main_header',
		'is_responsive'	=> 0,
		'settings' 		=> array (
			'size_desktop' 		=> 'main_header_padding',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 100
		)
	)
) );

$wp_customize->add_setting( 'main_header_bottom_padding', array(
	'default'   		=> 15,
	'transport'			=> 'postMessage',
	'sanitize_callback' => 'absint',
) );			

$wp_customize->add_control( new Emoza_Responsive_Slider( $wp_customize, 'main_header_bottom_padding',
	array(
		'label' 		=> esc_html__( 'Bottom row padding', 'emoza-woocommerce' ),
		'section' 		=> 'emoza_section_main_header',
		'is_responsive'	=> 0,
		'settings' 		=> array (
			'size_desktop' 		=> 'main_header_bottom_padding',
		),
		'input_attrs' => array (
			'min'	=> 0,
			'max'	=> 100
		),
		'active_callback'   => 'emoza_callback_header_bottom'
	)
) );


$wp_customize->add_setting( 'main_header_divider_7',
	array(
		'sanitize_callback' => 'esc_attr'
	)
);

$wp_customize->add_control( new Emoza_Divider_Control( $wp_customize, 'main_header_divider_7',
		array(
			'section' 			=> 'emoza_section_main_header',
		)
	)
);

$wp_customize->add_setting( 'main_header_divider_size', array(
	'sanitize_callback' => 'absint',
	'default' 			=> 0,
) );

$wp_customize->add_control( 'main_header_divider_size', array(
	'type' 				=> 'number',
	'section' 			=> 'emoza_section_main_header',
	'label' 			=> esc_html__( 'Border size', 'emoza-woocommerce' ),
) );

$wp_customize->add_setting(
	'main_header_divider_color',
	array(
		'default'           => 'rgba(33,33,33,0.1)',
		'sanitize_callback' => 'emoza_sanitize_hex_rgba',
		'transport'         => 'postMessage'
	)
);
$wp_customize->add_control(
	new Emoza_Alpha_Color(
		$wp_customize,
		'main_header_divider_color',
		array(
			'label'         	=> esc_html__( 'Border color', 'emoza-woocommerce' ),
			'section'       	=> 'emoza_section_main_header',
		)
	)
);

$wp_customize->add_setting( 'main_header_divider_width',
	array(
		'default' 			=> 'fullwidth',
		'sanitize_callback' => 'emoza_sanitize_text'
	)
);
$wp_customize->add_control( new Emoza_Radio_Buttons( $wp_customize, 'main_header_divider_width',
	array(
		'label' 	=> esc_html__( 'Border width', 'emoza-woocommerce' ),
		'section' 	=> 'emoza_section_main_header',
		'choices' 	=> array(
			'contained' 	=> esc_html__( 'Contained', 'emoza-woocommerce' ),
			'fullwidth' 	=> esc_html__( 'Full-width', 'emoza-woocommerce' ),
		),
	)
) );