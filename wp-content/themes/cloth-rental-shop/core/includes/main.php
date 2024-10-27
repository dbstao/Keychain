<?php

/**
* Get started notice
*/

add_action( 'wp_ajax_cloth_rental_shop_dismissed_notice_handler', 'cloth_rental_shop_ajax_notice_handler' );

function cloth_rental_shop_ajax_notice_handler() {
    if ( isset( $_POST['type'] ) ) {
        $type = sanitize_text_field( wp_unslash( $_POST['type'] ) );
        update_option( 'dismissed-' . $type, TRUE );
    }
}

function cloth_rental_shop_deprecated_hook_admin_notice() {
        if ( ! get_option('dismissed-get_started', FALSE ) ) { ?>

            <?php
            $current_screen = get_current_screen();
				if ($current_screen->id !== 'appearance_page_cloth-rental-shop-guide-page') {
             $cloth_rental_shop_comments_theme = wp_get_theme(); ?>
            <div class="cloth-rental-shop-notice-wrapper updated notice notice-get-started-class is-dismissible" data-notice="get_started">
			<div class="cloth-rental-shop-notice">
				<div class="cloth-rental-shop-notice-img">
					<img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/admin-logo.png'); ?>" alt="<?php esc_attr_e('logo', 'cloth-rental-shop'); ?>">
				</div>
				<div class="cloth-rental-shop-notice-content">
					<div class="cloth-rental-shop-notice-heading"><?php esc_html_e('Thanks for installing ','cloth-rental-shop'); ?><?php echo esc_html( $cloth_rental_shop_comments_theme ); ?></div>
					<p><?php printf(__('In order to fully benefit from everything our theme has to offer, please make sure you visit our <a href="%s">For Premium Options</a>.', 'cloth-rental-shop'), esc_url(admin_url('themes.php?page=cloth-rental-shop-guide-page'))); ?></p>
				</div>
			</div>
		</div>
        <?php }
	}
}

add_action( 'admin_notices', 'cloth_rental_shop_deprecated_hook_admin_notice' );

add_action( 'admin_menu', 'cloth_rental_shop_getting_started' );
function cloth_rental_shop_getting_started() {
	add_theme_page( esc_html__('Get Started', 'cloth-rental-shop'), esc_html__('Get Started', 'cloth-rental-shop'), 'edit_theme_options', 'cloth-rental-shop-guide-page', 'cloth_rental_shop_test_guide');
}

