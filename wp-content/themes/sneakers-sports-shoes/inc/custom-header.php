<?php
/**
 * Sample implementation of the Custom Header feature
 * @package Sneakers Sports Shoes
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses sneakers_sports_shoes_header_style()
 */
function sneakers_sports_shoes_custom_header_setup()
{
    add_theme_support('custom-header',
        apply_filters('sneakers_sports_shoes_custom_header_args', array(
            'default-image' => '',
            'default-text-color' => '000000',
            'width' => 1920,
            'height' => 400,
            'flex-height' => true,
            'flex-width' => true,
            'wp-head-callback' => 'sneakers_sports_shoes_header_style',
        )));
}

add_action('after_setup_theme', 'sneakers_sports_shoes_custom_header_setup');

if (!function_exists('sneakers_sports_shoes_header_style')) :
    /**
     * Styles the header image and text displayed on the blog
     *
     * @see sneakers_sports_shoes_custom_header_setup().
     */
    function sneakers_sports_shoes_header_style()
    {
        $sneakers_sports_shoes_header_text_color = get_header_textcolor();

        if (get_theme_support('custom-header', 'default-text-color') === $sneakers_sports_shoes_header_text_color) {
            return;
        }

        ?>
        <style type="text/css">
            <?php
                if ( 'blank' == $sneakers_sports_shoes_header_text_color ) :
            ?>
            .header-titles .custom-logo-name,
            .site-description {
                display: none;
                position: absolute;
                clip: rect(1px, 1px, 1px, 1px);
            }

            <?php
                else :
            ?>
            .header-titles .custom-logo-name:not(:hover):not(:focus),
            .site-description {
                color: #<?php echo esc_attr( $sneakers_sports_shoes_header_text_color ); ?>;
            }

            <?php endif; ?>
        </style>
        <?php
    }
endif;