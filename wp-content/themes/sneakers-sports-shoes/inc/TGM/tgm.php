<?php

require get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function sneakers_sports_shoes_register_recommended_plugins() {
	$plugins = array(	
		array(
			'name'             => __( 'WooCommerce', 'sneakers-sports-shoes' ),
			'slug'             => 'woocommerce',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),	
		array(
			'name'             => __( 'Google Language Translator', 'sneakers-sports-shoes' ),
			'slug'             => 'google-language-translator',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WooCommerce Currency Switcher', 'sneakers-sports-shoes' ),
			'slug'             => 'woocommerce-currency-switcher',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'sneakers_sports_shoes_register_recommended_plugins' );