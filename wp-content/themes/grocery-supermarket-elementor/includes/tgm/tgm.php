<?php
	
require get_template_directory() . '/includes/tgm/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function grocery_supermarket_elementor_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'grocery-supermarket-elementor' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WPElemento Importer', 'grocery-supermarket-elementor' ),
			'slug'             => 'wpelemento-importer',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'WooCommerce', 'grocery-supermarket-elementor' ),
			'slug'             => 'woocommerce',
			'required'         => false,
			'force_activation' => false,
		),
		array(
			'name'             => __( 'ShopLentor – WooCommerce Builder', 'grocery-supermarket-elementor' ),
			'slug'             => 'woolentor-addons',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	grocery_supermarket_elementor_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'grocery_supermarket_elementor_register_recommended_plugins' );
