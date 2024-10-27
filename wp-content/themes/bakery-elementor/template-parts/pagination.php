<?php
	the_posts_pagination( array(
		'prev_text' => esc_html__( 'Previous page', 'bakery-elementor' ),
		'next_text' => esc_html__( 'Next page', 'bakery-elementor' ),
	) );