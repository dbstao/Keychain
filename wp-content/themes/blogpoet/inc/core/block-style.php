<?php

/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package blogpoet
 * @since 1.0.0
 */

if (function_exists('register_block_style')) {
    /**
     * Register block styles.
     *
     * @since 0.1
     *
     * @return void
     */
    function hello_agency_register_block_styles()
    {
        register_block_style(
            'core/columns',
            array(
                'name'  => 'blogpoet-boxshadow',
                'label' => __('Box Shadow', 'blogpoet')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'blogpoet-boxshadow',
                'label' => __('Box Shadow', 'blogpoet')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'blogpoet-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'blogpoet')
            )
        );
        register_block_style(
            'core/column',
            array(
                'name'  => 'blogpoet-boxshadow-large',
                'label' => __('Box Shadow Large', 'blogpoet')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'blogpoet-boxshadow',
                'label' => __('Box Shadow', 'blogpoet')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'blogpoet-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'blogpoet')
            )
        );
        register_block_style(
            'core/group',
            array(
                'name'  => 'blogpoet-boxshadow-large',
                'label' => __('Box Shadow Larger', 'blogpoet')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'blogpoet-boxshadow',
                'label' => __('Box Shadow', 'blogpoet')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'blogpoet-boxshadow-medium',
                'label' => __('Box Shadow Medium', 'blogpoet')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'blogpoet-boxshadow-larger',
                'label' => __('Box Shadow Large', 'blogpoet')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'blogpoet-image-pulse',
                'label' => __('Iamge Pulse Effect', 'blogpoet')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'blogpoet-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'blogpoet')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'blogpoet-image-hover-pulse',
                'label' => __('Hover Pulse Effect', 'blogpoet')
            )
        );
        register_block_style(
            'core/image',
            array(
                'name'  => 'blogpoet-image-hover-rotate',
                'label' => __('Hover Rotate Effect', 'blogpoet')
            )
        );
        register_block_style(
            'core/columns',
            array(
                'name'  => 'blogpoet-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'blogpoet')
            )
        );

        register_block_style(
            'core/column',
            array(
                'name'  => 'blogpoet-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'blogpoet')
            )
        );

        register_block_style(
            'core/group',
            array(
                'name'  => 'blogpoet-boxshadow-hover',
                'label' => __('Box Shadow on Hover', 'blogpoet')
            )
        );

        register_block_style(
            'core/post-terms',
            array(
                'name'  => 'categories-background-with-round',
                'label' => __('Background Color', 'blogpoet')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-color',
                'label' => __('Hover: Primary Color', 'blogpoet')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'blogpoet')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-primary-bgcolor',
                'label' => __('Hover: Primary color fill', 'blogpoet')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-secondary-bgcolor',
                'label' => __('Hover: Secondary color fill', 'blogpoet')
            )
        );
        register_block_style(
            'core/button',
            array(
                'name'  => 'button-hover-white-bgcolor',
                'label' => __('Hover: White color fill', 'blogpoet')
            )
        );

        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-color',
                'label' => __('Hover: Primary Color', 'blogpoet')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-color',
                'label' => __('Hover: Secondary Color', 'blogpoet')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-primary-fill',
                'label' => __('Hover: Primary Fill', 'blogpoet')
            )
        );
        register_block_style(
            'core/read-more',
            array(
                'name'  => 'readmore-hover-secondary-fill',
                'label' => __('Hover: secondary Fill', 'blogpoet')
            )
        );

        register_block_style(
            'core/list',
            array(
                'name'  => 'list-style-no-bullet',
                'label' => __('Hide bullet', 'blogpoet')
            )
        );
        register_block_style(
            'core/gallery',
            array(
                'name'  => 'enable-grayscale-mode-on-image',
                'label' => __('Enable Grayscale Mode on Image', 'blogpoet')
            )
        );
        register_block_style(
            'core/social-links',
            array(
                'name'  => 'social-icon-size-small',
                'label' => __('Small Size', 'blogpoet')
            )
        );
        register_block_style(
            'core/social-links',
            array(
                'name'  => 'social-icon-size-large',
                'label' => __('Large Size', 'blogpoet')
            )
        );
        register_block_style(
            'core/page-list',
            array(
                'name'  => 'blogpoet-page-list-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'blogpoet')
            )
        );
        register_block_style(
            'core/page-list',
            array(
                'name'  => 'blogpoet-page-list-bullet-hide-style-white-color',
                'label' => __('Hide Bullet Style with White Text Color', 'blogpoet')
            )
        );
        register_block_style(
            'core/categories',
            array(
                'name'  => 'blogpoet-categories-bullet-hide-style',
                'label' => __('Hide Bullet Style', 'blogpoet')
            )
        );
        register_block_style(
            'core/categories',
            array(
                'name'  => 'blogpoet-categories-bullet-hide-style-white-color',
                'label' => __('Hide Bullet Style with Text color White', 'blogpoet')
            )
        );
    }
    add_action('init', 'hello_agency_register_block_styles');
}
