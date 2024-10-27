<?php
/**
* Body Classes.
* @package Sneakers Sports Shoes
*/
 
 if (!function_exists('sneakers_sports_shoes_body_classes')) :

    function sneakers_sports_shoes_body_classes($classes) {

        $sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();
        global $post;
        // Adds a class of hfeed to non-singular pages.
        if ( !is_singular() ) {
            $classes[] = 'hfeed';
        }

        // Adds a class of no-sidebar when there is no sidebar present.
        if ( !is_active_sidebar( 'sidebar-1' ) ) {
            $classes[] = 'no-sidebar';
        }

        $sneakers_sports_shoes_global_sidebar_layout = esc_html( get_theme_mod( 'sneakers_sports_shoes_global_sidebar_layout',$sneakers_sports_shoes_default['sneakers_sports_shoes_global_sidebar_layout'] ) );

        if ( is_active_sidebar( 'sidebar-1' ) ) {
            if( is_single() || is_page() ){
                $sneakers_sports_shoes_post_sidebar = esc_html( get_post_meta( $post->ID, 'sneakers_sports_shoes_post_sidebar_option', true ) );
                if (empty($sneakers_sports_shoes_post_sidebar) || ($sneakers_sports_shoes_post_sidebar == 'global-sidebar')) {
                    $classes[] = esc_attr( $sneakers_sports_shoes_global_sidebar_layout );
                } else{
                    $classes[] = esc_attr( $sneakers_sports_shoes_post_sidebar );
                }
            }else{
                $classes[] = esc_attr( $sneakers_sports_shoes_global_sidebar_layout );
            }
            
        }
        
        return $classes;
    }

endif;

add_filter('body_class', 'sneakers_sports_shoes_body_classes');