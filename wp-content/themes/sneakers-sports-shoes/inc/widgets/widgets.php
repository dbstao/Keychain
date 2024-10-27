<?php
/**
* Widget Functions.
*
* @package Sneakers Sports Shoes
*/

function sneakers_sports_shoes_widgets_init(){

	register_sidebar(array(
	    'name' => esc_html__('Main Sidebar', 'sneakers-sports-shoes'),
	    'id' => 'sidebar-1',
	    'description' => esc_html__('Add widgets here.', 'sneakers-sports-shoes'),
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget' => '</div>',
	    'before_title' => '<h3 class="widget-title"><span>',
	    'after_title' => '</span></h3>',
	));


    $sneakers_sports_shoes_default = sneakers_sports_shoes_get_default_theme_options();
    $sneakers_sports_shoes_footer_column_layout = absint( get_theme_mod( 'sneakers_sports_shoes_footer_column_layout',$sneakers_sports_shoes_default['sneakers_sports_shoes_footer_column_layout'] ) );

    for( $i = 0; $i < $sneakers_sports_shoes_footer_column_layout; $i++ ){
    	
    	if( $i == 0 ){ $count = esc_html__('One','sneakers-sports-shoes'); }
    	if( $i == 1 ){ $count = esc_html__('Two','sneakers-sports-shoes'); }
    	if( $i == 2 ){ $count = esc_html__('Three','sneakers-sports-shoes'); }

	    register_sidebar( array(
	        'name' => esc_html__('Footer Widget ', 'sneakers-sports-shoes').$count,
	        'id' => 'sneakers-sports-shoes-footer-widget-'.$i,
	        'description' => esc_html__('Add widgets here.', 'sneakers-sports-shoes'),
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget' => '</div>',
	        'before_title' => '<h2 class="widget-title">',
	        'after_title' => '</h2>',
	    ));
	}

}

add_action('widgets_init', 'sneakers_sports_shoes_widgets_init');