<?php
/**
 * The template part for Top Header
 *
 * @package VW Clothing Store 
 * @subpackage vw-clothing-store
 * @since vw-clothing-store 1.0
 */
?>
<!-- Top Header -->
<?php if( get_theme_mod( 'vw_clothing_store_header_topbar',false) == 1 || get_theme_mod( 'vw_clothing_store_resp_topbar_hide_show', false) == 1) { ?>
<div class="topbar">
  <div class="container-fluid">
    <div class="row pt-lg-0 pt-md-0 pt-3">
      <div class="col-lg-8 col-md-6 col-12 align-self-center text-lg-start text-md-start text-center" >
        <?php if(get_theme_mod('vw_clothing_store_offer_text') != ''){ ?>
          <p class="topbar-text mb-lg-0 mb-md-0 mt-2 mt-md-0"><?php echo esc_html(get_theme_mod('vw_clothing_store_offer_text')); ?></p>
        <?php }?>
      </div>
      <div class="col-lg-2 col-md-3 col-12 mt-lg-0 text-lg-end text-md-end text-center align-self-center">
        <?php if(class_exists('woocommerce')){ ?>
          <div class="currency-box d-md-inline-block">
            <?php echo do_shortcode( '[woocommerce_currency_switcher_drop_down_box]' );?>
          </div>
        <?php } ?>
      </div>
      <div class="col-lg-2 col-md-3 col-12 align-self-center text-lg-end text-md-end text-center" >
        <?php if( class_exists( 'GTranslate' ) ) { ?>
          <div class="translate-lang position-relative d-md-inline-block me-3">
            <?php echo do_shortcode( '[gtranslate]' );?>
          </div>
        <?php }?>
      </div>
    </div>
  </div>
</div>
<?php }?>