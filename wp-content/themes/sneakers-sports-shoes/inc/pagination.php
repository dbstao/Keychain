<?php
/**
 *
 * Pagination Functions
 *
 * @package Sneakers Sports Shoes
 */

if( !function_exists('sneakers_sports_shoes_archive_pagination_x') ):

	// Archive Page Navigation
	function sneakers_sports_shoes_archive_pagination_x(){

		the_posts_pagination();
	}

endif;
add_action('sneakers_sports_shoes_archive_pagination','sneakers_sports_shoes_archive_pagination_x',20);