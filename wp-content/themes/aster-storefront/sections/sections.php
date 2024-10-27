<?php

/**
 * Render homepage sections.
 */
function aster_storefront_homepage_sections() {
	$aster_storefront_homepage_sections = array_keys( aster_storefront_get_homepage_sections() );

	foreach ( $aster_storefront_homepage_sections as $section ) {
		require get_template_directory() . '/sections/' . $section . '.php';
	}
}