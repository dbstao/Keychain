<?php
/**
 * Upgrade to pro options
 */
function comic_book_store_upgrade_pro_options( $wp_customize ) {

	$wp_customize->add_section(
		'upgrade_premium',
		array(
			'title'    => esc_html__( 'About Comic Book Store', 'comic-book-store' ),
			'priority' => 1,
		)
	);

	class comic_book_store_Pro_Button_Customize_Control extends WP_Customize_Control {
		public $type = 'upgrade_premium';

		function render_content() {
			?>
			<div class="pro_info">
				<ul>
				
				<li><a class="upgrade-to-pro pro-btn" href="<?php echo esc_url( COMIC_BOOK_STORE_PREMIUM_PAGE  ); ?>" target="_blank"><i class="dashicons dashicons-cart"></i><?php esc_html_e( 'Upgrade Pro', 'comic-book-store' ); ?> </a></li>

                <li><a class="upgrade-to-pro" href="<?php echo esc_url( COMIC_BOOK_STORE_PRO_DEMO ); ?>" target="_blank"><i class="dashicons dashicons-awards"></i><?php esc_html_e( 'Premium Demo', 'comic-book-store' ); ?> </a></li>

               <li><a class="upgrade-to-pro" href="<?php echo esc_url( COMIC_BOOK_STORE_REVIEW ); ?>" target="_blank"><i class="dashicons dashicons-star-filled"></i><?php esc_html_e( 'Rate Us', 'comic-book-store' ); ?> </a></li>

               <li><a class="upgrade-to-pro" href="<?php echo esc_url( COMIC_BOOK_STORE_SUPPORT ); ?>" target="_blank"><i class="dashicons dashicons-lightbulb"></i><?php esc_html_e( 'Support Forum', 'comic-book-store' ); ?> </a></li>

               <li><a class="upgrade-to-pro" href="<?php echo esc_url(COMIC_BOOK_STORE_THEME_PAGE ); ?>" target="_blank"><i class="dashicons dashicons-admin-appearance"></i><?php esc_html_e( 'Theme Page', 'comic-book-store' ); ?> </a></li>

              <li><a class="upgrade-to-pro" href="<?php echo esc_url( COMIC_BOOK_STORE_THEME_DOCUMENTATION ); ?>" target="_blank"><i class="dashicons dashicons-visibility"></i><?php esc_html_e( 'Theme Documentation', 'comic-book-store' ); ?> </a></li>

				</ul>
			</div>
			<?php
		}
	}

	$wp_customize->add_setting(
		'pro_info_buttons',
		array(
			'capability'        => 'edit_theme_options',
			'sanitize_callback' => 'comic_book_store_sanitize_text',
		)
	);

	$wp_customize->add_control(
		new Comic_Book_Store_Pro_Button_Customize_Control(
			$wp_customize,
			'pro_info_buttons',
			array(
				'section' => 'upgrade_premium',
			)
		)
	);
}
add_action( 'customize_register', 'comic_book_store_upgrade_pro_options' );