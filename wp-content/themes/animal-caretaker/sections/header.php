<!-- Start: Header
============================= -->
<?php

$animal_caretaker_header_button_link = get_theme_mod('animal_caretaker_header_button_link');
$animal_caretaker_header_button_text = get_theme_mod('animal_caretaker_header_button_text');

?>

<header id="header" role="banner" <?php if ( get_header_image() ) { ?> style="background-image: url( <?php header_image(); ?> ); background-size: 100%;" <?php } ?> >
	<div class="container">
		<div class="navbar-area <?php echo esc_attr(animal_caretaker_sticky_header()); ?>">
			<div class="row">
				<div class="col-lg-3 col-md-5 col-8 align-self-center">
					<div class="logo main">
						<?php if ( function_exists( 'animal_caretaker_logo_title_description' ) ) :	animal_caretaker_logo_title_description(); endif; ?>
					</div>
				</div>
				<div class="col-lg-7 col-md-3 col-4 align-self-center">
					<div class="toggle-menu gb_menu text-md-start">
						<button onclick="animal_caretaker_navigation_open()" class="gb_toggle p-2"><p class="mb-0"><?php esc_html_e('Menu','animal-caretaker'); ?></p></button>
					</div>
					<div id="gb_responsive" class="nav side_gb_nav">
						<nav id="top_gb_menu" class="gb_nav_menu" role="navigation" aria-label="<?php esc_attr_e( 'Menu', 'animal-caretaker' ); ?>">
							<?php 
							    wp_nav_menu( array( 
									'theme_location' => 'primary_menu',
									'container_class' => 'gb_navigation clearfix' ,
									'menu_class' => 'clearfix',
									'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav mb-0 px-0">%3$s</ul>',
									'fallback_cb' => 'wp_page_menu',
							    ) ); 
							?>
							<a href="javascript:void(0)" class="closebtn gb_menu" onclick="animal_caretaker_navigation_close()">x<span class="screen-reader-text"><?php esc_html_e('Close Menu','animal-caretaker'); ?></span></a>
						</nav>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 align-self-center text-md-end text-center">
					<?php if ( ! empty( $animal_caretaker_header_button_link ) || ! empty( $animal_caretaker_header_button_text ) ): ?>
						<a class="header_button" href="<?php echo esc_url( $animal_caretaker_header_button_link ); ?>">
							<?php echo esc_html( $animal_caretaker_header_button_text ); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</header>