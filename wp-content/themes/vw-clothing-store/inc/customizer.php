<?php
/**
 * VW Clothing Store Theme Customizer
 *
 * @package VW Clothing Store
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function vw_clothing_store_custom_controls() {
	load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'vw_clothing_store_custom_controls' );

function vw_clothing_store_customize_register( $wp_customize ) {


	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	load_template( trailingslashit( get_template_directory() ) . '/inc/icon-picker.php' );

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.logo .site-title a',
	 	'render_callback' => 'vw_clothing_store_Customize_partial_blogname',
	));

	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => 'p.site-description',
		'render_callback' => 'vw_clothing_store_Customize_partial_blogdescription',
	));

	// add home page setting pannel
	$wp_customize->add_panel( 'vw_clothing_store_panel_id', array(
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__( 'Homepage Settings', 'vw-clothing-store' ),
		'priority' => 10,
	));

 	// Header Background color
	$wp_customize->add_setting('vw_clothing_store_header_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_clothing_store_header_background_color', array(
		'label'    => __('Header Background Color', 'vw-clothing-store'),
		'section'  => 'header_image',
	)));

	$wp_customize->add_setting('vw_clothing_store_header_img_position',array(
	  'default' => 'center top',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_header_img_position',array(
		'type' => 'select',
		'label' => __('Header Image Position','vw-clothing-store'),
		'section' => 'header_image',
		'choices' 	=> array(
			'left top' 		=> esc_html__( 'Top Left', 'vw-clothing-store' ),
			'center top'   => esc_html__( 'Top', 'vw-clothing-store' ),
			'right top'   => esc_html__( 'Top Right', 'vw-clothing-store' ),
			'left center'   => esc_html__( 'Left', 'vw-clothing-store' ),
			'center center'   => esc_html__( 'Center', 'vw-clothing-store' ),
			'right center'   => esc_html__( 'Right', 'vw-clothing-store' ),
			'left bottom'   => esc_html__( 'Bottom Left', 'vw-clothing-store' ),
			'center bottom'   => esc_html__( 'Bottom', 'vw-clothing-store' ),
			'right bottom'   => esc_html__( 'Bottom Right', 'vw-clothing-store' ),
		),
		));

	//Menus Settings
	$wp_customize->add_section( 'vw_clothing_store_menu_section' , array(
    	'title' => __( 'Menus Settings', 'vw-clothing-store' ),
		'panel' => 'vw_clothing_store_panel_id'
	) );

	$wp_customize->add_setting('vw_clothing_store_navigation_menu_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_navigation_menu_font_size',array(
		'label'	=> __('Menus Font Size','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_menu_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_navigation_menu_font_weight',array(
        'default' => 500,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_navigation_menu_font_weight',array(
        'type' => 'select',
        'label' => __('Menus Font Weight','vw-clothing-store'),
        'section' => 'vw_clothing_store_menu_section',
        'choices' => array(
        	'100' => __('100','vw-clothing-store'),
            '200' => __('200','vw-clothing-store'),
            '300' => __('300','vw-clothing-store'),
            '400' => __('400','vw-clothing-store'),
            '500' => __('500','vw-clothing-store'),
            '600' => __('600','vw-clothing-store'),
            '700' => __('700','vw-clothing-store'),
            '800' => __('800','vw-clothing-store'),
            '900' => __('900','vw-clothing-store'),
        ),
	) );

	// text trasform
	$wp_customize->add_setting('vw_clothing_store_menu_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_menu_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Menu Text Transform','vw-clothing-store'),
		'choices' => array(
      'Uppercase' => __('Uppercase','vw-clothing-store'),
      'Capitalize' => __('Capitalize','vw-clothing-store'),
      'Lowercase' => __('Lowercase','vw-clothing-store'),
        ),
		'section'=> 'vw_clothing_store_menu_section',
	));

	$wp_customize->add_setting('vw_clothing_store_menus_item_style',array(
    'default' => '',
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_menus_item_style',array(
		'type' => 'select',
		'section' => 'vw_clothing_store_menu_section',
		'label' => __('Menu Item Hover Style','vw-clothing-store'),
		'choices' => array(
		    'None' => __('None','vw-clothing-store'),
        'Zoom In' => __('Zoom In','vw-clothing-store'),
        ),
	) );

	$wp_customize->add_setting('vw_clothing_store_header_menus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_clothing_store_header_menus_color', array(
		'label'    => __('Menus Color', 'vw-clothing-store'),
		'section'  => 'vw_clothing_store_menu_section',
	)));

	$wp_customize->add_setting('vw_clothing_store_header_menus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_clothing_store_header_menus_hover_color', array(
		'label'    => __('Menus Hover Color', 'vw-clothing-store'),
		'section'  => 'vw_clothing_store_menu_section',
	)));

	$wp_customize->add_setting('vw_clothing_store_header_submenus_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_clothing_store_header_submenus_color', array(
		'label'    => __('Sub Menus Color', 'vw-clothing-store'),
		'section'  => 'vw_clothing_store_menu_section',
	)));

	$wp_customize->add_setting('vw_clothing_store_header_submenus_hover_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_clothing_store_header_submenus_hover_color', array(
		'label'    => __('Sub Menus Hover Color', 'vw-clothing-store'),
		'section'  => 'vw_clothing_store_menu_section',
	)));


	//Topbar
	$wp_customize->add_section('vw_clothing_store_topbar_section' , array(
  		'title' => __( 'Topbar Section', 'vw-clothing-store' ),
		'panel' => 'vw_clothing_store_panel_id'
	) );

	$wp_customize->add_setting( 'vw_clothing_store_header_topbar',array(
    	'default' => 0,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
    ));
    $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_header_topbar',array(
      	'label' => esc_html__( 'Show / Hide Topbar','vw-clothing-store' ),
      	'section' => 'vw_clothing_store_topbar_section'
    )));

	$wp_customize->add_setting('vw_clothing_store_offer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_offer_text',array(
		'label'	=> esc_html__('Add Offer Text','vw-clothing-store'),
		'input_attrs' => array(
        'placeholder' => esc_html__( 'Populate this marketing banner to advertise a special promotion such as: Save 20% this weekend!', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_topbar_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_myaccount_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_myaccount_icon',array(
		'label'	=> __('Add Myaccount Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_topbar_section',
		'setting'	=> 'vw_clothing_store_myaccount_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('vw_clothing_store_heart_icon',array(
		'default'	=> 'fas fa-heart',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_heart_icon',array(
		'label'	=> __('Add Wishlist Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_topbar_section',
		'setting'	=> 'vw_clothing_store_heart_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('vw_clothing_store_cart_icon',array(
		'default'	=> 'fas fa-cart-plus',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_cart_icon',array(
		'label'	=> __('Add Cart Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_topbar_section',
		'setting'	=> 'vw_clothing_store_cart_icon',
		'type'		=> 'icon'
	)));

	//Banner section
  	$wp_customize->add_section('vw_clothing_store_banner',array(
		'title' => __('Banner Section','vw-clothing-store'),
		'priority'  => null,
		'panel' => 'vw_clothing_store_panel_id',
	)); 

	$wp_customize->add_setting( 'vw_clothing_store_show_hide_banner',array(
  	'default' => 0,
  	'transport' => 'refresh',
  	'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_show_hide_banner',array(
    	'label' => esc_html__( 'Show / Hide Banner','vw-clothing-store' ),
    	'section' => 'vw_clothing_store_banner'
  )));

	$wp_customize->add_setting('vw_clothing_store_banner_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'vw_clothing_store_banner_image',array(
      'label' => __('Banner Background Image','vw-clothing-store'),
      'description' => __('Image size (1400px x 750px)','vw-clothing-store'),
      'section' => 'vw_clothing_store_banner'
	)));

	$wp_customize->add_setting('vw_clothing_store_extra_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_clothing_store_extra_text',array(
		'label'	=> __('Banner Text','vw-clothing-store'),
		'section'	=> 'vw_clothing_store_banner',
		'input_attrs' => array(
    'placeholder' => __( '25% Off', 'vw-clothing-store' ),
        ),
		'type'		=> 'text'
	));

  $wp_customize->add_setting('vw_clothing_store_tagline_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_clothing_store_tagline_title',array(
		'label'	=> __('Banner Title','vw-clothing-store'),
		'section'	=> 'vw_clothing_store_banner',
		'input_attrs' => array(
    'placeholder' => __( 'Men Fashion Collection', 'vw-clothing-store' ),
        ),
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_designation_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('vw_clothing_store_designation_text',array(
		'label'	=> __('Banner Small Text','vw-clothing-store'),
		'section'	=> 'vw_clothing_store_banner',
		'type'		=> 'text',
		'input_attrs' => array(
    'placeholder' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'vw-clothing-store' ),
    ),
	));

	// Product 
	$wp_customize->add_setting( 'vw_clothing_store_show_hide_product',array(
		'default' => 0,
  	'transport' => 'refresh',
  	'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_show_hide_product',array(
  	'label' => esc_html__( 'Show / Hide Product','vw-clothing-store' ),
  	'section' => 'vw_clothing_store_banner'
  )));
	
	$args = array(
   'type'      => 'product',
    'taxonomy' => 'product_cat'
  );
	$categories = get_categories($args);
		$cat_posts = array();
			$i = 0;
			$cat_posts[]='Select';
		foreach($categories as $category){
			if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('vw_clothing_store_product_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'vw_clothing_store_sanitize_choices',
	));
	$wp_customize->add_control('vw_clothing_store_product_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Popular Product Category','vw-clothing-store'),
		'description' => __('Add more than three product in category','vw-clothing-store'),
		'section' => 'vw_clothing_store_banner',
	));

	//deal-of-the-day Section
	$wp_customize->add_section('vw_clothing_store_deal_of_the_day', array(
		'title'       => __('Deal Of The Day Section', 'vw-clothing-store'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-clothing-store'),
		'priority'    => null,
		'panel'       => 'vw_clothing_store_panel_id',
	));

	$wp_customize->add_setting('vw_clothing_store_deal_of_the_day_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_deal_of_the_day_text',array(
		'description' => __('<p>1. More options for deal of the day section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for deal of the day section.</p>','vw-clothing-store'),
		'section'=> 'vw_clothing_store_deal_of_the_day',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_clothing_store_deal_of_the_day_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_deal_of_the_day_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=vw_clothing_store_guide') ." '>More Info</a>",
		'section'=> 'vw_clothing_store_deal_of_the_day',
		'type'=> 'hidden'
	));

	//shipping Section
	$wp_customize->add_section('vw_clothing_store_shipping', array(
		'title'       => __('Shipping Section', 'vw-clothing-store'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-clothing-store'),
		'priority'    => null,
		'panel'       => 'vw_clothing_store_panel_id',
	));

	$wp_customize->add_setting('vw_clothing_store_shipping_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_shipping_text',array(
		'description' => __('<p>1. More options for shipping section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for shipping section.</p>','vw-clothing-store'),
		'section'=> 'vw_clothing_store_shipping',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_clothing_store_shipping_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_shipping_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=vw_clothing_store_guide') ." '>More Info</a>",
		'section'=> 'vw_clothing_store_shipping',
		'type'=> 'hidden'
	));

	//trending product Section
	$wp_customize->add_section('vw_clothing_store_trending_product', array(
		'title'       => __('Trending Product Section', 'vw-clothing-store'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-clothing-store'),
		'priority'    => null,
		'panel'       => 'vw_clothing_store_panel_id',
	));

	$wp_customize->add_setting('vw_clothing_store_trending_product_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_trending_product_text',array(
		'description' => __('<p>1. More options for trending product section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for trending product section.</p>','vw-clothing-store'),
		'section'=> 'vw_clothing_store_trending_product',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_clothing_store_trending_product_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_trending_product_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=vw_clothing_store_guide') ." '>More Info</a>",
		'section'=> 'vw_clothing_store_trending_product',
		'type'=> 'hidden'
	));

	//new born clothes Section
	$wp_customize->add_section('vw_clothing_store_new_born_clothes', array(
		'title'       => __('New Born Clothes Section', 'vw-clothing-store'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-clothing-store'),
		'priority'    => null,
		'panel'       => 'vw_clothing_store_panel_id',
	));

	$wp_customize->add_setting('vw_clothing_store_new_born_clothes_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_new_born_clothes_text',array(
		'description' => __('<p>1. More options for deal of the day section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for deal of the day section.</p>','vw-clothing-store'),
		'section'=> 'vw_clothing_store_new_born_clothes',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_clothing_store_new_born_clothes_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_new_born_clothes_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=vw_clothing_store_guide') ." '>More Info</a>",
		'section'=> 'vw_clothing_store_new_born_clothes',
		'type'=> 'hidden'
	));

	//our collections Section
	$wp_customize->add_section('vw_clothing_store_our_collections', array(
		'title'       => __('Our Collections Section', 'vw-clothing-store'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-clothing-store'),
		'priority'    => null,
		'panel'       => 'vw_clothing_store_panel_id',
	));

	$wp_customize->add_setting('vw_clothing_store_our_collections_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_our_collections_text',array(
		'description' => __('<p>1. More options for deal of the day section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for deal of the day section.</p>','vw-clothing-store'),
		'section'=> 'vw_clothing_store_our_collections',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_clothing_store_our_collections_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_our_collections_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=vw_clothing_store_guide') ." '>More Info</a>",
		'section'=> 'vw_clothing_store_our_collections',
		'type'=> 'hidden'
	));

	//Partner Section
	$wp_customize->add_section('vw_clothing_store_partner', array(
		'title'       => __('Partner Section', 'vw-clothing-store'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-clothing-store'),
		'priority'    => null,
		'panel'       => 'vw_clothing_store_panel_id',
	));

	$wp_customize->add_setting('vw_clothing_store_partner_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_partner_text',array(
		'description' => __('<p>1. More options for partner section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for partner section.</p>','vw-clothing-store'),
		'section'=> 'vw_clothing_store_partner',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_clothing_store_partner_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_partner_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=vw_clothing_store_guide') ." '>More Info</a>",
		'section'=> 'vw_clothing_store_partner',
		'type'=> 'hidden'
	));

	//winter trends Section
	$wp_customize->add_section('vw_clothing_store_winter_trends', array(
		'title'       => __('Winter Trends Section', 'vw-clothing-store'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-clothing-store'),
		'priority'    => null,
		'panel'       => 'vw_clothing_store_panel_id',
	));

	$wp_customize->add_setting('vw_clothing_store_winter_trends_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_winter_trends_text',array(
		'description' => __('<p>1. More options for winter trends section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for winter trends section.</p>','vw-clothing-store'),
		'section'=> 'vw_clothing_store_winter_trends',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_clothing_store_winter_trends_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_winter_trends_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=vw_clothing_store_guide') ." '>More Info</a>",
		'section'=> 'vw_clothing_store_winter_trends',
		'type'=> 'hidden'
	));

	// Product Section
	$wp_customize->add_section('vw_clothing_store_products_section',array(
		'title'	=> __('Products Section','vw-clothing-store'),
		'panel' => 'vw_clothing_store_panel_id',
	));

	$args = array(
       'type'      => 'product',
        'taxonomy' => 'product_cat'
    );
	$categories = get_categories($args);
		$cat_posts = array();
			$i = 0;
			$cat_posts[]='Select';
		foreach($categories as $category){
			if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_posts[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('vw_clothing_store_best_product_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'vw_clothing_store_sanitize_choices',
	));
	$wp_customize->add_control('vw_clothing_store_best_product_category',array(
		'type'    => 'select',
		'choices' => $cat_posts,
		'label' => __('Select Product Category','vw-clothing-store'),
		'section' => 'vw_clothing_store_products_section',
	));

	$wp_customize->add_setting('vw_clothing_store_product_clock_timer_end', array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('vw_clothing_store_product_clock_timer_end', array(
		'label' => __('Enter End Date of Timer','vw-clothing-store'),
		'section' => 'vw_clothing_store_products_section',
		'description' => __('Timer get the current date and time. So you just need to add the end date. Please Use the following format to add the date "Month date year hours:minutes:seconds" example "June 3 2024 11:00:00".','vw-clothing-store'),
		'type'=> 'text',
	));

	$wp_customize->add_setting( 'vw_clothing_store_new_collection_heading', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'vw_clothing_store_new_collection_heading', array(
		'label'    => __( 'Add Section Heading', 'vw-clothing-store' ),
		'input_attrs' => array(
            'placeholder' => __( 'New Collection', 'vw-clothing-store' ),
        ),
		'section'  => 'vw_clothing_store_products_section',
		'type'     => 'text'
	) );

	$wp_customize->add_setting( 'vw_clothing_store_featured_small_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'vw_clothing_store_featured_small_title', array(
		'label'    => __( 'Add Section Small Text', 'vw-clothing-store' ),
		'input_attrs' => array(
            'placeholder' => __( 'Lorem Ipsum is simply dummy text of the printing.', 'vw-clothing-store' ),
        ),
		'section'  => 'vw_clothing_store_products_section',
		'type'     => 'text'
	) );

	$wp_customize->add_setting( 'vw_clothing_store_trending_collection_heading', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'vw_clothing_store_trending_collection_heading', array(
		'label'    => __( 'Add Section Heading', 'vw-clothing-store' ),
		'input_attrs' => array(
            'placeholder' => __( 'Trending Collection', 'vw-clothing-store' ),
        ),
		'section'  => 'vw_clothing_store_products_section',
		'type'     => 'text'
	) );

	$wp_customize->add_setting( 'vw_clothing_store_trending_collection_small_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'vw_clothing_store_trending_collection_small_title', array(
		'label'    => __( 'Add Section Small Text', 'vw-clothing-store' ),
		'input_attrs' => array(
            'placeholder' => __( 'Lorem Ipsum is simply dummy text of the printing.', 'vw-clothing-store' ),
        ),
		'section'  => 'vw_clothing_store_products_section',
		'type'     => 'text'
	) );

	$wp_customize->add_setting( 'vw_clothing_store_trending_collection_heading', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'vw_clothing_store_trending_collection_heading', array(
		'label'    => __( 'Add Section Heading', 'vw-clothing-store' ),
		'input_attrs' => array(
            'placeholder' => __( 'Trending Collection', 'vw-clothing-store' ),
        ),
		'section'  => 'vw_clothing_store_products_section',
		'type'     => 'text'
	) );

	$wp_customize->add_setting( 'vw_clothing_store_trending_collection_small_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'vw_clothing_store_trending_collection_small_title', array(
		'label'    => __( 'Add Section Small Text', 'vw-clothing-store' ),
		'input_attrs' => array(
            'placeholder' => __( 'Lorem Ipsum is simply dummy text of the printing.', 'vw-clothing-store' ),
        ),
		'section'  => 'vw_clothing_store_products_section',
		'type'     => 'text'
	) );

	$wp_customize->add_setting( 'vw_clothing_store_featured_collection_heading', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'vw_clothing_store_featured_collection_heading', array(
		'label'    => __( 'Add Section Heading', 'vw-clothing-store' ),
		'input_attrs' => array(
            'placeholder' => __( 'Featured Collection', 'vw-clothing-store' ),
        ),
		'section'  => 'vw_clothing_store_products_section',
		'type'     => 'text'
	) );

	$wp_customize->add_setting( 'vw_clothing_store_featured_collection_small_title', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'vw_clothing_store_featured_collection_small_title', array(
		'label'    => __( 'Add Section Small Text', 'vw-clothing-store' ),
		'input_attrs' => array(
            'placeholder' => __( 'Lorem Ipsum is simply dummy text of the printing.', 'vw-clothing-store' ),
        ),
		'section'  => 'vw_clothing_store_products_section',
		'type'     => 'text'
	) );

	//our blog Section
	$wp_customize->add_section('vw_clothing_store_our_blog', array(
		'title'       => __('Our Blog Section', 'vw-clothing-store'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-clothing-store'),
		'priority'    => null,
		'panel'       => 'vw_clothing_store_panel_id',
	));

	$wp_customize->add_setting('vw_clothing_store_our_blog_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_our_blog_text',array(
		'description' => __('<p>1. More options for our blog section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for our blog section.</p>','vw-clothing-store'),
		'section'=> 'vw_clothing_store_our_blog',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_clothing_store_our_blog_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_our_blog_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=vw_clothing_store_guide') ." '>More Info</a>",
		'section'=> 'vw_clothing_store_our_blog',
		'type'=> 'hidden'
	));

	//use code Section
	$wp_customize->add_section('vw_clothing_store_use_code', array(
		'title'       => __('Use Code Section', 'vw-clothing-store'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-clothing-store'),
		'priority'    => null,
		'panel'       => 'vw_clothing_store_panel_id',
	));

	$wp_customize->add_setting('vw_clothing_store_use_code_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_use_code_text',array(
		'description' => __('<p>1. More options for use code section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for use code section.</p>','vw-clothing-store'),
		'section'=> 'vw_clothing_store_use_code',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_clothing_store_use_code_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_use_code_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=vw_clothing_store_guide') ." '>More Info</a>",
		'section'=> 'vw_clothing_store_use_code',
		'type'=> 'hidden'
	));

	//instagram Section
	$wp_customize->add_section('vw_clothing_store_instagram', array(
		'title'       => __('Instagram Section', 'vw-clothing-store'),
		'description' => __('<p class="premium-opt">Premium Theme Features</p>','vw-clothing-store'),
		'priority'    => null,
		'panel'       => 'vw_clothing_store_panel_id',
	));

	$wp_customize->add_setting('vw_clothing_store_instagram_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_instagram_text',array(
		'description' => __('<p>1. More options for winter trends section.</p>
			<p>2. Unlimited images options.</p>
			<p>3. Color options for winter trends section.</p>','vw-clothing-store'),
		'section'=> 'vw_clothing_store_instagram',
		'type'=> 'hidden'
	));

	$wp_customize->add_setting('vw_clothing_store_instagram_btn',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_instagram_btn',array(
		'description' => "<a class='go-pro' target='_blank' href='". admin_url('themes.php?page=vw_clothing_store_guide') ." '>More Info</a>",
		'section'=> 'vw_clothing_store_instagram',
		'type'=> 'hidden'
	));

	//Footer Text
	$wp_customize->add_section('vw_clothing_store_footer',array(
		'title'	=> esc_html__('Footer Settings','vw-clothing-store'),
		'panel' => 'vw_clothing_store_panel_id',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('vw_clothing_store_footer_text', array(
		'selector' => '.copyright p',
		'render_callback' => 'vw_clothing_store_Customize_partial_vw_clothing_store_footer_text',
	));

  $wp_customize->add_setting( 'vw_clothing_store_footer_hide_show',array(
      'default' => 1,
      'transport' => 'refresh',
      'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_footer_hide_show',array(
    'label' => esc_html__( 'Show / Hide Footer','vw-clothing-store' ),
    'section' => 'vw_clothing_store_footer'
  )));

	// font size button
	$wp_customize->add_setting('vw_clothing_store_button_footer_font_size',array(
		'default'=> '30px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_button_footer_font_size',array(
		'label'	=> __('Footer Heading Font Size','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
  		'placeholder' => __( '10px', 'vw-clothing-store' ),
    ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'vw_clothing_store_footer',
	));

	$wp_customize->add_setting('vw_clothing_store_button_footer_heading_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_button_footer_heading_letter_spacing',array(
		'label'	=> __('Heading Letter Spacing','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'vw-clothing-store' ),
  ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'vw_clothing_store_footer',
	));

	// text trasform
	$wp_customize->add_setting('vw_clothing_store_button_footer_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_button_footer_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Heading Text Transform','vw-clothing-store'),
		'choices' => array(
      'Uppercase' => __('Uppercase','vw-clothing-store'),
      'Capitalize' => __('Capitalize','vw-clothing-store'),
      'Lowercase' => __('Lowercase','vw-clothing-store'),
    ),
		'section'=> 'vw_clothing_store_footer',
	));

	$wp_customize->add_setting('vw_clothing_store_footer_heading_weight',array(
        'default' => 600,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_footer_heading_weight',array(
        'type' => 'select',
        'label' => __('Heading Font Weight','vw-clothing-store'),
        'section' => 'vw_clothing_store_footer',
        'choices' => array(
        	'100' => __('100','vw-clothing-store'),
            '200' => __('200','vw-clothing-store'),
            '300' => __('300','vw-clothing-store'),
            '400' => __('400','vw-clothing-store'),
            '500' => __('500','vw-clothing-store'),
            '600' => __('600','vw-clothing-store'),
            '700' => __('700','vw-clothing-store'),
            '800' => __('800','vw-clothing-store'),
            '900' => __('900','vw-clothing-store'),
        ),
	) );


  $wp_customize->add_setting('vw_clothing_store_footer_template',array(
      'default'	=> esc_html('vw_clothing_store-footer-one'),
      'sanitize_callback'	=> 'vw_clothing_store_sanitize_choices'	
  ));
  $wp_customize->add_control('vw_clothing_store_footer_template',array(
          'label'	=> esc_html__('Footer style','vw-clothing-store'),
          'section'	=> 'vw_clothing_store_footer',
          'setting'	=> 'vw_clothing_store_footer_template',
          'type' => 'select',
          'choices' => array(
              'vw_clothing_store-footer-one' => esc_html__('Style 1', 'vw-clothing-store'),
              'vw_clothing_store-footer-two' => esc_html__('Style 2', 'vw-clothing-store'),
              'vw_clothing_store-footer-three' => esc_html__('Style 3', 'vw-clothing-store'),
              'vw_clothing_store-footer-four' => esc_html__('Style 4', 'vw-clothing-store'),
              'vw_clothing_store-footer-five' => esc_html__('Style 5', 'vw-clothing-store'),
              )
  ));	

	$wp_customize->add_setting('vw_clothing_store_footer_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_clothing_store_footer_background_color', array(
		'label'    => __('Footer Background Color', 'vw-clothing-store'),
		'section'  => 'vw_clothing_store_footer',
	)));

	$wp_customize->add_setting('vw_clothing_store_footer_background_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'vw_clothing_store_footer_background_image',array(
    'label' => __('Footer Background Image','vw-clothing-store'),
    'section' => 'vw_clothing_store_footer'
	)));

	$wp_customize->add_setting('vw_clothing_store_footer_img_position',array(
	  'default' => 'center center',
	  'transport' => 'refresh',
	  'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_footer_img_position',array(
		'type' => 'select',
		'label' => __('Footer Image Position','vw-clothing-store'),
		'section' => 'vw_clothing_store_footer',
		'choices' 	=> array(
				'left top' 		=> esc_html__( 'Top Left', 'vw-clothing-store' ),
				'center top'   => esc_html__( 'Top', 'vw-clothing-store' ),
				'right top'   => esc_html__( 'Top Right', 'vw-clothing-store' ),
				'left center'   => esc_html__( 'Left', 'vw-clothing-store' ),
				'center center'   => esc_html__( 'Center', 'vw-clothing-store' ),
				'right center'   => esc_html__( 'Right', 'vw-clothing-store' ),
				'left bottom'   => esc_html__( 'Bottom Left', 'vw-clothing-store' ),
				'center bottom'   => esc_html__( 'Bottom', 'vw-clothing-store' ),
				'right bottom'   => esc_html__( 'Bottom Right', 'vw-clothing-store' ),
		),
	));

	// Footer
	$wp_customize->add_setting('vw_clothing_store_img_footer',array(
		'default'=> 'scroll',
		'sanitize_callback'	=> 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_img_footer',array(
		'type' => 'select',
		'label'	=> __('Footer Background Attatchment','vw-clothing-store'),
		'choices' => array(
        'fixed' => __('fixed','vw-clothing-store'),
        'scroll' => __('scroll','vw-clothing-store'),
    ),
		'section'=> 'vw_clothing_store_footer',
	));


  // footer padding
  $wp_customize->add_setting('vw_clothing_store_footer_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_clothing_store_footer_padding',array(
    'label' => __('Footer Top Bottom Padding','vw-clothing-store'),
    'description' => __('Enter a value in pixels. Example:20px','vw-clothing-store'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-clothing-store' ),
    ),
    'section'=> 'vw_clothing_store_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('vw_clothing_store_footer_widgets_heading',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
  ));
  $wp_customize->add_control('vw_clothing_store_footer_widgets_heading',array(
    'type' => 'select',
    'label' => __('Footer Widget Heading','vw-clothing-store'),
    'section' => 'vw_clothing_store_footer',
    'choices' => array(
      'Left' => __('Left','vw-clothing-store'),
      'Center' => __('Center','vw-clothing-store'),
      'Right' => __('Right','vw-clothing-store')
    ),
  ) );

  $wp_customize->add_setting('vw_clothing_store_footer_widgets_content',array(
    'default' => 'Left',
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
  ));
  $wp_customize->add_control('vw_clothing_store_footer_widgets_content',array(
    'type' => 'select',
    'label' => __('Footer Widget Content','vw-clothing-store'),
    'section' => 'vw_clothing_store_footer',
    'choices' => array(
      'Left' => __('Left','vw-clothing-store'),
      'Center' => __('Center','vw-clothing-store'),
      'Right' => __('Right','vw-clothing-store')
    ),
  	) );

	$wp_customize->add_setting('vw_clothing_store_footer_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_footer_text',array(
		'label'	=> esc_html__('Copyright Text','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Copyright 2021, .....', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_footer',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'vw_clothing_store_copyright_hide_show',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
	));
	$wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_copyright_hide_show',array(
		'label' => esc_html__( 'Show / Hide Copyright','vw-clothing-store' ),
		'section' => 'vw_clothing_store_footer'
	)));

	$wp_customize->add_setting('vw_clothing_store_copyright_alingment',array(
        'default' => 'center',
        'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Image_Radio_Control($wp_customize, 'vw_clothing_store_copyright_alingment', array(
        'type' => 'select',
        'label' => esc_html__('Copyright Alignment','vw-clothing-store'),
        'section' => 'vw_clothing_store_footer',
        'settings' => 'vw_clothing_store_copyright_alingment',
        'choices' => array(
            'left' => esc_url(get_template_directory_uri()).'/assets/images/copyright1.png',
            'center' => esc_url(get_template_directory_uri()).'/assets/images/copyright2.png',
            'right' => esc_url(get_template_directory_uri()).'/assets/images/copyright3.png'
    ))));

	$wp_customize->add_setting('vw_clothing_store_copyright_background_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_clothing_store_copyright_background_color', array(
		'label'    => __('Copyright Background Color', 'vw-clothing-store'),
		'section'  => 'vw_clothing_store_footer',
	)));

	$wp_customize->add_setting('vw_clothing_store_copyright_font_size',array(
		'default'=> '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_copyright_font_size',array(
		'label' => __('Copyright Font Size','vw-clothing-store'),
		'description' => __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
		        'placeholder' => __( '10px', 'vw-clothing-store' ),
		    ),
		'section'=> 'vw_clothing_store_footer',
		'type'=> 'text'
	));

    $wp_customize->add_setting( 'vw_clothing_store_hide_show_scroll',array(
    	'default' => 1,
      	'transport' => 'refresh',
      	'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
    ));
    $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_hide_show_scroll',array(
      	'label' => esc_html__( 'Show / Hide Scroll to Top','vw-clothing-store' ),
      	'section' => 'vw_clothing_store_footer'
    )));

    //Selective Refresh
	$wp_customize->selective_refresh->add_partial('vw_clothing_store_scroll_to_top_icon', array(
		'selector' => '.scrollup i',
		'render_callback' => 'vw_clothing_store_Customize_partial_vw_clothing_store_scroll_to_top_icon',
	));

    $wp_customize->add_setting('vw_clothing_store_scroll_top_alignment',array(
        'default' => 'Right',
        'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Image_Radio_Control($wp_customize, 'vw_clothing_store_scroll_top_alignment', array(
        'type' => 'select',
        'label' => esc_html__('Scroll To Top','vw-clothing-store'),
        'section' => 'vw_clothing_store_footer',
        'settings' => 'vw_clothing_store_scroll_top_alignment',
        'choices' => array(
            'Left' => esc_url(get_template_directory_uri()).'/assets/images/layout1.png',
            'Center' => esc_url(get_template_directory_uri()).'/assets/images/layout2.png',
            'Right' => esc_url(get_template_directory_uri()).'/assets/images/layout3.png'
    ))));

     $wp_customize->add_setting('vw_clothing_store_scroll_top_icon',array(
    'default' => 'fas fa-long-arrow-alt-up',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser($wp_customize,'vw_clothing_store_scroll_top_icon',array(
    'label' => __('Add Scroll to Top Icon','vw-clothing-store'),
    'transport' => 'refresh',
    'section' => 'vw_clothing_store_footer',
    'setting' => 'vw_clothing_store_scroll_top_icon',
    'type'    => 'icon'
  )));

  $wp_customize->add_setting('vw_clothing_store_scroll_to_top_font_size',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_clothing_store_scroll_to_top_font_size',array(
    'label' => __('Icon Font Size','vw-clothing-store'),
    'description' => __('Enter a value in pixels. Example:20px','vw-clothing-store'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-clothing-store' ),
    ),
    'section'=> 'vw_clothing_store_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('vw_clothing_store_scroll_to_top_padding',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_clothing_store_scroll_to_top_padding',array(
    'label' => __('Icon Top Bottom Padding','vw-clothing-store'),
    'description' => __('Enter a value in pixels. Example:20px','vw-clothing-store'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-clothing-store' ),
    ),
    'section'=> 'vw_clothing_store_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting('vw_clothing_store_scroll_to_top_width',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_clothing_store_scroll_to_top_width',array(
    'label' => __('Icon Width','vw-clothing-store'),
    'description' => __('Enter a value in pixels Example:20px','vw-clothing-store'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-clothing-store' ),
  ),
  'section'=> 'vw_clothing_store_footer',
  'type'=> 'text'
  ));

  $wp_customize->add_setting('vw_clothing_store_scroll_to_top_height',array(
    'default'=> '',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  $wp_customize->add_control('vw_clothing_store_scroll_to_top_height',array(
    'label' => __('Icon Height','vw-clothing-store'),
    'description' => __('Enter a value in pixels. Example:20px','vw-clothing-store'),
    'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-clothing-store' ),
    ),
    'section'=> 'vw_clothing_store_footer',
    'type'=> 'text'
  ));

  $wp_customize->add_setting( 'vw_clothing_store_scroll_to_top_border_radius', array(
    'default'              => '',
    'transport'        => 'refresh',
    'sanitize_callback'    => 'vw_clothing_store_sanitize_number_range'
  ) );
  $wp_customize->add_control( 'vw_clothing_store_scroll_to_top_border_radius', array(
    'label'       => esc_html__( 'Icon Border Radius','vw-clothing-store' ),
    'section'     => 'vw_clothing_store_footer',
    'type'        => 'range',
    'input_attrs' => array(
      'step'             => 1,
      'min'              => 1,
      'max'              => 50,
    ),
  ) );

   	//Blog Post
	$wp_customize->add_panel( 'vw_clothing_store_blog_post_parent_panel', array(
		'title' => esc_html__( 'Blog Post Settings', 'vw-clothing-store' ),
		'panel' => 'vw_clothing_store_panel_id',
		'priority' => 20,
	));

	// Add example section and controls to the middle (second) panel
	$wp_customize->add_section( 'vw_clothing_store_post_settings', array(
		'title' => esc_html__( 'Post Settings', 'vw-clothing-store' ),
		'panel' => 'vw_clothing_store_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('vw_clothing_store_toggle_postdate', array(
		'selector' => '.post-main-box h2 a',
		'render_callback' => 'vw_clothing_store_Customize_partial_vw_clothing_store_toggle_postdate',
	));

	//Blog layout
  $wp_customize->add_setting('vw_clothing_store_blog_layout_option',array(
    'default' => 'Default',
    'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
  ));
  $wp_customize->add_control(new VW_Clothing_Store_Image_Radio_Control($wp_customize, 'vw_clothing_store_blog_layout_option', array(
    'type' => 'select',
    'label' => __('Blog Post Layouts','vw-clothing-store'),
    'section' => 'vw_clothing_store_post_settings',
    'choices' => array(
        'Default' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout1.png',
        'Center' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout2.png',
        'Left' => esc_url(get_template_directory_uri()).'/assets/images/blog-layout3.png',
  ))));

	$wp_customize->add_setting('vw_clothing_store_theme_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_theme_options',array(
        'type' => 'select',
        'label' => esc_html__('Post Sidebar Layout','vw-clothing-store'),
        'description' => esc_html__('Here you can change the sidebar layout for posts. ','vw-clothing-store'),
        'section' => 'vw_clothing_store_post_settings',
        'choices' => array(
            'Left Sidebar' => esc_html__('Left Sidebar','vw-clothing-store'),
            'Right Sidebar' => esc_html__('Right Sidebar','vw-clothing-store'),
            'One Column' => esc_html__('One Column','vw-clothing-store'),
     		'Three Columns' => __('Three Columns','vw-clothing-store'),
        	'Four Columns' => __('Four Columns','vw-clothing-store'),
            'Grid Layout' => esc_html__('Grid Layout','vw-clothing-store')
        ),
	) );

  	$wp_customize->add_setting('vw_clothing_store_toggle_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_toggle_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_post_settings',
		'setting'	=> 'vw_clothing_store_toggle_postdate_icon',
		'type'		=> 'icon'
	)));

 	$wp_customize->add_setting( 'vw_clothing_store_blog_toggle_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_blog_toggle_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','vw-clothing-store' ),
    'section' => 'vw_clothing_store_post_settings'
  )));

	$wp_customize->add_setting('vw_clothing_store_toggle_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_toggle_author_icon',array(
		'label'	=> __('Add Author Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_post_settings',
		'setting'	=> 'vw_clothing_store_toggle_author_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'vw_clothing_store_blog_toggle_author',array(
	'default' => 1,
	'transport' => 'refresh',
	'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_blog_toggle_author',array(
	'label' => esc_html__( 'Show / Hide Author','vw-clothing-store' ),
	'section' => 'vw_clothing_store_post_settings'
  )));

  $wp_customize->add_setting('vw_clothing_store_toggle_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_toggle_comments_icon',array(
		'label'	=> __('Add Comments Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_post_settings',
		'setting'	=> 'vw_clothing_store_toggle_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'vw_clothing_store_blog_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_blog_toggle_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','vw-clothing-store' ),
		'section' => 'vw_clothing_store_post_settings'
  )));

  $wp_customize->add_setting('vw_clothing_store_toggle_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_toggle_time_icon',array(
		'label'	=> __('Add Time Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_post_settings',
		'setting'	=> 'vw_clothing_store_toggle_time_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'vw_clothing_store_blog_toggle_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_blog_toggle_time',array(
		'label' => esc_html__( 'Show / Hide Time','vw-clothing-store' ),
		'section' => 'vw_clothing_store_post_settings'
  )));

  $wp_customize->add_setting( 'vw_clothing_store_featured_image_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
	));
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_featured_image_hide_show', array(
		'label' => esc_html__( 'Show / Hide Featured Image','vw-clothing-store' ),
		'section' => 'vw_clothing_store_post_settings'
  )));

  $wp_customize->add_setting( 'vw_clothing_store_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_clothing_store_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_clothing_store_featured_image_border_radius', array(
		'label'       => esc_html__( 'Featured Image Border Radius','vw-clothing-store' ),
		'section'     => 'vw_clothing_store_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'vw_clothing_store_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_clothing_store_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_clothing_store_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Featured Image Box Shadow','vw-clothing-store' ),
		'section'     => 'vw_clothing_store_post_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Featured Image
	$wp_customize->add_setting('vw_clothing_store_blog_post_featured_image_dimension',array(
       'default' => 'default',
       'sanitize_callback'	=> 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_blog_post_featured_image_dimension',array(
		'type' => 'select',
		'label'	=> __('Blog Post Featured Image Dimension','vw-clothing-store'),
		'section'	=> 'vw_clothing_store_post_settings',
		'choices' => array(
		'default' => __('Default','vw-clothing-store'),
		'custom' => __('Custom Image Size','vw-clothing-store'),
      ),
	));

	$wp_customize->add_setting('vw_clothing_store_blog_post_featured_image_custom_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
		));
	$wp_customize->add_control('vw_clothing_store_blog_post_featured_image_custom_width',array(
		'label'	=> __('Featured Image Custom Width','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'vw-clothing-store' ),),
		'section'=> 'vw_clothing_store_post_settings',
		'type'=> 'text',
		'active_callback' => 'vw_clothing_store_blog_post_featured_image_dimension'
		));

	$wp_customize->add_setting('vw_clothing_store_blog_post_featured_image_custom_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_blog_post_featured_image_custom_height',array(
		'label'	=> __('Featured Image Custom Height','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
    	'placeholder' => __( '10px', 'vw-clothing-store' ),),
		'section'=> 'vw_clothing_store_post_settings',
		'type'=> 'text',
		'active_callback' => 'vw_clothing_store_blog_post_featured_image_dimension'
	));

  $wp_customize->add_setting( 'vw_clothing_store_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_clothing_store_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_clothing_store_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','vw-clothing-store' ),
		'section'     => 'vw_clothing_store_post_settings',
		'type'        => 'range',
		'settings'    => 'vw_clothing_store_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('vw_clothing_store_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','vw-clothing-store'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','vw-clothing-store'),
		'section'=> 'vw_clothing_store_post_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('vw_clothing_store_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Post Content','vw-clothing-store'),
    'section' => 'vw_clothing_store_post_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','vw-clothing-store'),
        'Excerpt' => esc_html__('Excerpt','vw-clothing-store'),
        'No Content' => esc_html__('No Content','vw-clothing-store')
        ),
	) );

  $wp_customize->add_setting('vw_clothing_store_blog_page_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_blog_page_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Blog Posts','vw-clothing-store'),
    'section' => 'vw_clothing_store_post_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','vw-clothing-store'),
        'Without Blocks' => __('Without Blocks','vw-clothing-store')
        ),
	) );

	$wp_customize->add_setting( 'vw_clothing_store_blog_pagination_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_blog_pagination_hide_show',array(
		'label' => esc_html__( 'Show / Hide Blog Pagination','vw-clothing-store' ),
		'section' => 'vw_clothing_store_post_settings'
  )));

	$wp_customize->add_setting('vw_clothing_store_blog_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_blog_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( '[...]', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_post_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'vw_clothing_store_blog_pagination_type', array(
    'default'			=> 'blog-page-numbers',
    'sanitize_callback'	=> 'vw_clothing_store_sanitize_choices'
  ));
  $wp_customize->add_control( 'vw_clothing_store_blog_pagination_type', array(
    'section' => 'vw_clothing_store_post_settings',
    'type' => 'select',
    'label' => __( 'Blog Pagination', 'vw-clothing-store' ),
    'choices'		=> array(
        'blog-page-numbers'  => __( 'Numeric', 'vw-clothing-store' ),
        'next-prev' => __( 'Older Posts/Newer Posts', 'vw-clothing-store' ),
  )));

    // Button Settings
	$wp_customize->add_section( 'vw_clothing_store_button_settings', array(
		'title' => esc_html__( 'Button Settings', 'vw-clothing-store' ),
		'panel' => 'vw_clothing_store_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('vw_clothing_store_button_text', array(
		'selector' => '.post-main-box .more-btn a',
		'render_callback' => 'vw_clothing_store_Customize_partial_vw_clothing_store_button_text',
	));

  $wp_customize->add_setting('vw_clothing_store_button_text',array(
		'default'=> esc_html__('Read More','vw-clothing-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_button_text',array(
		'label'	=> esc_html__('Add Button Text','vw-clothing-store'),
		'input_attrs' => array(
    'placeholder' => esc_html__( 'Read More', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_button_settings',
		'type'=> 'text'
	));

	// font size button
	$wp_customize->add_setting('vw_clothing_store_button_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_button_font_size',array(
		'label'	=> __('Button Font Size','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
  		'placeholder' => __( '10px', 'vw-clothing-store' ),
    ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
		'section'=> 'vw_clothing_store_button_settings',
	));


	$wp_customize->add_setting( 'vw_clothing_store_button_border_radius', array(
		'default'              => 5,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_clothing_store_sanitize_number_range',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_clothing_store_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','vw-clothing-store' ),
		'section'     => 'vw_clothing_store_button_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// button padding
	$wp_customize->add_setting('vw_clothing_store_button_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_button_top_bottom_padding',array(
		'label'	=> __('Button Top Bottom Padding','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-clothing-store' ),
    ),
		'section'=> 'vw_clothing_store_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_button_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_button_left_right_padding',array(
		'label'	=> __('Button Left Right Padding','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
      'placeholder' => __( '10px', 'vw-clothing-store' ),
    ),
		'section'=> 'vw_clothing_store_button_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_button_letter_spacing',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_button_letter_spacing',array(
		'label'	=> __('Button Letter Spacing','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
      	'placeholder' => __( '10px', 'vw-clothing-store' ),
  ),
  	'type'        => 'text',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
	),
		'section'=> 'vw_clothing_store_button_settings',
	));

	// text trasform
	$wp_customize->add_setting('vw_clothing_store_button_text_transform',array(
		'default'=> 'Capitalize',
		'sanitize_callback'	=> 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_button_text_transform',array(
		'type' => 'radio',
		'label'	=> __('Button Text Transform','vw-clothing-store'),
		'choices' => array(
      'Uppercase' => __('Uppercase','vw-clothing-store'),
      'Capitalize' => __('Capitalize','vw-clothing-store'),
      'Lowercase' => __('Lowercase','vw-clothing-store'),
    ),
		'section'=> 'vw_clothing_store_button_settings',
	));

	// Related Post Settings
	$wp_customize->add_section( 'vw_clothing_store_related_posts_settings', array(
		'title' => esc_html__( 'Related Posts Settings', 'vw-clothing-store' ),
		'panel' => 'vw_clothing_store_blog_post_parent_panel',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial('vw_clothing_store_related_post_title', array(
		'selector' => '.related-post h3',
		'render_callback' => 'vw_clothing_store_Customize_partial_vw_clothing_store_related_post_title',
	));

  $wp_customize->add_setting( 'vw_clothing_store_related_post',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_related_post',array(
		'label' => esc_html__( 'Related Post','vw-clothing-store' ),
		'section' => 'vw_clothing_store_related_posts_settings'
  )));

  $wp_customize->add_setting('vw_clothing_store_related_post_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_related_post_title',array(
		'label'	=> esc_html__('Add Related Post Title','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Related Post', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_related_posts_settings',
		'type'=> 'text'
	));

 	$wp_customize->add_setting('vw_clothing_store_related_posts_count',array(
		'default'=> 3,
		'sanitize_callback'	=> 'vw_clothing_store_sanitize_number_absint'
	));
	$wp_customize->add_control('vw_clothing_store_related_posts_count',array(
		'label'	=> esc_html__('Add Related Post Count','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => esc_html__( '3', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_related_posts_settings',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'vw_clothing_store_related_posts_excerpt_number', array(
		'default'              => 20,
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_clothing_store_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_clothing_store_related_posts_excerpt_number', array(
		'label'       => esc_html__( 'Related Posts Excerpt length','vw-clothing-store' ),
		'section'     => 'vw_clothing_store_related_posts_settings',
		'type'        => 'range',
		'settings'    => 'vw_clothing_store_related_posts_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	// Single Posts Settings
	$wp_customize->add_section( 'vw_clothing_store_single_blog_settings', array(
		'title' => __( 'Single Post Settings', 'vw-clothing-store' ),
		'panel' => 'vw_clothing_store_blog_post_parent_panel',
	));

  	$wp_customize->add_setting('vw_clothing_store_single_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_single_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_single_blog_settings',
		'setting'	=> 'vw_clothing_store_single_postdate_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'vw_clothing_store_single_postdate',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
	) );
	$wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_single_postdate',array(
	   'label' => esc_html__( 'Show / Hide Date','vw-clothing-store' ),
	   'section' => 'vw_clothing_store_single_blog_settings'
	)));

	$wp_customize->add_setting('vw_clothing_store_single_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_single_author_icon',array(
		'label'	=> __('Add Author Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_single_blog_settings',
		'setting'	=> 'vw_clothing_store_single_author_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'vw_clothing_store_single_author',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
	) );
	$wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_single_author',array(
	    'label' => esc_html__( 'Show / Hide Author','vw-clothing-store' ),
	    'section' => 'vw_clothing_store_single_blog_settings'
	)));

   	$wp_customize->add_setting('vw_clothing_store_single_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_single_comments_icon',array(
		'label'	=> __('Add Comments Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_single_blog_settings',
		'setting'	=> 'vw_clothing_store_single_comments_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'vw_clothing_store_single_comments',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
	) );
	$wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_single_comments',array(
	    'label' => esc_html__( 'Show / Hide Comments','vw-clothing-store' ),
	    'section' => 'vw_clothing_store_single_blog_settings'
	)));

  	$wp_customize->add_setting('vw_clothing_store_single_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_single_time_icon',array(
		'label'	=> __('Add Time Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_single_blog_settings',
		'setting'	=> 'vw_clothing_store_single_time_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'vw_clothing_store_single_time',array(
	    'default' => 1,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
	) );
	$wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_single_time',array(
	    'label' => esc_html__( 'Show / Hide Time','vw-clothing-store' ),
	    'section' => 'vw_clothing_store_single_blog_settings'
	)));

	$wp_customize->add_setting( 'vw_clothing_store_toggle_tags',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
	));
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_toggle_tags', array(
		'label' => esc_html__( 'Show / Hide Tags','vw-clothing-store' ),
		'section' => 'vw_clothing_store_single_blog_settings'
  )));

	$wp_customize->add_setting( 'vw_clothing_store_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
    ) );
 	 $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','vw-clothing-store' ),
		'section' => 'vw_clothing_store_single_blog_settings'
    )));

	// Single Posts Category
 	 $wp_customize->add_setting( 'vw_clothing_store_single_post_category',array(
		'default' => true,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
    ) );
  	$wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_single_post_category',array(
		'label' => esc_html__( 'Show / Hide Category','vw-clothing-store' ),
		'section' => 'vw_clothing_store_single_blog_settings'
    )));

	$wp_customize->add_setting('vw_clothing_store_single_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_single_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','vw-clothing-store'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','vw-clothing-store'),
		'section'=> 'vw_clothing_store_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'vw_clothing_store_single_blog_post_navigation_show_hide',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
	));
	$wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_single_blog_post_navigation_show_hide', array(
		  'label' => esc_html__( 'Show / Hide Post Navigation','vw-clothing-store' ),
		  'section' => 'vw_clothing_store_single_blog_settings'
	)));

	$wp_customize->add_setting( 'vw_clothing_store_single_post_breadcrumb',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
    ) );
   $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_single_post_breadcrumb',array(
		'label' => esc_html__( 'Show / Hide Breadcrumb','vw-clothing-store' ),
		'section' => 'vw_clothing_store_single_blog_settings'
    )));

	//navigation text
	$wp_customize->add_setting('vw_clothing_store_single_blog_prev_navigation_text',array(
		'default'=> 'PREVIOUS',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_single_blog_prev_navigation_text',array(
		'label'	=> __('Post Navigation Text','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( 'PREVIOUS', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_single_blog_next_navigation_text',array(
		'default'=> 'NEXT',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_single_blog_next_navigation_text',array(
		'label'	=> __('Post Navigation Text','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( 'NEXT', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_single_blog_comment_title',array(
		'default'=> 'Leave a Reply',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('vw_clothing_store_single_blog_comment_title',array(
		'label'	=> __('Add Comment Title','vw-clothing-store'),
		'input_attrs' => array(
        'placeholder' => __( 'Leave a Reply', 'vw-clothing-store' ),
    	),
		'section'=> 'vw_clothing_store_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_single_blog_comment_button_text',array(
		'default'=> 'Post Comment',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('vw_clothing_store_single_blog_comment_button_text',array(
		'label'	=> __('Add Comment Button Text','vw-clothing-store'),
		'input_attrs' => array(
    'placeholder' => __( 'Post Comment', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_single_blog_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_single_blog_comment_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_single_blog_comment_width',array(
		'label'	=> __('Comment Form Width','vw-clothing-store'),
		'description'	=> __('Enter a value in %. Example:50%','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( '100%', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_single_blog_settings',
		'type'=> 'text'
	));

	 // Grid layout setting
	$wp_customize->add_section( 'vw_clothing_store_grid_layout_settings', array(
		'title' => __( 'Grid Layout Settings', 'vw-clothing-store' ),
		'panel' => 'vw_clothing_store_blog_post_parent_panel',
	));

  	$wp_customize->add_setting('vw_clothing_store_grid_postdate_icon',array(
		'default'	=> 'fas fa-calendar-alt',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_grid_postdate_icon',array(
		'label'	=> __('Add Post Date Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_grid_layout_settings',
		'setting'	=> 'vw_clothing_store_grid_postdate_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting( 'vw_clothing_store_grid_postdate',array(
	  'default' => 1,
	  'transport' => 'refresh',
	  'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_grid_postdate',array(
    'label' => esc_html__( 'Show / Hide Post Date','vw-clothing-store' ),
    'section' => 'vw_clothing_store_grid_layout_settings'
  )));

	$wp_customize->add_setting('vw_clothing_store_grid_author_icon',array(
		'default'	=> 'fas fa-user',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_grid_author_icon',array(
		'label'	=> __('Add Author Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_grid_layout_settings',
		'setting'	=> 'vw_clothing_store_grid_author_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'vw_clothing_store_grid_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_grid_author',array(
		'label' => esc_html__( 'Show / Hide Author','vw-clothing-store' ),
		'section' => 'vw_clothing_store_grid_layout_settings'
    )));

    $wp_customize->add_setting('vw_clothing_store_grid_comments_icon',array(
		'default'	=> 'fa fa-comments',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_grid_comments_icon',array(
		'label'	=> __('Add Comments Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_grid_layout_settings',
		'setting'	=> 'vw_clothing_store_grid_comments_icon',
		'type'		=> 'icon'
	)));

  $wp_customize->add_setting( 'vw_clothing_store_grid_time',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_grid_time',array(
		'label' => esc_html__( 'Show / Hide Time','vw-clothing-store' ),
		'section' => 'vw_clothing_store_grid_layout_settings'
    )));

    $wp_customize->add_setting('vw_clothing_store_grid_time_icon',array(
		'default'	=> 'fas fa-clock',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_grid_time_icon',array(
		'label'	=> __('Add Time Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_grid_layout_settings',
		'setting'	=> 'vw_clothing_store_grid_time_icon',
		'type'		=> 'icon'
	)));

    $wp_customize->add_setting( 'vw_clothing_store_grid_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_grid_comments',array(
		'label' => esc_html__( 'Show / Hide Comments','vw-clothing-store' ),
		'section' => 'vw_clothing_store_grid_layout_settings'
    )));

 	$wp_customize->add_setting('vw_clothing_store_grid_post_meta_field_separator',array(
		'default'=> '|',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_grid_post_meta_field_separator',array(
		'label'	=> __('Add Meta Separator','vw-clothing-store'),
		'description' => __('Add the seperator for meta box. Example: "|", "/", etc.','vw-clothing-store'),
		'section'=> 'vw_clothing_store_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('vw_clothing_store_display_grid_posts_settings',array(
    'default' => 'Into Blocks',
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_display_grid_posts_settings',array(
    'type' => 'select',
    'label' => __('Display Grid Posts','vw-clothing-store'),
    'section' => 'vw_clothing_store_grid_layout_settings',
    'choices' => array(
    	'Into Blocks' => __('Into Blocks','vw-clothing-store'),
      'Without Blocks' => __('Without Blocks','vw-clothing-store')
      ),
	) );

	$wp_customize->add_setting('vw_clothing_store_grid_button_text',array(
		'default'=> esc_html__('Read More','vw-clothing-store'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_grid_button_text',array(
		'label'	=> esc_html__('Add Button Text','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => esc_html__( 'Read More', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_grid_layout_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_grid_excerpt_suffix',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_grid_excerpt_suffix',array(
		'label'	=> __('Add Excerpt Suffix','vw-clothing-store'),
		'input_attrs' => array(
        'placeholder' => __( '[...]', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_grid_layout_settings',
		'type'=> 'text'
	));

  $wp_customize->add_setting('vw_clothing_store_grid_excerpt_settings',array(
    'default' => 'Excerpt',
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_grid_excerpt_settings',array(
    'type' => 'select',
    'label' => esc_html__('Grid Post Content','vw-clothing-store'),
    'section' => 'vw_clothing_store_grid_layout_settings',
    'choices' => array(
    	'Content' => esc_html__('Content','vw-clothing-store'),
        'Excerpt' => esc_html__('Excerpt','vw-clothing-store'),
        'No Content' => esc_html__('No Content','vw-clothing-store')
    ),
	) );

    $wp_customize->add_setting( 'vw_clothing_store_grid_featured_image_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_clothing_store_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_clothing_store_grid_featured_image_border_radius', array(
		'label'       => esc_html__( 'Grid Featured Image Border Radius','vw-clothing-store' ),
		'section'     => 'vw_clothing_store_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'vw_clothing_store_grid_featured_image_box_shadow', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_clothing_store_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_clothing_store_grid_featured_image_box_shadow', array(
		'label'       => esc_html__( 'Grid Featured Image Box Shadow','vw-clothing-store' ),
		'section'     => 'vw_clothing_store_grid_layout_settings',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Other
	$wp_customize->add_panel( 'vw_clothing_store_other_parent_panel', array(
		'title' => esc_html__( 'Other Settings', 'vw-clothing-store' ),
		'panel' => 'vw_clothing_store_panel_id',
		'priority' => 20,
	));

	// Layout
	$wp_customize->add_section( 'vw_clothing_store_left_right', array(
  	'title' => esc_html__('General Settings', 'vw-clothing-store'),
		'panel' => 'vw_clothing_store_other_parent_panel'
	) );

	$wp_customize->add_setting('vw_clothing_store_width_option',array(
    'default' => 'Full Width',
    'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Image_Radio_Control($wp_customize, 'vw_clothing_store_width_option', array(
    'type' => 'select',
    'label' => esc_html__('Width Layouts','vw-clothing-store'),
    'description' => esc_html__('Here you can change the width layout of Website.','vw-clothing-store'),
    'section' => 'vw_clothing_store_left_right',
    'choices' => array(
        'Full Width' => esc_url(get_template_directory_uri()).'/assets/images/full-width.png',
        'Wide Width' => esc_url(get_template_directory_uri()).'/assets/images/wide-width.png',
        'Boxed' => esc_url(get_template_directory_uri()).'/assets/images/boxed-width.png',
  ))));

	$wp_customize->add_setting('vw_clothing_store_page_layout',array(
    'default' => 'One_Column',
    'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_page_layout',array(
    'type' => 'select',
    'label' => esc_html__('Page Sidebar Layout','vw-clothing-store'),
    'description' => esc_html__('Here you can change the sidebar layout for pages. ','vw-clothing-store'),
    'section' => 'vw_clothing_store_left_right',
    'choices' => array(
        'Left_Sidebar' => esc_html__('Left Sidebar','vw-clothing-store'),
        'Right_Sidebar' => esc_html__('Right Sidebar','vw-clothing-store'),
        'One_Column' => esc_html__('One Column','vw-clothing-store')
    ),
	) );

	$wp_customize->add_setting( 'vw_clothing_store_single_page_breadcrumb1',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_single_page_breadcrumb1',array(
		'label' => esc_html__( 'Show / Hide Page Breadcrumb','vw-clothing-store' ),
		'section' => 'vw_clothing_store_left_right'
    )));
	
    // Pre-Loader
	$wp_customize->add_setting( 'vw_clothing_store_loader_enable',array(
	    'default' => 0,
	    'transport' => 'refresh',
	    'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
	  ) );
	  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_loader_enable',array(
	    'label' => esc_html__( 'Pre-Loader','vw-clothing-store' ),
	    'section' => 'vw_clothing_store_left_right'
	  )));

	$wp_customize->add_setting('vw_clothing_store_preloader_bg_color', array(
		'default'           => '#F38686',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_clothing_store_preloader_bg_color', array(
		'label'    => __('Pre-Loader Background Color', 'vw-clothing-store'),
		'section'  => 'vw_clothing_store_left_right',
	)));

	$wp_customize->add_setting('vw_clothing_store_preloader_border_color', array(
		'default'           => '#ffffff',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_clothing_store_preloader_border_color', array(
		'label'    => __('Pre-Loader Border Color', 'vw-clothing-store'),
		'section'  => 'vw_clothing_store_left_right',
	)));

	$wp_customize->add_setting('vw_clothing_store_preloader_bg_img',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'vw_clothing_store_preloader_bg_img',array(
    'label' => __('Preloader Background Image','vw-clothing-store'),
    'section' => 'vw_clothing_store_left_right'
	)));

	$wp_customize->add_setting('vw_clothing_store_breadcrumbs_alignment',array(
        'default' => 'Left',
        'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_breadcrumbs_alignment',array(
        'type' => 'select',
        'label' => __('Breadcrumbs Alignment','vw-clothing-store'),
        'section' => 'vw_clothing_store_left_right',
        'choices' => array(
            'Left' => __('Left','vw-clothing-store'),
            'Right' => __('Right','vw-clothing-store'),
            'Center' => __('Center','vw-clothing-store'),
        ),
	) );

    //404 Page Setting
	$wp_customize->add_section('vw_clothing_store_404_page',array(
		'title'	=> __('404 Page Settings','vw-clothing-store'),
		'panel' => 'vw_clothing_store_other_parent_panel',
	));

	$wp_customize->add_setting('vw_clothing_store_404_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('vw_clothing_store_404_page_title',array(
		'label'	=> __('Add Title','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( '404 Not Found', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_404_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('vw_clothing_store_404_page_content',array(
		'label'	=> __('Add Text','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( 'Looks like you have taken a wrong turn, Dont worry, it happens to the best of us.', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_404_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_404_page_button_text',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_404_page_button_text',array(
		'label'	=> __('Add Button Text','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( 'Go Back', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_404_page',
		'type'=> 'text'
	));

	//No Result Page Setting
	$wp_customize->add_section('vw_clothing_store_no_results_page',array(
		'title'	=> __('No Results Page Settings','vw-clothing-store'),
		'panel' => 'vw_clothing_store_other_parent_panel',
	));

	$wp_customize->add_setting('vw_clothing_store_no_results_page_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('vw_clothing_store_no_results_page_title',array(
		'label'	=> __('Add Title','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( 'Nothing Found', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_no_results_page',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_no_results_page_content',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));

	$wp_customize->add_control('vw_clothing_store_no_results_page_content',array(
		'label'	=> __('Add Text','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_no_results_page',
		'type'=> 'text'
	));

	//Social Icon Setting
	$wp_customize->add_section('vw_clothing_store_social_icon_settings',array(
		'title'	=> __('Social Icons Settings','vw-clothing-store'),
		'panel' => 'vw_clothing_store_other_parent_panel',
	));

	$wp_customize->add_setting('vw_clothing_store_social_icon_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_social_icon_font_size',array(
		'label'	=> __('Icon Font Size','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_social_icon_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_social_icon_padding',array(
		'label'	=> __('Icon Padding','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_social_icon_width',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_social_icon_width',array(
		'label'	=> __('Icon Width','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_social_icon_settings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_social_icon_height',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_social_icon_height',array(
		'label'	=> __('Icon Height','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_social_icon_settings',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('vw_clothing_store_responsive_media',array(
		'title'	=> esc_html__('Responsive Media','vw-clothing-store'),
		'panel' => 'vw_clothing_store_other_parent_panel',
	));

	$wp_customize->add_setting( 'vw_clothing_store_resp_topbar_hide_show',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
    ));
    $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_resp_topbar_hide_show',array(
		'label' => esc_html__( 'Show / Hide Topbar','vw-clothing-store' ),
		'section' => 'vw_clothing_store_responsive_media'
    )));

  $wp_customize->add_setting( 'vw_clothing_store_resp_scroll_top_hide_show',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
  ));
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_resp_scroll_top_hide_show',array(
    	'label' => esc_html__( 'Show / Hide Scroll To Top','vw-clothing-store' ),
    	'section' => 'vw_clothing_store_responsive_media'
  )));

  $wp_customize->add_setting('vw_clothing_store_res_open_menu_icon',array(
		'default'	=> 'fas fa-bars',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_res_open_menu_icon',array(
		'label'	=> __('Add Open Menu Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_responsive_media',
		'setting'	=> 'vw_clothing_store_res_open_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('vw_clothing_store_res_close_menu_icon',array(
		'default'	=> 'fas fa-times',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control(new VW_Clothing_Store_Fontawesome_Icon_Chooser(
        $wp_customize,'vw_clothing_store_res_close_menu_icon',array(
		'label'	=> __('Add Close Menu Icon','vw-clothing-store'),
		'transport' => 'refresh',
		'section'	=> 'vw_clothing_store_responsive_media',
		'setting'	=> 'vw_clothing_store_res_close_menu_icon',
		'type'		=> 'icon'
	)));

	$wp_customize->add_setting('vw_clothing_store_resp_menu_toggle_btn_bg_color', array(
		'default'           => '#F38686',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'vw_clothing_store_resp_menu_toggle_btn_bg_color', array(
		'label'    => __('Toggle Button Bg Color', 'vw-clothing-store'),
		'section'  => 'vw_clothing_store_responsive_media',
	)));

  //Woocommerce settings
	$wp_customize->add_section('vw_clothing_store_woocommerce_section', array(
		'title'    => __('WooCommerce Layout', 'vw-clothing-store'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	//Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'vw_clothing_store_woocommerce_shop_page_sidebar', array( 'selector' => '.post-type-archive-product #sidebar',
		'render_callback' => 'vw_clothing_store_customize_partial_vw_clothing_store_woocommerce_shop_page_sidebar', ) );

    //Woocommerce Shop Page Sidebar
	$wp_customize->add_setting( 'vw_clothing_store_woocommerce_shop_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_woocommerce_shop_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Shop Page Sidebar','vw-clothing-store' ),
		'section' => 'vw_clothing_store_woocommerce_section'
  )));

   $wp_customize->add_setting('vw_clothing_store_shop_page_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_shop_page_layout',array(
    'type' => 'select',
    'label' => __('Shop Page Sidebar Layout','vw-clothing-store'),
    'section' => 'vw_clothing_store_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','vw-clothing-store'),
        'Right Sidebar' => __('Right Sidebar','vw-clothing-store'),
    ),
	) );

   //Selective Refresh
	$wp_customize->selective_refresh->add_partial( 'vw_clothing_store_woocommerce_single_product_page_sidebar', array( 'selector' => '.single-product #sidebar',
		'render_callback' => 'vw_clothing_store_customize_partial_vw_clothing_store_woocommerce_single_product_page_sidebar', ) );

    //Woocommerce Single Product page Sidebar
	$wp_customize->add_setting( 'vw_clothing_store_woocommerce_single_product_page_sidebar',array(
		'default' => 0,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
   ) );
 	$wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_woocommerce_single_product_page_sidebar',array(
		'label' => esc_html__( 'Show / Hide Single Product Sidebar','vw-clothing-store' ),
		'section' => 'vw_clothing_store_woocommerce_section'
  )));

   $wp_customize->add_setting('vw_clothing_store_single_product_layout',array(
    'default' => 'Right Sidebar',
    'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_single_product_layout',array(
    'type' => 'select',
    'label' => __('Single Product Sidebar Layout','vw-clothing-store'),
    'section' => 'vw_clothing_store_woocommerce_section',
    'choices' => array(
        'Left Sidebar' => __('Left Sidebar','vw-clothing-store'),
        'Right Sidebar' => __('Right Sidebar','vw-clothing-store'),
    ),
	) );

    //Products per page
    $wp_customize->add_setting('vw_clothing_store_products_per_page',array(
		'default'=> '9',
		'sanitize_callback'	=> 'vw_clothing_store_sanitize_float'
	));
	$wp_customize->add_control('vw_clothing_store_products_per_page',array(
		'label'	=> __('Products Per Page','vw-clothing-store'),
		'description' => __('Display on shop page','vw-clothing-store'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'vw_clothing_store_woocommerce_section',
		'type'=> 'number',
	));

    //Products per row
    $wp_customize->add_setting('vw_clothing_store_products_per_row',array(
		'default'=> '3',
		'sanitize_callback'	=> 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_products_per_row',array(
		'label'	=> __('Products Per Row','vw-clothing-store'),
		'description' => __('Display on shop page','vw-clothing-store'),
		'choices' => array(
            '2' => '2',
			'3' => '3',
			'4' => '4',
        ),
		'section'=> 'vw_clothing_store_woocommerce_section',
		'type'=> 'select',
	));

	//Products padding
	$wp_customize->add_setting('vw_clothing_store_products_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_products_padding_top_bottom',array(
		'label'	=> __('Products Padding Top Bottom','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_products_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_products_padding_left_right',array(
		'label'	=> __('Products Padding Left Right','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_woocommerce_section',
		'type'=> 'text'
	));

	//Products box shadow
	$wp_customize->add_setting( 'vw_clothing_store_products_box_shadow', array(
		'default'              => '',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_clothing_store_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_clothing_store_products_box_shadow', array(
		'label'       => esc_html__( 'Products Box Shadow','vw-clothing-store' ),
		'section'     => 'vw_clothing_store_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	//Products border radius
    $wp_customize->add_setting( 'vw_clothing_store_products_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_clothing_store_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_clothing_store_products_border_radius', array(
		'label'       => esc_html__( 'Products Border Radius','vw-clothing-store' ),
		'section'     => 'vw_clothing_store_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'vw_clothing_store_products_button_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_clothing_store_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_clothing_store_products_button_border_radius', array(
		'label'       => esc_html__( 'Products Button Border Radius','vw-clothing-store' ),
		'section'     => 'vw_clothing_store_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('vw_clothing_store_products_btn_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_products_btn_padding_top_bottom',array(
		'label'	=> __('Products Button Padding Top Bottom','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_products_btn_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_products_btn_padding_left_right',array(
		'label'	=> __('Products Button Padding Left Right','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_woocommerce_sale_font_size',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_woocommerce_sale_font_size',array(
		'label'	=> __('Sale Font Size','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
        'placeholder' => __( '10px', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_woocommerce_section',
		'type'=> 'text'
	));

	//Products Sale Badge
	$wp_customize->add_setting('vw_clothing_store_woocommerce_sale_position',array(
    'default' => 'right',
    'sanitize_callback' => 'vw_clothing_store_sanitize_choices'
	));
	$wp_customize->add_control('vw_clothing_store_woocommerce_sale_position',array(
    'type' => 'select',
    'label' => __('Sale Badge Position','vw-clothing-store'),
    'section' => 'vw_clothing_store_woocommerce_section',
    'choices' => array(
        'left' => __('Left','vw-clothing-store'),
        'right' => __('Right','vw-clothing-store'),
    ),
	) );

	$wp_customize->add_setting('vw_clothing_store_woocommerce_sale_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_woocommerce_sale_padding_top_bottom',array(
		'label'	=> __('Sale Padding Top Bottom','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting('vw_clothing_store_woocommerce_sale_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('vw_clothing_store_woocommerce_sale_padding_left_right',array(
		'label'	=> __('Sale Padding Left Right','vw-clothing-store'),
		'description'	=> __('Enter a value in pixels. Example:20px','vw-clothing-store'),
		'input_attrs' => array(
            'placeholder' => __( '10px', 'vw-clothing-store' ),
        ),
		'section'=> 'vw_clothing_store_woocommerce_section',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'vw_clothing_store_woocommerce_sale_border_radius', array(
		'default'              => '0',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'vw_clothing_store_sanitize_number_range'
	) );
	$wp_customize->add_control( 'vw_clothing_store_woocommerce_sale_border_radius', array(
		'label'       => esc_html__( 'Sale Border Radius','vw-clothing-store' ),
		'section'     => 'vw_clothing_store_woocommerce_section',
		'type'        => 'range',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 1,
			'max'              => 50,
		),
	) );

	// Related Product
  $wp_customize->add_setting( 'vw_clothing_store_related_product_show_hide',array(
    'default' => 1,
    'transport' => 'refresh',
    'sanitize_callback' => 'vw_clothing_store_switch_sanitization'
  ) );
  $wp_customize->add_control( new VW_Clothing_Store_Toggle_Switch_Custom_Control( $wp_customize, 'vw_clothing_store_related_product_show_hide',array(
    'label' => esc_html__( 'Show / Hide Related product','vw-clothing-store' ),
    'section' => 'vw_clothing_store_woocommerce_section'
  )));

}

add_action( 'customize_register', 'vw_clothing_store_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class VW_Clothing_Store_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'VW_Clothing_Store_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section( new VW_Clothing_Store_Customize_Section_Pro( $manager,'vw_clothing_store_go_pro', array(
			'priority'   => 1,
			'title'    => esc_html__( 'VW CLOTHING STORE PRO', 'vw-clothing-store' ),
			'pro_text' => esc_html__( 'UPGRADE PRO', 'vw-clothing-store' ),
			'pro_url'  => esc_url('https://www.vwthemes.com/products/clothing-store-wordpress-theme'),
		) )	);

		// Register sections.
		$manager->add_section(new VW_Clothing_Store_Customize_Section_Pro($manager,'vw_clothing_store_get_started_link',array(
			'priority'   => 1,
			'title'    => esc_html__( 'DOCUMENTATION', 'vw-clothing-store' ),
			'pro_text' => esc_html__( 'DOCS', 'vw-clothing-store' ),
			'pro_url'  => esc_url('https://preview.vwthemesdemo.com/docs/free-vw-clothing-store/'),
		)));

	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'vw-clothing-store-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-clothing-store-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
VW_Clothing_Store_Customize::get_instance();
