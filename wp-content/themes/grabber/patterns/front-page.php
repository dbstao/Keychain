<?php
/**
 * Title: front-page
 * Slug: grabber/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header","className":"site-header"} /-->

<!-- wp:group {"align":"full","className":"nomargin-column","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|20","bottom":"0"}},"color":{"gradient":"linear-gradient(90deg,rgba(255,203,112,0) 0%,rgba(199,82,82,0.53) 50%,rgba(65,89,209,0.43) 100%)"}},"layout":{"type":"constrained","contentSize":"1080px","wideSize":"1080px"}} -->
<div class="wp-block-group alignfull nomargin-column has-background" style="background:linear-gradient(90deg,rgba(255,203,112,0) 0%,rgba(199,82,82,0.53) 50%,rgba(65,89,209,0.43) 100%);margin-top:var(--wp--preset--spacing--20);margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"nomargin-column","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"},"margin":{"top":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center nomargin-column" style="margin-top:0"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:heading {"level":3,"fontSize":"large"} -->
<h3 class="wp-block-heading has-large-font-size"><?php /* Translators: 1. is the start of a 'mark' HTML element, 2. is the end of a 'mark' HTML element */ 
echo sprintf( esc_html__( 'Ultimate %1$sMultipurpose%2$s Website', 'grabber' ), '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">', '</mark>' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"45px"} -->
<div style="height:45px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sodales mollis posuere. Mauris elit metus, porttitor quis mauris et, varius laoreet turpis. Aenean nec tristique ipsum.', 'grabber');?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}}} -->
<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"luminous-vivid-amber","textColor":"contrast","style":{"border":{"width":"0px","style":"none"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"shadow":"var:preset|shadow|natural"}} -->
<div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-luminous-vivid-amber-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;box-shadow:var(--wp--preset--shadow--natural)"><?php esc_html_e('Register', 'grabber');?></a></div>
<!-- /wp:button -->

<!-- wp:button {"backgroundColor":"white","textColor":"black","className":"is-style-outline is-style-fill","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"shadow":"var:preset|shadow|natural","border":{"radius":"5px","width":"0px","style":"none"}}} -->
<div class="wp-block-button is-style-outline is-style-fill"><a class="wp-block-button__link has-black-color has-white-background-color has-text-color has-background has-link-color wp-element-button" style="border-style:none;border-width:0px;border-radius:5px;box-shadow:var(--wp--preset--shadow--natural)"><?php esc_html_e('View more features', 'grabber');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"scale":"contain","sizeSlug":"full","linkDestination":"none","align":"right","className":"is-style-rounded","style":{"border":{"radius":"10px"}}} -->
<figure class="wp-block-image alignright size-full has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/webap3ansformed.png" alt="<?php esc_attr_e('Demo Image', 'grabber');?>" style="border-radius:10px;object-fit:contain"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"categories":["theme"],"patternName":"grabber/post-styleone","name":"Posts Style One"},"className":"post-style-one","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-group post-style-one" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","className":"is-style-default","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"16px","right":"16px"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"white","layout":{"type":"default"}} -->
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

<!-- wp:query {"queryId":34,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"grid","columnCount":4}} -->
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

