<?php
/**
 * Theme activation.
 *
 * @package Emoza
 */

/**
 * Theme Dashboard [Free VS Pro]
 */
function emoza_free_vs_pro_html() {
	ob_start();
	?>
	<div class="thd-heading"><?php esc_html_e( 'Differences between Emoza and Emoza Pro', 'emoza-woocommerce' ); ?></div>
	<div class="thd-description"><?php esc_html_e( 'Here are some of the differences between Emoza and Emoza Pro:', 'emoza-woocommerce' ); ?></div>

	<table class="thd-table-compare">
		<thead>
			<tr>
				<th><?php esc_html_e( 'Feature', 'emoza-woocommerce' ); ?></th>
				<th><?php esc_html_e( 'Emoza', 'emoza-woocommerce' ); ?></th>
				<th><?php esc_html_e( 'Emoza Pro', 'emoza-woocommerce' ); ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?php esc_html_e( 'Access to all Google Fonts', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Responsive', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Native AMP support', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Sticky menu', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Multiple blog layouts', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>


			<tr>
				<td><?php esc_html_e( 'Type of starter sites', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge">Free</span></td>
				<td><span class="thd-badge">Premium</span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Starter sites', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge">5</span></td>
				<td><span class="thd-badge">16</span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Header support for shortcodes', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge thd-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Transparent menu bar', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge thd-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Footer credits', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge thd-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'WooCommerce support', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge">Basic</span></td>
				<td><span class="thd-badge">Extended</span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Cart and account icons in the menu', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge thd-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>	
			<tr>
				<td><?php esc_html_e( 'Sidebar minicart', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge thd-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>						
			<tr>
				<td><?php esc_html_e( 'Hooks system', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge thd-badge-warning"><i class="dashicons dashicons-no-alt"></i></span></td>
				<td><span class="thd-badge thd-badge-success"><i class="dashicons dashicons-saved"></i></span></td>
			</tr>
			<tr>
				<td><?php esc_html_e( 'Custom Elementor widgets', 'emoza-woocommerce' ); ?></td>
				<td><span class="thd-badge">5</span></td>
				<td><span class="thd-badge">9</span></td>
			</tr>
		</tbody>
	</table>

	<div class="thd-separator"></div>

	<h4>
		<a href="https://folotop.com/emoza/docs/226-differences-between-emoza-and-emoza-pro" target="_blank">
			<?php esc_html_e( 'Full list of differences between Emoza and Emoza Pro', 'emoza-woocommerce' ); ?>
		</a>
	</h4>

	<div class="thd-separator"></div>

	<p>
		<a href="https://folotop.com/theme/emoza/?utm_source=theme_table&utm_medium=button&utm_campaign=Emoza" class="thd-button button">
			<?php esc_html_e( 'Get Emoza Pro Today', 'emoza-woocommerce' ); ?>
		</a>
	</p>
	<?php
	return ob_get_clean();
}

/**
 * Theme Dashboard Settings
 *
 * @param array $settings The settings.
 */
function emoza_dashboard_settings( $settings ) {

	// Starter.
	$settings['starter_plugin_slug'] = 'folotop-starter-sites';

	// Hero.
	$settings['hero_title']       = esc_html__( 'Welcome to Emoza', 'emoza-woocommerce' );
	$settings['hero_themes_desc'] = esc_html__( 'Emoza is now installed and ready to use. Go to Theme Dashboard to get an overview of everything.', 'emoza-woocommerce' );
	$settings['hero_desc']        = esc_html__( 'Emoza is now installed and ready to go. To help you with the next step, we\'ve gathered together on this page all the resources you might need. We hope you enjoy using Emoza.', 'emoza-woocommerce' );
	$settings['hero_image']       = get_template_directory_uri() . '/theme-dashboard/images/welcome-banner@2x.png';

	// Tabs.
	$settings['tabs'] = array(
		array(
			'name'    => esc_html__( 'Theme Features', 'emoza-woocommerce' ),
			'type'    => 'features',
			'visible' => array( 'free', 'pro' ),
			'data'    => array(
				array(
					'name'          => esc_html__( 'Change Site Title or Logo', 'emoza-woocommerce' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=title_tagline' ),
				),
				array(
					'name'          => esc_html__( 'Typography', 'emoza-woocommerce' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[panel]=emoza_panel_typography' ),
				),	
				array(
					'name'          => esc_html__( 'Color Options', 'emoza-woocommerce' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=colors' ),
				),		
				array(
					'name'          => esc_html__( 'Main Header', 'emoza-woocommerce' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=emoza_section_main_header' ),
				),
				array(
					'name'          => esc_html__( 'Mobile Header', 'emoza-woocommerce' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=emoza_section_mobile_header' ),
				),		
				array(
					'name'          => esc_html__( 'Footer Copyright', 'emoza-woocommerce' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=emoza_section_footer_credits' ),
				),		
				array(
					'name'          => esc_html__( 'Blog Archives', 'emoza-woocommerce' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=emoza_section_blog_archives' ),
				),	
				array(
					'name'          => esc_html__( 'Single Posts', 'emoza-woocommerce' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=emoza_section_blog_singles' ),
				),	
				array(
					'name'          => esc_html__( 'Button Options', 'emoza-woocommerce' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=emoza_section_buttons' ),
				),				
				array(
					'name'          => esc_html__( 'Product Catalog', 'emoza-woocommerce' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=woocommerce_product_catalog' ),
				),	
				array(
					'name'          => esc_html__( 'Single Products', 'emoza-woocommerce' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=emoza_section_single_product' ),
				),
				array(
					'name'          => esc_html__( 'Cart Layout', 'emoza-woocommerce' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=emoza_section_shop_cart' ),
				),		
				array(
					'name'          => esc_html__( 'Checkout Options', 'emoza-woocommerce' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=woocommerce_checkout' ),
				),			
				array(
					'name'          => esc_html__( 'Scroll to Top', 'emoza-woocommerce' ),
					'type'          => 'free',
					'customize_uri' => admin_url( '/customize.php?autofocus[section]=emoza_section_scrolltotop' ),
				),																					
			),
		),
		array(
			'name'    => esc_html__( 'Free vs PRO', 'emoza-woocommerce' ),
			'type'    => 'html',
			'visible' => array( 'free' ),
			'data'    => emoza_free_vs_pro_html(),
		),
		array(
			'name'    => esc_html__( 'Performance', 'emoza-woocommerce' ),
			'type'    => 'performance',
			'visible' => array( 'free', 'pro' ),
		),
	);

	// Documentation.
	$settings['documentation_link'] = 'https://folotop.com/emoza/docs';

	// Promo.
	$settings['promo_title']  = esc_html__( 'Upgrade to Pro', 'emoza-woocommerce' );
	$settings['promo_desc']   = esc_html__( 'Take Emoza to a whole other level by upgrading to the Pro version.', 'emoza-woocommerce' );
	$settings['promo_button'] = esc_html__( 'Discover Emoza Pro', 'emoza-woocommerce' );
	$settings['promo_link']   = 'https://folotop.com/emoza/?utm_source=theme_info&utm_medium=link&utm_campaign=Emoza';

	// Review.
	$settings['review_link']       = 'https://wordpress.org/support/theme/emoza-woocommerce/reviews/';
	$settings['suggest_idea_link'] = 'https://folotop.circle.so/c/give-feedback';

	// Support.
	$settings['support_link']     = 'https://wordpress.org/support/theme/emoza/';
	$settings['support_pro_link'] = 'https://folotop.com/theme/emoza-pro/?utm_source=theme_info&utm_medium=link&utm_campaign=Emoza';

	// Community.
	$settings['community_link'] = 'https://www.facebook.com/groups/folotop/';

	$theme = wp_get_theme();
	// Changelog.
	$settings['changelog_version'] = $theme->version;
	$settings['changelog_link']    = 'https://folotop.com/changelog/emoza/';
	
	//Has pro
	$settings['has_pro'] = false;

	return $settings;
}
add_filter( 'thd_register_settings', 'emoza_dashboard_settings' );

/**
 * Starter Settings
 *
 * @param array $settings The settings.
 */
function emoza_demos_settings( $settings ) {

	$settings['categories'] = array(
		'business' 	=> 'Business',
		'portfolio' => 'Portfolio',
		'ecommerce' => 'eCommerce',
		'event' 	=> 'Events',
	);	

	$settings['builders'] = array(
		'elementor' => 'Elementor',
	);		

	// Pro.
	$settings['pro_label'] = esc_html__( 'Get Emoza Pro', 'emoza-woocommerce' );
	$settings['pro_link']  = 'https://folotop.com/emoza/?utm_source=theme_table&utm_medium=button&utm_campaign=Emoza';

	return $settings;
}
add_filter( 'atss_register_demos_settings', 'emoza_demos_settings' );
