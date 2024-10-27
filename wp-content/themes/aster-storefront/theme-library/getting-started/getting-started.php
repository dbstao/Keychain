<?php
/**
 * Getting Started Page.
 *
 * @package aster_storefront
 */


if( ! function_exists( 'aster_storefront_getting_started_menu' ) ) :
/**
 * Adding Getting Started Page in admin menu
 */
function aster_storefront_getting_started_menu(){	
	add_theme_page(
		__( 'Getting Started', 'aster-storefront' ),
		__( 'Getting Started', 'aster-storefront' ),
		'manage_options',
		'aster-storefront-getting-started',
		'aster_storefront_getting_started_page'
	);
}
endif;
add_action( 'admin_menu', 'aster_storefront_getting_started_menu' );

if( ! function_exists( 'aster_storefront_getting_started_admin_scripts' ) ) :
/**
 * Load Getting Started styles in the admin
 */
function aster_storefront_getting_started_admin_scripts( $hook ){
	// Load styles only on our page
	if( 'appearance_page_aster-storefront-getting-started' != $hook ) return;

    wp_enqueue_style( 'aster-storefront-getting-started', get_template_directory_uri() . '/resource/css/getting-started.css', false, ASTER_STOREFRONT_THEME_VERSION );

    wp_enqueue_script( 'aster-storefront-getting-started', get_template_directory_uri() . '/resource/js/getting-started.js', array( 'jquery' ), ASTER_STOREFRONT_THEME_VERSION, true );
}
endif;
add_action( 'admin_enqueue_scripts', 'aster_storefront_getting_started_admin_scripts' );

if( ! function_exists( 'aster_storefront_getting_started_page' ) ) :
/**
 * Callback function for admin page.
*/
function aster_storefront_getting_started_page(){ 
	$aster_storefront_theme = wp_get_theme();?>
	<div class="wrap getting-started">
		<div class="intro-wrap">
			<div class="intro cointaner">
				<div class="intro-content">
					<h3><?php echo esc_html( 'Welcome to', 'aster-storefront' );?> <span class="theme-name"><?php echo esc_html( ASTER_STOREFRONT_THEME_NAME ); ?></span></h3>
					<p class="about-text">
						<?php
						// Remove last sentence of description.
						$aster_storefront_description = explode( '. ', $aster_storefront_theme->get( 'Description' ) );

						array_pop( $aster_storefront_description );

						$aster_storefront_description = implode( '. ', $aster_storefront_description );

						echo esc_html( $aster_storefront_description . '.' );
					?></p>
					<div class="btns-getstart">
						<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"target="_blank" class="button button-primary"><?php esc_html_e( 'Customize', 'aster-storefront' ); ?></a>
						<a class="button button-primary" href="<?php echo esc_url( 'https://wordpress.org/support/theme/aster-storefront/reviews/#new-post' ); ?>" title="<?php esc_attr_e( 'Visit the Review', 'aster-storefront' ); ?>" target="_blank">
							<?php esc_html_e( 'Review', 'aster-storefront' ); ?>
						</a>
						<a class="button button-primary" href="<?php echo esc_url( 'https://wordpress.org/support/theme/aster-storefront' ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'aster-storefront' ); ?>" target="_blank">
							<?php esc_html_e( 'Contact Support', 'aster-storefront' ); ?>
						</a>
					</div>
					<div class="btns-wizard">
						<a class="wizard" href="<?php echo esc_url( admin_url( 'themes.php?page=asterstorefront-wizard' ) ); ?>"target="_blank" class="button button-primary"><?php esc_html_e( 'One Click Demo Setup', 'aster-storefront' ); ?></a>
					</div>
				</div>
				<div class="intro-img">
					<img src="<?php echo esc_url(get_template_directory_uri()) .'/screenshot.png'; ?>" />
				</div>
				
			</div>
		</div>

		<div class="cointaner panels">
			<ul class="inline-list">
				<li class="current">
                    <a id="help" href="javascript:void(0);">
                        <?php esc_html_e( 'Getting Started', 'aster-storefront' ); ?>
                    </a>
                </li>
				<li>
                    <a id="free-pro-panel" href="javascript:void(0);">
                        <?php esc_html_e( 'Free Vs Pro', 'aster-storefront' ); ?>
                    </a>
                </li>
			</ul>
			<div id="panel" class="panel">
				<?php require get_template_directory() . '/theme-library/getting-started/tabs/help-panel.php'; ?>
				<?php require get_template_directory() . '/theme-library/getting-started/tabs/free-vs-pro-panel.php'; ?>
				<?php require get_template_directory() . '/theme-library/getting-started/tabs/link-panel.php'; ?>
			</div>
		</div>
	</div>
	<?php
}
endif;