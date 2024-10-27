<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasMenu">
	<div class="offcanvas-header">
		<h5 class="offcanvas-title">
			<?php if ( get_theme_mod( 'show_accountlink' ) ) { ?>
				<sidebar-account-link></sidebar-account-link>
			<?php } else { ?>			
				<?php _e( get_bloginfo( 'name' ) ); ?>
			<?php } ?>			
		</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body p-0">
		<?php
		$vendorfuel_locations = get_nav_menu_locations();
		if ( has_nav_menu( 'side-menu-1' ) ) {
			$vendorfuel_menu_1 = wp_get_nav_menu_object( $vendorfuel_locations['side-menu-1'] );
			wp_nav_menu(
				array(
					// 'container'       => 'nav',
					// 'container_class' => 'nav',
					'depth'           => 0,
					'items_wrap'      => '<nav class="nav flex-column">%3$s</nav>',
					'theme_location'  => 'side-menu-1',
					'walker'          => new VendorFuel_Side_Nav_Walker(),
					'fallback_cb'     => false,
				)
			);
		}
		?>
	</div>
</div>


