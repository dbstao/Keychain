<?php
/**
 * Graceful Mode functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Graceful Mode
 */

// ----------------------------------------------------------------------------------
//	Register Front-End Styles And Scripts
// ----------------------------------------------------------------------------------

function graceful_mode_enqueue_child_styles() {
 
    wp_enqueue_style( 'graceful-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'graceful-mode-style', get_stylesheet_directory_uri() . '/style.css', array( 'graceful-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'graceful_mode_enqueue_child_styles' );


// ----------------------------------------------------------------------------------
//  Customize Register
// ----------------------------------------------------------------------------------
function graceful_mode_customize_register( $wp_customize ) {

    /** Top Navigation */
    // Top Navigation section
    $wp_customize->add_panel(
        'layout_settings',
        array(
            'priority'   => 20,
            'capability' => 'edit_theme_options',
            'title'      => __( 'Top Navigaion', 'graceful-mode' ),
        )
    );

    /** Top Navigation */
    // add Top Navigation section
    $wp_customize->add_section( 'graceful_top_navigation' , array(
        'title'      => esc_html__( 'Top Navigation', 'graceful-mode' ),
        'priority'   => 23,
        'capability' => 'edit_theme_options'
    ) );

    // Top Navigation
    $wp_customize->add_setting( 'graceful_mode_options[top_navigation_show]', array(
        'default'    => graceful_mode_options('top_navigation_show'),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'graceful_sanitize_checkboxes'
    ) );
    $wp_customize->add_control( 'graceful_mode_options[top_navigation_show]', array(
        'label'     => esc_html__( 'Enable Top Navigation', 'graceful-mode' ),
        'section'   => 'graceful_top_navigation',
        'type'      => 'checkbox',
        'priority'  => 1
    ) );


    /** Post Ticker */
    // add Top Navigation section
    $wp_customize->add_section( 'graceful_post_ticker' , array(
        'title'      => esc_html__( 'Post Ticker', 'graceful-mode' ),
        'priority'   => 24,
        'capability' => 'edit_theme_options'
    ) );

    // Post Ticker Enable
    $wp_customize->add_setting( 'graceful_mode_options[post_ticker_show]', array(
        'default'    => graceful_mode_options( 'post_ticker_show' ),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'graceful_sanitize_checkboxes'
    ) );
    $wp_customize->add_control( 'graceful_mode_options[post_ticker_show]', array(
        'label'     => esc_html__( 'Enable Post Ticker', 'graceful-mode' ),
        'section'   => 'graceful_post_ticker',
        'type'      => 'checkbox',
        'priority'  => 1
    ) );



    /** Featured Boxes */
    // Featured Boxes section
    $wp_customize->add_section( 'graceful_mode_featured_boxes' , array(
        'title'      => esc_html__( 'Featured Boxes', 'graceful-mode' ),
        'priority'   => 27,
        'capability' => 'edit_theme_options'
    ) );

    // Featured Boxes 1
    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_show]', array(
        'default'    => graceful_mode_options( 'featured_boxes_show' ),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'graceful_sanitize_checkboxes'
    ) );
    $wp_customize->add_control( 'graceful_mode_options[featured_boxes_show]', array(
        'label'     => esc_html__( 'Enable Featured Boxes', 'graceful-mode' ),
        'section'   => 'graceful_mode_featured_boxes',
        'type'      => 'checkbox',
        'priority'  => 1
    ) );


    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_title_1]', array(
        'default'    => graceful_mode_options( 'featured_boxes_title_1' ),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    $wp_customize->add_control( 'graceful_mode_options[featured_boxes_title_1]', array(
        'label'     => esc_html__( 'Title 1', 'graceful-mode' ),
        'section'   => 'graceful_mode_featured_boxes',
        'type'      => 'text',
        'priority'  => 9
    ) );

    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_url_1]', array(
        'default'    => graceful_mode_options( 'featured_boxes_url_1' ),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( 'graceful_mode_options[featured_boxes_url_1]', array(
        'label'     => esc_html__( 'URL 1', 'graceful-mode' ),
        'section'   => 'graceful_mode_featured_boxes',
        'type'      => 'text',
        'priority'  => 11
    ) );

    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_image_1]', array(
        'default'   => '',
        'type'      => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'graceful_sanitize_number_absint'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control( $wp_customize, 'graceful_mode_options[featured_boxes_image_1]', array(
            'label'         => esc_html__( 'Image 1', 'graceful-mode' ),
            'section'       => 'graceful_mode_featured_boxes',
            'flex_width'    => false,
            'flex_height'   => false,
            'width'         => 600,
            'height'        => 340,
            'priority'      => 13
        )
    ) );

    // Featured Boxes Enable
    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_show]', array(
        'default'    => graceful_mode_options( 'featured_boxes_show' ),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'graceful_sanitize_checkboxes'
    ) );
    $wp_customize->add_control( 'graceful_mode_options[featured_boxes_show]', array(
        'label'     => esc_html__( 'Enable Featured Boxes', 'graceful-mode' ),
        'section'   => 'graceful_mode_featured_boxes',
        'type'      => 'checkbox',
        'priority'  => 1
    ) );

    // Featured Boxes 1
    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_title_1]', array(
        'default'    => graceful_mode_options( 'featured_boxes_title_1' ),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    $wp_customize->add_control( 'graceful_mode_options[featured_boxes_title_1]', array(
        'label'     => esc_html__( 'Title 1', 'graceful-mode' ),
        'section'   => 'graceful_mode_featured_boxes',
        'type'      => 'text',
        'priority'  => 9
    ) );

    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_url_1]', array(
        'default'    => graceful_mode_options( 'featured_boxes_url_1' ),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( 'graceful_mode_options[featured_boxes_url_1]', array(
        'label'     => esc_html__( 'URL 1', 'graceful-mode' ),
        'section'   => 'graceful_mode_featured_boxes',
        'type'      => 'text',
        'priority'  => 11
    ) );

    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_image_1]', array(
        'default'   => '',
        'type'      => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'graceful_sanitize_number_absint'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control( $wp_customize, 'graceful_mode_options[featured_boxes_image_1]', array(
            'label'         => esc_html__( 'Image 1', 'graceful-mode' ),
            'section'       => 'graceful_mode_featured_boxes',
            'flex_width'    => false,
            'flex_height'   => false,
            'width'         => 600,
            'height'        => 340,
            'priority'      => 13
        )
    ) );

    // Featured Boxes 2
    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_title_2]', array(
        'default'    => graceful_mode_options( 'featured_boxes_title_2' ),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    $wp_customize->add_control( 'graceful_mode_options[featured_boxes_title_2]', array(
        'label'     => esc_html__( 'Title 2', 'graceful-mode' ),
        'section'   => 'graceful_mode_featured_boxes',
        'type'      => 'text',
        'priority'  => 15
    ) );

    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_url_2]', array(
        'default'    => graceful_mode_options( 'featured_boxes_url_2' ),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( 'graceful_mode_options[featured_boxes_url_2]', array(
        'label'     => esc_html__( 'URL 2', 'graceful-mode' ),
        'section'   => 'graceful_mode_featured_boxes',
        'type'      => 'text',
        'priority'  => 17
    ) );

    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_image_2]', array(
        'default'   => '',
        'type'      => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'graceful_sanitize_number_absint'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control( $wp_customize, 'graceful_mode_options[featured_boxes_image_2]', array(
            'label'         => esc_html__( 'Image 2', 'graceful-mode' ),
            'section'       => 'graceful_mode_featured_boxes',
            'flex_width'    => false,
            'flex_height'   => false,
            'width'         => 600,
            'height'        => 340,
            'priority'      => 19
        )
    ) );

    // Featured Boxes 3
    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_title_3]', array(
        'default'    => graceful_mode_options( 'featured_boxes_title_3' ),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field'
    ) );
    $wp_customize->add_control( 'graceful_mode_options[featured_boxes_title_3]', array(
        'label'     => esc_html__( 'Title 3', 'graceful-mode' ),
        'section'   => 'graceful_mode_featured_boxes',
        'type'      => 'text',
        'priority'  => 21
    ) );

    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_url_3]', array(
        'default'    => graceful_mode_options( 'featured_boxes_url_3' ),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( 'graceful_mode_options[featured_boxes_url_3]', array(
        'label'     => esc_html__( 'URL 3', 'graceful-mode' ),
        'section'   => 'graceful_mode_featured_boxes',
        'type'      => 'text',
        'priority'  => 23
    ) );

    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_image_3]', array(
        'default'   => '',
        'type'      => 'option',
        'transport' => 'refresh',
        'sanitize_callback' => 'graceful_sanitize_number_absint'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control( $wp_customize, 'graceful_mode_options[featured_boxes_image_3]', array(
            'label'         => esc_html__( 'Image 3', 'graceful-mode' ),
            'section'       => 'graceful_mode_featured_boxes',
            'flex_width'    => false,
            'flex_height'   => false,
            'width'         => 600,
            'height'        => 340,
            'priority'      => 25
        )
    ) );

    // Featured Boxes Layout Width
    $boxed_width_featured_boxes = array(
        'full' => esc_html__( 'Full', 'graceful-mode' ),
        'wrapped' => esc_html__( 'Boxed', 'graceful-mode' ),
    );

    $wp_customize->add_setting( 'graceful_mode_options[featured_boxes_width]', array(
        'default'    => graceful_mode_options( 'featured_boxes_width' ),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'graceful_sanitize_select'
    ) );
    $wp_customize->add_control( 'graceful_mode_options[featured_boxes_width]', array(
        'label'         => esc_html__( 'Featured Boxes Width', 'graceful-mode' ),
        'section'       => 'graceful_basic',
        'type'          => 'select',
        'choices'       => $boxed_width_featured_boxes,
        'priority'      => 28
    ) );


}
add_action( 'customize_register', 'graceful_mode_customize_register', 99 );

