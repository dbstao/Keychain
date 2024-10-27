<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VendorFuel
 */

$vendorfuel_custom_logo_id = get_theme_mod('custom_logo');
$vendorfuel_logo           = wp_get_attachment_image_src($vendorfuel_custom_logo_id, 'full');
$vendorfuel_color_scheme   = get_theme_mod('color_scheme');
$vendorfuel_navbar_class   = 'light' === $vendorfuel_color_scheme ? 'navbar-light' : 'navbar-dark';

switch ($vendorfuel_color_scheme) {
	case 'rwb':
		$vendorfuel_bg_class           = 'bg-light';
		$vendorfuel_dropdown_btn_class = 'btn-light';
		$vendorfuel_navbar_class       = 'navbar-light';
		$vendorfuel_search_btn_class   = 'btn-primary';
		break;
	case 'green':
		$vendorfuel_bg_class           = 'has-dark-green-background-color';
		$vendorfuel_dropdown_btn_class = 'btn-outline-light border-0';
		$vendorfuel_navbar_class       = 'navbar-dark';
		$vendorfuel_search_btn_class   = 'btn-outline-light';
		break;
	case 'blue':
		$vendorfuel_bg_class           = 'has-dark-blue-background-color';
		$vendorfuel_dropdown_btn_class = 'btn-outline-light border-0';
		$vendorfuel_navbar_class       = 'navbar-dark';
		$vendorfuel_search_btn_class   = 'btn-primary';
		break;
	case 'gray':
		$vendorfuel_bg_class           = 'bg-secondary';
		$vendorfuel_dropdown_btn_class = 'btn-secondary';
		$vendorfuel_navbar_class       = 'navbar-dark';
		$vendorfuel_search_btn_class   = 'btn-dark';
		break;
	case 'dark':
		$vendorfuel_bg_class           = 'bg-dark';
		$vendorfuel_dropdown_btn_class = 'btn-dark';
		$vendorfuel_navbar_class       = 'navbar-dark';
		$vendorfuel_search_btn_class   = 'btn-secondary';
		break;
	default:
		$vendorfuel_bg_class           = 'bg-light';
		$vendorfuel_dropdown_btn_class = 'btn-light';
		$vendorfuel_navbar_class       = 'navbar-light';
		$vendorfuel_search_btn_class   = 'btn-outline-secondary';
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class('min-vh-100 color-scheme-' . $vendorfuel_color_scheme); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site d-flex flex-column min-vh-100">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'vendorfuel'); ?></a>

		<header id="masthead" class="site-header">
			<div class="navbar <?php echo esc_attr($vendorfuel_navbar_class . ' ' . $vendorfuel_bg_class); ?>">
				<div class="container-fluid">
					<div class="row g-0 w-100 mb-2 align-items-center">
						<div class="col">
							<button class="btn btn-outline-primary border-0 d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu" aria-controls="offcanvasMenu">
								<span class="navbar-toggler-icon"></span>
							</button>
						</div>
						<div class="col text-center">
							<a class="navbar-brand site-branding text-truncate" href="<?php echo esc_url(home_url('/')); ?>" rel="home" title="<?php bloginfo('description'); ?>">
								<?php
								if (function_exists('the_custom_logo') && has_custom_logo()) {
									echo '<img height="50" src="' . esc_url($vendorfuel_logo[0]) . '" alt="' . esc_attr(get_bloginfo('name')) . '">';
								}
								?>
								<span class="site-title"><?php bloginfo('name'); ?></span>
							</a>
						</div>
						<div class="col text-end">
							<div class="btn-toolbar gap-1 flex-nowrap justify-content-end">
								<?php if (get_theme_mod('show_accountmenu')) { ?>
									<vf-account-menu btn-class="<?php echo esc_attr($vendorfuel_dropdown_btn_class); ?>">
									</vf-account-menu>
								<?php } ?>
								<?php if (get_theme_mod('show_cartmenu')) { ?>
									<vf-cart-menu btn-class="<?php echo esc_attr($vendorfuel_dropdown_btn_class); ?>">
									</vf-cart-menu>
								<?php } ?>
							</div>
						</div>
					</div>
					<?php if (get_theme_mod('show_search')) { ?>
						<div class="row justify-content-center w-100">
							<div class="col-md-8 col-lg-6">
								<vf-search-bar btn-class="<?php echo esc_attr($vendorfuel_search_btn_class); ?>"></vf-search-bar>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
			<nav id="site-navigation" class="main-navigation nav shadow-sm d-none d-lg-block <?php echo esc_attr($vendorfuel_bg_class); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary-menu',
						'menu_id'        => 'primary-menu',
					)
				);
				?>
			</nav><!-- #site-navigation -->

			<?php require get_template_directory() . '/inc/offcanvas.php'; ?>

		</header><!-- #masthead -->