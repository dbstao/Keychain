<?php
/**
 * Added Omega Page. */

/**
 * Add a new page under Appearance
 */
function sneakers_sports_shoes_menu()
{
	add_theme_page(__('Omega Options', 'sneakers-sports-shoes'), __('Omega Options', 'sneakers-sports-shoes'), 'edit_theme_options', 'sneakers-sports-shoes-theme', 'sneakers_sports_shoes_page');
}
add_action('admin_menu', 'sneakers_sports_shoes_menu');

// Add Getstart admin notice
function sneakers_sports_shoes_admin_notice() { 
    global $pagenow;
    $theme_args = wp_get_theme();
    $meta = get_option( 'sneakers_sports_shoes_admin_notice' );
    $name = $theme_args->get( 'Name' );
    $current_screen = get_current_screen();

    if ( ! $meta ) {
        if ( is_network_admin() ) {
            return;
        }

        if ( ! current_user_can( 'manage_options' ) ) {
            return;
        }

        if ( $current_screen->base != 'appearance_page_sneakers-sports-shoes-theme' ) {
            ?>
            <div class="notice notice-success notice-content">
                <h2><?php esc_html_e('Thank You for installing Sneakers Sports Shoes Theme!', 'sneakers-sports-shoes') ?> </h2>
                <div class="info-link">
                    <a href="<?php echo esc_url( admin_url( 'themes.php?page=sneakers-sports-shoes-theme' ) ); ?>"><?php esc_html_e('Omega Options', 'sneakers-sports-shoes'); ?></a>
                </div>
                <div class="info-link">
                    <a href="<?php echo esc_url(SNEAKERS_SPORTS_SHOES_LITE_DOCS_PRO); ?>" target="_blank"> <?php esc_html_e('Documentation', 'sneakers-sports-shoes'); ?></a>
                </div>
                <div class="info-link">
                    <a href="<?php echo esc_url(SNEAKERS_SPORTS_SHOES_BUY_NOW); ?>" target="_blank"> <?php esc_html_e('Upgrade to Pro', 'sneakers-sports-shoes'); ?></a>
                </div>
                <div class="info-link">
                    <a href="<?php echo esc_url(SNEAKERS_SPORTS_SHOES_DEMO_PRO); ?>" target="_blank"> <?php esc_html_e('Premium Demo', 'sneakers-sports-shoes'); ?></a>
                </div>
                <p class="dismiss-link"><strong><a href="?sneakers_sports_shoes_admin_notice=1"><?php esc_html_e( 'Dismiss', 'sneakers-sports-shoes' ); ?></a></strong></p>
            </div>
            <?php
        }
    }
}
add_action( 'admin_notices', 'sneakers_sports_shoes_admin_notice' );

if ( ! function_exists( 'sneakers_sports_shoes_update_admin_notice' ) ) :
/**
 * Updating admin notice on dismiss
 */
function sneakers_sports_shoes_update_admin_notice() {
    if ( isset( $_GET['sneakers_sports_shoes_admin_notice'] ) && $_GET['sneakers_sports_shoes_admin_notice'] == '1' ) {
        update_option( 'sneakers_sports_shoes_admin_notice', true );
    }
}
endif;
add_action( 'admin_init', 'sneakers_sports_shoes_update_admin_notice' );

// After Switch theme function
add_action( 'after_switch_theme', 'sneakers_sports_shoes_getstart_setup_options' );
function sneakers_sports_shoes_getstart_setup_options() {
    update_option( 'sneakers_sports_shoes_admin_notice', false );
}


/**
 * Enqueue styles for the help page.
 */
function sneakers_sports_shoes_admin_scripts($hook)
{
	wp_enqueue_style('sneakers-sports-shoes-admin-style', get_template_directory_uri() . '/inc/get-started/get-started.css', array(), '');
}
add_action('admin_enqueue_scripts', 'sneakers_sports_shoes_admin_scripts');

/**
 * Add the theme page
 */
