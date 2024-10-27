<?php

    $beauty_cosmetic_store_theme_css= "";

    /*--------------------------- Scroll to top positions -------------------*/

    $beauty_cosmetic_store_scroll_position = get_theme_mod( 'beauty_cosmetic_store_scroll_top_position','Right');
    if($beauty_cosmetic_store_scroll_position == 'Right'){
        $beauty_cosmetic_store_theme_css .='#button{';
            $beauty_cosmetic_store_theme_css .='right: 20px;';
        $beauty_cosmetic_store_theme_css .='}';
    }else if($beauty_cosmetic_store_scroll_position == 'Left'){
        $beauty_cosmetic_store_theme_css .='#button{';
            $beauty_cosmetic_store_theme_css .='left: 20px;';
        $beauty_cosmetic_store_theme_css .='}';
    }else if($beauty_cosmetic_store_scroll_position == 'Center'){
        $beauty_cosmetic_store_theme_css .='#button{';
            $beauty_cosmetic_store_theme_css .='right: 50%;left: 50%;';
        $beauty_cosmetic_store_theme_css .='}';
    }

    /*--------------------------- Global First Color ------------------------*/

    $beauty_cosmetic_store_global_color = get_theme_mod('beauty_cosmetic_store_global_color');

    if($beauty_cosmetic_store_global_color != false){
        $beauty_cosmetic_store_theme_css .='#button, .top-info, span.cart-value, .product-search button, .all-categories, #top-slider .slide-btn a, .sidebar input[type="submit"], .sidebar button[type="submit"], a.btn-text, span.onsale, .pro-button a:hover, .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button.alt.disabled, .woocommerce:where(body:not(.woocommerce-block-theme-has-button-styles)) button.button.alt.disabled:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, a.added_to_cart.wc-forward:hover, .woocommerce ul.products li.product .onsale, .woocommerce span.onsale, .woocommerce .woocommerce-ordering select, .woocommerce-account .woocommerce-MyAccount-navigation ul li, .main-navigation ul.sub-menu > li > a:hover, .main-navigation ul.sub-menu > li > a:focus, .post-navigation .nav-previous a:hover, .post-navigation .nav-next a:hover, .posts-navigation .nav-previous a:hover, .posts-navigation .nav-next a:hover,  .navigation.pagination .nav-links a.current, .navigation.pagination .nav-links a:hover, .navigation.pagination .nav-links span.current, .navigation.pagination .nav-links span:hover, .comment-respond input#submit, #colophon, .sidebar h5, .sidebar .tagcloud a:hover, p.wp-block-tag-cloud a:hover{';
            $beauty_cosmetic_store_theme_css .='background-color: '.esc_attr($beauty_cosmetic_store_global_color).';';
        $beauty_cosmetic_store_theme_css .='}';
    }

    if($beauty_cosmetic_store_global_color != false){
        $beauty_cosmetic_store_theme_css .='.top-info .social-link a i:hover, .top-info p.location i, .top-header p, .phone-icon i, .ser-content .social-link a, .featured h6.team-designation, .article-box a, p.price, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, .woocommerce-message::before, .woocommerce-info::before, .main-navigation .menu > li > a:hover, .post-navigation .nav-previous a, .post-navigation .nav-next a, .posts-navigation .nav-previous a, .posts-navigation .nav-next a, .widget a:hover, .widget a:focus, .sidebar ul li a:hover, .last_slide_head{';
            $beauty_cosmetic_store_theme_css .='color: '.esc_attr($beauty_cosmetic_store_global_color).';';
        $beauty_cosmetic_store_theme_css .='}';
    }

    if($beauty_cosmetic_store_global_color != false){
        $beauty_cosmetic_store_theme_css .='.postcat-name{';
            $beauty_cosmetic_store_theme_css .='color: '.esc_attr($beauty_cosmetic_store_global_color).' !important;';
        $beauty_cosmetic_store_theme_css .='}';
    }

    if($beauty_cosmetic_store_global_color != false){
        $beauty_cosmetic_store_theme_css .='.post-navigation .nav-previous a:hover, .post-navigation .nav-next a:hover, .posts-navigation .nav-previous a:hover, .posts-navigation .nav-next a:hover, .navigation.pagination .nav-links a.current, .navigation.pagination .nav-links a:hover, .navigation.pagination .nav-links span.current, .navigation.pagination .nav-links span:hover{';
            $beauty_cosmetic_store_theme_css .='border-color: '.esc_attr($beauty_cosmetic_store_global_color).' !important;';
        $beauty_cosmetic_store_theme_css .='}';
    }

    if($beauty_cosmetic_store_global_color != false){
        $beauty_cosmetic_store_theme_css .='.woocommerce-message, .woocommerce-info{';
            $beauty_cosmetic_store_theme_css .='border-top-color: '.esc_attr($beauty_cosmetic_store_global_color).';';
        $beauty_cosmetic_store_theme_css .='}';
    }

    if($beauty_cosmetic_store_global_color != false){
        $beauty_cosmetic_store_theme_css .='.center-header, .main-header {';
            $beauty_cosmetic_store_theme_css .='border-bottom-color: '.esc_attr($beauty_cosmetic_store_global_color).';';
        $beauty_cosmetic_store_theme_css .='}';
    }

    /*-------------------- Heading typography -------------------*/

    $beauty_cosmetic_store_heading_color = get_theme_mod('beauty_cosmetic_store_heading_color');
    $beauty_cosmetic_store_heading_font_family = get_theme_mod('beauty_cosmetic_store_heading_font_family');
    $beauty_cosmetic_store_heading_font_size = get_theme_mod('beauty_cosmetic_store_heading_font_size');
    if($beauty_cosmetic_store_heading_color != false || $beauty_cosmetic_store_heading_font_family != false || $beauty_cosmetic_store_heading_font_size != false){
        $beauty_cosmetic_store_theme_css .='h1, h2, h3, h4, h5, h6, .navbar-brand h1.site-title, h2.entry-title, h1.entry-title, h2.page-title, #latest_post h2, h2.woocommerce-loop-product__title, #colophon h5, .sidebar h5, .article-box h3.entry-title, .slider-inner-box h2, #top-slider .slider-inner-box h2, #top-slider h3.main-heading, .featured h3.main-heading, .ser-content h4, .featured h4.main-heading, #top-slider h4.main-text, #top-slider .right-image-box h5.left-text-heading, #top-slider .left-text-box-2 h5, #top-slider .left-text-box-3 h5, #top-slider .left-text-box-4 h5, .featured h6.team-designation{';
            $beauty_cosmetic_store_theme_css .='color: '.esc_attr($beauty_cosmetic_store_heading_color).'!important; 
            font-family: '.esc_attr($beauty_cosmetic_store_heading_font_family).'!important;
            font-size: '.esc_attr($beauty_cosmetic_store_heading_font_size).'px !important;';
        $beauty_cosmetic_store_theme_css .='}';
    }

    $beauty_cosmetic_store_paragraph_color = get_theme_mod('beauty_cosmetic_store_paragraph_color');
    $beauty_cosmetic_store_paragraph_font_family = get_theme_mod('beauty_cosmetic_store_paragraph_font_family');
    $beauty_cosmetic_store_paragraph_font_size = get_theme_mod('beauty_cosmetic_store_paragraph_font_size');
    if($beauty_cosmetic_store_paragraph_color != false || $beauty_cosmetic_store_paragraph_font_family != false || $beauty_cosmetic_store_paragraph_font_size != false){
        $beauty_cosmetic_store_theme_css .='p, p.site-title, span, .article-box p, ul, li{';
            $beauty_cosmetic_store_theme_css .='color: '.esc_attr($beauty_cosmetic_store_paragraph_color).'!important; 
            font-family: '.esc_attr($beauty_cosmetic_store_paragraph_font_family).'!important;
            font-size: '.esc_attr($beauty_cosmetic_store_paragraph_font_size).'px !important;';
        $beauty_cosmetic_store_theme_css .='}';
    }