// Sanitize number absint
function graceful_sanitize_number_absint( $number, $setting ) {

    // ensure $number is an absolute integer
    $number = absint( $number );

    // return default if not integer
    return ( $number ? $number : $setting->default );

}

// Enqueue customizer styles
function graceful_mode_customizer_css() {
    wp_enqueue_style( 'graceful-customize-style', get_theme_file_uri( '/css/customize-ui.css' ) );
}
add_action( 'customize_controls_enqueue_scripts', 'graceful_mode_customizer_css' );

// Register Top Menu
register_nav_menus(
    array(
        'top'  => esc_html__( 'Top Menu', 'graceful-mode' ),
    )
);

function graceful_top_menu_fallback() {
    if ( current_user_can( 'edit_theme_options' ) ) {
        ?>
        <ul id="top-menu">
            <li>
                <a href="<?php echo esc_url( home_url( '/wp-admin/nav-menus.php') ) ?>">
                    <?php esc_html_e( 'Set-up Top Menu', 'graceful-mode' ) ?>
                </a>
            </li>
        </ul>
        <?php
    }
}

function graceful_mode_options( $controls ) {

    $graceful_mode_defaults = array(
        'top_navigation_show' => true,
        'post_ticker_show' => true,
        'blog_grid_excerpt_length' => '50',
        'featured_boxes_show' => false,
        'featured_boxes_window' => true,
        'featured_boxes_width' => 'wrapped',
        'featured_boxes_title_1' => '',
        'featured_boxes_url_1' => '',
        'featured_boxes_image_1' => '',
        'featured_boxes_title_2' => '',
        'featured_boxes_url_2' => '',
        'featured_boxes_image_2' => '',
        'featured_boxes_title_3' => '',
        'featured_boxes_url_3' => '',
        'featured_boxes_image_3' => '',
    );

    // merge defaults and options
    $graceful_mode_defaults = wp_parse_args( get_option( 'graceful_mode_options' ), $graceful_mode_defaults );

    // return control
    return $graceful_mode_defaults[ $controls ];

}

// ----------------------------------------------------------------------------------
//  New Fonts
// ----------------------------------------------------------------------------------
function graceful_mode_enqueue_assets()
{
    // Include the file.
    require_once get_theme_file_path('webfont-loader/wptt-webfont-loader.php');
    // Load the webfont.
    wp_enqueue_style(
        'minimalist-stories-fonts',
        wptt_get_webfont_url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=auto'),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'graceful_mode_enqueue_assets');