<!-- wp:group {"metadata":{"categories":["theme"],"patternName":"grabber/text-column-with-icon","name":"3 Text Column with Icons"},"align":"full","className":"nomargin-column is-style-default","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|60"},"color":{"background":"#f0eef9"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull nomargin-column is-style-default has-background" style="background-color:#f0eef9;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:0;padding-bottom:var(--wp--preset--spacing--80);padding-left:0"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('Ready to launch, Website Design', 'grabber');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"16px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}}}} -->
<p class="has-text-align-center" style="margin-top:16px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default)"><?php esc_html_e('No More Coding Skills Require', 'grabber');?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"className":"is-style-default","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-style-default" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|50"},"border":{"radius":"17px","color":"#bbcced","width":"1px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-white-background-color has-background" style="border-color:#bbcced;border-width:1px;border-radius:17px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"width":"64px","height":"64px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default","style":{"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/nem-crypto.256x239.png" alt="<?php esc_attr_e('demo', 'grabber');?>" style="object-fit:contain;width:64px;height:64px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Design', 'grabber');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Best minimalist template that focuses on elegance and simplicity. Its subtle color palette and clean layout create a sophisticated and professional look. ', 'grabber');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-default","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-style-default" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|50"},"border":{"radius":"17px","color":"#bbcced","width":"1px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-white-background-color has-background" style="border-color:#bbcced;border-width:1px;border-radius:17px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"width":"64px","height":"64px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default","style":{"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/nature-conservation-sustainability.256x256.png" alt="<?php esc_attr_e('demo', 'grabber');?>" style="object-fit:contain;width:64px;height:64px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Beautiful Code', 'grabber');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Best minimalist template that focuses on elegance and simplicity. Its subtle color palette and clean layout create a sophisticated and professional look.', 'grabber');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-default","style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} -->
<div class="wp-block-column is-style-default" style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:group {"className":"is-style-default","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|50"},"border":{"radius":"17px","color":"#bbcced","width":"1px"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-white-background-color has-background" style="border-color:#bbcced;border-width:1px;border-radius:17px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:image {"width":"64px","height":"64px","scale":"contain","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default","style":{"color":{"duotone":"unset"}}} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/robot-face-ai-artificial-intelligence.256x217.png" alt="<?php esc_attr_e('auto', 'grabber');?>" style="object-fit:contain;width:64px;height:64px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Automate', 'grabber');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left"><?php esc_html_e('Best minimalist template that focuses on elegance and simplicity. Its subtle color palette and clean layout create a sophisticated and professional look. ', 'grabber');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-grabber-button-styleround"} -->
<div class="wp-block-button is-style-grabber-button-styleround"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('View all services', 'grabber');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"nomargin-column","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"0"}}},"backgroundColor":"white","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull nomargin-column has-white-background-color has-background" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/table-food.jpg","alt":"demo","hasParallax":true,"dimRatio":50,"customOverlayColor":"#424343","isUserOverlayColor":true,"contentPosition":"center center","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover has-parallax"><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#424343"></span><div role="img" aria-label="demo" class="wp-block-cover__image-background has-parallax" style="background-position:50% 50%;background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/table-food.jpg)"></div><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"><?php esc_html_e('Best Food Available in Your Area!', 'grabber');?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-grabber-button-styleround"} -->
<div class="wp-block-button is-style-grabber-button-styleround"><a class="wp-block-button__link wp-element-button"><?php esc_html_e('Order Now', 'grabber');?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"categories":["theme"],"patternName":"grabber/columns-with-images","name":"Columns with circular images"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:spacer {"height":"42px"} -->
<div style="height:42px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size"><?php esc_html_e('Our Business Partners', 'grabber');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"italic","fontWeight":"300"}}} -->
<p class="has-text-align-center" style="font-style:italic;font-weight:300"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi fermentum urna nibh, ut vulputate velit dictum at. Nunc blandit placerat lacinia. Donec ut dolor in ligula euismod mollis.', 'grabber');?></p>
<!-- /wp:paragraph -->

