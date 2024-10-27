<?php

/**
 * blogpoet: Block Patterns
 *
 * @since blogpoet 1.0.0
 */

/**
 * Registers pattern categories for blogpoet
 *
 * @since blogpoet 1.0.0
 *
 * @return void
 */
function blogpoet_register_pattern_category()
{
	$block_pattern_categories = array(
		'blogpoet' => array('label' => __('Blogpoet Patterns', 'blogpoet'))
	);

	$block_pattern_categories = apply_filters('blogpoet_block_pattern_categories', $block_pattern_categories);

	foreach ($block_pattern_categories as $name => $properties) {
		if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
			register_block_pattern_category($name, $properties); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}
}
add_action('init', 'blogpoet_register_pattern_category', 9);
