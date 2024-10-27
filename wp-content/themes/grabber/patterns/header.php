<?php
/**
 * Title: header
 * Slug: grabber/header
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"color":{"background":"#f5e337"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-text-color has-background has-link-color" style="background-color:#f5e337;padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20)"><!-- wp:columns {"align":"wide","className":"is-style-default nomargin-column","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":{"top":"0"}}}} -->
<div class="wp-block-columns alignwide is-style-default nomargin-column" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"25%","fontSize":"small"} -->
<div class="wp-block-column is-vertically-aligned-center has-small-font-size" style="flex-basis:25%"><!-- wp:social-links {"openInNewTab":true,"size":"has-small-icon-size","align":"left","className":"is-style-default","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|20"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<ul class="wp-block-social-links alignleft has-small-icon-size is-style-default"><!-- wp:social-link {"url":"#","service":"facebook","rel":"#"} /-->

<!-- wp:social-link {"url":"https://x.com/insertcartcom","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"youtube"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /-->

<!-- wp:social-link {"url":"https://wa.me/1XXXXXXXXXX","service":"whatsapp"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":6,"style":{"typography":{"fontStyle":"normal","fontWeight":"100"}},"fontSize":"extra-small"} -->
<h6 class="wp-block-heading has-text-align-center has-extra-small-font-size" style="font-style:normal;font-weight:100"><?php esc_html_e('Promo text for business or just a information area!', 'grabber');?></h6>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"25%","className":"is-style-default","style":{"spacing":{"blockGap":"0","padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-column is-vertically-aligned-center is-style-default" style="padding-right:0;padding-left:0;flex-basis:25%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"color":{"duotone":"var:preset|duotone|dark-grayscale"}}} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/phone.png" alt="<?php esc_attr_e('phone', 'grabber');?>"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","fontSize":"extra-small"} -->
<p class="has-text-align-center has-extra-small-font-size"><?php esc_html_e('+19235464687', 'grabber');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background"><!-- wp:columns {"align":"wide","className":"nomargin-column","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"}}},"backgroundColor":"white"} -->
<div class="wp-block-columns alignwide nomargin-column has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:site-logo {"width":220,"align":"left"} /-->

<!-- wp:site-title /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"40%","layout":{"type":"constrained","justifyContent":"right"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right","orientation":"horizontal"}} -->
<div class="wp-block-group">
<?php if ( class_exists( 'WooCommerce' ) ) { ?>
    <!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconClass":"wc-block-customer-account__account-icon","align":"center","className":"is-vertically-aligned-center","style":{"typography":{"fontSize":"15px"}}} /-->

<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag","iconColor":{"color":"#1e1e1e","name":"Contrast","slug":"contrast","class":"has-contrast-icon-color"},"style":{"typography":{"fontSize":"16px"}}} /-->
<?php } ?>
<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search","buttonPosition":"button-only","buttonUseIcon":true,"isSearchFieldHidden":true,"className":"headersearch","style":{"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|base","width":"1px"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|base","width":"1px"},"left":{"width":"0px","style":"none"}}},"backgroundColor":"white","layout":{"type":"constrained","contentSize":"1179px"}} -->
<div class="wp-block-group has-white-background-color has-background" style="border-top-color:var(--wp--preset--color--base);border-top-width:1px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--base);border-bottom-width:1px;border-left-style:none;border-left-width:0px"><!-- wp:columns {"className":"nomargin-column"} -->
<div class="wp-block-columns nomargin-column"><!-- wp:column {"className":"nomargin-column"} -->
<div class="wp-block-column nomargin-column"><!-- wp:navigation {"textColor":"contrast","backgroundColor":"white","overlayBackgroundColor":"white","overlayTextColor":"contrast","className":"nounderline","style":{"typography":{"fontSize":"16px"}},"fontFamily":"system-font","layout":{"type":"flex","orientation":"horizontal","justifyContent":"center","flexWrap":"wrap"}} -->
<!-- wp:navigation-link {"label":"Home","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Services","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom","isTopLevelLink":true} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->