<!-- wp:columns {"align":"wide","className":"is-style-default","style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide is-style-default" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-default","style":{"border":{"radius":"9px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"gradient":"blush-light-purple","borderColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-base-border-color has-blush-light-purple-gradient-background has-background" style="border-width:1px;border-radius:9px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"150px","height":"150px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded","style":{"border":{"width":"1px"}},"borderColor":"primary"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/manager.jpg" alt="<?php esc_attr_e('grabber test', 'grabber');?>" class="has-border-color has-primary-border-color" style="border-width:1px;object-fit:cover;width:150px;height:150px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"0.9"}},"textColor":"contrast"} -->
<h4 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:0.9"><?php esc_html_e('John Doe', 'grabber');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"0.2","fontStyle":"italic","fontWeight":"200"}},"textColor":"contrast","fontSize":"extra-small"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-link-color has-extra-small-font-size" style="font-style:italic;font-weight:200;line-height:0.2"><?php esc_html_e('CEO, TextDomain', 'grabber');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#252020"}}},"color":{"text":"#252020"}},"fontSize":"small"} -->
<p class="has-text-align-center has-text-color has-link-color has-small-font-size" style="color:#252020"><?php esc_html_e('Sample content. Replace the text with your own content.', 'grabber');?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"align":"center","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter is-style-logos-only"><!-- wp:social-link {"service":"x"} /-->

<!-- wp:social-link {"service":"instagram"} /-->

<!-- wp:social-link {"service":"facebook"} /-->

<!-- wp:social-link {"service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-default","style":{"border":{"radius":"9px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"gradient":"blush-light-purple","borderColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-base-border-color has-blush-light-purple-gradient-background has-background" style="border-width:1px;border-radius:9px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"150px","height":"150px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded","style":{"border":{"width":"1px"}},"borderColor":"primary"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/manager.jpg" alt="<?php esc_attr_e('grabber test', 'grabber');?>" class="has-border-color has-primary-border-color" style="border-width:1px;object-fit:cover;width:150px;height:150px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"0.9"}},"textColor":"contrast"} -->
<h4 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:0.9"><?php esc_html_e('John Doe', 'grabber');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"0.2","fontStyle":"italic","fontWeight":"200"}},"textColor":"contrast","fontSize":"extra-small"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-link-color has-extra-small-font-size" style="font-style:italic;font-weight:200;line-height:0.2"><?php esc_html_e('CEO, TextDomain', 'grabber');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#252020"}}},"color":{"text":"#252020"}},"fontSize":"small"} -->
<p class="has-text-align-center has-text-color has-link-color has-small-font-size" style="color:#252020"><?php esc_html_e('Sample content. Replace the text with your own content.', 'grabber');?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"align":"center","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter is-style-logos-only"><!-- wp:social-link {"service":"x"} /-->

<!-- wp:social-link {"service":"instagram"} /-->

<!-- wp:social-link {"service":"facebook"} /-->

<!-- wp:social-link {"service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"is-style-default"} -->
<div class="wp-block-column is-style-default"><!-- wp:group {"className":"is-style-default","style":{"border":{"radius":"9px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|50"}},"gradient":"blush-light-purple","borderColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-border-color has-base-border-color has-blush-light-purple-gradient-background has-background" style="border-width:1px;border-radius:9px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)"><!-- wp:image {"width":"150px","height":"150px","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded","style":{"border":{"width":"1px"}},"borderColor":"primary"} -->
<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/manager.jpg" alt="<?php esc_attr_e('grabber test', 'grabber');?>" class="has-border-color has-primary-border-color" style="border-width:1px;object-fit:cover;width:150px;height:150px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"0.9"}},"textColor":"contrast"} -->
<h4 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-link-color" style="margin-top:var(--wp--preset--spacing--20);margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;line-height:0.9"><?php esc_html_e('John Doe', 'grabber');?></h4>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"lineHeight":"0.2","fontStyle":"italic","fontWeight":"200"}},"textColor":"contrast","fontSize":"extra-small"} -->
<p class="has-text-align-center has-contrast-color has-text-color has-link-color has-extra-small-font-size" style="font-style:italic;font-weight:200;line-height:0.2"><?php esc_html_e('CEO, TextDomain', 'grabber');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#252020"}}},"color":{"text":"#252020"}},"fontSize":"small"} -->
<p class="has-text-align-center has-text-color has-link-color has-small-font-size" style="color:#252020"><?php esc_html_e('Sample content. Replace the text with your own content.', 'grabber');?></p>
<!-- /wp:paragraph -->

