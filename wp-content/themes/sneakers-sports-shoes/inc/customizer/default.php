<?php
/**
 * Default Values.
 *
 * @package Sneakers Sports Shoes
 */

if ( ! function_exists( 'sneakers_sports_shoes_get_default_theme_options' ) ) :
	function sneakers_sports_shoes_get_default_theme_options() {

		$sneakers_sports_shoes_defaults = array();
		
        // Options.
        $sneakers_sports_shoes_defaults['logo_width_range']                                                     = 300;
	$sneakers_sports_shoes_defaults['sneakers_sports_shoes_global_sidebar_layout']	                        = 'right-sidebar';
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_header_layout_phone_number']                     = esc_html__( '+(0321)7528659', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_header_layout_email_id']                         = esc_html__( 'support@example.com', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_sneakers_sports_shoes_header_layout_text']       = esc_html__( 'Express Deilivery and free returns within 30 days', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_header_layout_enable_translator']                = 1;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_header_layout_wishlist']                         = esc_url( '#', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_theme_pagination_options_alignment']             = 'Center';
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_theme_breadcrumb_options_alignment']             = 'Left';
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_pagination_layout']                              = 'numeric';
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_menu_text_transform']                            = 'capitalize';
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_single_page_content_alignment']                  = 'left';
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_footer_column_layout'] 		                = 3;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_menu_font_size']                                 = 14;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_copyright_font_size']                            = 16;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_breadcrumb_font_size']                           = 16;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_excerpt_limit']                                  = 10;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_per_columns']                                    = 3;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_per_page']                               = 9;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_footer_copyright_text'] 		                = esc_html__( 'All rights reserved.', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['twp_navigation_type']              			                = 'theme-normal-navigation';
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_post_author']                	                = 1;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_post_date']                		        = 1;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_post_category']                	                = 1;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_post_tags']                		        = 1;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_floating_next_previous_nav']                     = 1;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_category_section']                               = 0;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_courses_category_section']                       = 0;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_sticky']                                         = 0;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_background_color']                               = '#fff';
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_footer_widget_title_alignment']                          = 'left'; 
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_show_hide_related_product']                              = 1;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_display_footer']                                         = 0;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_global_color']                                           = '#F36B63';

        // Social Icon
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_header_layout_facebook_link']              = esc_url( '#', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_header_layout_twitter_link']               = esc_url( '#', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_header_layout_pintrest_link']              = esc_url( '#', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_header_layout_instagram_link']             = esc_url( '#', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_header_layout_youtube_link']               = esc_url( '#', 'sneakers-sports-shoes' );

        //slider
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_header_banner']                            = 1;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_slider_section_title']                     = esc_html__( 'New Shoes Collection ', 'sneakers-sports-shoes' );

        // Categories Box 1
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_categorie_section']                        = 1;
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_image_box_1']                      = esc_url(get_template_directory_uri() . '/assets/images/category1.png');
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_section_short_title_1']                   = esc_html__( 'Grab The Offer', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_section_heading_1']                       = esc_html__( 'Winter Special Sports', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_section_price_1']                         = esc_html__( '$65', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_button_text_1']                           = esc_html__( 'See Collection ', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_button_url_1']                            = esc_url( '#', 'sneakers-sports-shoes' );

        // Categories Box 2
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_image_box_2']                      = esc_url(get_template_directory_uri() . '/assets/images/category2.png');
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_section_short_title_2']                   = esc_html__( 'Best Shoes Sales', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_section_heading_2']                       = esc_html__( 'Hot Summer Sales', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_section_price_2']                         = esc_html__( '$65', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_button_text_2']                           = esc_html__( 'See Collection ', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_button_url_2']                            = esc_url( '#', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_section_offter_text_2']                   = esc_html__( '65% ', 'sneakers-sports-shoes' );
        
        // Categories Box 3
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_image_box_3']                      = esc_url(get_template_directory_uri() . '/assets/images/category3.png');
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_section_short_title_3']                   = esc_html__( 'Best Shoes Available', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_section_heading_3']                       = esc_html__( 'Take 50% Off Now', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_section_price_3']                         = esc_html__( '$65', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_button_text_3']                           = esc_html__( 'See Collection ', 'sneakers-sports-shoes' );
        $sneakers_sports_shoes_defaults['sneakers_sports_shoes_product_button_url_3']                            = esc_url( '#', 'sneakers-sports-shoes' );
        
	// Pass through filter.
	$sneakers_sports_shoes_defaults = apply_filters( 'sneakers_sports_shoes_filter_default_theme_options', $sneakers_sports_shoes_defaults );

		return $sneakers_sports_shoes_defaults;
	}
endif;