function sneakers_sports_shoes_page(){
$sneakers_sports_shoes_user = wp_get_current_user();
$sneakers_sports_shoes_theme = wp_get_theme();
?>
<div class="das-wrap">
  <div class="sneakers-sports-shoes-panel header">
    <div class="sneakers-sports-shoes-logo">
      <span></span>
      <h2><?php echo esc_html( $sneakers_sports_shoes_theme ); ?></h2>
    </div>
    <p>
      <?php
            $sneakers_sports_shoes_theme = wp_get_theme();
            echo wp_kses_post( apply_filters( 'omega_theme_description', esc_html( $sneakers_sports_shoes_theme->get( 'Description' ) ) ) );
          ?>
    </p>
    <a class="btn btn-primary" href="<?php echo esc_url(admin_url('/customize.php?'));
?>"><?php esc_html_e('Edit With Customizer - Click Here', 'sneakers-sports-shoes'); ?></a>
  </div>

  <div class="das-wrap-inner">
    <div class="das-col das-col-7">
      <div class="sneakers-sports-shoes-panel">
        <div class="sneakers-sports-shoes-panel-content">
          <div class="theme-title">
            <h3><?php esc_html_e('If you are facing any issue with our theme, submit a support ticket here.', 'sneakers-sports-shoes'); ?></h3>
          </div>
          <a href="<?php echo esc_url( SNEAKERS_SPORTS_SHOES_SUPPORT_FREE ); ?>" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Lite Theme Support.', 'sneakers-sports-shoes'); ?></a>
        </div>
      </div>
      <div class="sneakers-sports-shoes-panel">
        <div class="sneakers-sports-shoes-panel-content">
          <div class="theme-title">
            <h3><?php esc_html_e('Please write a review if you appreciate the theme.', 'sneakers-sports-shoes'); ?></h3>
          </div>
          <a href="<?php echo esc_url( SNEAKERS_SPORTS_SHOES_REVIEW_FREE ); ?>" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Rank this topic.', 'sneakers-sports-shoes'); ?></a>
        </div>
      </div>
       <div class="sneakers-sports-shoes-panel"><div class="sneakers-sports-shoes-panel-content">
          <div class="theme-title">
            <h3><?php esc_html_e('Follow our lite theme documentation to set up our lite theme as seen in the screenshot.', 'sneakers-sports-shoes'); ?></h3>
          </div>
          <a href="<?php echo esc_url( SNEAKERS_SPORTS_SHOES_LITE_DOCS_PRO ); ?>" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Lite Documentation.', 'sneakers-sports-shoes'); ?></a>
        </div>
      </div>
    </div>
    <div class="das-col das-col-3">
      <div class="upgrade-div">
        <p><strong><?php esc_html_e('Premium Features Include:', 'sneakers-sports-shoes'); ?></strong></p>
        <ul>
          <li>
          <?php esc_html_e('One Click Demo Content Importer', 'sneakers-sports-shoes'); ?>
          </li>
          <li>
          <?php esc_html_e('Woocommerce Plugin Compatibility', 'sneakers-sports-shoes'); ?>
          </li>
          <li>
          <?php esc_html_e('Multiple Section for the templates', 'sneakers-sports-shoes'); ?>            
          </li>
          <li>
          <?php esc_html_e('For a better user experience, make the top of your menu sticky.', 'sneakers-sports-shoes'); ?>  
          </li>
        </ul>
        <div class="text-center">
          <a href="<?php echo esc_url( SNEAKERS_SPORTS_SHOES_BUY_NOW ); ?>" target="_blank"
            class="btn btn-success"><?php esc_html_e('Upgrade Pro $40', 'sneakers-sports-shoes'); ?></a>
        </div>
      </div>
      <div class="sneakers-sports-shoes-panel">
        <div class="sneakers-sports-shoes-panel-content">
          <div class="theme-title">
            <h3><?php esc_html_e('Kindly view the premium themes live demo.', 'sneakers-sports-shoes'); ?></h3>
          </div>
          <a class="btn btn-primary demo" href="<?php echo esc_url( SNEAKERS_SPORTS_SHOES_DEMO_PRO ); ?>" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Live Demo.', 'sneakers-sports-shoes'); ?></a>
        </div>
        <div class="sneakers-sports-shoes-panel-content pro-doc">
          <div class="theme-title">
            <h3><?php esc_html_e('Follow our pro theme documentation to set up our premium theme as seen in the screenshot.', 'sneakers-sports-shoes'); ?></h3>
          </div>
          <a href="<?php echo esc_url( SNEAKERS_SPORTS_SHOES_DOCS_PRO ); ?>" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Pro Documentation.', 'sneakers-sports-shoes'); ?></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
}