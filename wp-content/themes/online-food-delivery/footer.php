<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Online Food Delivery
 */
?>
    <footer role="contentinfo">
        <?php //Set widget areas classes based on user choice
            $online_food_delivery_widget_areas = get_theme_mod('online_food_delivery_footer_widget_layout', '4');
            if ($online_food_delivery_widget_areas == '3') {
                $cols = 'col-lg-4 col-md-4';
            } elseif ($online_food_delivery_widget_areas == '4') {
                $cols = 'col-lg-3 col-md-3';
            } elseif ($online_food_delivery_widget_areas == '2') {
                $cols = 'col-lg-6 col-md-6';
            } else {
                $cols = 'col-lg-12 col-md-12';
            }
        ?>
        <?php if (get_theme_mod('online_food_delivery_footer_hide_show', true)){ ?>
            <div class="footertown">
                <div class="container">
                    <div class="row">
                        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
                            <?php dynamic_sidebar( 'footer-1'); ?>
                          </div>
                        <?php endif; ?> 
                        <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
                            <?php dynamic_sidebar( 'footer-2'); ?>
                          </div>
                        <?php endif; ?> 
                        <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
                            <?php dynamic_sidebar( 'footer-3'); ?>
                          </div>
                        <?php endif; ?> 
                        <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                          <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
                            <?php dynamic_sidebar( 'footer-4'); ?>
                          </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php } ?>    
        <?php if (get_theme_mod('online_food_delivery_copyright_hide_show', true)) {?>
            <div id="footer">
            	<div class="container">
                    <p class="mb-0"><?php online_food_delivery_credit_link(); ?> <?php echo esc_html(get_theme_mod('online_food_delivery_footer_copy',__('By ThemesCaliber','online-food-delivery'))); ?></p>
                
                    <?php if (get_theme_mod('online_food_delivery_show_footer_social_icon', true)){ ?>     
                    <div class="socialicons col-lg-12 col-md-12 col-12 align-self-center">                      
                        <?php if( get_theme_mod( 'online_food_delivery_footer_facebook_url' ) != '' && get_theme_mod('online_food_delivery_footer_facebook_icon') != 'None') { ?>
                            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'online_food_delivery_footer_facebook_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_footer_facebook_icon', 'fab fa-facebook-f')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','online-food-delivery' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'online_food_delivery_footer_twitter_url' ) != '' && get_theme_mod('online_food_delivery_footer_twitter_icon') != 'None') { ?>
                            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'online_food_delivery_footer_twitter_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_footer_twitter_icon', 'fab fa-twitter')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','online-food-delivery' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'online_food_delivery_footer_linkedin_url' ) != '' && get_theme_mod('online_food_delivery_footer_linkedin_icon') != 'None') { ?>
                            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'online_food_delivery_footer_linkedin_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_footer_linkedin_icon','fab fa-linkedin-in')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','online-food-delivery' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'online_food_delivery_footer_instagram_url' ) != '' && get_theme_mod('online_food_delivery_footer_instagram_icon') != 'None') { ?>
                            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'online_food_delivery_footer_instagram_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_footer_instagram_icon','fab fa-instagram')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','online-food-delivery' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'online_food_delivery_footer_whatsapp_url' ) != '' && get_theme_mod('online_food_delivery_footer_whatsapp_icon') != 'None') { ?>
                            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'online_food_delivery_footer_whatsapp_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_footer_whatsapp_icon','fab fa-whatsapp')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Whatsapp','online-food-delivery' );?></span></a>
                        <?php } ?>
                        <?php if( get_theme_mod( 'online_food_delivery_footer_pintrest_url' ) != '' && get_theme_mod('online_food_delivery_footer_pintrest_icon') != 'None') { ?>
                            <a target="_blank" href="<?php echo esc_url( get_theme_mod( 'online_food_delivery_footer_pintrest_url','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_footer_pintrest_icon','fab fa-pinterest-p')); ?>"></i><span class="screen-reader-text"><?php esc_html_e( 'Pintrest','online-food-delivery' );?></span></a>
                        <?php } ?>                          
                    </div>
                    <?php } ?>    
                
                </div>
            </div>
        <?php } ?>    
        <?php if( get_theme_mod( 'online_food_delivery_show_back_to_top',true) != '' || get_theme_mod('online_food_delivery_responsive_show_back_to_top',true) != '') { ?>
            <?php $online_food_delivery_scroll_lay = get_theme_mod( 'online_food_delivery_back_to_top_alignment','Right');
            if($online_food_delivery_scroll_lay == 'Left'){ ?>
                <a href="#" class="scrollup left"><span><?php echo esc_html( get_theme_mod('online_food_delivery_back_to_top_text',__('Back to Top', 'online-food-delivery' )) ); ?><?php if(get_theme_mod('online_food_delivery_back_to_top_icon') != 'None') {?><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_back_to_top_icon','fas fa-arrow-up')); ?> ms-2"></i><?php }?></span><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('online_food_delivery_back_to_top_text',__('Back to Top', 'online-food-delivery' )) ); ?></span></a>
            <?php }else if($online_food_delivery_scroll_lay == 'Center'){ ?>
                <a href="#" class="scrollup center"><span><?php echo esc_html( get_theme_mod('online_food_delivery_back_to_top_text',__('Back to Top', 'online-food-delivery' )) ); ?><?php if(get_theme_mod('online_food_delivery_back_to_top_icon') != 'None') {?><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_back_to_top_icon','fas fa-arrow-up')); ?> ms-2"></i><?php }?></span><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('online_food_delivery_back_to_top_text',__('Back to Top', 'online-food-delivery' )) ); ?></span></a>
            <?php }else{ ?>
                <a href="#" class="scrollup right"><span><?php echo esc_html( get_theme_mod('online_food_delivery_back_to_top_text',__('Back to Top', 'online-food-delivery' )) ); ?><?php if(get_theme_mod('online_food_delivery_back_to_top_icon') != 'None') {?><i class="<?php echo esc_attr(get_theme_mod('online_food_delivery_back_to_top_icon','fas fa-arrow-up')); ?> ms-2"></i><?php }?></span><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('online_food_delivery_back_to_top_text',__('Back to Top', 'online-food-delivery' )) ); ?></span></a>
            <?php }?>
        <?php }?>
        <?php wp_footer(); ?>
    </footer>
</body>
</html>