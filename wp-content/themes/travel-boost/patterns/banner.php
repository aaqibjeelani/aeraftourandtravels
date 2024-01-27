<?php
/**
 * Title: Banner
 * Slug: featured/banner
 * Categories: featured
 */
$pluginsList = get_option( 'active_plugins' );
$my_plugin = 'wp-travel/wp-travel.php';
 $results = in_array( $my_plugin , $pluginsList);
 if ( $results )  {
?>
<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:wp-travel-block/slider -->
    <div class="wp-block-wp-travel-block-slider wp-travel-block-slider" data-slider="{&quot;slidesPerPage&quot;:1,&quot;controls&quot;:true,&quot;autoplay&quot;:true,&quot;autoplayDelay&quot;:&quot;3000&quot;,&quot;dot&quot;:false,&quot;axis&quot;:&quot;horizontal&quot;,&quot;slideBy&quot;:1,&quot;center&quot;:false}"><!-- wp:wp-travel-block/slides -->
    <div class="wp-block-wp-travel-block-slides"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/img/asia.jpg","id":10590,"dimRatio":60,"minHeight":700,"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-10590" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/asia.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"70%"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.6"}},"textColor":"background"} -->
    <h1 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="line-height:1.6"><?php echo esc_html__( 'SAVE UP TO 75% ON 2024 TRIPS', 'travel-boost' ); ?></h1>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left"} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-text-align-left wp-element-button"><?php echo esc_html__( 'SEE ALL TRIPS', 'travel-boost' ); ?></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->
    
    <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
    <p class="has-text-align-center has-large-font-size"></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:spacer {"height":"75px"} -->
    <div style="height:75px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:wptravel/trip-search {"inputBorder":{"style":"none","width":"0px"}} /--></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:wp-travel-block/slides -->
    
    <!-- wp:wp-travel-block/slides -->
    <div class="wp-block-wp-travel-block-slides"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/img/australia.jpg","id":10592,"dimRatio":60,"minHeight":700,"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-10592" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/australia.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"70%"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.6"}},"textColor":"background"} -->
    <h1 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="line-height:1.6"><?php echo esc_html__( "THIS ISN'T JUST GROUP TRAVEL. THIS IS SOCIAL TRAVEL", 'travel-boost' ); ?></h1>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left"} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-text-align-left wp-element-button"><?php echo esc_html__( 'SEE ALL TRIPS', 'travel-boost' ); ?></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->
    
    <!-- wp:spacer {"height":"75px"} -->
    <div style="height:75px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
    <p class="has-text-align-center has-large-font-size"></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:wptravel/trip-search /--></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:wp-travel-block/slides -->
    
    <!-- wp:wp-travel-block/slides -->
    <div class="wp-block-wp-travel-block-slides"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/img/europe.jpg","id":10593,"dimRatio":60,"minHeight":700,"layout":{"type":"constrained"}} -->
    <div class="wp-block-cover" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-10593" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/europe.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"70%"}} -->
    <div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.6"}},"textColor":"background"} -->
    <h1 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="line-height:1.6">SAVE UP TO 25% ON 2025 TRIPS</h1>
    <!-- /wp:heading --></div>
    <!-- /wp:group -->
    
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons"><!-- wp:button {"textAlign":"left"} -->
    <div class="wp-block-button"><a class="wp-block-button__link has-text-align-left wp-element-button"><?php echo esc_html__( 'SEE ALL TRIPS', 'travel-boost' ); ?></a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group -->
    
    <!-- wp:spacer {"height":"75px"} -->
    <div style="height:75px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    
    <!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
    <p class="has-text-align-center has-large-font-size"></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:wptravel/trip-search /--></div></div>
    <!-- /wp:cover --></div>
    <!-- /wp:wp-travel-block/slides --></div>
    <!-- /wp:wp-travel-block/slider -->
    
    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer --></div>
    <!-- /wp:group -->
 
<?php
}else{
?>
 <!-- wp:group {"layout":{"type":"default"}} -->
 <div class="wp-block-group"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() );?>/assets/img/australia.jpg","id":10590,"dimRatio":60,"minHeight":700,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover" style="min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-10590" alt="" src="<?php echo esc_url( get_template_directory_uri() );?>/assets/img/australia.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"24px"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"constrained","contentSize":"70%"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.6"}},"textColor":"background"} -->
<h1 class="wp-block-heading has-text-align-center has-background-color has-text-color" style="line-height:1.6"><?php echo esc_html__( 'SAVE UP TO 75% ON 2024 TRIPS', 'travel-boost' ); ?></h1>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"left"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-text-align-left wp-element-button"><?php echo esc_html__( 'SEE ALL TRIPS', 'travel-boost' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"large"} -->
<p class="has-text-align-center has-large-font-size"></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"75px"} -->
<div style="height:75px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<?php
}
?>
   