function cloth_rental_shop_admin_enqueue_scripts() {
	wp_enqueue_style( 'cloth-rental-shop-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
	wp_enqueue_script( 'cloth-rental-shop-admin-script', get_template_directory_uri() . '/js/cloth-rental-shop-admin-script.js', array( 'jquery' ), '', true );
    wp_localize_script( 'cloth-rental-shop-admin-script', 'cloth_rental_shop_ajax_object',
        array( 'ajax_url' => admin_url( 'admin-ajax.php' ) )
    );
}
add_action( 'admin_enqueue_scripts', 'cloth_rental_shop_admin_enqueue_scripts' );
if ( ! defined( 'CLOTH_RENTAL_SHOP_DOCS_FREE' ) ) {
define('CLOTH_RENTAL_SHOP_DOCS_FREE',__('https://demo.misbahwp.com/docs/cloth-rental-shop-free-docs/','cloth-rental-shop'));
}
if ( ! defined( 'CLOTH_RENTAL_SHOP_DOCS_PRO' ) ) {
define('CLOTH_RENTAL_SHOP_DOCS_PRO',__('https://demo.misbahwp.com/docs/cloth-rental-shop-pro-docs','cloth-rental-shop'));
}
if ( ! defined( 'CLOTH_RENTAL_SHOP_BUY_NOW' ) ) {
define('CLOTH_RENTAL_SHOP_BUY_NOW',__('https://www.misbahwp.com/products/cloth-rental-wordpress-theme','cloth-rental-shop'));
}
if ( ! defined( 'CLOTH_RENTAL_SHOP_SUPPORT_FREE' ) ) {
define('CLOTH_RENTAL_SHOP_SUPPORT_FREE',__('https://wordpress.org/support/theme/cloth-rental-shop','cloth-rental-shop'));
}
if ( ! defined( 'CLOTH_RENTAL_SHOP_REVIEW_FREE' ) ) {
define('CLOTH_RENTAL_SHOP_REVIEW_FREE',__('https://wordpress.org/support/theme/cloth-rental-shop/reviews/#new-post','cloth-rental-shop'));
}
if ( ! defined( 'CLOTH_RENTAL_SHOP_DEMO_PRO' ) ) {
define('CLOTH_RENTAL_SHOP_DEMO_PRO',__('https://demo.misbahwp.com/cloth-rental-shop/','cloth-rental-shop'));
}
if( ! defined( 'CLOTH_RENTAL_SHOP_THEME_BUNDLE' ) ) {
define('CLOTH_RENTAL_SHOP_THEME_BUNDLE',__('https://www.misbahwp.com/products/wordpress-bundle','cloth-rental-shop'));
}

function cloth_rental_shop_test_guide() { ?>
	<?php $cloth_rental_shop_theme = wp_get_theme(); ?>

	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( CLOTH_RENTAL_SHOP_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'cloth-rental-shop' ) ?></a>
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'cloth-rental-shop' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( CLOTH_RENTAL_SHOP_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'cloth-rental-shop' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( CLOTH_RENTAL_SHOP_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'cloth-rental-shop' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','cloth-rental-shop'); ?><?php echo esc_html( $cloth_rental_shop_theme ); ?>  <span><?php esc_html_e('Version: ', 'cloth-rental-shop'); ?><?php echo esc_html($cloth_rental_shop_theme['Version']);?></span></h3>
				<img class="img_responsive" style="width: 100%;" src="<?php echo esc_url( $cloth_rental_shop_theme->get_screenshot() ); ?>" />
				<div id="description-insidee">
					<?php
						$cloth_rental_shop_theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $cloth_rental_shop_theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>

		<div id="righty">
			<div class="postboxx donate">
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'cloth-rental-shop' ); ?></h3>
				<div class="insidee">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','cloth-rental-shop'); ?></p>
					<div id="admin_pro_links">
						<a class="blue-button-2" href="<?php echo esc_url( CLOTH_RENTAL_SHOP_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'cloth-rental-shop' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( CLOTH_RENTAL_SHOP_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'cloth-rental-shop' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( CLOTH_RENTAL_SHOP_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'cloth-rental-shop' ) ?></a>
					</div>
				</div>
				<h3 class="hndle bundle"><?php esc_html_e( 'Go For Theme Bundle', 'cloth-rental-shop' ); ?></h3>
				<div class="insidee theme-bundle">
					<p class="offer"><?php esc_html_e('Get 80+ Perfect WordPress Theme In A Single Package at just $99."','cloth-rental-shop'); ?></p>
					<p class="coupon"><?php esc_html_e('Get Our Theme Pack of 80+ WordPress Themes At 15% Off','cloth-rental-shop'); ?><span class="coupon-code"><?php esc_html_e('"Bundleup15"','cloth-rental-shop'); ?></span></p>
					<div id="admin_pro_linkss">
						<a class="blue-button-1" href="<?php echo esc_url( CLOTH_RENTAL_SHOP_THEME_BUNDLE ); ?>" target="_blank"><?php esc_html_e( 'Theme Bundle', 'cloth-rental-shop' ) ?></a>
					</div>
				</div>
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','cloth-rental-shop'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','cloth-rental-shop'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','cloth-rental-shop'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','cloth-rental-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('LearnPress Campatiblity','cloth-rental-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','cloth-rental-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','cloth-rental-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','cloth-rental-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Reordering','cloth-rental-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','cloth-rental-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','cloth-rental-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','cloth-rental-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','cloth-rental-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','cloth-rental-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','cloth-rental-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','cloth-rental-shop'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
	  		</div>
			</div>
		</div>
	</div>
<?php } ?>