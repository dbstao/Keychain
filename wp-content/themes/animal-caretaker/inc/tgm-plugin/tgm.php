<?php
	
require get_template_directory() . '/inc/tgm-plugin/class-tgm-plugin-activation.php';

/**
 * Recommended plugins.
 */
function animal_caretaker_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Kirki Customizer Framework', 'animal-caretaker' ),
			'slug'             => 'kirki',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	animal_caretaker_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'animal_caretaker_register_recommended_plugins' );