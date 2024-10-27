<?php
/**
 * Single page metabox
 *
 * @package Emoza
 */


function emoza_page_metabox_init() {
    new Emoza_Page_Metabox();
}

if ( is_admin() ) {
    add_action( 'load-post.php', 'emoza_page_metabox_init' );
    add_action( 'load-post-new.php', 'emoza_page_metabox_init' );
}

class Emoza_Page_Metabox {

	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_box' ) );
		add_action( 'save_post', array( $this, 'save' ) );
	}

	public function add_meta_box( $post_type ) {
		
		$types = get_post_types(
			array(
				'public' => true,
			)
		);

        if ( in_array( $post_type, $types ) && ( 'attachment' !== $post_type ) ) {
			add_meta_box(
				'emoza_single_page_metabox'
				,__( 'Emoza page options', 'emoza-woocommerce' )
				,array( $this, 'render_meta_box_content' )
				,$types
				,'side'
				,'low'
			);
        }
	}

	public function save( $post_id ) {
	
		// Check if our nonce is set.
		if ( ! isset( $_POST['emoza_single_page_box_nonce'] ) )
			return $post_id;

		$nonce = sanitize_key( wp_unslash( $_POST['emoza_single_page_box_nonce'] ) );

		// Verify that the nonce is valid.
		if ( ! wp_verify_nonce( $nonce, 'emoza_single_page_box' ) )
			return $post_id;


		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
			return $post_id;


		if ( ! current_user_can( 'edit_page', $post_id ) )
			return $post_id;
	
		//Page builder mode
		$activate_page_builder_mode = ( isset( $_POST['emoza_page_builder_mode'] ) && '1' === $_POST['emoza_page_builder_mode'] ) ? 1 : 0;
		update_post_meta( $post_id, '_emoza_page_builder_mode', $activate_page_builder_mode );	

		//Sidebar layout
		$sidebar_layout_choices = array( 'customizer', 'sidebar-left', 'sidebar-right', 'no-sidebar' );
		$sidebar_layout 		= $this->sanitize_selects( sanitize_key( $_POST['emoza_sidebar_layout'] ), $sidebar_layout_choices ); // phpcs:ignore WordPress.Security.ValidatedSanitizedInput.InputNotValidated
		update_post_meta( $post_id, '_emoza_sidebar_layout', $sidebar_layout );
	}

	public function render_meta_box_content( $post ) {
	
		// Add an nonce field so we can check for it later.
		wp_nonce_field( 'emoza_single_page_box', 'emoza_single_page_box_nonce' );
		$page_builder_mode 	= get_post_meta( $post->ID, '_emoza_page_builder_mode', true );
		$sidebar_layout		= get_post_meta( $post->ID, '_emoza_sidebar_layout', true );
	?>
	<p>
		<label><input type="checkbox" name="emoza_page_builder_mode" value="1" <?php checked( $page_builder_mode, 1 ); ?> /><?php esc_html_e( 'Page builder mode', 'emoza-woocommerce' ); ?></label>
		<div style="display:block;"><?php echo esc_html__( 'This mode activates a simplified canvas for building custom pages with either the WP editor or a page builder plugin.', 'emoza-woocommerce' ); ?></div>
	</p>
	<p>
		<label for="emoza_sidebar_layout"><?php esc_html_e( 'Sidebar layout', 'emoza-woocommerce' ); ?></label>	
		<select style="max-width:200px;" name="emoza_sidebar_layout">
			<option value="customizer" <?php selected( $sidebar_layout, 'customizer' ); ?>><?php esc_html_e( 'Default', 'emoza-woocommerce' ); ?></option>
			<option value="sidebar-left" <?php selected( $sidebar_layout, 'sidebar-left' ); ?>><?php esc_html_e( 'Left', 'emoza-woocommerce' ); ?></option>
			<option value="sidebar-right" <?php selected( $sidebar_layout, 'sidebar-right' ); ?>><?php esc_html_e( 'Right', 'emoza-woocommerce' ); ?></option>
			<option value="no-sidebar" <?php selected( $sidebar_layout, 'no-sidebar' ); ?>><?php esc_html_e( 'Disable sidebar for this page', 'emoza-woocommerce' ); ?></option>
		</select>
	</p>
	<?php
	}

	/**
	 * Function to sanitize selects
	 */
	public function sanitize_selects( $input, $choices ) {

		$input = sanitize_key( $input );

		return ( in_array( $input, $choices ) ? $input : '' );
	}
}