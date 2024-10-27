<?php

  $ev_bike_shop_theme_custom_setting_css = '';

	// Global Color
	$ev_bike_shop_theme_color = get_theme_mod('ev_bike_shop_theme_color', '#3EB489');

	$ev_bike_shop_theme_custom_setting_css .=':root {';
		$ev_bike_shop_theme_custom_setting_css .='--primary-color: '.esc_attr($ev_bike_shop_theme_color ).'!important;';
	$ev_bike_shop_theme_custom_setting_css .='}';