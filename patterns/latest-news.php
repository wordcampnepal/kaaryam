
<?php
/**
 * Title: Latest News
 * Slug: kaaryam/latest-news
 * Categories: kaaryam
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"30px","right":"30px"}}},"backgroundColor":"background-secondary","layout":{"type":"constrained"},"metadata":{"name":"News "}} -->
<div class="wp-block-group alignfull has-background-secondary-background-color has-background" style="padding-top:100px;padding-right:30px;padding-bottom:100px;padding-left:30px"><!-- wp:group {"align":"wide","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|80"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"style":{"spacing":{"blockGap":"16px","padding":{"bottom":"30px"}}}} -->
<div class="wp-block-group" style="padding-bottom:30px"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"capitalize"}},"fontSize":"big"} -->
<h2 class="wp-block-heading has-text-align-left has-big-font-size" style="text-transform:capitalize"><?php echo esc_html__( 'About Event', 'kaaryam' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:paragraph -->
<p><?php echo esc_html__( 'Get ready for WordCamp Nepal 2024, happening in the picturesque city of Pokhara on the 12th and 13th of January, 2024, for two days of WordPress enlightenment, networking and fun.', 'kaaryam' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'WCNP is set to be an unforgettable experience for WordPress enthusiasts. Spread the word, invite your friends and colleagues, and be a part of this celebration of all things WordPress.', 'kaaryam' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p><?php echo esc_html__( 'See you at WordCamp Nepal 2024!', 'kaaryam' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"margin":{"top":"39px"}}}} -->
<div class="wp-block-buttons" style="margin-top:39px"><!-- wp:button {"className":"is-style-fill"} -->
<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="#">More Details  <img class="wp-image-207" style="width: 12px;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/arrow-white.png" alt=""></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"big"} -->
<h2 class="wp-block-heading has-text-align-left has-big-font-size" style="font-style:normal;font-weight:600"><?php echo esc_html__( 'News', 'kaaryam' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"1","offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","align":"wide","layout":{"inherit":false}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide","layout":{"type":"default","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"has-shadow-dark","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-shadow-dark" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"width":"33.33%"} -->
<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"border":{"radius":"13px"}},"className":"no-padding"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"},"margin":{"top":"0px"},"blockGap":"10px"}}} -->
<div class="wp-block-group alignwide" style="margin-top:0px;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"18px"}}} /-->

<!-- wp:post-date {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"400","fontSize":"0.9rem"},"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:paragraph {"style":{"typography":{"textTransform":"capitalize","textDecoration":"underline","fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|secondary"}}}}},"textColor":"primary"} -->
<p class="has-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:600;text-decoration:underline;text-transform:capitalize"><a href="#"><?php echo esc_html__( 'Read all the latest news', 'kaaryam' ); ?></a> </p>
<!-- /wp:paragraph --></main>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->