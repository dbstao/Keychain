<?php
/**
 * Block styles.
 *
 * @package grabber
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function grabber_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'grabber-flat-button',
			'label' => __( 'Flat button', 'grabber' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'         => 'grabber-button-styleround',
			'label'        => __( 'Round Button', 'grabber' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'         => 'grabber-button-styleone',
			'label'        => __( 'Style 1', 'grabber' ),
			'inline_style' => '.is-style-grabber-button-styleone {
					border: none;
					text-align: center;
					outline: none;
					overflow: hidden;
					position: relative;
					box-shadow: 0 5px 15px rgba(0,0,0,0.20);
				}',
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'         => 'grabber-button-styletwo',
			'label'        => __( 'Style 2', 'grabber' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'         => 'grabber-button-stylethree',
			'label'        => __( 'Style 3', 'grabber' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'grabber-list-underline',
			'label' => __( 'Underlined list items', 'grabber' ),
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'grabber-list-plane',
			'label' => __( 'Plane list items', 'grabber' ),
			'is_default'   => false,
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'grabber-list-left-border',
			'label' => __( 'Left Border list items', 'grabber' ),
			'is_default'   => false,
		)
	);
	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'grabber-list-check',
			'label' => __( 'Check icon list items', 'grabber' ),
			'is_default'   => false,
		)
	);
	register_block_style( 
		'core/heading', 
		array(
			'name'         => 'grabber-title-underline', // Unique slug for your custom style
			'label'        => __( 'Underlined Title', 'grabber' ), // Display name of the style in the block editor
			'inline_style' => '.is-style-grabber-title-underline {					
					border-bottom: 2px solid #ccc;
				}',
		)
	);

		register_block_style(
			'core/post-title',
			array(
				'name'         => 'grabber-title-styleone',
				'label'        => __( 'Style 1', 'grabber' ),
				'inline_style' => '.is-style-grabber-title-styleone {
						background: #4CAF50;
						box-shadow: 2px 3px 1px 2px #333;
					}',
			)
		);



	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'grabber-box-shadow',
			'label' => __( 'Box shadow', 'grabber' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'grabber-box-shadow',
			'label' => __( 'Box shadow', 'grabber' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'grabber-box-shadow',
			'label' => __( 'Box shadow', 'grabber' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/details',
		array(
			'name'  => 'grabber-plus',
			'label' => __( 'Plus & minus', 'grabber' ),
		)
	);
}
add_action( 'init', 'grabber_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function grabber_unregister_block_style() {
	wp_enqueue_script(
		'grabber-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		GRABBER_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'grabber_unregister_block_style' );
