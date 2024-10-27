<?php
/**
 * Emoza Theme Customizer
 *
 * @package Emoza
 */

if ( !class_exists( 'Emoza_Customizer' ) ) {
	class Emoza_Customizer {

		/**
		 * Instance
		 */		
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self;
			}
			return self::$instance;
		}

		/**
		 * Constructor
		 */
		public function __construct() {		
			add_action( 'customize_preview_init', array( $this, 'customize_preview_js' ) );
			add_action( 'customize_register', array( $this, 'customize_register' ) );
			add_action( 'customize_controls_print_footer_scripts', array( $this, 'scripts' ) );
		}

		/**
		 * Options
		 */		
		function customize_register( $wp_customize ) {

			// @codingStandardsIgnoreStart WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
			require get_template_directory() . '/inc/customizer/controls/typography/class_emoza_typography.php';
			require get_template_directory() . '/inc/customizer/controls/repeater/class_emoza_repeater.php';
			require get_template_directory() . '/inc/customizer/controls/alpha-color/class_emoza_alpha_color.php';
			require get_template_directory() . '/inc/customizer/controls/radio-images/class_emoza_radio_images.php';
			require get_template_directory() . '/inc/customizer/controls/radio-buttons/class_emoza_radio_buttons.php';
			require get_template_directory() . '/inc/customizer/controls/responsive-slider/class_emoza_responsive_slider.php';
			require get_template_directory() . '/inc/customizer/controls/class_emoza_tab_control.php';
			require get_template_directory() . '/inc/customizer/controls/class_emoza_text_control.php';
			require get_template_directory() . '/inc/customizer/controls/class_emoza_tinymce_control.php';
			require get_template_directory() . '/inc/customizer/controls/class_emoza_divider_control.php';
			require get_template_directory() . '/inc/customizer/controls/toggle/class_emoza_toggle_control.php';
			require get_template_directory() . '/inc/customizer/controls/color-palettes/class_emoza_color_palettes_control.php';
			require get_template_directory() . '/inc/customizer/controls/color-palettes/class_emoza_custom_palettes_control.php';
			require get_template_directory() . '/inc/customizer/controls/accordion/class_emoza_accordion_control.php';
			// @codingStandardsIgnoreEnd WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound

			$wp_customize->register_control_type( '\Kirki\Control\sortable' );

			$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
			$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
			$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
			$wp_customize->get_section( 'title_tagline' )->priority 	= 1;
			$wp_customize->get_section( 'colors' )->priority 			= 10;
			$wp_customize->get_section( 'title_tagline' )->panel 		= 'emoza_panel_header';
			$wp_customize->get_section( 'header_image' )->panel 		= 'emoza_panel_header';
			$wp_customize->get_section( 'background_image' )->panel 	= 'emoza_panel_general';

			$wp_customize->remove_control( 'header_textcolor' );
			if ( class_exists( 'WooCommerce') ) {
				$wp_customize->get_panel( 'woocommerce' )->priority 	= 31;
			}

			// @codingStandardsIgnoreStart WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
			require get_template_directory() . '/inc/customizer/sanitize.php';
			require get_template_directory() . '/inc/customizer/callbacks.php';
			require get_template_directory() . '/inc/customizer/options/blog.php';
			require get_template_directory() . '/inc/customizer/options/blog-single.php';
			require get_template_directory() . '/inc/customizer/options/topbar.php';
			require get_template_directory() . '/inc/customizer/options/header.php';
			require get_template_directory() . '/inc/customizer/options/header-mobile.php';
			require get_template_directory() . '/inc/customizer/options/general.php';
			require get_template_directory() . '/inc/customizer/options/footer.php';
			require get_template_directory() . '/inc/customizer/options/colors.php';
			if ( class_exists( 'WooCommerce' ) ) {
				require get_template_directory() . '/inc/customizer/options/woocommerce.php';
				require get_template_directory() . '/inc/customizer/options/woocommerce-single.php';
			}
			require get_template_directory() . '/inc/customizer/options/typography.php';
			// @codingStandardsIgnoreEnd WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound	


			if ( isset( $wp_customize->selective_refresh ) ) {
				$wp_customize->selective_refresh->add_partial(
					'blogname',
					array(
						'selector'        => '.site-title a',
						'render_callback' => 'emoza_customize_partial_blogname',
						'container_inclusive' => false
					)
				);
				$wp_customize->selective_refresh->add_partial(
					'blogdescription',
					array(
						'selector'        => '.site-description',
						'render_callback' => 'emoza_customize_partial_blogdescription',
						'container_inclusive' => false
					)
				);
				$wp_customize->selective_refresh->add_partial( 
					'social_profiles_footer', 
					array(
						'selector'          => '.site-info .social-profile',
						'render_callback'   => function() { emoza_social_profile( 'social_profiles_footer' ); },
						'container_inclusive' => false
					) 
				); 
				$wp_customize->selective_refresh->add_partial( 
					'footer_credits', 
					array(
						'selector'          => '.site-info .emoza-credits',
						'render_callback'   => 'emoza_customize_partial_footer_credits',
						'container_inclusive' => false
					) 
				);  
			}

		}

		public function customize_preview_js() {
			wp_enqueue_script( 'emoza-customizer', get_template_directory_uri() . '/assets/js/customizer.min.js', array( 'jquery', 'customize-preview' ), EMOZA_VERSION, true );

		}		

		function scripts() {
			wp_enqueue_script( 'emoza-customizer-scripts', get_template_directory_uri() . '/assets/js/customizer-scripts.min.js', array( 'jquery', 'jquery-ui-core' ), EMOZA_VERSION, true );
			wp_localize_script( 'emoza-customizer-scripts', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

			wp_enqueue_style( 'emoza-customizer-styles', get_template_directory_uri() . '/assets/css/customizer.css' );
		}
		
	}
}

//Initiate
Emoza_Customizer::get_instance();

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function emoza_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function emoza_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Render the footer credits for the selective refresh partial.
 *
 * @return void
 */
function emoza_customize_partial_footer_credits() {
	$footer = new Emoza_Footer();
	echo wp_kses_post( $footer->footer_credits() );
}