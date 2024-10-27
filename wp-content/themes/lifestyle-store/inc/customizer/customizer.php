<?php
/**
 * Lifestyle Store: Customizer
 *
 * @subpackage Lifestyle Store
 * @since 1.0
 */

function lifestyle_store_customize_register( $wp_customize ) {

    wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

    // Pro Section
    $wp_customize->add_section('lifestyle_store_pro', array(
        'title'    => __('LIFESTYLE STORE PREMIUM', 'lifestyle-store'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('lifestyle_store_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Lifestyle_Store_Pro_Control($wp_customize, 'lifestyle_store_pro', array(
        'label'    => __('LIFESTYLE STORE PREMIUM', 'lifestyle-store'),
        'section'  => 'lifestyle_store_pro',
        'settings' => 'lifestyle_store_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'lifestyle_store_customize_register' );


define('LIFESTYLE_STORE_PRO_LINK',__('https://www.ovationthemes.com/products/lifestyle-store-wordpress-theme','lifestyle-store'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Lifestyle_Store_Pro_Control')):
    class Lifestyle_Store_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
            <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( LIFESTYLE_STORE_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE LIFESTYLE STORE PREMIUM','lifestyle-store');?> </a>
            </div>
            <div class="col-md">
                <img class="lifestyle_store_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
            <div class="col-md">
                <ul style="padding-top:10px">
                    <li class="upsell-lifestyle_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'lifestyle-store');?> </li>                 
                    <li class="upsell-lifestyle_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'lifestyle-store');?> </li>
                    <li class="upsell-lifestyle_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'lifestyle-store');?> </li>
                    <li class="upsell-lifestyle_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'lifestyle-store');?> </li>
                    <li class="upsell-lifestyle_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'lifestyle-store');?> </li>
                    <li class="upsell-lifestyle_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'lifestyle-store');?> </li>
                    <li class="upsell-lifestyle_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'lifestyle-store');?> </li>
                    <li class="upsell-lifestyle_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'lifestyle-store');?> </li>
                    <li class="upsell-lifestyle_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'lifestyle-store');?> </li>
                    <li class="upsell-lifestyle_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'lifestyle-store');?> </li>
                    <li class="upsell-lifestyle_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'lifestyle-store');?> </li>
                    <li class="upsell-lifestyle_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'lifestyle-store');?> </li>
                    <li class="upsell-lifestyle_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'lifestyle-store');?> </li>
                    <li class="upsell-lifestyle_store"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'lifestyle-store');?> </li>
                </ul>
            </div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( LIFESTYLE_STORE_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE LIFESTYLE STORE PREMIUM','lifestyle-store');?> </a>
            </div>
        </label>
    <?php } }
endif;