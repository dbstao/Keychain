<?php

	$vw_clothing_store_custom_css= "";

	/*-------------------- First Highlight Color -------------------*/

	$vw_clothing_store_first_color = get_theme_mod('vw_clothing_store_first_color');

	if($vw_clothing_store_first_color != false){
		$vw_clothing_store_custom_css .='.principle-box:hover .principle-box-inner-img, .more-btn a, #comments input[type="submit"],#comments a.comment-reply-link,input[type="submit"],.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.pro-button a, .woocommerce a.added_to_cart.wc-forward, #footer input[type="submit"], #footer-2, #footer .wp-block-search .wp-block-search__button, #sidebar .wp-block-search .wp-block-search__button, .scrollup i:hover, #sidebar .custom-social-icons a,#footer .custom-social-icons a, #sidebar h3,  #sidebar .widget_block h3, #sidebar h2, .pagination span, .pagination a, .woocommerce span.onsale, nav.woocommerce-MyAccount-navigation ul li, .scrollup i, .pagination a:hover, .pagination .current, #sidebar .tagcloud a:hover, #main-product button.tablinks.active, .main-product-section .pro-button, .main-product-section:hover .the_timer, nav.woocommerce-MyAccount-navigation ul li:hover, #preloader, .event-btn-1 a, .event-btn-2 a:hover,.wp-block-tag-cloud a:hover,#sidebar h3, #sidebar .widget_block h3, #sidebar h2, #sidebar label.wp-block-search__label, #sidebar .wp-block-heading,.breadcrumbs a, .post-categories li a,.breadcrumbs span,.wp-block-button__link,#sidebar .wp-block-tag-cloud a:hover,#footer .wp-block-tag-cloud a:hover,#footer-2,.read-more a,.compare-btn a, .compare-btn-banner a, .topbar-btn a, .list-item-button a, .tutor-course-list-btn a, #slider .more-btn a,#slider .carousel-control-next i, #slider .carousel-control-prev i,.toggle-nav i{';
			$vw_clothing_store_custom_css .='background: '.esc_attr($vw_clothing_store_first_color).';';
		$vw_clothing_store_custom_css .='}';
	}

	if($vw_clothing_store_first_color != false){
		$vw_clothing_store_custom_css .='#sidebar ul li::before,#footer-2,.wp-block-woocommerce-cart .wc-block-cart__submit-button, .wc-block-components-checkout-place-order-button, .wc-block-components-totals-coupon__button,.wc-block-components-order-summary-item__quantity{';
			$vw_clothing_store_custom_css .='background: '.esc_attr($vw_clothing_store_first_color).'!important;';
		$vw_clothing_store_custom_css .='}';
	}

	if($vw_clothing_store_first_color != false){
		$vw_clothing_store_custom_css .='a, .main-header span.donate a:hover, .main-header span.volunteer a:hover, .main-header span.donate i:hover, .main-header span.volunteer i:hover, .box-content h3, .box-content h3 a, .woocommerce-message::before,.woocommerce-info::before,.post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .main-navigation ul li.current_page_item, .main-navigation li a:hover,.main-navigation ul li.current_page_item a, .main-navigation li a:hover, .main-navigation ul ul li a:hover, .main-navigation li a:focus, .main-navigation ul ul a:focus, .main-navigation ul ul a:hover,p.site-title a:hover, .logo h1 a:hover,.post-main-box:hover h2 a, .post-main-box:hover .post-info span a, .single-post .post-info:hover a, .middle-bar h6, .grid-post-main-box:hover h2 a, .grid-post-main-box:hover .post-info span a,#best-product-section .product-box:hover .product-box-content h3 a, #degree-courses .small-text, .small-text2,.sticky .post-main-box h2:before, li a{';
			$vw_clothing_store_custom_css .='color: '.esc_attr($vw_clothing_store_first_color).';';
		$vw_clothing_store_custom_css .='}';
	}

	if($vw_clothing_store_first_color != false){
		$vw_clothing_store_custom_css .='.home-page-header,.main-navigation ul ul{';
			$vw_clothing_store_custom_css .='border-color: '.esc_attr($vw_clothing_store_first_color).';';
		$vw_clothing_store_custom_css .='}';
	}

	if($vw_clothing_store_first_color != false){
		$vw_clothing_store_custom_css .='.main-navigation ul ul{';
			$vw_clothing_store_custom_css .='border-bottom:2px solid '.esc_attr($vw_clothing_store_first_color).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_custom_css .='}';

	/*---------------------------Width Layout -------------------*/

	$vw_clothing_store_theme_lay = get_theme_mod( 'vw_clothing_store_width_option','Full Width');
    if($vw_clothing_store_theme_lay == 'Boxed'){
		$vw_clothing_store_custom_css .='body{';
			$vw_clothing_store_custom_css .='max-width: 1140px; width: 100%; margin-right: auto; margin-left: auto;';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='.scrollup i{';
			$vw_clothing_store_custom_css .='right: 100px;';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='.row.outer-logo{';
			$vw_clothing_store_custom_css .='margin-left: 0px;';
		$vw_clothing_store_custom_css .='}';
	}else if($vw_clothing_store_theme_lay == 'Wide Width'){
		$vw_clothing_store_custom_css .='body{';
			$vw_clothing_store_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='.scrollup i{';
			$vw_clothing_store_custom_css .='right: 30px;';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='.row.outer-logo{';
			$vw_clothing_store_custom_css .='margin-left: 0px;';
		$vw_clothing_store_custom_css .='}';
	}else if($vw_clothing_store_theme_lay == 'Full Width'){
		$vw_clothing_store_custom_css .='body{';
			$vw_clothing_store_custom_css .='max-width: 100%;';
		$vw_clothing_store_custom_css .='}';
	}

	/*----------------Responsive Media -----------------------*/

	$vw_clothing_store_resp_slider = get_theme_mod( 'vw_clothing_store_resp_slider_hide_show',true);
	if($vw_clothing_store_resp_slider == true && get_theme_mod( 'vw_clothing_store_slider_hide_show', false) == false){
    	$vw_clothing_store_custom_css .='#slider{';
			$vw_clothing_store_custom_css .='display:none;';
		$vw_clothing_store_custom_css .='} ';
	}
    if($vw_clothing_store_resp_slider == true){
    	$vw_clothing_store_custom_css .='@media screen and (max-width:575px) {';
		$vw_clothing_store_custom_css .='#slider{';
			$vw_clothing_store_custom_css .='display:block;';
		$vw_clothing_store_custom_css .='} }';
	}else if($vw_clothing_store_resp_slider == false){
		$vw_clothing_store_custom_css .='@media screen and (max-width:575px) {';
		$vw_clothing_store_custom_css .='#slider{';
			$vw_clothing_store_custom_css .='display:none;';
		$vw_clothing_store_custom_css .='} }';
		$vw_clothing_store_custom_css .='@media screen and (max-width:575px){';
		$vw_clothing_store_custom_css .='.page-template-custom-home-page.admin-bar .homepageheader{';
			$vw_clothing_store_custom_css .='margin-top: 45px;';
		$vw_clothing_store_custom_css .='} }';
	}

	$vw_clothing_store_resp_sidebar = get_theme_mod( 'vw_clothing_store_sidebar_hide_show',true);
    if($vw_clothing_store_resp_sidebar == true){
    	$vw_clothing_store_custom_css .='@media screen and (max-width:575px) {';
		$vw_clothing_store_custom_css .='#sidebar{';
			$vw_clothing_store_custom_css .='display:block;';
		$vw_clothing_store_custom_css .='} }';
	}else if($vw_clothing_store_resp_sidebar == false){
		$vw_clothing_store_custom_css .='@media screen and (max-width:575px) {';
		$vw_clothing_store_custom_css .='#sidebar{';
			$vw_clothing_store_custom_css .='display:none;';
		$vw_clothing_store_custom_css .='} }';
	}

	$vw_clothing_store_resp_scroll_top = get_theme_mod( 'vw_clothing_store_resp_scroll_top_hide_show',true);
	if($vw_clothing_store_resp_scroll_top == true && get_theme_mod( 'vw_clothing_store_hide_show_scroll',true) == false){
    	$vw_clothing_store_custom_css .='.scrollup i{';
			$vw_clothing_store_custom_css .='visibility:hidden !important;';
		$vw_clothing_store_custom_css .='} ';
	}
    if($vw_clothing_store_resp_scroll_top == true){
    	$vw_clothing_store_custom_css .='@media screen and (max-width:575px) {';
		$vw_clothing_store_custom_css .='.scrollup i{';
			$vw_clothing_store_custom_css .='visibility:visible !important;';
		$vw_clothing_store_custom_css .='} }';
	}else if($vw_clothing_store_resp_scroll_top == false){
		$vw_clothing_store_custom_css .='@media screen and (max-width:575px){';
		$vw_clothing_store_custom_css .='.scrollup i{';
			$vw_clothing_store_custom_css .='visibility:hidden !important;';
		$vw_clothing_store_custom_css .='} }';
	}

	/*---------------------------Slider Height ------------*/

	$vw_clothing_store_slider_height = get_theme_mod('vw_clothing_store_slider_height');
	if($vw_clothing_store_slider_height != false){
		$vw_clothing_store_custom_css .='#slider img{';
			$vw_clothing_store_custom_css .='height: '.esc_attr($vw_clothing_store_slider_height).';';
		$vw_clothing_store_custom_css .='}';
	}

/*------------------ Slider Opacity -------------------*/

	$vw_clothing_store_theme_lay = get_theme_mod( 'vw_clothing_store_slider_opacity_color','');
	if($vw_clothing_store_theme_lay == '0'){
		$vw_clothing_store_custom_css .='#slider img{';
			$vw_clothing_store_custom_css .='opacity:0';
		$vw_clothing_store_custom_css .='}';
		}else if($vw_clothing_store_theme_lay == '0.1'){
		$vw_clothing_store_custom_css .='#slider img{';
			$vw_clothing_store_custom_css .='opacity:0.1';
		$vw_clothing_store_custom_css .='}';
		}else if($vw_clothing_store_theme_lay == '0.2'){
		$vw_clothing_store_custom_css .='#slider img{';
			$vw_clothing_store_custom_css .='opacity:0.2';
		$vw_clothing_store_custom_css .='}';
		}else if($vw_clothing_store_theme_lay == '0.3'){
		$vw_clothing_store_custom_css .='#slider img{';
			$vw_clothing_store_custom_css .='opacity:0.3';
		$vw_clothing_store_custom_css .='}';
		}else if($vw_clothing_store_theme_lay == '0.4'){
		$vw_clothing_store_custom_css .='#slider img{';
			$vw_clothing_store_custom_css .='opacity:0.4';
		$vw_clothing_store_custom_css .='}';
		}else if($vw_clothing_store_theme_lay == '0.5'){
		$vw_clothing_store_custom_css .='#slider img{';
			$vw_clothing_store_custom_css .='opacity:0.5';
		$vw_clothing_store_custom_css .='}';
		}else if($vw_clothing_store_theme_lay == '0.6'){
		$vw_clothing_store_custom_css .='#slider img{';
			$vw_clothing_store_custom_css .='opacity:0.6';
		$vw_clothing_store_custom_css .='}';
		}else if($vw_clothing_store_theme_lay == '0.7'){
		$vw_clothing_store_custom_css .='#slider img{';
			$vw_clothing_store_custom_css .='opacity:0.7';
		$vw_clothing_store_custom_css .='}';
		}else if($vw_clothing_store_theme_lay == '0.8'){
		$vw_clothing_store_custom_css .='#slider img{';
			$vw_clothing_store_custom_css .='opacity:0.8';
		$vw_clothing_store_custom_css .='}';
		}else if($vw_clothing_store_theme_lay == '0.9'){
		$vw_clothing_store_custom_css .='#slider img{';
			$vw_clothing_store_custom_css .='opacity:0.9';
		$vw_clothing_store_custom_css .='}';
		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$vw_clothing_store_slider_image_overlay = get_theme_mod('vw_clothing_store_slider_image_overlay', true);
	if($vw_clothing_store_slider_image_overlay == false){
		$vw_clothing_store_custom_css .='#slider img{';
			$vw_clothing_store_custom_css .='opacity:1;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_slider_image_overlay_color = get_theme_mod('vw_clothing_store_slider_image_overlay_color', true);
	if($vw_clothing_store_slider_image_overlay_color != false){
		$vw_clothing_store_custom_css .='#slider{';
			$vw_clothing_store_custom_css .='background-color: '.esc_attr($vw_clothing_store_slider_image_overlay_color).';';
		$vw_clothing_store_custom_css .='}';
	}

	/*------------- Slider Content Padding Settings ------------------*/

	$vw_clothing_store_slider_content_padding_top_bottom = get_theme_mod('vw_clothing_store_slider_content_padding_top_bottom');
	$vw_clothing_store_slider_content_padding_left_right = get_theme_mod('vw_clothing_store_slider_content_padding_left_right');
	if($vw_clothing_store_slider_content_padding_top_bottom != false || $vw_clothing_store_slider_content_padding_left_right != false){
		$vw_clothing_store_custom_css .='#slider .carousel-caption{';
			$vw_clothing_store_custom_css .='top: '.esc_attr($vw_clothing_store_slider_content_padding_top_bottom).'; bottom: '.esc_attr($vw_clothing_store_slider_content_padding_top_bottom).';left: '.esc_attr($vw_clothing_store_slider_content_padding_left_right).';right: '.esc_attr($vw_clothing_store_slider_content_padding_left_right).';';
		$vw_clothing_store_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_clothing_store_copyright_alingment = get_theme_mod('vw_clothing_store_copyright_alingment');
	if($vw_clothing_store_copyright_alingment != false){
		$vw_clothing_store_custom_css .='.copyright p,#footer-2 p{';
			$vw_clothing_store_custom_css .='text-align: '.esc_attr($vw_clothing_store_copyright_alingment).';';
		$vw_clothing_store_custom_css .='}';
	}

	/*---------------------------Footer Style -------------------*/

	$vw_clothing_store_theme_lay = get_theme_mod( 'vw_clothing_store_footer_template','vw_clothing_store-footer-one');
    if($vw_clothing_store_theme_lay == 'vw_clothing_store-footer-one'){
		$vw_clothing_store_custom_css .='#footer{';
			$vw_clothing_store_custom_css .='';
		$vw_clothing_store_custom_css .='}';

	}else if($vw_clothing_store_theme_lay == 'vw_clothing_store-footer-two'){
		$vw_clothing_store_custom_css .='#footer{';
			$vw_clothing_store_custom_css .='background: linear-gradient(to right, #f9f8ff, #dedafa);';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vw_clothing_store_custom_css .='color:#000;';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='#footer ul li::before{';
			$vw_clothing_store_custom_css .='background:#000;';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$vw_clothing_store_custom_css .='border: 1px solid #000;';
		$vw_clothing_store_custom_css .='}';

	}else if($vw_clothing_store_theme_lay == 'vw_clothing_store-footer-three'){
		$vw_clothing_store_custom_css .='#footer{';
			$vw_clothing_store_custom_css .='background: #232524;';
		$vw_clothing_store_custom_css .='}';
	}
	else if($vw_clothing_store_theme_lay == 'vw_clothing_store-footer-four'){
		$vw_clothing_store_custom_css .='#footer{';
			$vw_clothing_store_custom_css .='background: #f7f7f7;';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='#footer p, #footer li a, #footer, #footer h3, #footer a.rsswidget, #footer #wp-calendar a, .copyright a, #footer .custom_details, #footer ins span, #footer .tagcloud a, .main-inner-box span.entry-date a, nav.woocommerce-MyAccount-navigation ul li:hover a, #footer ul li a, #footer table, #footer th, #footer td, #footer caption, #sidebar caption,#footer nav.wp-calendar-nav a,#footer .search-form .search-field{';
			$vw_clothing_store_custom_css .='color:#000;';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='#footer ul li::before{';
			$vw_clothing_store_custom_css .='background:#000;';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='#footer table, #footer th, #footer td,#footer .search-form .search-field,#footer .tagcloud a{';
			$vw_clothing_store_custom_css .='border: 1px solid #000;';
		$vw_clothing_store_custom_css .='}';
	}
	else if($vw_clothing_store_theme_lay == 'vw_clothing_store-footer-five'){
		$vw_clothing_store_custom_css .='#footer{';
			$vw_clothing_store_custom_css .='background: linear-gradient(to right, #01093a, #2d0b00);';
		$vw_clothing_store_custom_css .='}';
	}

	/*------------- Preloader Background Color  -------------------*/

	$vw_clothing_store_preloader_bg_color = get_theme_mod('vw_clothing_store_preloader_bg_color');
	if($vw_clothing_store_preloader_bg_color != false){
		$vw_clothing_store_custom_css .='#preloader{';
			$vw_clothing_store_custom_css .='background-color: '.esc_attr($vw_clothing_store_preloader_bg_color).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_preloader_border_color = get_theme_mod('vw_clothing_store_preloader_border_color');
	if($vw_clothing_store_preloader_border_color != false){
		$vw_clothing_store_custom_css .='.loader-line{';
			$vw_clothing_store_custom_css .='border-color: '.esc_attr($vw_clothing_store_preloader_border_color).'!important;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_preloader_bg_img = get_theme_mod('vw_clothing_store_preloader_bg_img');
	if($vw_clothing_store_preloader_bg_img != false){
		$vw_clothing_store_custom_css .='#preloader{';
			$vw_clothing_store_custom_css .='background: url('.esc_attr($vw_clothing_store_preloader_bg_img).');-webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;';
		$vw_clothing_store_custom_css .='}';
	}

	// banner background img

	$vw_clothing_store_banner_image = get_theme_mod('vw_clothing_store_banner_image');
	if($vw_clothing_store_banner_image != false){
		$vw_clothing_store_custom_css .='#banner{';
			$vw_clothing_store_custom_css .='background: url('.esc_url($vw_clothing_store_banner_image).');border-radius: 30px; width: 1500px;';
		$vw_clothing_store_custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_clothing_store_copyright_alingment = get_theme_mod('vw_clothing_store_copyright_alingment');
	if($vw_clothing_store_copyright_alingment != false){
		$vw_clothing_store_custom_css .='.copyright p{';
			$vw_clothing_store_custom_css .='text-align: '.esc_attr($vw_clothing_store_copyright_alingment).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_copyright_background_color = get_theme_mod('vw_clothing_store_copyright_background_color');
	if($vw_clothing_store_copyright_background_color != false){
		$vw_clothing_store_custom_css .='#footer-2{';
			$vw_clothing_store_custom_css .='background-color: '.esc_attr($vw_clothing_store_copyright_background_color).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_footer_background_color = get_theme_mod('vw_clothing_store_footer_background_color');
	if($vw_clothing_store_footer_background_color != false){
		$vw_clothing_store_custom_css .='#footer{';
			$vw_clothing_store_custom_css .='background-color: '.esc_attr($vw_clothing_store_footer_background_color).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_footer_widgets_heading = get_theme_mod( 'vw_clothing_store_footer_widgets_heading','Left');
    if($vw_clothing_store_footer_widgets_heading == 'Left'){
		$vw_clothing_store_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
		$vw_clothing_store_custom_css .='text-align: left;';
		$vw_clothing_store_custom_css .='}';
	}else if($vw_clothing_store_footer_widgets_heading == 'Center'){
		$vw_clothing_store_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vw_clothing_store_custom_css .='text-align: center;';
		$vw_clothing_store_custom_css .='}';
	}else if($vw_clothing_store_footer_widgets_heading == 'Right'){
		$vw_clothing_store_custom_css .='#footer h3, #footer .wp-block-search .wp-block-search__label{';
			$vw_clothing_store_custom_css .='text-align: right;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_footer_widgets_content = get_theme_mod( 'vw_clothing_store_footer_widgets_content','Left');
    if($vw_clothing_store_footer_widgets_content == 'Left'){
		$vw_clothing_store_custom_css .='#footer .widget{';
		$vw_clothing_store_custom_css .='text-align: left;';
		$vw_clothing_store_custom_css .='}';
	}else if($vw_clothing_store_footer_widgets_content == 'Center'){
		$vw_clothing_store_custom_css .='#footer .widget{';
			$vw_clothing_store_custom_css .='text-align: center;';
		$vw_clothing_store_custom_css .='}';
	}else if($vw_clothing_store_footer_widgets_content == 'Right'){
		$vw_clothing_store_custom_css .='#footer .widget{';
			$vw_clothing_store_custom_css .='text-align: right;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_copyright_font_size = get_theme_mod('vw_clothing_store_copyright_font_size');
	if($vw_clothing_store_copyright_font_size != false){
		$vw_clothing_store_custom_css .='#footer-2 a, #footer-2 p{';
			$vw_clothing_store_custom_css .='font-size: '.esc_attr($vw_clothing_store_copyright_font_size).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_copyright_alingment = get_theme_mod('vw_clothing_store_copyright_alingment');
	if($vw_clothing_store_copyright_alingment != false){
		$vw_clothing_store_custom_css .='#footer-2 p{';
			$vw_clothing_store_custom_css .='text-align: '.esc_attr($vw_clothing_store_copyright_alingment).';';
		$vw_clothing_store_custom_css .='}';
	}
	$vw_clothing_store_copyright_padding_top_bottom = get_theme_mod('vw_clothing_store_copyright_padding_top_bottom');
	if($vw_clothing_store_copyright_padding_top_bottom != false){
		$vw_clothing_store_custom_css .='#footer-2{';
			$vw_clothing_store_custom_css .='padding-top: '.esc_attr($vw_clothing_store_copyright_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_clothing_store_copyright_padding_top_bottom).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_footer_padding = get_theme_mod('vw_clothing_store_footer_padding');
	if($vw_clothing_store_footer_padding != false){
		$vw_clothing_store_custom_css .='#footer{';
			$vw_clothing_store_custom_css .='padding: '.esc_attr($vw_clothing_store_footer_padding).' 0;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_theme_lay = get_theme_mod( 'vw_clothing_store_img_footer','scroll');
	if($vw_clothing_store_theme_lay == 'fixed'){
		$vw_clothing_store_custom_css .='#footer{';
			$vw_clothing_store_custom_css .='background-attachment: fixed !important;';
		$vw_clothing_store_custom_css .='}';
	}elseif ($vw_clothing_store_theme_lay == 'scroll'){
		$vw_clothing_store_custom_css .='#footer{';
			$vw_clothing_store_custom_css .='background-attachment: scroll !important;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_footer_img_position = get_theme_mod('vw_clothing_store_footer_img_position','center center');
	if($vw_clothing_store_footer_img_position != false){
		$vw_clothing_store_custom_css .='#footer{';
			$vw_clothing_store_custom_css .='background-position: '.esc_attr($vw_clothing_store_footer_img_position).'!important;';
		$vw_clothing_store_custom_css .='}';
	} 

	$vw_clothing_store_footer_background_image = get_theme_mod('vw_clothing_store_footer_background_image');
	if($vw_clothing_store_footer_background_image != false){
		$vw_clothing_store_custom_css .='#footer{';
			$vw_clothing_store_custom_css .='background: url('.esc_attr($vw_clothing_store_footer_background_image).');background-size:cover;';
		$vw_clothing_store_custom_css .='}';
	}

	/*----------------Scroll to top Settings ------------------*/

	$vw_clothing_store_scroll_to_top_font_size = get_theme_mod('vw_clothing_store_scroll_to_top_font_size');
	if($vw_clothing_store_scroll_to_top_font_size != false){
		$vw_clothing_store_custom_css .='.scrollup i{';
			$vw_clothing_store_custom_css .='font-size: '.esc_attr($vw_clothing_store_scroll_to_top_font_size).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_scroll_to_top_padding = get_theme_mod('vw_clothing_store_scroll_to_top_padding');
	$vw_clothing_store_scroll_to_top_padding = get_theme_mod('vw_clothing_store_scroll_to_top_padding');
	if($vw_clothing_store_scroll_to_top_padding != false){
		$vw_clothing_store_custom_css .='.scrollup i{';
			$vw_clothing_store_custom_css .='padding-top: '.esc_attr($vw_clothing_store_scroll_to_top_padding).';padding-bottom: '.esc_attr($vw_clothing_store_scroll_to_top_padding).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_scroll_to_top_width = get_theme_mod('vw_clothing_store_scroll_to_top_width');
	if($vw_clothing_store_scroll_to_top_width != false){
		$vw_clothing_store_custom_css .='.scrollup i{';
			$vw_clothing_store_custom_css .='width: '.esc_attr($vw_clothing_store_scroll_to_top_width).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_scroll_to_top_height = get_theme_mod('vw_clothing_store_scroll_to_top_height');
	if($vw_clothing_store_scroll_to_top_height != false){
		$vw_clothing_store_custom_css .='.scrollup i{';
			$vw_clothing_store_custom_css .='height: '.esc_attr($vw_clothing_store_scroll_to_top_height).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_scroll_to_top_border_radius = get_theme_mod('vw_clothing_store_scroll_to_top_border_radius');
	if($vw_clothing_store_scroll_to_top_border_radius != false){
		$vw_clothing_store_custom_css .='.scrollup i{';
			$vw_clothing_store_custom_css .='border-radius: '.esc_attr($vw_clothing_store_scroll_to_top_border_radius).'px;';
		$vw_clothing_store_custom_css .='}';
	}

	/*------------------ Logo  -------------------*/

	$vw_clothing_store_logo_padding = get_theme_mod('vw_clothing_store_logo_padding');
	if($vw_clothing_store_logo_padding != false){
		$vw_clothing_store_custom_css .='.logo{';
			$vw_clothing_store_custom_css .='padding: '.esc_attr($vw_clothing_store_logo_padding).' !important;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_logo_margin = get_theme_mod('vw_clothing_store_logo_margin');
	if($vw_clothing_store_logo_margin != false){
		$vw_clothing_store_custom_css .='.logo{';
			$vw_clothing_store_custom_css .='margin: '.esc_attr($vw_clothing_store_logo_margin).';';
		$vw_clothing_store_custom_css .='}';
	}

	// Site title Font Size
	$vw_clothing_store_site_title_font_size = get_theme_mod('vw_clothing_store_site_title_font_size');
	if($vw_clothing_store_site_title_font_size != false){
		$vw_clothing_store_custom_css .='.logo p.site-title, .logo h1{';
			$vw_clothing_store_custom_css .='font-size: '.esc_attr($vw_clothing_store_site_title_font_size).';';
		$vw_clothing_store_custom_css .='}';
	}

	// Site tagline Font Size
	$vw_clothing_store_site_tagline_font_size = get_theme_mod('vw_clothing_store_site_tagline_font_size');
	if($vw_clothing_store_site_tagline_font_size != false){
		$vw_clothing_store_custom_css .='.logo p.site-description{';
			$vw_clothing_store_custom_css .='font-size: '.esc_attr($vw_clothing_store_site_tagline_font_size).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_site_title_color = get_theme_mod('vw_clothing_store_site_title_color');
	if($vw_clothing_store_site_title_color != false){
		$vw_clothing_store_custom_css .='p.site-title a, .logo h1 a{';
			$vw_clothing_store_custom_css .='color: '.esc_attr($vw_clothing_store_site_title_color).'!important;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_site_tagline_color = get_theme_mod('vw_clothing_store_site_tagline_color');
	if($vw_clothing_store_site_tagline_color != false){
		$vw_clothing_store_custom_css .='.logo p.site-description{';
			$vw_clothing_store_custom_css .='color: '.esc_attr($vw_clothing_store_site_tagline_color).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_logo_width = get_theme_mod('vw_clothing_store_logo_width');
	if($vw_clothing_store_logo_width != false){
		$vw_clothing_store_custom_css .='.logo img{';
			$vw_clothing_store_custom_css .='width: '.esc_attr($vw_clothing_store_logo_width).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_logo_height = get_theme_mod('vw_clothing_store_logo_height');
	if($vw_clothing_store_logo_height != false){
		$vw_clothing_store_custom_css .='.logo img{';
			$vw_clothing_store_custom_css .='height: '.esc_attr($vw_clothing_store_logo_height).';';
		$vw_clothing_store_custom_css .='}';
	}

	// Header Background Color
	$vw_clothing_store_header_background_color = get_theme_mod('vw_clothing_store_header_background_color');
	if($vw_clothing_store_header_background_color != false){
		$vw_clothing_store_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$vw_clothing_store_custom_css .='background-color: '.esc_attr($vw_clothing_store_header_background_color).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_header_img_position = get_theme_mod('vw_clothing_store_header_img_position','center top');
	if($vw_clothing_store_header_img_position != false){
		$vw_clothing_store_custom_css .='.page-template-custom-home-page .home-page-header, .home-page-header{';
			$vw_clothing_store_custom_css .='background-position: '.esc_attr($vw_clothing_store_header_img_position).'!important;';
		$vw_clothing_store_custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$vw_clothing_store_theme_lay = get_theme_mod( 'vw_clothing_store_blog_layout_option','Default');
    if($vw_clothing_store_theme_lay == 'Default'){
		$vw_clothing_store_custom_css .='.post-main-box{';
			$vw_clothing_store_custom_css .='';
		$vw_clothing_store_custom_css .='}';
	}else if($vw_clothing_store_theme_lay == 'Center'){
		$vw_clothing_store_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn{';
			$vw_clothing_store_custom_css .='text-align:center;';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='.post-info{';
			$vw_clothing_store_custom_css .='margin-top:10px;';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='.post-info hr{';
			$vw_clothing_store_custom_css .='margin:15px auto;';
		$vw_clothing_store_custom_css .='}';
	}else if($vw_clothing_store_theme_lay == 'Left'){
		$vw_clothing_store_custom_css .='.post-main-box, .post-main-box h2, .post-info, .new-text p, .content-bttn, #our-services p{';
			$vw_clothing_store_custom_css .='text-align:Left;';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='.post-info hr{';
			$vw_clothing_store_custom_css .='margin-bottom:10px;';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='.post-main-box h2{';
			$vw_clothing_store_custom_css .='margin-top:10px;';
		$vw_clothing_store_custom_css .='}';
		$vw_clothing_store_custom_css .='.service-text .more-btn{';
			$vw_clothing_store_custom_css .='display:inline-block;';
		$vw_clothing_store_custom_css .='}';
	}

	/*--------------------- Blog Page Posts -------------------*/

	$vw_clothing_store_blog_page_posts_settings = get_theme_mod( 'vw_clothing_store_blog_page_posts_settings','Into Blocks');
    if($vw_clothing_store_blog_page_posts_settings == 'Without Blocks'){
		$vw_clothing_store_custom_css .='.post-main-box{';
			$vw_clothing_store_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vw_clothing_store_custom_css .='}';
	}

	// featured image dimention
	$vw_clothing_store_blog_post_featured_image_dimension = get_theme_mod('vw_clothing_store_blog_post_featured_image_dimension', 'default');
	$vw_clothing_store_blog_post_featured_image_custom_width = get_theme_mod('vw_clothing_store_blog_post_featured_image_custom_width',250);
	$vw_clothing_store_blog_post_featured_image_custom_height = get_theme_mod('vw_clothing_store_blog_post_featured_image_custom_height',250);
	if($vw_clothing_store_blog_post_featured_image_dimension == 'custom'){
		$vw_clothing_store_custom_css .='.post-main-box img{';
			$vw_clothing_store_custom_css .='width: '.esc_attr($vw_clothing_store_blog_post_featured_image_custom_width).'!important; height: '.esc_attr($vw_clothing_store_blog_post_featured_image_custom_height).';';
		$vw_clothing_store_custom_css .='}';
	}

	/*---------------- Posts Settings ------------------*/

	$vw_clothing_store_featured_image_border_radius = get_theme_mod('vw_clothing_store_featured_image_border_radius', 0);
	if($vw_clothing_store_featured_image_border_radius != false){
		$vw_clothing_store_custom_css .='.box-image img, .feature-box img{';
			$vw_clothing_store_custom_css .='border-radius: '.esc_attr($vw_clothing_store_featured_image_border_radius).'px;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_featured_image_box_shadow = get_theme_mod('vw_clothing_store_featured_image_box_shadow',0);
	if($vw_clothing_store_featured_image_box_shadow != false){
		$vw_clothing_store_custom_css .='.box-image img, .feature-box img, #content-vw img{';
			$vw_clothing_store_custom_css .='box-shadow: '.esc_attr($vw_clothing_store_featured_image_box_shadow).'px '.esc_attr($vw_clothing_store_featured_image_box_shadow).'px '.esc_attr($vw_clothing_store_featured_image_box_shadow).'px #cccccc;';
		$vw_clothing_store_custom_css .='}';
	}

	/*---------------- Button Settings ------------------*/

	$vw_clothing_store_button_letter_spacing = get_theme_mod('vw_clothing_store_button_letter_spacing',14);
	$vw_clothing_store_custom_css .='.post-main-box .more-btn{';
		$vw_clothing_store_custom_css .='letter-spacing: '.esc_attr($vw_clothing_store_button_letter_spacing).';';
	$vw_clothing_store_custom_css .='}';

	$vw_clothing_store_button_border_radius = get_theme_mod('vw_clothing_store_button_border_radius');
	if($vw_clothing_store_button_border_radius != false){
		$vw_clothing_store_custom_css .='.post-main-box .more-btn a{';
			$vw_clothing_store_custom_css .='border-radius: '.esc_attr($vw_clothing_store_button_border_radius).'px !important;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_button_top_bottom_padding = get_theme_mod('vw_clothing_store_button_top_bottom_padding');
	$vw_clothing_store_button_left_right_padding = get_theme_mod('vw_clothing_store_button_left_right_padding');
	if($vw_clothing_store_button_top_bottom_padding != false || $vw_clothing_store_button_left_right_padding != false){
		$vw_clothing_store_custom_css .='.post-main-box .more-btn{';
			$vw_clothing_store_custom_css .='padding-top: '.esc_attr($vw_clothing_store_button_top_bottom_padding).'!important; padding-bottom: '.esc_attr($vw_clothing_store_button_top_bottom_padding).'!important;padding-left: '.esc_attr($vw_clothing_store_button_left_right_padding).'!important;padding-right: '.esc_attr($vw_clothing_store_button_left_right_padding).'!important;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_button_font_size = get_theme_mod('vw_clothing_store_button_font_size',14);
	$vw_clothing_store_custom_css .='.post-main-box .more-btn a{';
		$vw_clothing_store_custom_css .='font-size: '.esc_attr($vw_clothing_store_button_font_size).';';
	$vw_clothing_store_custom_css .='}';

	$vw_clothing_store_theme_lay = get_theme_mod( 'vw_clothing_store_button_text_transform','Capitalize');
	if($vw_clothing_store_theme_lay == 'Capitalize'){
		$vw_clothing_store_custom_css .='.post-main-box .more-btn a{';
			$vw_clothing_store_custom_css .='text-transform:Capitalize;';
		$vw_clothing_store_custom_css .='}';
	}
	if($vw_clothing_store_theme_lay == 'Lowercase'){
		$vw_clothing_store_custom_css .='.post-main-box .more-btn a{';
			$vw_clothing_store_custom_css .='text-transform:Lowercase;';
		$vw_clothing_store_custom_css .='}';
	}
	if($vw_clothing_store_theme_lay == 'Uppercase'){
		$vw_clothing_store_custom_css .='.post-main-box .more-btn a{';
			$vw_clothing_store_custom_css .='text-transform:Uppercase;';
		$vw_clothing_store_custom_css .='}';
	}

	/*---------------- Single Blog Page Settings ------------------*/

	$vw_clothing_store_single_blog_comment_button_text = get_theme_mod('vw_clothing_store_single_blog_comment_button_text', 'Post Comment');
	if($vw_clothing_store_single_blog_comment_button_text == ''){
		$vw_clothing_store_custom_css .='#comments p.form-submit {';
			$vw_clothing_store_custom_css .='display: none;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_comment_width = get_theme_mod('vw_clothing_store_single_blog_comment_width');
	if($vw_clothing_store_comment_width != false){
		$vw_clothing_store_custom_css .='#comments textarea{';
			$vw_clothing_store_custom_css .='width: '.esc_attr($vw_clothing_store_comment_width).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_single_blog_post_navigation_show_hide = get_theme_mod('vw_clothing_store_single_blog_post_navigation_show_hide',true);
	if($vw_clothing_store_single_blog_post_navigation_show_hide != true){
		$vw_clothing_store_custom_css .='.post-navigation{';
			$vw_clothing_store_custom_css .='display: none;';
		$vw_clothing_store_custom_css .='}';
	}

	/*--------------------- Grid Posts Posts -------------------*/

	$vw_clothing_store_display_grid_posts_settings = get_theme_mod( 'vw_clothing_store_display_grid_posts_settings','Into Blocks');
    if($vw_clothing_store_display_grid_posts_settings == 'Without Blocks'){
		$vw_clothing_store_custom_css .='.grid-post-main-box{';
			$vw_clothing_store_custom_css .='box-shadow: none; border: none; margin:30px 0;';
		$vw_clothing_store_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_clothing_store_related_product_show_hide = get_theme_mod('vw_clothing_store_related_product_show_hide',true);
	if($vw_clothing_store_related_product_show_hide != true){
		$vw_clothing_store_custom_css .='.related.products{';
			$vw_clothing_store_custom_css .='display: none;';
		$vw_clothing_store_custom_css .='}';
	}

	/*----------------Woocommerce Products Settings ------------------*/

	$vw_clothing_store_products_padding_top_bottom = get_theme_mod('vw_clothing_store_products_padding_top_bottom');
	if($vw_clothing_store_products_padding_top_bottom != false){
		$vw_clothing_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_clothing_store_custom_css .='padding-top: '.esc_attr($vw_clothing_store_products_padding_top_bottom).'!important; padding-bottom: '.esc_attr($vw_clothing_store_products_padding_top_bottom).'!important;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_products_padding_left_right = get_theme_mod('vw_clothing_store_products_padding_left_right');
	if($vw_clothing_store_products_padding_left_right != false){
		$vw_clothing_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_clothing_store_custom_css .='padding-left: '.esc_attr($vw_clothing_store_products_padding_left_right).'!important; padding-right: '.esc_attr($vw_clothing_store_products_padding_left_right).'!important;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_products_box_shadow = get_theme_mod('vw_clothing_store_products_box_shadow');
	if($vw_clothing_store_products_box_shadow != false){
		$vw_clothing_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
				$vw_clothing_store_custom_css .='box-shadow: '.esc_attr($vw_clothing_store_products_box_shadow).'px '.esc_attr($vw_clothing_store_products_box_shadow).'px '.esc_attr($vw_clothing_store_products_box_shadow).'px #ddd;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_products_border_radius = get_theme_mod('vw_clothing_store_products_border_radius');
	if($vw_clothing_store_products_border_radius != false){
		$vw_clothing_store_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
			$vw_clothing_store_custom_css .='border-radius: '.esc_attr($vw_clothing_store_products_border_radius).'px;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_products_btn_padding_top_bottom = get_theme_mod('vw_clothing_store_products_btn_padding_top_bottom');
	if($vw_clothing_store_products_btn_padding_top_bottom != false){
		$vw_clothing_store_custom_css .='.woocommerce a.button{';
			$vw_clothing_store_custom_css .='padding-top: '.esc_attr($vw_clothing_store_products_btn_padding_top_bottom).' !important; padding-bottom: '.esc_attr($vw_clothing_store_products_btn_padding_top_bottom).' !important;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_products_btn_padding_left_right = get_theme_mod('vw_clothing_store_products_btn_padding_left_right');
	if($vw_clothing_store_products_btn_padding_left_right != false){
		$vw_clothing_store_custom_css .='.woocommerce a.button{';
			$vw_clothing_store_custom_css .='padding-left: '.esc_attr($vw_clothing_store_products_btn_padding_left_right).' !important; padding-right: '.esc_attr($vw_clothing_store_products_btn_padding_left_right).' !important;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_products_button_border_radius = get_theme_mod('vw_clothing_store_products_button_border_radius', 0);
	if($vw_clothing_store_products_button_border_radius != false){
		$vw_clothing_store_custom_css .='.woocommerce ul.products li.product .button, a.checkout-button.button.alt.wc-forward,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt,.woocommerce a.button{';
			$vw_clothing_store_custom_css .='border-radius: '.esc_attr($vw_clothing_store_products_button_border_radius).'px !important;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_woocommerce_sale_position = get_theme_mod( 'vw_clothing_store_woocommerce_sale_position','right');
    if($vw_clothing_store_woocommerce_sale_position == 'left'){
		$vw_clothing_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_clothing_store_custom_css .='left: 12px !important; right: auto !important;';
		$vw_clothing_store_custom_css .='}';
	}else if($vw_clothing_store_woocommerce_sale_position == 'right'){
		$vw_clothing_store_custom_css .='.woocommerce ul.products li.product .onsale{';
			$vw_clothing_store_custom_css .='left: auto!important; right: 0 !important;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_woocommerce_sale_font_size = get_theme_mod('vw_clothing_store_woocommerce_sale_font_size');
	if($vw_clothing_store_woocommerce_sale_font_size != false){
		$vw_clothing_store_custom_css .='.woocommerce span.onsale{';
			$vw_clothing_store_custom_css .='font-size: '.esc_attr($vw_clothing_store_woocommerce_sale_font_size).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_woocommerce_sale_padding_top_bottom = get_theme_mod('vw_clothing_store_woocommerce_sale_padding_top_bottom');
	if($vw_clothing_store_woocommerce_sale_padding_top_bottom != false){
		$vw_clothing_store_custom_css .='.woocommerce span.onsale{';
			$vw_clothing_store_custom_css .='padding-top: '.esc_attr($vw_clothing_store_woocommerce_sale_padding_top_bottom).'; padding-bottom: '.esc_attr($vw_clothing_store_woocommerce_sale_padding_top_bottom).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_woocommerce_sale_padding_left_right = get_theme_mod('vw_clothing_store_woocommerce_sale_padding_left_right');
	if($vw_clothing_store_woocommerce_sale_padding_left_right != false){
		$vw_clothing_store_custom_css .='.woocommerce span.onsale{';
			$vw_clothing_store_custom_css .='padding-left: '.esc_attr($vw_clothing_store_woocommerce_sale_padding_left_right).'; padding-right: '.esc_attr($vw_clothing_store_woocommerce_sale_padding_left_right).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_woocommerce_sale_border_radius = get_theme_mod('vw_clothing_store_woocommerce_sale_border_radius', 0);
	if($vw_clothing_store_woocommerce_sale_border_radius != false){
		$vw_clothing_store_custom_css .='.woocommerce span.onsale{';
			$vw_clothing_store_custom_css .='border-radius: '.esc_attr($vw_clothing_store_woocommerce_sale_border_radius).'px;';
		$vw_clothing_store_custom_css .='}';
	}

	/*----------------Social Icons Settings ------------------*/

	$vw_clothing_store_social_icon_font_size = get_theme_mod('vw_clothing_store_social_icon_font_size');
	if($vw_clothing_store_social_icon_font_size != false){
		$vw_clothing_store_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_clothing_store_custom_css .='font-size: '.esc_attr($vw_clothing_store_social_icon_font_size).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_social_icon_padding = get_theme_mod('vw_clothing_store_social_icon_padding');
	if($vw_clothing_store_social_icon_padding != false){
		$vw_clothing_store_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_clothing_store_custom_css .='padding: '.esc_attr($vw_clothing_store_social_icon_padding).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_social_icon_width = get_theme_mod('vw_clothing_store_social_icon_width');
	if($vw_clothing_store_social_icon_width != false){
		$vw_clothing_store_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_clothing_store_custom_css .='width: '.esc_attr($vw_clothing_store_social_icon_width).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_social_icon_height = get_theme_mod('vw_clothing_store_social_icon_height');
	if($vw_clothing_store_social_icon_height != false){
		$vw_clothing_store_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_clothing_store_custom_css .='height: '.esc_attr($vw_clothing_store_social_icon_height).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_social_icon_border_radius = get_theme_mod('vw_clothing_store_social_icon_border_radius');
	if($vw_clothing_store_social_icon_border_radius != false){
		$vw_clothing_store_custom_css .='#sidebar .custom-social-icons i, #footer .custom-social-icons i{';
			$vw_clothing_store_custom_css .='border-radius: '.esc_attr($vw_clothing_store_social_icon_border_radius).'px;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_resp_menu_toggle_btn_bg_color = get_theme_mod('vw_clothing_store_resp_menu_toggle_btn_bg_color');
	if($vw_clothing_store_resp_menu_toggle_btn_bg_color != false){
		$vw_clothing_store_custom_css .='.toggle-nav i{';
			$vw_clothing_store_custom_css .='background: '.esc_attr($vw_clothing_store_resp_menu_toggle_btn_bg_color).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_grid_featured_image_box_shadow = get_theme_mod('vw_clothing_store_grid_featured_image_box_shadow',0);
	if($vw_clothing_store_grid_featured_image_box_shadow != false){
		$vw_clothing_store_custom_css .='.grid-post-main-box .box-image img, .grid-post-main-box .feature-box img, #content-vw img{';
			$vw_clothing_store_custom_css .='box-shadow: '.esc_attr($vw_clothing_store_grid_featured_image_box_shadow).'px '.esc_attr($vw_clothing_store_grid_featured_image_box_shadow).'px '.esc_attr($vw_clothing_store_grid_featured_image_box_shadow).'px #cccccc;';
		$vw_clothing_store_custom_css .='}';
	}

	// Menus

	$vw_clothing_store_header_menus_color = get_theme_mod('vw_clothing_store_header_menus_color');
	if($vw_clothing_store_header_menus_color != false){
		$vw_clothing_store_custom_css .='.main-navigation a{';
			$vw_clothing_store_custom_css .='color: '.esc_attr($vw_clothing_store_header_menus_color).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_header_menus_hover_color = get_theme_mod('vw_clothing_store_header_menus_hover_color');
	if($vw_clothing_store_header_menus_hover_color != false){
		$vw_clothing_store_custom_css .='.main-navigation a:hover{';
			$vw_clothing_store_custom_css .='color: '.esc_attr($vw_clothing_store_header_menus_hover_color).'!important;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_header_submenus_color = get_theme_mod('vw_clothing_store_header_submenus_color');
	if($vw_clothing_store_header_submenus_color != false){
		$vw_clothing_store_custom_css .='.main-navigation ul ul a{';
			$vw_clothing_store_custom_css .='color: '.esc_attr($vw_clothing_store_header_submenus_color).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_header_submenus_hover_color = get_theme_mod('vw_clothing_store_header_submenus_hover_color');
	if($vw_clothing_store_header_submenus_hover_color != false){
		$vw_clothing_store_custom_css .='.main-navigation ul.sub-menu a:hover{';
			$vw_clothing_store_custom_css .='color: '.esc_attr($vw_clothing_store_header_submenus_hover_color).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_menus_item = get_theme_mod( 'vw_clothing_store_menus_item_style','None');
    if($vw_clothing_store_menus_item == 'None'){
		$vw_clothing_store_custom_css .='.main-navigation a{';
			$vw_clothing_store_custom_css .='';
		$vw_clothing_store_custom_css .='}';
	}else if($vw_clothing_store_menus_item == 'Zoom In'){
		$vw_clothing_store_custom_css .='.main-navigation a:hover{';
			$vw_clothing_store_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #000;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_navigation_menu_font_weight = get_theme_mod('vw_clothing_store_navigation_menu_font_weight','500');
	if($vw_clothing_store_navigation_menu_font_weight != false){
		$vw_clothing_store_custom_css .='.main-navigation a{';
			$vw_clothing_store_custom_css .='font-weight: '.esc_attr($vw_clothing_store_navigation_menu_font_weight).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_theme_lay = get_theme_mod( 'vw_clothing_store_menu_text_transform','Capitalize');
	if($vw_clothing_store_theme_lay == 'Capitalize'){
		$vw_clothing_store_custom_css .='.main-navigation a{';
			$vw_clothing_store_custom_css .='text-transform:Capitalize;';
		$vw_clothing_store_custom_css .='}';
	}
	if($vw_clothing_store_theme_lay == 'Lowercase'){
		$vw_clothing_store_custom_css .='.main-navigation a{';
			$vw_clothing_store_custom_css .='text-transform:Lowercase;';
		$vw_clothing_store_custom_css .='}';
	}
	if($vw_clothing_store_theme_lay == 'Uppercase'){
		$vw_clothing_store_custom_css .='.main-navigation a{';
			$vw_clothing_store_custom_css .='text-transform:Uppercase;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_navigation_menu_font_size = get_theme_mod('vw_clothing_store_navigation_menu_font_size');
	if($vw_clothing_store_navigation_menu_font_size != false){
		$vw_clothing_store_custom_css .='.main-navigation a{';
			$vw_clothing_store_custom_css .='font-size: '.esc_attr($vw_clothing_store_navigation_menu_font_size).';';
		$vw_clothing_store_custom_css .='}';
	}

	/*---------------- Footer Settings ------------------*/

	$vw_clothing_store_button_footer_heading_letter_spacing = get_theme_mod('vw_clothing_store_button_footer_heading_letter_spacing','');
	$vw_clothing_store_custom_css .='#footer h3{';
		$vw_clothing_store_custom_css .='letter-spacing: '.esc_attr($vw_clothing_store_button_footer_heading_letter_spacing).';';
	$vw_clothing_store_custom_css .='}';

	$vw_clothing_store_button_footer_font_size = get_theme_mod('vw_clothing_store_button_footer_font_size',30);
	$vw_clothing_store_custom_css .='#footer h3{';
		$vw_clothing_store_custom_css .='font-size: '.esc_attr($vw_clothing_store_button_footer_font_size).';';
	$vw_clothing_store_custom_css .='}';

	$vw_clothing_store_theme_lay = get_theme_mod( 'vw_clothing_store_button_footer_text_transform','Capitalize');
	if($vw_clothing_store_theme_lay == 'Capitalize'){
		$vw_clothing_store_custom_css .='#footer h3{';
			$vw_clothing_store_custom_css .='text-transform:Capitalize;';
		$vw_clothing_store_custom_css .='}';
	}
	if($vw_clothing_store_theme_lay == 'Lowercase'){
		$vw_clothing_store_custom_css .='#footer h3{';
			$vw_clothing_store_custom_css .='text-transform:Lowercase;';
		$vw_clothing_store_custom_css .='}';
	}
	if($vw_clothing_store_theme_lay == 'Uppercase'){
		$vw_clothing_store_custom_css .='#footer h3{';
			$vw_clothing_store_custom_css .='text-transform:Uppercase;';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_footer_heading_weight = get_theme_mod('vw_clothing_store_footer_heading_weight','600');
	if($vw_clothing_store_footer_heading_weight != false){
		$vw_clothing_store_custom_css .='#footer h3{';
			$vw_clothing_store_custom_css .='font-weight: '.esc_attr($vw_clothing_store_footer_heading_weight).';';
		$vw_clothing_store_custom_css .='}';
	}

	$vw_clothing_store_resp_topbar = get_theme_mod( 'vw_clothing_store_resp_topbar_hide_show',false);
	if($vw_clothing_store_resp_topbar == true && get_theme_mod( 'vw_clothing_store_header_topbar', false) == false){
    	$vw_clothing_store_custom_css .='.topbar{';
			$vw_clothing_store_custom_css .='display:none;';
		$vw_clothing_store_custom_css .='} ';
	}
    if($vw_clothing_store_resp_topbar == true){
    	$vw_clothing_store_custom_css .='@media screen and (max-width:575px) {';
		$vw_clothing_store_custom_css .='.topbar{';
			$vw_clothing_store_custom_css .='display:block;';
		$vw_clothing_store_custom_css .='} }';
	}else if($vw_clothing_store_resp_topbar == false){
		$vw_clothing_store_custom_css .='@media screen and (max-width:575px) {';
		$vw_clothing_store_custom_css .='.topbar{';
			$vw_clothing_store_custom_css .='display:none;';
		$vw_clothing_store_custom_css .='} }';
	}

	$vw_clothing_store_breadcrumbs_alignment = get_theme_mod( 'vw_clothing_store_breadcrumbs_alignment','Left');
    if($vw_clothing_store_breadcrumbs_alignment == 'Left'){
    	$vw_clothing_store_custom_css .='@media screen and (min-width:768px) {';
		$vw_clothing_store_custom_css .='.breadcrumbs{';
			$vw_clothing_store_custom_css .='text-align:start;';
		$vw_clothing_store_custom_css .='}}';
	}else if($vw_clothing_store_breadcrumbs_alignment == 'Center'){
		$vw_clothing_store_custom_css .='@media screen and (min-width:768px) {';
		$vw_clothing_store_custom_css .='.breadcrumbs{';
			$vw_clothing_store_custom_css .='text-align:center;';
		$vw_clothing_store_custom_css .='}}';
	}else if($vw_clothing_store_breadcrumbs_alignment == 'Right'){
		$vw_clothing_store_custom_css .='@media screen and (min-width:768px) {';
		$vw_clothing_store_custom_css .='.breadcrumbs{';
			$vw_clothing_store_custom_css .='text-align:end;';
		$vw_clothing_store_custom_css .='}}';
	}
