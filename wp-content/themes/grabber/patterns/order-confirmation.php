<?php
/**
 * Title: order-confirmation
 * Slug: grabber/order-confirmation
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","backgroundColor":"white","layout":{"inherit":true,"type":"constrained","contentSize":"1179px"}} -->
<main class="wp-block-group has-white-background-color has-background"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-column" style="padding-right:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);flex-basis:60%"><!-- wp:woocommerce/order-confirmation-status {"fontSize":"medium"} /-->

<!-- wp:woocommerce/order-confirmation-summary {"fontSize":"extra-small"} /-->

<!-- wp:woocommerce/order-confirmation-totals-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"}}} -->
<h3 class="wp-block-heading" style="font-size:24px"><?php esc_html_e('Order details', 'grabber');?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-totals {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-totals-wrapper -->

<!-- wp:woocommerce/order-confirmation-downloads-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"}}} -->
<h3 class="wp-block-heading" style="font-size:24px"><?php esc_html_e('Downloads', 'grabber');?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-downloads {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-downloads-wrapper -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}},"className":"woocommerce-order-confirmation-address-wrapper"} -->
<div class="wp-block-columns alignwide woocommerce-order-confirmation-address-wrapper"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/order-confirmation-shipping-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"}}} -->
<h3 class="wp-block-heading" style="font-size:24px"><?php esc_html_e('Shipping address', 'grabber');?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-shipping-address {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-shipping-wrapper --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:woocommerce/order-confirmation-billing-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"}}} -->
<h3 class="wp-block-heading" style="font-size:24px"><?php esc_html_e('Billing address', 'grabber');?></h3>
<!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-billing-address {"lock":{"remove":true}} /-->
<!-- /wp:woocommerce/order-confirmation-billing-wrapper --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:woocommerce/order-confirmation-additional-fields-wrapper {"align":"wide"} -->
<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"24px"}}} --><h3 class="wp-block-heading" style="font-size:24px"><?php esc_html_e('Additional information', 'grabber');?></h3><!-- /wp:heading -->

<!-- wp:woocommerce/order-confirmation-additional-fields /-->
<!-- /wp:woocommerce/order-confirmation-additional-fields-wrapper -->

<!-- wp:woocommerce/order-confirmation-additional-information /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20%"} -->
<div class="wp-block-column" style="flex-basis:20%"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->