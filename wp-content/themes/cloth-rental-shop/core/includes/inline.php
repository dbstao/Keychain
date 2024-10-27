<?php

$cloth_rental_shop_custom_css = '';


$cloth_rental_shop_is_dark_mode_enabled = get_theme_mod( 'cloth_rental_shop_is_dark_mode_enabled', false );

if ( $cloth_rental_shop_is_dark_mode_enabled ) {

    $cloth_rental_shop_custom_css .= 'body,.fixed-header,tr:nth-child(2n+2),.header,#hot_products {';
    $cloth_rental_shop_custom_css .= 'background: #000;';
    $cloth_rental_shop_custom_css .= '}';

    $cloth_rental_shop_custom_css .= 'body,h1,h2,h3,h4,h5,p,#main-menu ul li a,.woocommerce .woocommerce-ordering select, .woocommerce form .form-row input.input-text, .woocommerce form .form-row textarea,a,.logo span,.product-text a,#hot_products h3,.social-links span p{';
    $cloth_rental_shop_custom_css .= 'color: #fff;';
    $cloth_rental_shop_custom_css .= '}';

    $cloth_rental_shop_custom_css .= 'a.wc-block-components-product-name, .wc-block-components-product-name,.wc-block-components-totals-footer-item .wc-block-components-totals-item__value,
.wc-block-components-totals-footer-item .wc-block-components-totals-item__label,
.wc-block-components-totals-item__label,.wc-block-components-totals-item__value,
.wc-block-components-product-metadata .wc-block-components-product-metadata__description>p,
.is-medium table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__total .wc-block-components-formatted-money-amount,
.wc-block-components-quantity-selector input.wc-block-components-quantity-selector__input,
.wc-block-components-quantity-selector .wc-block-components-quantity-selector__button,
.wc-block-components-quantity-selector,table.wc-block-cart-items .wc-block-cart-items__row .wc-block-cart-item__quantity .wc-block-cart-item__remove-link,
.wc-block-components-product-price__value.is-discounted,del.wc-block-components-product-price__regular{';
    $cloth_rental_shop_custom_css .= 'color: #fff !important;';
    $cloth_rental_shop_custom_css .= '}';

    $cloth_rental_shop_custom_css .= 'h5.product-text a,#featured-product p.price,.card-header a,.comment-content.card-block p,.post-box.sticky a, .sticky .post-content{';
    $cloth_rental_shop_custom_css .= 'color: #000 !important';
    $cloth_rental_shop_custom_css .= '}';

	$cloth_rental_shop_custom_css .= '.post-box{';
    $cloth_rental_shop_custom_css .= '    border: 1px solid rgb(229 229 229 / 48%)';
    $cloth_rental_shop_custom_css .= '}';
}

/*---------------------------text-transform-------------------*/

$cloth_rental_shop_text_transform = get_theme_mod( 'menu_text_transform_cloth_rental_shop','CAPITALISE');
if($cloth_rental_shop_text_transform == 'CAPITALISE'){

	$cloth_rental_shop_custom_css .='#main-menu ul li a{';

		$cloth_rental_shop_custom_css .='text-transform: capitalize ;';

	$cloth_rental_shop_custom_css .='}';

}else if($cloth_rental_shop_text_transform == 'UPPERCASE'){

	$cloth_rental_shop_custom_css .='#main-menu ul li a{';

		$cloth_rental_shop_custom_css .='text-transform: uppercase ;';

	$cloth_rental_shop_custom_css .='}';

}else if($cloth_rental_shop_text_transform == 'LOWERCASE'){

	$cloth_rental_shop_custom_css .='#main-menu ul li a{';

		$cloth_rental_shop_custom_css .='text-transform: lowercase ;';

	$cloth_rental_shop_custom_css .='}';
}

	/*---------------------------menu-zoom-------------------*/

		$cloth_rental_shop_menu_zoom = get_theme_mod( 'cloth_rental_shop_menu_zoom','None');

    if($cloth_rental_shop_menu_zoom == 'None'){

		$cloth_rental_shop_custom_css .='#main-menu ul li a{';

			$cloth_rental_shop_custom_css .='';

		$cloth_rental_shop_custom_css .='}';

	}else if($cloth_rental_shop_menu_zoom == 'Zoominn'){

		$cloth_rental_shop_custom_css .='#main-menu ul li a:hover{';

			$cloth_rental_shop_custom_css .='transition: all 0.3s ease-in-out !important; transform: scale(1.2) !important; color: #087450;';

		$cloth_rental_shop_custom_css .='}';
	}

/*---------------------------Container Width-------------------*/

$cloth_rental_shop_container_width = get_theme_mod('cloth_rental_shop_container_width');

	$cloth_rental_shop_custom_css .='body{';

		$cloth_rental_shop_custom_css .='width: '.esc_attr($cloth_rental_shop_container_width).'%; margin: auto;';

	$cloth_rental_shop_custom_css .='}';

	/*---------------------------Scroll to Top Alignment Settings-------------------*/

	$cloth_rental_shop_scroll_top_position = get_theme_mod( 'cloth_rental_shop_scroll_top_position','Right');

	if($cloth_rental_shop_scroll_top_position == 'Right'){

		$cloth_rental_shop_custom_css .='.scroll-up{';

			$cloth_rental_shop_custom_css .='right: 20px;';

		$cloth_rental_shop_custom_css .='}';

	}else if($cloth_rental_shop_scroll_top_position == 'Left'){

		$cloth_rental_shop_custom_css .='.scroll-up{';

			$cloth_rental_shop_custom_css .='left: 20px;';

		$cloth_rental_shop_custom_css .='}';

	}else if($cloth_rental_shop_scroll_top_position == 'Center'){

		$cloth_rental_shop_custom_css .='.scroll-up{';

			$cloth_rental_shop_custom_css .='right: 50%;left: 50%;';

		$cloth_rental_shop_custom_css .='}';
	}

		/*---------------------------Pagination Settings-------------------*/


$cloth_rental_shop_pagination_setting = get_theme_mod('cloth_rental_shop_pagination_setting',true);

	if($cloth_rental_shop_pagination_setting == false){

		$cloth_rental_shop_custom_css .='.nav-links{';

			$cloth_rental_shop_custom_css .='display: none;';

		$cloth_rental_shop_custom_css .='}';
	}

	/*---------------------------related Product Settings-------------------*/


$cloth_rental_shop_related_product_setting = get_theme_mod('cloth_rental_shop_related_product_setting',true);

	if($cloth_rental_shop_related_product_setting == false){

		$cloth_rental_shop_custom_css .='.related.products, .related h2{';

			$cloth_rental_shop_custom_css .='display: none;';

		$cloth_rental_shop_custom_css .='}';
	}

	/*---------------------------Copyright Text alignment-------------------*/

$cloth_rental_shop_copyright_text_alignment = get_theme_mod( 'cloth_rental_shop_copyright_text_alignment','LEFT-ALIGN');

 if($cloth_rental_shop_copyright_text_alignment == 'LEFT-ALIGN'){

		$cloth_rental_shop_custom_css .='.copy-text p{';

			$cloth_rental_shop_custom_css .='text-align:left;';

		$cloth_rental_shop_custom_css .='}';


	}else if($cloth_rental_shop_copyright_text_alignment == 'CENTER-ALIGN'){

		$cloth_rental_shop_custom_css .='.copy-text p{';

			$cloth_rental_shop_custom_css .='text-align:center;';

		$cloth_rental_shop_custom_css .='}';


	}else if($cloth_rental_shop_copyright_text_alignment == 'RIGHT-ALIGN'){

		$cloth_rental_shop_custom_css .='.copy-text p{';

			$cloth_rental_shop_custom_css .='text-align:right;';

		$cloth_rental_shop_custom_css .='}';

	}

	/*--------------------------- Slider Opacity -------------------*/

	$cloth_rental_shop_slider_opacity_color = get_theme_mod( 'cloth_rental_shop_slider_opacity_color','0.4');

	if($cloth_rental_shop_slider_opacity_color == '0'){

		$cloth_rental_shop_custom_css .='.blog_inner_box img{';

			$cloth_rental_shop_custom_css .='opacity:0';

		$cloth_rental_shop_custom_css .='}';

		}else if($cloth_rental_shop_slider_opacity_color == '0.1'){

		$cloth_rental_shop_custom_css .='.blog_inner_box img{';

			$cloth_rental_shop_custom_css .='opacity:0.1';

		$cloth_rental_shop_custom_css .='}';

		}else if($cloth_rental_shop_slider_opacity_color == '0.2'){

		$cloth_rental_shop_custom_css .='.blog_inner_box img{';

			$cloth_rental_shop_custom_css .='opacity:0.2';

		$cloth_rental_shop_custom_css .='}';

		}else if($cloth_rental_shop_slider_opacity_color == '0.3'){

		$cloth_rental_shop_custom_css .='.blog_inner_box img{';

			$cloth_rental_shop_custom_css .='opacity:0.3';

		$cloth_rental_shop_custom_css .='}';

		}else if($cloth_rental_shop_slider_opacity_color == '0.4'){

		$cloth_rental_shop_custom_css .='.blog_inner_box img{';

			$cloth_rental_shop_custom_css .='opacity:0.4';

		$cloth_rental_shop_custom_css .='}';

		}else if($cloth_rental_shop_slider_opacity_color == '0.5'){

		$cloth_rental_shop_custom_css .='.blog_inner_box img{';

			$cloth_rental_shop_custom_css .='opacity:0.5';

		$cloth_rental_shop_custom_css .='}';

		}else if($cloth_rental_shop_slider_opacity_color == '0.6'){

		$cloth_rental_shop_custom_css .='.blog_inner_box img{';

			$cloth_rental_shop_custom_css .='opacity:0.6';

		$cloth_rental_shop_custom_css .='}';

		}else if($cloth_rental_shop_slider_opacity_color == '0.7'){

		$cloth_rental_shop_custom_css .='.blog_inner_box img{';

			$cloth_rental_shop_custom_css .='opacity:0.7';

		$cloth_rental_shop_custom_css .='}';

		}else if($cloth_rental_shop_slider_opacity_color == '0.8'){

		$cloth_rental_shop_custom_css .='.blog_inner_box img{';

			$cloth_rental_shop_custom_css .='opacity:0.8';

		$cloth_rental_shop_custom_css .='}';

		}else if($cloth_rental_shop_slider_opacity_color == '0.9'){

		$cloth_rental_shop_custom_css .='.blog_inner_box img{';

			$cloth_rental_shop_custom_css .='opacity:0.9';

		$cloth_rental_shop_custom_css .='}';

		}else if($cloth_rental_shop_slider_opacity_color == '1.0'){

		$cloth_rental_shop_custom_css .='.blog_inner_box img{';

			$cloth_rental_shop_custom_css .='opacity:0.9';

		$cloth_rental_shop_custom_css .='}';

		}

	/*---------------------- Slider Image Overlay ------------------------*/

	$cloth_rental_shop_overlay_option = get_theme_mod('cloth_rental_shop_overlay_option', true);

	if($cloth_rental_shop_overlay_option == false){

		$cloth_rental_shop_custom_css .='.blog_inner_box img{';

			$cloth_rental_shop_custom_css .='opacity:0.3;';

		$cloth_rental_shop_custom_css .='}';
	}

	$cloth_rental_shop_slider_image_overlay_color = get_theme_mod('cloth_rental_shop_slider_image_overlay_color', true);

	if($cloth_rental_shop_slider_image_overlay_color != false){

		$cloth_rental_shop_custom_css .='.blog_inner_box{';

			$cloth_rental_shop_custom_css .='background-color: '.esc_attr($cloth_rental_shop_slider_image_overlay_color).';';

		$cloth_rental_shop_custom_css .='}';
	}

	
	/*---------------------------woocommerce pagination alignment settings-------------------*/

	$cloth_rental_shop_woocommerce_pagination_position = get_theme_mod( 'cloth_rental_shop_woocommerce_pagination_position','Center');

	if($cloth_rental_shop_woocommerce_pagination_position == 'Left'){

		$cloth_rental_shop_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$cloth_rental_shop_custom_css .='text-align: left;';

		$cloth_rental_shop_custom_css .='}';

	}else if($cloth_rental_shop_woocommerce_pagination_position == 'Center'){

		$cloth_rental_shop_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$cloth_rental_shop_custom_css .='text-align: center;';

		$cloth_rental_shop_custom_css .='}';

	}else if($cloth_rental_shop_woocommerce_pagination_position == 'Right'){

		$cloth_rental_shop_custom_css .='.woocommerce nav.woocommerce-pagination{';

			$cloth_rental_shop_custom_css .='text-align: right;';

		$cloth_rental_shop_custom_css .='}';
	}

