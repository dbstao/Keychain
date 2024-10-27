<?php

  $grocery_supermarket_elementor_theme_custom_setting_css = '';

	// Global Color
	$grocery_supermarket_elementor_theme_color = get_theme_mod('grocery_supermarket_elementor_theme_color', '#3E7B51');
	$grocery_supermarket_elementor_second_theme_color = get_theme_mod('grocery_supermarket_elementor_second_theme_color', '#BFD5B9');

	$grocery_supermarket_elementor_theme_custom_setting_css .=':root {';
		$grocery_supermarket_elementor_theme_custom_setting_css .='--primary-color: '.esc_attr($grocery_supermarket_elementor_theme_color ).'!important;';
		$grocery_supermarket_elementor_theme_custom_setting_css .='--secondary-color: '.esc_attr($grocery_supermarket_elementor_second_theme_color ).'!important;';
	$grocery_supermarket_elementor_theme_custom_setting_css .='}';