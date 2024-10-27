<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package VW Clothing Store 
 */

if ( ! function_exists( 'vw_clothing_store_the_attached_image' ) ) :
/**
 * Prints the attached image with a link to the next attached image.
 */
function vw_clothing_store_the_attached_image() {
	$post                = get_post();
	$attachment_size     = apply_filters( 'vw_clothing_store_attachment_size', array( 1200, 1200 ) );
	$next_attachment_url = wp_get_attachment_url();
	$attachment_ids 	 = get_posts( array(
		'post_parent'    => $post->post_parent,
		'fields'         => 'ids',
		'numberposts'    =>  1,
		'post_status'    => 'inherit',
		'post_type'      => 'attachment',
		'post_mime_type' => 'image',
		'order'          => 'ASC',
		'orderby'        => 'menu_order ID'
	) );

	wp_reset_postdata();

	// If there is more than 1 attachment in a gallery...
	if ( count( $attachment_ids ) > 1 ) {
		foreach ( $attachment_ids as $attachment_id ) {
			if ( $attachment_id == $post->ID ) {
				$next_id = current( $attachment_ids );
				break;
			}
		}

		// get the URL of the next image attachment...
		if ( $next_id )
			$next_attachment_url = get_attachment_link( $next_id );

		// or get the URL of the first image attachment.
		else
			$next_attachment_url = get_attachment_link( array_shift( $attachment_ids ) );
	}

	printf( '<a href="%1$s" rel="attachment">%2$s</a>',
		esc_url( $next_attachment_url ),
		wp_get_attachment_image( $post->ID, $attachment_size )
	);
}
endif;

/**
 * Returns true if a blog has more than 1 category
 */
function vw_clothing_store_categorized_blog() {
	if ( false === ( $vw_clothing_store_all_the_cool_cats = get_transient( 'vw_clothing_store_all_the_cool_cats' ) ) ) {
		// Create an array of all the categories that are attached to posts
		$vw_clothing_store_all_the_cool_cats = get_categories( array(
			'hide_empty' => 1,
		) );

		// Count the number of categories that are attached to the posts
		$vw_clothing_store_all_the_cool_cats = count( $vw_clothing_store_all_the_cool_cats );

		set_transient( 'vw_clothing_store_all_the_cool_cats', $vw_clothing_store_all_the_cool_cats );
	}

	if ( '1' != $vw_clothing_store_all_the_cool_cats ) {
		// This blog has more than 1 category so vw_clothing_store_categorized_blog should return true
		return true;
	} else {
		// This blog has only 1 category so vw_clothing_store_categorized_blog should return false
		return false;
	}
}

if ( ! function_exists( 'vw_clothing_store_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since vw-clothing-store
 */
function vw_clothing_store_the_custom_logo() {	
	the_custom_logo();
}
endif;

/**
 * Flush out the transients used in vw_clothing_store_categorized_blog
 */
function vw_clothing_store_category_transient_flusher() {
	// Like, beat it. Dig?
	delete_transient( 'vw_clothing_store_all_the_cool_cats' );
}
add_action( 'edit_category', 'vw_clothing_store_category_transient_flusher' );
add_action( 'save_post',     'vw_clothing_store_category_transient_flusher' );

add_theme_support( 'admin-bar', array( 'callback' => 'vw_clothing_store_my_admin_bar_css') );
function vw_clothing_store_my_admin_bar_css(){
?>
<style type="text/css" media="screen">	
	html body { margin-top: 0px !important; }
</style>
<?php
}

/**
 * Posts pagination.
 */
if ( ! function_exists( 'vw_clothing_store_blog_posts_pagination' ) ) {
	function vw_clothing_store_blog_posts_pagination() {
		$pagination_type = get_theme_mod( 'vw_clothing_store_blog_pagination_type', 'blog-page-numbers' );
		if ( $pagination_type == 'blog-page-numbers' ) {
			the_posts_pagination();
		} else {
			the_posts_navigation();
		}
	}
}

/*-- Custom metafield --*/
function vw_clothing_store_custom_job_field() {
	add_meta_box( 'bn_meta', __( 'VW Clothing Store Meta Fields', 'vw-clothing-store' ), 'vw_clothing_store_meta_technology_callback', 'product', 'normal', 'high' );
}
if (is_admin()){
	add_action('admin_menu', 'vw_clothing_store_custom_job_field');
}

function vw_clothing_store_meta_technology_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'vw_clothing_store_technology_meta' );
	$bn_stored_meta = get_post_meta( $post->ID );
	$vw_clothing_store_rating_text = get_post_meta( $post->ID, 'vw_clothing_store_rating_text', true );
	$vw_clothing_store_total_sale = get_post_meta( $post->ID, 'vw_clothing_store_total_sale', true );
	?>
	<div id="custom_meta_feilds">
	  <table id="list">
			<tbody id="the-list" data-wp-lists="list:meta">
			  <tr id="meta-8">
				<td class="left">
				  <?php esc_html_e( 'Rating Text :', 'vw-clothing-store' )?>
				</td>
				<td class="left">
				  <input type="text" name="vw_clothing_store_rating_text" id="vw_clothing_store_rating_text" value="<?php echo esc_attr($vw_clothing_store_rating_text); ?>" />
				</td>
			  </tr>
			  <tr id="meta-8">
				<td class="left">
				  <?php esc_html_e( 'Total Sale :', 'vw-clothing-store' )?>
				</td>
				<td class="left">
				  <input type="text" name="vw_clothing_store_total_sale" id="vw_clothing_store_total_sale" value="<?php echo esc_attr($vw_clothing_store_total_sale); ?>" />
				</td>
			  </tr>
			</tbody>
	  </table>
	</div>
	<?php
}

function vw_clothing_store_save( $post_id ) {
	if (!isset($_POST['vw_clothing_store_technology_meta']) || !wp_verify_nonce( strip_tags( wp_unslash( $_POST['vw_clothing_store_technology_meta']) ), basename(__FILE__))) {
		return;
	}
	if (!current_user_can('edit_post', $post_id)) {
		 return;
	}
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
	  return;
	}
	if( isset( $_POST[ 'vw_clothing_store_rating_text' ] ) ) {
	  update_post_meta( $post_id, 'vw_clothing_store_rating_text', strip_tags( wp_unslash( $_POST[ 'vw_clothing_store_rating_text' ]) ) );
	}
	if( isset( $_POST[ 'vw_clothing_store_total_sale' ] ) ) {
	  update_post_meta( $post_id, 'vw_clothing_store_total_sale', strip_tags( wp_unslash( $_POST[ 'vw_clothing_store_total_sale' ]) ) );
	}
}
add_action( 'save_post', 'vw_clothing_store_save' );

