<?php

/**
 * Title: Post List Layout
 * Slug: blogpoet/post-list-layout
 * Categories: blogpoet
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|50","left":"var:preset|spacing|50","top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained","contentSize":"1180px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:query {"queryId":18,"query":{"perPage":"8","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false}} -->
    <div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"default","columnCount":2}} -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"24px","right":"24px"}},"border":{"radius":"30px","top":{"radius":"30px","color":"var:preset|color|dark-color","width":"1px"},"right":{"radius":"30px","color":"var:preset|color|dark-color","width":"5px"},"bottom":{"radius":"30px","color":"var:preset|color|dark-color","width":"5px"},"left":{"radius":"30px","color":"var:preset|color|dark-color","width":"1px"}}},"backgroundColor":"light-color","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-light-color-background-color has-background" style="border-radius:30px;border-top-color:var(--wp--preset--color--dark-color);border-top-width:1px;border-right-color:var(--wp--preset--color--dark-color);border-right-width:5px;border-bottom-color:var(--wp--preset--color--dark-color);border-bottom-width:5px;border-left-color:var(--wp--preset--color--dark-color);border-left-width:1px;padding-top:24px;padding-right:24px;padding-bottom:24px;padding-left:24px"><!-- wp:columns -->
            <div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
                <div class="wp-block-column" style="flex-basis:40%"><!-- wp:post-featured-image {"isLink":true,"height":"260px","style":{"border":{"radius":"20px"}}} /--></div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"60%"} -->
                <div class="wp-block-column" style="flex-basis:60%"><!-- wp:post-terms {"term":"category","prefix":"Posted On ","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"className":"is-style-default","fontSize":"small"} /-->

                    <!-- wp:post-title {"isLink":true,"style":{"typography":{"fontSize":"24px","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|dark-color"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"12px"}}}} /-->

                    <!-- wp:post-excerpt {"excerptLength":25} /-->

                    <!-- wp:group {"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group"><!-- wp:read-more {"content":"Continue Reading...","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground-alt"}}},"spacing":{"padding":{"top":"10px","bottom":"10px","left":"15px","right":"15px"}},"border":{"top":{"width":"1px","color":"var:preset|color|dark-color"},"right":{"width":"4px","color":"var:preset|color|dark-color"},"bottom":{"width":"4px","color":"var:preset|color|dark-color"},"left":{"width":"1px","color":"var:preset|color|dark-color"}}},"backgroundColor":"primary","textColor":"foreground-alt","className":"blogpoet-post-more is-style-readmore-hover-primary-color"} /--></div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
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
<!-- /wp:group -->