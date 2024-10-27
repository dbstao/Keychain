<?php
/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Grocery_Supermarket_Elementor_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	*/
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/includes/go-pro/upgrade-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Grocery_Supermarket_Elementor_Customize_Section_Pro' );

		$manager->add_section(
			new Grocery_Supermarket_Elementor_Customize_Section_Pro(
				$manager,
				'grocery_supermarket_elementor_upgrade_pro',
				array(
					'title'       => esc_html__( 'Grocery Supermarket Pro', 'grocery-supermarket-elementor' ),
					'pro_text'    => esc_html__( 'GO PRO', 'grocery-supermarket-elementor' ),
					'pro_url'     => 'https://www.wpelemento.com/products/supermarket-wordpress-theme',
					'priority'    => 5,
				)
			)
		);

		$manager->add_section(
			new Grocery_Supermarket_Elementor_Customize_Section_Pro(
				$manager,
				'grocery-supermarket-elementor-documentation',
				array(
					'title'       => esc_html__( 'Documentation', 'grocery-supermarket-elementor' ),
					'pro_text'    => esc_html__( 'DOCS', 'grocery-supermarket-elementor' ),
					'pro_url'     => 'https://preview.wpelemento.com/theme-documentation/grocery-supermarket-elementor/',
					'priority'    => 5,
				)
			)
		);

		$manager->add_section(
			new Grocery_Supermarket_Elementor_Customize_Section_Pro(
				$manager,
				'grocery-supermarket-elementor-demo',
				array(
					'title'       => esc_html__( 'Pro Demo link', 'grocery-supermarket-elementor' ),
					'pro_text'    => esc_html__( 'Demo', 'grocery-supermarket-elementor' ),
					'pro_url'     => 'https://preview.wpelemento.com/grocery-supermarket-elementor/',
					'priority'    => 5,
				)
			)
		);
		
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'grocery-supermarket-elementor-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'grocery-supermarket-elementor-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Grocery_Supermarket_Elementor_Customize::get_instance();