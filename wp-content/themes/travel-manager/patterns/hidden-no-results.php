<?php
/**
 * Title: Hidden No Results Content
 * Slug: travel-manager/hidden-no-results-content
 * Inserter: no
 */
?>
<!-- wp:paragraph -->
<p>
<?php echo esc_html_x( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'Message explaining that there are no results returned from a search', 'travel-manager' ); ?>
</p>
<!-- /wp:paragraph -->

<!-- wp:search {"label":"<?php echo esc_html_x( 'Search', 'label', 'travel-manager' ); ?>","placeholder":"<?php echo esc_attr_x( 'Search...', 'placeholder for search field', 'travel-manager' ); ?>","showLabel":false,"buttonText":"<?php esc_attr_e( 'Search', 'travel-manager' ); ?>","buttonUseIcon":true} /-->
