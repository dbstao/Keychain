<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package VW Clothing Store 
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
	  	<meta charset="<?php bloginfo( 'charset' ); ?>">
	  	<meta name="viewport" content="width=device-width">
	  	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
	<?php if ( function_exists( 'wp_body_open' ) )
		{
	    	wp_body_open();
	  	}else{
	    	do_action('wp_body_open');
	  	}
	?>
	<a class="screen-reader-text skip-link" href="#maincontent" ><?php esc_html_e( 'Skip to content', 'vw-clothing-store' ); ?><span class="screen-reader-text"><?php esc_html_e( 'Skip to content', 'vw-clothing-store' ); ?></span></a>
	<div class="row">
	    <div class="col-xl-2 col-lg-3 col-md-12 home-sidebar"> 
		    <?php get_template_part('template-parts/header/navigation'); ?>
	    </div>
	    <div class="col-xl-10 col-lg-9 col-md-12 home-content">

	<header role="banner">	
		<div class="home-page-header">
			<?php get_template_part('template-parts/header/top-bar'); ?>
			<?php get_template_part('template-parts/header/middle-header'); ?>
		</div>
	</header>

	<?php if(get_theme_mod('vw_clothing_store_loader_enable',false) == 1) { ?>
	  	<div id="preloader">
		    <div class="loader-inner">
		      <div class="loader-line-wrap">
		        <div class="loader-line"></div>
		      </div>
		      <div class="loader-line-wrap">
		        <div class="loader-line"></div>
		      </div>
		      <div class="loader-line-wrap">
		        <div class="loader-line"></div>
		      </div>
		      <div class="loader-line-wrap">
		        <div class="loader-line"></div>
		      </div>
		      <div class="loader-line-wrap">
		        <div class="loader-line"></div>
		      </div>
		    </div>
	  	</div>
	<?php } ?>