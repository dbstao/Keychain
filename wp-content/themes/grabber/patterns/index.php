<?php
/**
 * Title: index
 * Slug: grabber/index
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"metadata":{"categories":["theme"],"patternName":"grabber/post-styleslide","name":"Sliding Posts"},"className":"is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div id="sliding-posts" class="wp-block-group is-style-default has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":33,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"className":"is-style-default","layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-default"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":"4"}} -->
<!-- wp:group {"align":"wide","className":"is-style-default","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide is-style-default"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","width":"","height":"","align":"full"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-title {"isLink":true,"className":"is-style-default nounderline","style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"700","textDecoration":"none"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:post-author {"avatarSize":24,"isLink":true,"className":"nounderline","style":{"typography":{"fontSize":"13px"}}} /-->

<!-- wp:post-date {"style":{"typography":{"fontSize":"13px"}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:group {"metadata":{"categories":["theme"],"patternName":"grabber/post-styleone","name":"Posts Style One"},"className":"post-style-one","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group post-style-one" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"align":"wide","className":"is-style-default","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide is-style-default has-white-background-color has-background" style="padding-top:16px;padding-right:16px;padding-bottom:16px;padding-left:16px"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|base","width":"1px"},"top":[],"right":[],"left":[]}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--base);border-bottom-width:1px"><!-- wp:heading {"level":4,"className":"grabber-section-header","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"8px","right":"8px"},"margin":{"bottom":"2px"}}},"backgroundColor":"primary","textColor":"white","fontSize":"extra-small"} -->
<h4 class="wp-block-heading grabber-section-header has-white-color has-primary-background-color has-text-color has-background has-link-color has-extra-small-font-size" style="margin-bottom:2px;padding-top:6px;padding-right:8px;padding-bottom:6px;padding-left:8px"><?php esc_html_e('Must Read Articles', 'grabber');?></h4>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"transparent","textColor":"contrast","className":"is-style-button-hover-primary-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"0","bottom":"0"}},"typography":{"fontSize":"14px"}}} -->
<div class="wp-block-button has-custom-font-size is-style-button-hover-primary-color" style="font-size:14px"><a class="wp-block-button__link has-contrast-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" style="padding-top:0;padding-right:var(--wp--preset--spacing--20);padding-bottom:0;padding-left:var(--wp--preset--spacing--20)"><?php esc_html_e('View All', 'grabber');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":34,"query":{"perPage":"6","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"grid","columnCount":"3"}} -->
<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"minHeight":300,"gradient":"dark-gradient","contentPosition":"bottom center","className":"grabber-post-cover","layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-custom-content-position is-position-bottom-center grabber-post-cover" style="min-height:300px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient has-dark-gradient-gradient-background"></span><div class="wp-block-cover__inner-container"><!-- wp:post-terms {"term":"category","textAlign":"left","className":"is-style-categories-background-with-round","style":{"typography":{"fontSize":"12px"}}} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|light-color"},":hover":{"color":{"text":"var:preset|color|white"}}}},"typography":{"fontSize":"18px"}}} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"10px"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="margin-top:10px"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize","fontSize":"12px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-date {"format":"M j, Y","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"12px"}},"textColor":"white"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:50px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":35,"query":{"perPage":"9","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":"3"}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"backgroundColor":"white","layout":{"inherit":false}} -->
<div class="wp-block-group has-white-background-color has-background"><!-- wp:post-featured-image {"isLink":true,"height":"260px"} /-->

<!-- wp:group {"className":"is-style-default front-pagepost-category","style":{"position":{"type":""},"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top","justifyContent":"left"}} -->
<div class="wp-block-group is-style-default front-pagepost-category" style="padding-right:0;padding-left:0"><!-- wp:post-terms {"term":"category","className":"nounderline","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"0px","bottom":"0px"}},"layout":{"selfStretch":"fit","flexSize":null},"typography":{"fontSize":"13px","textDecoration":"none"}},"backgroundColor":"cyan-bluish-gray","textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:post-date {"format":"j F, Y","style":{"typography":{"fontSize":"13px"}}} /-->

<!-- wp:post-title {"isLink":true,"className":"is-style-default nounderline","style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"500","textDecoration":"none"}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"33.33%","className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
<div class="wp-block-column is-vertically-aligned-top is-style-default" style="flex-basis:33.33%"><!-- wp:group {"metadata":{"categories":["theme"],"patternName":"grabber/recentposts-sidebar","name":"Recent Posts Sidebar"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"0","bottom":"0"},"margin":{"top":"0","bottom":"var:preset|spacing|40"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group has-white-background-color has-background" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|background","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--background);border-bottom-width:1px;margin-bottom:24px"><!-- wp:heading {"level":4,"className":"gazettepress-section-header","style":{"spacing":{"padding":{"top":"6px","bottom":"6px","left":"12px","right":"12px"}}},"fontSize":"small"} -->
<h4 class="wp-block-heading gazettepress-section-header has-small-font-size" style="padding-top:6px;padding-right:12px;padding-bottom:6px;padding-left:12px"><?php esc_html_e('Latest Post', 'grabber');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:latest-posts {"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"className":"nounderline","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600"},"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"categories":["theme"],"patternName":"grabber/profile-card","name":"Profile Card"},"style":{"spacing":{"padding":{"top":"0","left":"var:preset|spacing|30","right":"var:preset|spacing|30","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group has-white-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|background","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--background);border-bottom-width:1px;margin-bottom:24px"><!-- wp:heading {"level":4,"className":"gazettepress-section-header","style":{"spacing":{"padding":{"top":"6px","bottom":"6px","left":"12px","right":"12px"}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
<h4 class="wp-block-heading gazettepress-section-header has-small-font-size" style="padding-top:6px;padding-right:12px;padding-bottom:6px;padding-left:12px"><?php esc_html_e('Author Profile', 'grabber');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"12px","left":"12px"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:12px;padding-left:12px"><!-- wp:image {"width":"100px","height":"100px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-grabber-image-styletwo","style":{"border":{"radius":"0px"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-grabber-image-styletwo"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people1.webp" alt="" style="border-radius:0px;object-fit:cover;width:100px;height:100px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"spacing":{"margin":{"top":"24px"}}},"fontSize":"medium"} -->
<h3 class="wp-block-heading has-text-align-center has-medium-font-size" style="margin-top:24px"><?php esc_html_e('Sandeep K', 'grabber');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'grabber');?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"iconColor":"meta-color","iconColorValue":"#A09EAB","iconBackgroundColor":"transparent","iconBackgroundColorValue":"#ffffff00","className":"is-style-social-icon-size-small","style":{"spacing":{"blockGap":{"top":"0","left":"0px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-social-icon-size-small"><!-- wp:social-link {"url":"#","service":"facebook"} /-->

<!-- wp:social-link {"url":"#","service":"x"} /-->

<!-- wp:social-link {"url":"#","service":"instagram"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/kindban.png" alt=""/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"0","bottom":"var:preset|spacing|40"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-background-color has-background" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"style":{"border":{"bottom":{"color":"var:preset|color|background","width":"1px"},"top":[],"right":[],"left":[]},"spacing":{"margin":{"bottom":"24px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--background);border-bottom-width:1px;margin-bottom:24px"><!-- wp:heading {"level":4,"className":"gazettepress-section-header","style":{"spacing":{"padding":{"top":"6px","bottom":"6px","left":"12px","right":"12px"}},"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"small"} -->
<h4 class="wp-block-heading gazettepress-section-header has-small-font-size" style="padding-top:6px;padding-right:12px;padding-bottom:6px;padding-left:12px"><?php esc_html_e('Author Profile', 'grabber');?></h4>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:categories /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->