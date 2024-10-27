<?php

$sneakers_sports_shoes_custom_css = "";

        $sneakers_sports_shoes_theme_pagination_options_alignment = get_theme_mod('sneakers_sports_shoes_theme_pagination_options_alignment', 'Center');
		if ($sneakers_sports_shoes_theme_pagination_options_alignment == 'Center') {
		    $sneakers_sports_shoes_custom_css .= '.pagination{';
		    $sneakers_sports_shoes_custom_css .= 'text-align: center;';
		    $sneakers_sports_shoes_custom_css .= '}';
		} else if ($sneakers_sports_shoes_theme_pagination_options_alignment == 'Right') {
		    $sneakers_sports_shoes_custom_css .= '.pagination{';
		    $sneakers_sports_shoes_custom_css .= 'text-align: Right;';
		    $sneakers_sports_shoes_custom_css .= '}';
		} else if ($sneakers_sports_shoes_theme_pagination_options_alignment == 'Left') {
		    $sneakers_sports_shoes_custom_css .= '.pagination{';
		    $sneakers_sports_shoes_custom_css .= 'text-align: Left;';
		    $sneakers_sports_shoes_custom_css .= '}';
		}

		 $sneakers_sports_shoes_theme_breadcrumb_options_alignment = get_theme_mod('sneakers_sports_shoes_theme_breadcrumb_options_alignment', 'Left');
		if ($sneakers_sports_shoes_theme_breadcrumb_options_alignment == 'Center') {
		    $sneakers_sports_shoes_custom_css .= '.breadcrumbs ul{';
		    $sneakers_sports_shoes_custom_css .= 'text-align: center !important;';
		    $sneakers_sports_shoes_custom_css .= '}';
		} else if ($sneakers_sports_shoes_theme_breadcrumb_options_alignment == 'Right') {
		    $sneakers_sports_shoes_custom_css .= '.breadcrumbs ul{';
		    $sneakers_sports_shoes_custom_css .= 'text-align: Right !important;';
		    $sneakers_sports_shoes_custom_css .= '}';
		} else if ($sneakers_sports_shoes_theme_breadcrumb_options_alignment == 'Left') {
		    $sneakers_sports_shoes_custom_css .= '.breadcrumbs ul{';
		    $sneakers_sports_shoes_custom_css .= 'text-align: Left !important;';
		    $sneakers_sports_shoes_custom_css .= '}';
		}

		$sneakers_sports_shoes_menu_text_transform = get_theme_mod('sneakers_sports_shoes_menu_text_transform', 'Capitalize');
		if ($sneakers_sports_shoes_menu_text_transform == 'Capitalize') {
		    $sneakers_sports_shoes_custom_css .= '.site-navigation .primary-menu > li a{';
		    $sneakers_sports_shoes_custom_css .= 'text-transform: Capitalize !important;';
		    $sneakers_sports_shoes_custom_css .= '}';
		} else if ($sneakers_sports_shoes_menu_text_transform == 'uppercase') {
		    $sneakers_sports_shoes_custom_css .= '.site-navigation .primary-menu > li a{';
		    $sneakers_sports_shoes_custom_css .= 'text-transform: uppercase !important;';
		    $sneakers_sports_shoes_custom_css .= '}';
		} else if ($sneakers_sports_shoes_menu_text_transform == 'lowercase') {
		    $sneakers_sports_shoes_custom_css .= '.site-navigation .primary-menu > li a{';
		    $sneakers_sports_shoes_custom_css .= 'text-transform: lowercase !important;';
		    $sneakers_sports_shoes_custom_css .= '}';
		}

		$sneakers_sports_shoes_single_page_content_alignment = get_theme_mod('sneakers_sports_shoes_single_page_content_alignment', 'left');
		if ($sneakers_sports_shoes_single_page_content_alignment == 'left') {
		    $sneakers_sports_shoes_custom_css .= '#single-page .type-page{';
		    $sneakers_sports_shoes_custom_css .= 'text-align: left !important;';
		    $sneakers_sports_shoes_custom_css .= '}';
		} else if ($sneakers_sports_shoes_single_page_content_alignment == 'center') {
		    $sneakers_sports_shoes_custom_css .= '#single-page .type-page{';
		    $sneakers_sports_shoes_custom_css .= 'text-align: center !important;';
		    $sneakers_sports_shoes_custom_css .= '}';
		} else if ($sneakers_sports_shoes_single_page_content_alignment == 'right') {
		    $sneakers_sports_shoes_custom_css .= '#single-page .type-page{';
		    $sneakers_sports_shoes_custom_css .= 'text-align: right !important;';
		    $sneakers_sports_shoes_custom_css .= '}';
		}

		$sneakers_sports_shoes_footer_widget_title_alignment = get_theme_mod('sneakers_sports_shoes_footer_widget_title_alignment', 'left');
		if ($sneakers_sports_shoes_footer_widget_title_alignment == 'left') {
			$sneakers_sports_shoes_custom_css .= 'h2.widget-title{';
			$sneakers_sports_shoes_custom_css .= 'text-align: left !important;';
			$sneakers_sports_shoes_custom_css .= '}';
		} else if ($sneakers_sports_shoes_footer_widget_title_alignment == 'center') {
			$sneakers_sports_shoes_custom_css .= 'h2.widget-title{';
			$sneakers_sports_shoes_custom_css .= 'text-align: center !important;';
			$sneakers_sports_shoes_custom_css .= '}';
		} else if ($sneakers_sports_shoes_footer_widget_title_alignment == 'right') {
			$sneakers_sports_shoes_custom_css .= 'h2.widget-title{';
			$sneakers_sports_shoes_custom_css .= 'text-align: right !important;';
			$sneakers_sports_shoes_custom_css .= '}';
		}

		$sneakers_sports_shoes_show_hide_related_product = get_theme_mod('sneakers_sports_shoes_show_hide_related_product',true);
		if($sneakers_sports_shoes_show_hide_related_product != true){
			$sneakers_sports_shoes_custom_css .='.related.products{';
				$sneakers_sports_shoes_custom_css .='display: none;';
			$sneakers_sports_shoes_custom_css .='}';
		}

		/*-------------------- Global First Color -------------------*/

		$sneakers_sports_shoes_global_color = get_theme_mod('sneakers_sports_shoes_global_color', '#F36B63'); // Add a fallback if the color isn't set

		if ($sneakers_sports_shoes_global_color) {
			$sneakers_sports_shoes_custom_css .= ':root {';
			$sneakers_sports_shoes_custom_css .= '--global-color: ' . esc_attr($sneakers_sports_shoes_global_color) . ';';
			$sneakers_sports_shoes_custom_css .= '}';
		}