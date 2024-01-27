<?php
/**
 * Title: News Block
 * Slug: travel-manager/news-block
 * Categories: news
 * Block Types: core/template-part/news
 */
?>

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"className":"services-box","layout":{"type":"constrained"}} -->
<div class="wp-block-group services-box" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"600"},"spacing":{"padding":{"top":"var:preset|spacing|30","right":"var:preset|spacing|80","bottom":"0px","left":"var:preset|spacing|80"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} -->
<h3 class="wp-block-heading has-text-align-center" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--80);padding-bottom:0px;padding-left:var(--wp--preset--spacing--80);font-size:40px;font-style:normal;font-weight:600"><?php echo esc_html__('Featured Post','travel-manager'); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__('Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer','travel-manager'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"latest-post-area","layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group latest-post-area"><!-- wp:latest-posts {"postsToShow":8,"displayPostContent":true,"excerptLength":10,"displayPostDate":true,"postLayout":"grid","columns":4,"displayFeaturedImage":true,"featuredImageSizeSlug":"large","featuredImageSizeWidth":1024,"featuredImageSizeHeight":1024,"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"className":"latest-main-area"} /--></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"50px"} -->
<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->