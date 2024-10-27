<?php

/**
 * Title: Post List for Front Page
 * Slug: blogpoet/postlist-section
 * Categories: blogpoet
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"24px","bottom":"24px"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:24px;padding-right:var(--wp--preset--spacing--50);padding-bottom:24px;padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns -->
    <div class="wp-block-columns"><!-- wp:column {"width":"70%"} -->
        <div class="wp-block-column" style="flex-basis:70%"><!-- wp:query {"queryId":18,"query":{"perPage":"8","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
            <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
                <!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":"30px","top":{"radius":"30px","color":"var:preset|color|dark-color","width":"1px"},"right":{"radius":"30px","color":"var:preset|color|dark-color","width":"5px"},"bottom":{"radius":"30px","color":"var:preset|color|dark-color","width":"5px"},"left":{"radius":"30px","color":"var:preset|color|dark-color","width":"1px"}}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-light-color-background-color has-background" style="border-radius:30px;border-top-color:var(--wp--preset--color--dark-color);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-color);border-right-width:5px;border-bottom-color:var(--wp--preset--color--dark-color);border-bottom-width:5px;border-left-color:var(--wp--preset--color--dark-color);border-left-width:1px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:post-featured-image {"isLink":true,"height":"260px","style":{"border":{"radius":"20px"}}} /-->

                    <!-- wp:post-terms {"term":"category","prefix":"Posted On ","style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"}},"className":"is-style-default","fontSize":"small"} /-->

                    <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"12px","bottom":"0px"}}}} /-->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"15px","margin":{"top":"12px","bottom":"12px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                    <div class="wp-block-group" style="margin-top:12px;margin-bottom:12px"><!-- wp:post-author-name {"style":{"typography":{"textTransform":"capitalize"}}} /-->

                        <!-- wp:paragraph -->
                        <p>.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:post-date /-->
                    </div>
                    <!-- /wp:group -->

                    <!-- wp:post-excerpt {"excerptLength":25,"style":{"spacing":{"margin":{"top":"16px"}}}} /-->

                    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:read-more {"content":"Continue Reading...","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"15px","right":"15px"}},"border":{"top":{"width":"1px","color":"var:preset|color|dark-color"},"right":{"width":"4px","color":"var:preset|color|dark-color"},"bottom":{"width":"4px","color":"var:preset|color|dark-color"},"left":{"width":"1px","color":"var:preset|color|dark-color"}}},"backgroundColor":"primary","textColor":"foreground-alt","className":"blogpoet-post-more is-style-readmore-hover-primary-color"} /--></div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->
                <!-- /wp:post-template -->

                <!-- wp:query-pagination {"className":"blogpoet-pagination"} -->
                <!-- wp:query-pagination-previous /-->

                <!-- wp:query-pagination-numbers /-->

                <!-- wp:query-pagination-next /-->
                <!-- /wp:query-pagination -->
            </div>
            <!-- /wp:query -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"30%"} -->
        <div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"24px","right":"24px"}},"border":{"radius":"20px","top":{"radius":"20px","color":"var:preset|color|dark-color","width":"1px"},"right":{"radius":"20px","color":"var:preset|color|dark-color","width":"5px"},"bottom":{"radius":"20px","color":"var:preset|color|dark-color","width":"5px"},"left":{"radius":"20px","color":"var:preset|color|dark-color","width":"1px"}}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-light-color-background-color has-background" style="border-radius:20px;border-top-color:var(--wp--preset--color--dark-color);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-color);border-right-width:5px;border-bottom-color:var(--wp--preset--color--dark-color);border-bottom-width:5px;border-left-color:var(--wp--preset--color--dark-color);border-left-width:1px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}},"border":{"radius":"30px","top":{"radius":"30px","color":"var:preset|color|dark-color","width":"1px"},"right":{"radius":"30px","color":"var:preset|color|dark-color","width":"5px"},"bottom":{"radius":"30px","color":"var:preset|color|dark-color","width":"5px"},"left":{"radius":"30px","color":"var:preset|color|dark-color","width":"1px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-primary-background-color has-background" style="border-radius:30px;border-top-color:var(--wp--preset--color--dark-color);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-color);border-right-width:5px;border-bottom-color:var(--wp--preset--color--dark-color);border-bottom-width:5px;border-left-color:var(--wp--preset--color--dark-color);border-left-width:1px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"24px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                    <h4 class="wp-block-heading has-text-align-center has-foreground-alt-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:24px;font-style:normal;font-weight:600">Categories</h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:categories {"showPostCounts":true,"className":"is-style-blogpoet-categories-bullet-hide-style blogpoet-sidebar-categories","style":{"typography":{"lineHeight":"2","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"20px"}}}} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"24px","right":"24px"}},"border":{"radius":"20px","top":{"radius":"20px","color":"var:preset|color|dark-color","width":"1px"},"right":{"radius":"20px","color":"var:preset|color|dark-color","width":"5px"},"bottom":{"radius":"20px","color":"var:preset|color|dark-color","width":"5px"},"left":{"radius":"20px","color":"var:preset|color|dark-color","width":"1px"}}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-light-color-background-color has-background" style="border-radius:20px;border-top-color:var(--wp--preset--color--dark-color);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-color);border-right-width:5px;border-bottom-color:var(--wp--preset--color--dark-color);border-bottom-width:5px;border-left-color:var(--wp--preset--color--dark-color);border-left-width:1px;padding-top:30px;padding-right:24px;padding-bottom:30px;padding-left:24px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}},"border":{"radius":"30px","top":{"radius":"30px","color":"var:preset|color|dark-color","width":"1px"},"right":{"radius":"30px","color":"var:preset|color|dark-color","width":"5px"},"bottom":{"radius":"30px","color":"var:preset|color|dark-color","width":"5px"},"left":{"radius":"30px","color":"var:preset|color|dark-color","width":"1px"}}},"backgroundColor":"primary","layout":{"type":"constrained"}} -->
                <div class="wp-block-group has-primary-background-color has-background" style="border-radius:30px;border-top-color:var(--wp--preset--color--dark-color);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-color);border-right-width:5px;border-bottom-color:var(--wp--preset--color--dark-color);border-bottom-width:5px;border-left-color:var(--wp--preset--color--dark-color);border-left-width:1px;padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"24px"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}}},"textColor":"foreground-alt"} -->
                    <h4 class="wp-block-heading has-text-align-center has-foreground-alt-color has-text-color has-link-color" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;font-size:24px;font-style:normal;font-weight:600">Featured Post</h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->

                <!-- wp:query {"queryId":13,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
                <div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"15px"}}} -->
                    <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"15px"},"margin":{"top":"0","bottom":"0"}}}} -->
                    <div class="wp-block-columns are-vertically-aligned-center" style="margin-top:0;margin-bottom:0"><!-- wp:column {"verticalAlignment":"center","width":"80px"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80px"><!-- wp:post-featured-image {"isLink":true,"height":"70px","style":{"border":{"radius":"12px"}}} /--></div>
                        <!-- /wp:column -->

                        <!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}}} /--></div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                    <!-- /wp:post-template -->
                </div>
                <!-- /wp:query -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</div>
<!-- /wp:group -->