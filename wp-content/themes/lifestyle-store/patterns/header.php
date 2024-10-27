<?php
/**
 * Title: Header
 * Slug: lifestyle-store/header
 * Categories: lifestyle-store, header
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"background","className":"wow fadeInDownBig","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group wow fadeInDownBig has-background-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><!-- wp:image {"id":14,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/delivery.png'); ?>" alt="" class="wp-image-14"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"400"}},"textColor":"heading","fontSize":"extra-small","fontFamily":"merriweather"} -->
<p class="has-heading-color has-text-color has-link-color has-merriweather-font-family has-extra-small-font-size" style="font-style:normal;font-weight:400"><?php esc_html_e('Free Delivery On First Three Orders','lifestyle-store'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"upper-header","style":{"spacing":{"padding":{"top":"0px","right":"20px","bottom":"0px","left":"20px"}}},"backgroundColor":"secondary","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group upper-header has-secondary-background-color has-background" style="padding-top:0px;padding-right:20px;padding-bottom:0px;padding-left:20px"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:column {"verticalAlignment":"center","width":"5%","className":"header-nav wow bounceInLeft"} -->
<div class="wp-block-column is-vertically-aligned-center header-nav wow bounceInLeft" style="flex-basis:5%"><!-- wp:navigation {"textColor":"footer-bg","overlayMenu":"always","overlayBackgroundColor":"white","overlayTextColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontFamily":"merriweather","layout":{"type":"flex","flexWrap":"wrap"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"logo-block wow bounceInLeft"} -->
<div class="wp-block-column is-vertically-aligned-center logo-block wow bounceInLeft" style="flex-basis:20%"><!-- wp:group {"textColor":"primary","className":"logodiv","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group logodiv has-primary-color has-text-color"><!-- wp:site-logo {"width":43,"shouldSyncIcon":true} /-->

<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"700"}},"textColor":"primary","fontSize":"regular","fontFamily":"merriweather"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"header-search-box wow zoomIn"} -->
<div class="wp-block-column is-vertically-aligned-center header-search-box wow zoomIn" style="flex-basis:55%"><!-- wp:search {"label":"Search","showLabel":false,"placeholder":"What Are You Looking For","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"query":{"post_type":"product"},"style":{"border":{"color":"#4c4c4c33"}},"className":"header-search","fontSize":"extra-small"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"header-icons wow bounceInRight"} -->
<div class="wp-block-column is-vertically-aligned-center header-icons wow bounceInRight" style="flex-basis:20%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group"><!-- wp:image {"id":175,"scale":"cover","sizeSlug":"full","linkDestination":"custom"} -->
<figure class="wp-block-image size-full"><a href="#"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/wishlist.png'); ?>" alt="" class="wp-image-175" style="object-fit:cover"/></a></figure>
<!-- /wp:image -->

<!-- wp:woocommerce/mini-cart {"iconColor":{"color":"#1b1c1e"},"style":{"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconClass":"wc-block-customer-account__account-icon","style":{"elements":{"link":{"color":{"text":"#1b1c1e"}}},"color":{"text":"#1b1c1e"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->