<?php
//about theme info
add_action( 'admin_menu', 'grocery_supermarket_elementor_gettingstarted' );
function grocery_supermarket_elementor_gettingstarted() {
	add_theme_page( esc_html__('Grocery Supermarket Elementor', 'grocery-supermarket-elementor'), esc_html__('Grocery Supermarket Elementor', 'grocery-supermarket-elementor'), 'edit_theme_options', 'grocery_supermarket_elementor_about', 'grocery_supermarket_elementor_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function grocery_supermarket_elementor_admin_theme_style() {
	wp_enqueue_style('grocery-supermarket-elementor-custom-admin-style', esc_url(get_template_directory_uri()) . '/includes/getstart/getstart.css');
	wp_enqueue_script('grocery-supermarket-elementor-tabs', esc_url(get_template_directory_uri()) . '/includes/getstart/js/tab.js');
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'grocery_supermarket_elementor_admin_theme_style');

// Changelog
if ( ! defined( 'GROCERY_SUPERMARKET_ELEMENTOR_CHANGELOG_URL' ) ) {
    define( 'GROCERY_SUPERMARKET_ELEMENTOR_CHANGELOG_URL', get_template_directory() . '/readme.txt' );
}

function grocery_supermarket_elementor_changelog_screen() {	
	global $wp_filesystem;
	$grocery_supermarket_elementor_changelog_file = apply_filters( 'grocery_supermarket_elementor_changelog_file', GROCERY_SUPERMARKET_ELEMENTOR_CHANGELOG_URL );
	if ( $grocery_supermarket_elementor_changelog_file && is_readable( $grocery_supermarket_elementor_changelog_file ) ) {
		WP_Filesystem();
		$grocery_supermarket_elementor_changelog = $wp_filesystem->get_contents( $grocery_supermarket_elementor_changelog_file );
		$grocery_supermarket_elementor_changelog_list = grocery_supermarket_elementor_parse_changelog( $grocery_supermarket_elementor_changelog );
		echo wp_kses_post( $grocery_supermarket_elementor_changelog_list );
	}
}

function grocery_supermarket_elementor_parse_changelog( $grocery_supermarket_elementor_content ) {
	$grocery_supermarket_elementor_content = explode ( '== ', $grocery_supermarket_elementor_content );
	$grocery_supermarket_elementor_changelog_isolated = '';
	foreach ( $grocery_supermarket_elementor_content as $key => $grocery_supermarket_elementor_value ) {
		if (strpos( $grocery_supermarket_elementor_value, 'Changelog ==') === 0) {
	    	$grocery_supermarket_elementor_changelog_isolated = str_replace( 'Changelog ==', '', $grocery_supermarket_elementor_value );
	    }
	}
	$grocery_supermarket_elementor_changelog_array = explode( '= ', $grocery_supermarket_elementor_changelog_isolated );
	unset( $grocery_supermarket_elementor_changelog_array[0] );
	$grocery_supermarket_elementor_changelog = '<div class="changelog">';
	foreach ( $grocery_supermarket_elementor_changelog_array as $grocery_supermarket_elementor_value) {
		$grocery_supermarket_elementor_value = preg_replace( '/\n+/', '</span><span>', $grocery_supermarket_elementor_value );
		$grocery_supermarket_elementor_value = '<div class="block"><span class="heading">= ' . $grocery_supermarket_elementor_value . '</span></div><hr>';
		$grocery_supermarket_elementor_changelog .= str_replace( '<span></span>', '', $grocery_supermarket_elementor_value );
	}
	$grocery_supermarket_elementor_changelog .= '</div>';
	return wp_kses_post( $grocery_supermarket_elementor_changelog );
}

//guidline for about theme
function grocery_supermarket_elementor_mostrar_guide() { 
	//custom function about theme customizer
	$grocery_supermarket_elementor_return = add_query_arg( array()) ;
	$grocery_supermarket_elementor_theme = wp_get_theme( 'grocery-supermarket-elementor' );
?>

    <div class="top-head">
		<div class="top-title">
			<h2><?php esc_html_e( 'Grocery Supermarket Elementor', 'grocery-supermarket-elementor' ); ?></h2>
		</div>
		<div class="top-right">
			<span class="version"><?php esc_html_e( 'Version', 'grocery-supermarket-elementor' ); ?>: <?php echo esc_html($grocery_supermarket_elementor_theme['Version']);?></span>
		</div>
    </div>

    <div class="inner-cont">

	    <div class="tab-sec">
	    	<div class="tab">
				<button class="tablinks" onclick="grocery_supermarket_elementor_open_tab(event, 'wpelemento_importer_editor')"><?php esc_html_e( 'Setup With Elementor', 'grocery-supermarket-elementor' ); ?></button>
				<button class="tablinks" onclick="grocery_supermarket_elementor_open_tab(event, 'setup_customizer')"><?php esc_html_e( 'Setup With Customizer', 'grocery-supermarket-elementor' ); ?></button>
				<button class="tablinks" onclick="grocery_supermarket_elementor_open_tab(event, 'changelog_cont')"><?php esc_html_e( 'Changelog', 'grocery-supermarket-elementor' ); ?></button>
			</div>

			<div id="wpelemento_importer_editor" class="tabcontent open">
				<?php if(!class_exists('WPElemento_Importer_ThemeWhizzie')){
					$grocery_supermarket_elementor_plugin_ins = Grocery_Supermarket_Elementor_Plugin_Activation_WPElemento_Importer::get_instance();
					$grocery_supermarket_elementor_actions = $grocery_supermarket_elementor_plugin_ins->grocery_supermarket_elementor_recommended_actions;
					?>
					<div class="grocery-supermarket-elementor-recommended-plugins ">
							<div class="grocery-supermarket-elementor-action-list">
								<?php if ($grocery_supermarket_elementor_actions): foreach ($grocery_supermarket_elementor_actions as $grocery_supermarket_elementor_key => $grocery_supermarket_elementor_actionValue): ?>
										<div class="grocery-supermarket-elementor-action" id="<?php echo esc_attr($grocery_supermarket_elementor_actionValue['id']);?>">
											<div class="action-inner plugin-activation-redirect">
												<h3 class="action-title"><?php echo esc_html($grocery_supermarket_elementor_actionValue['title']); ?></h3>
												<div class="action-desc"><?php echo esc_html($grocery_supermarket_elementor_actionValue['desc']); ?></div>
												<?php echo wp_kses_post($grocery_supermarket_elementor_actionValue['link']); ?>
											</div>
										</div>
									<?php endforeach;
								endif; ?>
							</div>
					</div>
				<?php }else{ ?>
					<div class="tab-outer-box">
						<h3><?php esc_html_e('Welcome to WPElemento Theme!', 'grocery-supermarket-elementor'); ?></h3>
						<p><?php esc_html_e('Click on the quick start button to import the demo.', 'grocery-supermarket-elementor'); ?></p>
						<div class="info-link">
							<a  href="<?php echo esc_url( admin_url('admin.php?page=wpelementoimporter-wizard') ); ?>"><?php esc_html_e('Quick Start', 'grocery-supermarket-elementor'); ?></a>
						</div>
					</div>
				<?php } ?>
			</div>

			<div id="setup_customizer" class="tabcontent">
				<div class="tab-outer-box">
				  	<div class="lite-theme-inner">
						<h3><?php esc_html_e('Theme Customizer', 'grocery-supermarket-elementor'); ?></h3>
						<p><?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'grocery-supermarket-elementor'); ?></p>
						<div class="info-link">
							<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'grocery-supermarket-elementor'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Help Docs', 'grocery-supermarket-elementor'); ?></h3>
						<p><?php esc_html_e('The complete procedure to configure and manage a WordPress Website from the beginning is shown in this documentation .', 'grocery-supermarket-elementor'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( GROCERY_SUPERMARKET_ELEMENTOR_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'grocery-supermarket-elementor'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Need Support?', 'grocery-supermarket-elementor'); ?></h3>
						<p><?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'grocery-supermarket-elementor'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( GROCERY_SUPERMARKET_ELEMENTOR_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'grocery-supermarket-elementor'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Reviews & Testimonials', 'grocery-supermarket-elementor'); ?></h3>
						<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'grocery-supermarket-elementor'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( GROCERY_SUPERMARKET_ELEMENTOR_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'grocery-supermarket-elementor'); ?></a>
						</div>
						<hr>
						<div class="link-customizer">
							<h3><?php esc_html_e( 'Link to customizer', 'grocery-supermarket-elementor' ); ?></h3>
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','grocery-supermarket-elementor'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','grocery-supermarket-elementor'); ?></a>
									</div>
								</div>
							
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=header_image') ); ?>" target="_blank"><?php esc_html_e('Header Image','grocery-supermarket-elementor'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','grocery-supermarket-elementor'); ?></a>
									</div>
								</div>
							</div>
						</div>
				  	</div>
				</div>
			</div>

			<div id="changelog_cont" class="tabcontent">
				<div class="tab-outer-box">
					<?php grocery_supermarket_elementor_changelog_screen(); ?>
				</div>
			</div>
			
		</div>

		<div class="inner-side-content">
			<h2><?php esc_html_e('Premium Theme', 'grocery-supermarket-elementor'); ?></h2>
			<div class="tab-outer-box">
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
				<h3><?php esc_html_e('Grocery Supermarket Elementor WordPress Theme', 'grocery-supermarket-elementor'); ?></h3>
				<div class="iner-sidebar-pro-btn">
					<span class="premium-btn"><a href="<?php echo esc_url( GROCERY_SUPERMARKET_ELEMENTOR_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Premium', 'grocery-supermarket-elementor'); ?></a>
					</span>
					<span class="demo-btn"><a href="<?php echo esc_url( GROCERY_SUPERMARKET_ELEMENTOR_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'grocery-supermarket-elementor'); ?></a>
					</span>
					<span class="doc-btn"><a href="<?php echo esc_url( GROCERY_SUPERMARKET_ELEMENTOR_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e('Theme Bundle', 'grocery-supermarket-elementor'); ?></a>
					</span>
				</div>
				<hr>
				<div class="premium-coupon">
					<div class="premium-features">
						<h3><?php esc_html_e('premium Features', 'grocery-supermarket-elementor'); ?></h3>
						<ul>
							<li><?php esc_html_e( 'Multilingual', 'grocery-supermarket-elementor' ); ?></li>
							<li><?php esc_html_e( 'Drag and drop features', 'grocery-supermarket-elementor' ); ?></li>
							<li><?php esc_html_e( 'Zero Coding Required', 'grocery-supermarket-elementor' ); ?></li>
							<li><?php esc_html_e( 'Mobile Friendly Layout', 'grocery-supermarket-elementor' ); ?></li>
							<li><?php esc_html_e( 'Responsive Layout', 'grocery-supermarket-elementor' ); ?></li>
							<li><?php esc_html_e( 'Unique Designs', 'grocery-supermarket-elementor' ); ?></li>
						</ul>
					</div>
					<div class="coupon-box">
						<h3><?php esc_html_e('Use Coupon Code', 'grocery-supermarket-elementor'); ?></h3>
						<a class="coupon-btn" href="<?php echo esc_url( GROCERY_SUPERMARKET_ELEMENTOR_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('UPGRADE NOW', 'grocery-supermarket-elementor'); ?></a>
						<div class="coupon-container">
							<h3><?php esc_html_e( 'elemento20', 'grocery-supermarket-elementor' ); ?></h3>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>

<?php } ?>