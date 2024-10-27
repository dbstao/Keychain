<?php

  $bakery_elementor_theme_custom_setting_css = '';

	// Global Color
	$bakery_elementor_theme_color = get_theme_mod('bakery_elementor_theme_color', '#DA2847');

	$bakery_elementor_theme_custom_setting_css .=':root {';
		$bakery_elementor_theme_custom_setting_css .='--primary-color: '.esc_attr($bakery_elementor_theme_color ).'!important;';
	$bakery_elementor_theme_custom_setting_css .='}';