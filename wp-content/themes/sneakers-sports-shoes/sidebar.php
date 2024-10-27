<?php
/**
 * The sidebar containing the main widget area
 * @package Sneakers Sports Shoes
 */

global $post; // Ensure the $post global variable is available

$sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();

// Ensure $post->ID is properly set before using it
$sneakers_sports_shoes_post_sidebar = $post ? esc_html(get_post_meta($post->ID, 'sneakers_sports_shoes_post_sidebar_option', true)) : '';
$sneakers_sports_shoes_sidebar_column_class = 'column-order-2';

if (empty($sneakers_sports_shoes_post_sidebar)) {
    $sneakers_sports_shoes_global_sidebar_layout = esc_html( get_theme_mod( 'sneakers_sports_shoes_global_sidebar_layout',$sneakers_sports_shoes_default['sneakers_sports_shoes_global_sidebar_layout'] ) );
} else {
    $sneakers_sports_shoes_global_sidebar_layout = $sneakers_sports_shoes_post_sidebar;
}
if ( ! is_active_sidebar( 'sidebar-1' ) || $sneakers_sports_shoes_global_sidebar_layout == 'no-sidebar' ) {
    return;
}

if ($sneakers_sports_shoes_global_sidebar_layout == 'left-sidebar') {
    $sneakers_sports_shoes_sidebar_column_class = 'column-order-1';
}
 ?>

<aside id="secondary" class="widget-area <?php echo esc_attr($sneakers_sports_shoes_sidebar_column_class) ; ?>">
    <div class="widget-area-wrapper">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</aside>
