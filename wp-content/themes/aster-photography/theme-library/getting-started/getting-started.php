<?php
/**
 * Getting Started Page.
 *
 * @package aster_photography
 */


if( ! function_exists( 'aster_photography_getting_started_menu' ) ) :
/**
 * Adding Getting Started Page in admin menu
 */
function aster_photography_getting_started_menu(){	
	add_theme_page(
		__( 'Getting Started', 'aster-photography' ),
		__( 'Getting Started', 'aster-photography' ),
		'manage_options',
		'aster-photography-getting-started',
		'aster_photography_getting_started_page'
	);
}
endif;
add_action( 'admin_menu', 'aster_photography_getting_started_menu' );

if( ! function_exists( 'aster_photography_getting_started_admin_scripts' ) ) :
/**
 * Load Getting Started styles in the admin
 */
function aster_photography_getting_started_admin_scripts( $hook ){
	// Load styles only on our page
	if( 'appearance_page_aster-photography-getting-started' != $hook ) return;

    wp_enqueue_style( 'aster-photography-getting-started', get_template_directory_uri() . '/resource/css/getting-started.css', false, ASTER_PHOTOGRAPHY_THEME_VERSION );

    wp_enqueue_script( 'aster-photography-getting-started', get_template_directory_uri() . '/resource/js/getting-started.js', array( 'jquery' ), ASTER_PHOTOGRAPHY_THEME_VERSION, true );
}
endif;
add_action( 'admin_enqueue_scripts', 'aster_photography_getting_started_admin_scripts' );

if( ! function_exists( 'aster_photography_getting_started_page' ) ) :
/**
 * Callback function for admin page.
*/
function aster_photography_getting_started_page(){ 
	$aster_photography_theme = wp_get_theme();?>
	<div class="wrap getting-started">
		<div class="intro-wrap">
			<div class="intro cointaner">
				<div class="intro-content">
					<h3><?php echo esc_html( 'Welcome to', 'aster-photography' );?> <span class="theme-name"><?php echo esc_html( ASTER_PHOTOGRAPHY_THEME_NAME ); ?></span></h3>
					<p class="about-text">
						<?php
						// Remove last sentence of description.
						$aster_photography_description = explode( '. ', $aster_photography_theme->get( 'Description' ) );

						array_pop( $aster_photography_description );

						$aster_photography_description = implode( '. ', $aster_photography_description );

						echo esc_html( $aster_photography_description . '.' );
					?></p>
					<div class="btns-getstart">
						<a href="<?php echo esc_url( admin_url( 'customize.php' ) ); ?>"target="_blank" class="button button-primary"><?php esc_html_e( 'Customize', 'aster-photography' ); ?></a>
						<a class="button button-primary" href="<?php echo esc_url( 'https://wordpress.org/support/theme/aster-photography/reviews/#new-post' ); ?>" title="<?php esc_attr_e( 'Visit the Review', 'aster-photography' ); ?>" target="_blank">
							<?php esc_html_e( 'Review', 'aster-photography' ); ?>
						</a>
						<a class="button button-primary" href="<?php echo esc_url( 'https://wordpress.org/support/theme/aster-photography' ); ?>" title="<?php esc_attr_e( 'Visit the Support', 'aster-photography' ); ?>" target="_blank">
							<?php esc_html_e( 'Contact Support', 'aster-photography' ); ?>
						</a>
					</div>
					<div class="btns-wizard">
						<a class="wizard" href="<?php echo esc_url( admin_url( 'themes.php?page=asterphotography-wizard' ) ); ?>"target="_blank" class="button button-primary"><?php esc_html_e( 'One Click Demo Setup', 'aster-photography' ); ?></a>
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
                        <?php esc_html_e( 'Getting Started', 'aster-photography' ); ?>
                    </a>
                </li>
				<li>
                    <a id="free-pro-panel" href="javascript:void(0);">
                        <?php esc_html_e( 'Free Vs Pro', 'aster-photography' ); ?>
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