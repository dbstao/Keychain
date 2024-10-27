<?php
/*
 * @package Comic Book Store
*/
function comic_book_store_admin_enqueue_scripts() {
    wp_enqueue_style( 'comic-book-store-admin-style', esc_url( get_template_directory_uri() ).'/css/addon.css' );
}
add_action( 'admin_enqueue_scripts', 'comic_book_store_admin_enqueue_scripts' );

add_action('after_switch_theme', 'comic_book_store_options');

function comic_book_store_options() {
    global $pagenow;
    if( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) && current_user_can( 'manage_options' ) ) {
        wp_redirect( admin_url( 'themes.php?page=comic-book-store-demo' ) );
        exit;
    }
}

function comic_book_store_theme_info_menu_link() {
    $comic_book_store_theme = wp_get_theme();
        // Add "Theme Info" page
    add_theme_page(
        sprintf( esc_html__( 'Welcome to %1$s %2$s', 'comic-book-store' ), $comic_book_store_theme->get( 'Name' ), $comic_book_store_theme->get( 'Version' ) ),
        esc_html__( 'Theme Info', 'comic-book-store' ),
        'edit_theme_options',
        'comic-book-store-info',
        'comic_book_store_theme_info_page'
    );

    // Add "Theme Demo Import" page
    add_theme_page(
        esc_html__( 'Theme Demo Import', 'comic-book-store' ),
        esc_html__( 'Theme Demo Import', 'comic-book-store' ),
        'edit_theme_options',
        'comic-book-store-demo',
        'comic_book_store_demo_content_page'
    );
}
add_action( 'admin_menu', 'comic_book_store_theme_info_menu_link' );
function comic_book_store_theme_info_page() {

    $comic_book_store_theme = wp_get_theme();
    ?>
<div class="wrap theme-info-wrap">
    <h1><?php printf( esc_html__( 'Welcome to %1$s %2$s', 'comic-book-store' ), esc_html($comic_book_store_theme->get( 'Name' )), esc_html($comic_book_store_theme->get( 'Version' ))); ?>
    </h1>
    <p class="theme-description">
    <?php esc_html_e( 'Do you want to configure this theme? Look no further, our easy-to-follow theme documentation will walk you through it.', 'comic-book-store' ); ?>
    </p>
    <div class="important-link">
        <p class="main-box columns-wrapper clearfix">
            <div class="themelink column column-half clearfix">
                <p><strong><?php esc_html_e( 'Pro version of our theme', 'comic-book-store' ); ?></strong></p>
                <p><?php esc_html_e( 'Are you exited for our theme? Then we will proceed for pro version of theme.', 'comic-book-store' ); ?></p>
                <a class="get-premium" href="<?php echo esc_url( COMIC_BOOK_STORE_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Go To Premium', 'comic-book-store' ); ?></a>
                <p><strong><?php esc_html_e( 'Check all classic features', 'comic-book-store' ); ?></strong></p>
                <p><?php esc_html_e( 'Explore all the premium features.', 'comic-book-store' ); ?></p>
                <a href="<?php echo esc_url( COMIC_BOOK_STORE_THEME_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Theme Page', 'comic-book-store' ); ?></a>
            </div>
            <div class="themelink column column-half clearfix">
                <p><strong><?php esc_html_e( 'Need Help?', 'comic-book-store' ); ?></strong></p>
                <p><?php esc_html_e( 'Go to our support forum to help you out in case of queries and doubts regarding our theme.', 'comic-book-store' ); ?></p>
                <a href="<?php echo esc_url( COMIC_BOOK_STORE_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Contact Us', 'comic-book-store' ); ?></a>
                <p><strong><?php esc_html_e( 'Leave us a review', 'comic-book-store' ); ?></strong></p>
                <p><?php esc_html_e( 'Are you enjoying our theme? We would love to hear your feedback.', 'comic-book-store' ); ?></p>
                <a href="<?php echo esc_url( COMIC_BOOK_STORE_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Rate This Theme', 'comic-book-store' ); ?></a>
            </div>
            <div class="themelink column column-half clearfix">
                <p><strong><?php esc_html_e( 'Check Our Demo', 'comic-book-store' ); ?></strong></p>
                <p><?php esc_html_e( 'Here, you can view a live demonstration of our premium them.', 'comic-book-store' ); ?></p>
                <a href="<?php echo esc_url( COMIC_BOOK_STORE_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Premium Demo', 'comic-book-store' ); ?></a>
                <p><strong><?php esc_html_e( 'Theme Documentation', 'comic-book-store' ); ?></strong></p>
                <p><?php esc_html_e( 'Need more details? Please check our full documentation for detailed theme setup.', 'comic-book-store' ); ?></p>
                <a href="<?php echo esc_url( COMIC_BOOK_STORE_THEME_DOCUMENTATION ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'comic-book-store' ); ?></a>
            </div>
        </p>
    </div>
    <div id="getting-started">
        <h3><?php printf( esc_html__( 'Getting started with %s', 'comic-book-store' ),
        esc_html($comic_book_store_theme->get( 'Name' ))); ?></h3>
        <div class="columns-wrapper clearfix">
            <div class="column column-half clearfix">
                <div class="section">
                    <h4><?php esc_html_e( 'Theme Description', 'comic-book-store' ); ?></h4>
                    <div class="theme-description-1"><?php echo esc_html($comic_book_store_theme->get( 'Description' )); ?></div>
                </div>
            </div>
            <div class="column column-half clearfix">
                <img src="<?php echo esc_url( $comic_book_store_theme->get_screenshot() ); ?>" alt=""/>
                <div class="section">
                    <h4><?php esc_html_e( 'Theme Options', 'comic-book-store' ); ?></h4>
                    <p class="about">
                    <?php printf( esc_html__( '%s makes use of the Customizer for all theme settings. Click on "Customize Theme" to open the Customizer now.', 'comic-book-store' ),esc_html($comic_book_store_theme->get( 'Name' ))); ?></p>
                    <p>
                    <div class="themelink-1">
                        <a target="_blank" href="<?php echo esc_url( wp_customize_url() ); ?>"><?php esc_html_e( 'Customize Theme', 'comic-book-store' ); ?></a>
                        <a href="<?php echo esc_url( COMIC_BOOK_STORE_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Checkout Premium', 'comic-book-store' ); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="theme-author">
      <p><?php
        printf( esc_html__( '%1$s is proudly brought to you by %2$s. If you like this theme, %3$s :)', 'comic-book-store' ),
            esc_html($comic_book_store_theme->get( 'Name' )),
            '<a target="_blank" href="' . esc_url( 'https://www.theclassictemplates.com/', 'comic-book-store' ) . '">classictemplate</a>',
            '<a target="_blank" href="' . esc_url( COMIC_BOOK_STORE_REVIEW ) . '" title="' . esc_attr__( 'Rate it', 'comic-book-store' ) . '">' . esc_html_x( 'rate it', 'If you like this theme, rate it', 'comic-book-store' ) . '</a>'
        );
        ?></p>
    </div>
</div>
<?php
}

function comic_book_store_demo_content_page() {

    $comic_book_store_theme = wp_get_theme();
    ?>
    <div class="container">
       <div class="start-box">
          <div class="columns-wrapper m-0"> 
             <div class="column column-half clearfix">
               <div class="wrapper-info"> 
                  <img src="<?php echo esc_url( get_template_directory_uri().'/images/Logo.png' ); ?>" />
                  <h2><?php esc_html_e( 'Welcome to Comic Book Store', 'comic-book-store' ); ?></h2>
                  <span class="version"><?php esc_html_e( 'Version', 'comic-book-store' ); ?>: <?php echo esc_html( wp_get_theme()->get( 'Version' ) ); ?></span>	
                  <p><?php esc_html_e( 'To begin, locate the demo importer button and click on it to initiate the importation of all the demo content.', 'comic-book-store' ); ?></p>
                  <?php require get_parent_theme_file_path( '/inc/demo-content.php' ); ?>
               </div>
             </div>
             <div class="column column-half clearfix">
             <div class="get-screenshot">
               <img src="<?php echo esc_url( get_template_directory_uri().'/screenshot.png' ); ?>" />
             </div>   
             </div>
          </div>
       </div>
    </div>
<?php
}

?>