<!-- wp:social-links {"align":"center","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<ul class="wp-block-social-links aligncenter is-style-logos-only"><!-- wp:social-link {"service":"x"} /-->

<!-- wp:social-link {"service":"instagram"} /-->

<!-- wp:social-link {"service":"facebook"} /-->

<!-- wp:social-link {"service":"linkedin"} /--></ul>
<!-- /wp:social-links --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"top":"0px","bottom":"50px"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide" style="margin-top:0px;margin-bottom:50px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":35,"query":{"perPage":"8","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"grid","columnCount":4}} -->
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
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"is-style-slide-up-fade-in","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"0px","bottom":"0px"}},"color":{"background":"#eff4fd"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull is-style-slide-up-fade-in has-background" style="background-color:#eff4fd;margin-top:0px;margin-bottom:0px;padding-top:0px;padding-bottom:0px"><!-- wp:spacer {"height":"120px","className":"is-style-has-mb-50","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:120px" aria-hidden="true" class="wp-block-spacer is-style-has-mb-50"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0px;margin-bottom:0px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","lineHeight":"1.3"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="font-style:normal;font-weight:600;line-height:1.3"><?php esc_html_e('What people are saying…', 'grabber');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"16px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}}}} -->
<p class="has-text-align-center" style="margin-top:16px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default)"><?php esc_html_e('Reviews from our happy customers', 'grabber');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"28px","className":"is-style-has-mb-40","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:28px" aria-hidden="true" class="wp-block-spacer is-style-has-mb-40"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"0"},"margin":{"top":"0px","bottom":"0px"},"blockGap":{"top":"30px","left":"20px"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--70);padding-bottom:0"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-box-shadow-one","style":{"spacing":{"padding":{"top":"40px","right":"32px","bottom":"40px","left":"32px"}},"border":{"radius":"32px"}},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group is-style-box-shadow-one has-white-background-color has-background" style="border-radius:32px;padding-top:40px;padding-right:32px;padding-bottom:40px;padding-left:32px"><!-- wp:image {"width":"64px","height":"64px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people.webp" alt="<?php esc_attr_e('demo', 'grabber');?>" style="object-fit:contain;width:64px;height:64px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"24px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}},"typography":{"lineHeight":"1.8"}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="margin-top:24px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);line-height:1.8"><?php esc_html_e('Grabber is a versatile and user-friendly template that offers a wide range of customization options. Its clean and modern design. The drag-and-drop interface made it easy to create a professional website. The template\'s responsiveness ensured a great user experience across all devices.', 'grabber');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default","top":"40px"}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.6"}},"fontSize":"small"} -->
<h3 class="wp-block-heading has-small-font-size" style="margin-top:40px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);font-style:normal;font-weight:500;line-height:1.6"><?php esc_html_e('Raj Deep', 'grabber');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"4px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}},"typography":{"lineHeight":"1.8"}},"fontSize":"small"} -->
<p class="has-small-font-size" style="margin-top:4px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);line-height:1.8"><?php esc_html_e('CEO, Real Estate Inc', 'grabber');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-box-shadow-one","style":{"spacing":{"padding":{"top":"40px","right":"32px","bottom":"40px","left":"32px"}},"border":{"radius":"32px"}},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group is-style-box-shadow-one has-white-background-color has-background" style="border-radius:32px;padding-top:40px;padding-right:32px;padding-bottom:40px;padding-left:32px"><!-- wp:image {"width":"64px","height":"64px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people1.webp" alt="<?php esc_attr_e('demo', 'grabber');?>" style="object-fit:contain;width:64px;height:64px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"24px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}},"typography":{"lineHeight":"1.8"}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="margin-top:24px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);line-height:1.8"><?php esc_html_e('Best minimalist template that focuses on elegance and simplicity. Its subtle color palette and clean layout create a sophisticated and professional look. The template\'s integration with popular plugins like e-commerce and blogging. The excellent customer support from Insertcart was a big plus.', 'grabber');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default","top":"40px"}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.6"}},"fontSize":"small"} -->
<h3 class="wp-block-heading has-small-font-size" style="margin-top:40px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);font-style:normal;font-weight:500;line-height:1.6"><?php esc_html_e('Will Smith', 'grabber');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"4px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}},"typography":{"lineHeight":"1.8"}}} -->
<p style="margin-top:4px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);line-height:1.8"><?php esc_html_e('COO, EV Sector', 'grabber');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"is-style-box-shadow-one","style":{"spacing":{"padding":{"top":"40px","right":"32px","bottom":"40px","left":"32px"}},"border":{"radius":"32px"}},"backgroundColor":"white","layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group is-style-box-shadow-one has-white-background-color has-background" style="border-radius:32px;padding-top:40px;padding-right:32px;padding-bottom:40px;padding-left:32px"><!-- wp:image {"width":"64px","height":"64px","scale":"contain","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded"} -->
<figure class="wp-block-image size-full is-resized is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/people2.webp" alt="<?php esc_attr_e('demo', 'grabber');?>" style="object-fit:contain;width:64px;height:64px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"left","style":{"spacing":{"margin":{"top":"24px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}},"typography":{"lineHeight":"1.8"}},"fontSize":"small"} -->
<p class="has-text-align-left has-small-font-size" style="margin-top:24px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);line-height:1.8"><?php esc_html_e('Grabber is a powerful and dynamic template that is ideal for businesses looking to make a bold statement. Its parallax scrolling effects and animated elements create a visually stunning website. The template\'s extensive documentation and video tutorials made it easy to learn and use. ', 'grabber');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default","top":"40px"}},"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.6"}},"fontSize":"small"} -->
<h3 class="wp-block-heading has-small-font-size" style="margin-top:40px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);font-style:normal;font-weight:500;line-height:1.6"><?php esc_html_e('Nobel Will', 'grabber');?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"4px","right":"var:preset|spacing|default","bottom":"var:preset|spacing|default","left":"var:preset|spacing|default"}},"typography":{"lineHeight":"1.8"}}} -->
<p style="margin-top:4px;margin-right:var(--wp--preset--spacing--default);margin-bottom:var(--wp--preset--spacing--default);margin-left:var(--wp--preset--spacing--default);line-height:1.8"><?php esc_html_e('CFO, App Dev', 'grabber');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"120px","className":"is-style-has-mb-50","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
<div style="margin-top:0px;margin-bottom:0px;height:120px" aria-hidden="true" class="wp-block-spacer is-style-has-mb-50"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer","className":"site-footer"} /-->