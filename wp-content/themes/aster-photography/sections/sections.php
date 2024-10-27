<?php

/**
 * Render homepage sections.
 */
function aster_photography_homepage_sections() {
	$aster_photography_homepage_sections = array_keys( aster_photography_get_homepage_sections() );

	foreach ( $aster_photography_homepage_sections as $section ) {
		require get_template_directory() . '/sections/' . $section . '.php';
	}
}