<?php
	
require get_template_directory() . '/core/includes/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function cloth_rental_shop_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'cloth-rental-shop' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	cloth_rental_shop_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'cloth_rental_shop_register_recommended_plugins' );