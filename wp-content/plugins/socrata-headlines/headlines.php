<?php
/*
Plugin Name: Socrata Headlines
Plugin URI: http://socrata.com/
Description: This plugin manages headlines.
Version: 1.0
Author: Michael Church
Author URI: http://socrata.com/
License: GPLv2
*/
include_once('metaboxes/meta_box.php');
include_once('inc/fields.php');


// REGISTER POST TYPE
add_action( 'init', 'create_headlines' );

function create_headlines() {
  register_post_type( 'socrata-headlines',
    array(
      'labels' => array(
        'name' => 'Headlines',
        'singular_name' => 'Headlines',
        'add_new' => 'Add New Headline',
        'add_new_item' => 'Add New Headline',
        'edit' => 'Edit Headlines',
        'edit_item' => 'Edit Headlines',
        'new_item' => 'New Headline',
        'view' => 'View',
        'view_item' => 'View Headline',
        'search_items' => 'Search Headliness',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash',
        'parent' => 'Socrata'
      ),
      'public' => true,
      'menu_position' => 5,
      'supports' => array( 'title', 'editor', 'thumbnail', 'revisions' ),
      'taxonomies' => array( '' ),
      'menu_icon' => plugins_url( 'images/image.png', __FILE__ ),
      'has_archive' => true,
      'rewrite' => array('with_front' => false, 'slug' => 'headlines')
    )
  );
}

// REGISTER TAXONOMIES
add_action( 'init', 'headlines_region', 0 );

function headlines_region() {
  register_taxonomy(
    'headlines_region',
    'headlines',
    array(
      'labels' => array(
        'name' => 'Headlines Region',
        'menu_name' => 'Region',
        'add_new_item' => 'Add New Region',
        'new_item_name' => "New Region"
      ),
      'show_ui' => true,
      'show_tagcloud' => false,
      'hierarchical' => true,
      'sort' => true,      
      'args' => array( 'orderby' => 'term_order' ),
      'show_admin_column' => true,
      'rewrite' => array('with_front' => false, 'slug' => 'headlines-region')
    )
  );
}

add_action( 'init', 'headlines_type', 0 );

function headlines_type() {
  register_taxonomy(
    'headlines_type',
    'headlines',
    array(
      'labels' => array(
        'name' => 'Headlines Type',
        'menu_name' => 'Type',
        'add_new_item' => 'Add New Type',
        'new_item_name' => "New Type"
      ),
      'show_ui' => true,
      'show_tagcloud' => false,
      'hierarchical' => true,
      'sort' => true,      
      'args' => array( 'orderby' => 'term_order' ),
      'show_admin_column' => true,
      'rewrite' => array('with_front' => false, 'slug' => 'headlines-type')
    )
  );
}

add_action( 'init', 'headlines_product', 0 );

function headlines_product() {
  register_taxonomy(
    'headlines_product',
    'headlines',
    array(
      'labels' => array(
        'name' => 'Headlines Product',
        'menu_name' => 'Product',
        'add_new_item' => 'Add New Product',
        'new_item_name' => "New Product"
      ),
      'show_ui' => true,
      'show_tagcloud' => false,
      'hierarchical' => true,
      'sort' => true,      
      'args' => array( 'orderby' => 'term_order' ),
      'show_admin_column' => true,
      'rewrite' => array('with_front' => false, 'slug' => 'headlines-product')
    )
  );
}

// ENQEUE SCRIPTS
add_action( 'init', 'register_headlines_styles', 0 ); 
function register_headlines_styles() {
    wp_register_style( 'headlines_styles', plugins_url( 'css/styles.css' , __FILE__ ), false, null );    
    wp_register_script( 'headlinesfilter', plugins_url( 'js/dropit.js' , __FILE__ ), false, null, true );
    wp_register_script( 'dotdotdot', plugins_url( 'js/jquery.dotdotdot.min.js' , __FILE__ ), false, null, true );
}

function headlines_script_loading() {
    if ( 'headlines' == get_post_type() && is_single() || 'headlines' == get_post_type() && is_archive() || is_page('customer-headlines') ) {
        wp_enqueue_style( 'headlines_styles' );
        wp_enqueue_script( 'headlinesfilter' );
        wp_enqueue_script( 'dotdotdot' );
    } 
}
add_action('wp_enqueue_scripts', 'headlines_script_loading');

// ADD TRUNCATE SCRIPT
add_action('thesis_hook_after_html', 'headlines_truncate_script');
function headlines_truncate_script() {
if ( 'headlines' == get_post_type() && is_archive() || is_page('customer-headlines') ) { ?>
  <script>
    $(document).ready(function() {
      $(".truncate").dotdotdot({
        ellipsis  : '... ',
        wrap    : 'word',
        fallbackToLetter: true,
        after   : null,
        watch   : false,
        height    : null,
        tolerance : 0,
        callback  : function( isTruncated, orgContent ) {}, 
        lastCharacter : {
        remove    : [ ' ', ',', ';', '.', '!', '?' ],
        noEllipsis  : []
        }
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.dropdown').dropit();
    });
  </script>
<?php } 
}

// BODY CLASSES FOR STYLING
add_filter('thesis_body_classes', 'headlines_styling');
function headlines_styling($classes) {
  if ('headlines' == get_post_type() && is_single() || is_page('customer-headlines') ) { 
    $classes[] = 'headlines'; 
  }
  return $classes; 
}
add_filter('thesis_body_classes', 'archive_headlines_styling');
function archive_headlines_styling($classes) {
  if ('headlines' == get_post_type() && is_archive() ) { 
    $classes[] = 'headlines archive-headlines'; 
  }
  return $classes; 
}
add_filter('thesis_body_classes', 'headlines_landing_styling');
function headlines_landing_styling($classes) {
  if ( is_page('customer-headlines') ) { 
    $classes[] = 'headlines-landing'; 
  }
  return $classes; 
}

// FLUSH REWRITE RULES
function headlines_activate() {
  // register taxonomies/post types here
  flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'headlines_activate' );

function headlines_deactivate() {
  flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'headlines_deactivate' );


// REGISTER MENUS
add_action( 'init', 'register_headlines_menus' );
function register_headlines_menus() {
  register_nav_menus(
    array(
        'headlines_region' => __( 'Headlines Region' ),
        'headlines_type' => __( 'Headlines Type' ),
        'headlines_product' => __( 'Headlines Product' )
    )
  );
}
// SHORTCODES
// [featured-headlines]
add_shortcode('featured-headlines','featured_headlines');
function featured_headlines ($atts, $content = null) { ob_start(); ?>
<div class="featured-headlines">
  <div class="featured-headlines-wrapper">
    <div class="one_half">  
      <?php $query = new WP_Query('post_type=headlines&meta_key=socrata_headlines_featured&meta_value=1&orderby=desc&showposts=1'); while ($query->have_posts()) : $query->the_post(); ?>
      <div class="feature-one" style="background-image:url(<?php echo tuts_custom_img('full', 614, 400, true );?>)">
        <div class="feature-one-label">Featured Headline</div>
        <div class="feature-content truncate">
          <h1><?php the_title(); ?></h1>
          <?php $meta = get_socrata_headlines_meta();
          if ($meta[23]) {echo "<p>$meta[23]</p>";}
          else { ?> 
          <?php the_excerpt(); ?> 
          <?php }
          ?>
        </div>
        <div class="overlay"></div>
        <div><a href="<?php the_permalink() ?>"></a></div>
        <?php $meta = get_socrata_headlines_meta();
          if ($meta[19]) { ?>
          <?php $meta = get_socrata_headlines_meta(); if ($meta[2]) {echo "<div><a href='$meta[2]' class='button' target='_blank'>Visit Site</a></div>";} ?>
          <?php }
          else { ?>
          <div><a href="<?php the_permalink() ?>" class="button">Read Headline</a></div>
          <?php }
        ?>
      </div>
      <?php endwhile;  wp_reset_postdata(); ?>
    </div>
    <div class="one_fourth feature-tiles hidden-xs">
      <ul>
      <?php $query = new WP_Query('post_type=headlines&meta_key=socrata_headlines_featured&meta_value=1&orderby=desc&showposts=2&offset=1'); while ($query->have_posts()) : $query->the_post(); ?>  
        <li class="truncate small-tile">
          <div class="feature-tile-image" style="background-image:url(<?php echo tuts_custom_img('full', 282, 100, false );?>);"><a href="<?php the_permalink() ?>"></a></div>
          <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
          <?php the_excerpt(); ?>
        </li>  
      <?php endwhile;  wp_reset_postdata(); ?>
      </ul>
    </div>
    <div class="one_fourth feature-tiles last hidden-md">
      <ul>
      <?php $query = new WP_Query('post_type=headlines&meta_key=socrata_headlines_featured&meta_value=1&orderby=desc&showposts=2&offset=3'); while ($query->have_posts()) : $query->the_post(); ?>  
        <li class="truncate small-tile">
          <div class="feature-tile-image" style="background-image:url(<?php echo tuts_custom_img('full', 282, 100, false );?>);"><a href="<?php the_permalink() ?>"></a></div>
          <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
          <?php the_excerpt(); ?>
        </li>   
      <?php endwhile;  wp_reset_postdata(); ?>
      </ul>
    </div>
    <div class="clearboth"></div>
  </div>
</div>
<?php
$content = ob_get_contents();
ob_end_clean();
return $content;
}

// [all-headlines]
add_shortcode('all-headlines','all_headlines');
function all_headlines ($atts, $content = null) { ob_start(); ?>
  <?php $query = new WP_Query('post_type=headlines&orderby=title&order=asc&showposts=100'); ?>
  <?php 
    $count = 0;
    while ($query->have_posts()) : $query->the_post();
    $count++;
    $third_div = ($count%3 == 0) ? 'last' : '';
    $third_div_clear = ($count%3 == 0) ? '<div class="clearboth"></div>' : '';
  ?>

  <?php $meta = get_socrata_headlines_meta();
  if ($meta[19]) { ?>  
  <article class="one_third <?php echo $third_div; ?>" style="background-image: url(<?php echo tuts_custom_img('full', 392, 250); ?>)">    
    <div class="thumb-content">
      <div class="truncate content-excerpt">
        <h4><?php the_title(); ?></h4>
        <?php $meta = get_socrata_headlines_meta();
        if ($meta[23]) {echo "<p>$meta[23]</p>";}
        else { ?> 
        <?php the_excerpt(); ?> 
        <?php }
        ?>
      </div>
      <?php $meta = get_socrata_headlines_meta(); if ($meta[2]) {echo "<a href='$meta[2]' class='button' target='_blank'>Visit Site</a>";} ?>
      <div class="small-logo-wrapper">
        <?php $meta = get_socrata_headlines_meta(); if ($meta[6]) echo wp_get_attachment_image($meta[6], 'small', false, array('class' => 'img-responsive small-logo')); ?>
      </div>
    </div>
    <?php $meta = get_socrata_headlines_meta(); if ($meta[2]) {echo "<a href='$meta[2]' target='_blank'></a>";} ?>
  </article>

    <?php }
  else { ?>

  <article class="one_third <?php echo $third_div; ?>" style="background-image: url(<?php echo tuts_custom_img('full', 392, 250); ?>)">
    <div class="thumb-content">
      <div class="truncate content-excerpt">
        <h4><?php the_title(); ?></h4>
        <?php $meta = get_socrata_headlines_meta();
        if ($meta[23]) {echo "<p>$meta[23]</p>";}
        else { ?> 
        <?php the_excerpt(); ?> 
        <?php }
        ?>
      </div>
      <a href="<?php the_permalink() ?>" class="button">Read Headline</a>
      <div class="small-logo-wrapper">
        <?php $meta = get_socrata_headlines_meta(); if ($meta[6]) echo wp_get_attachment_image($meta[6], 'small', false, array('class' => 'img-responsive small-logo')); ?>
      </div>
    </div>
    <a href="<?php the_permalink() ?>"></a>
  </article>

  <?php }
?>

<?php echo $third_div_clear; ?>  
<?php endwhile;  wp_reset_postdata(); ?>
<script>$("article").delay(1000).animate({"opacity": "1"}, 700);</script>
<?php
$content = ob_get_contents();
ob_end_clean();
return $content;
}

// [filter-headlines]
add_shortcode('filter-headlines','filter_headlines');
function filter_headlines ($atts, $content = null) { ob_start(); ?>
<nav class="filter">
  <div class="filter-wrapper format_text">
    <h2>All Headlines</h2>
    <ul class="filter-menu dropdown">
      <li>
        <a href="#" class="dd-lable"><span class="hidden-md">Region</span><span class="ss-icon hidden-lg">maplocation</span></a>
        <?php wp_nav_menu( array( 'theme_location' => 'headlines_region' ) ); ?>
      </li>
      <li class="or hidden-xs">or</li>
      <li>
        <a href="#"><span class="hidden-md">Type</span><span class="ss-icon hidden-lg">heartbook</span></a>
        <?php wp_nav_menu( array( 'theme_location' => 'headlines_type' ) ); ?>
      </li>
      <li class="or hidden-xs">or</li>
      <li>
        <a href="#"><span class="hidden-md">Product</span><span class="ss-icon hidden-lg">browseonline</span></a>
        <?php wp_nav_menu( array( 'theme_location' => 'headlines_product' ) ); ?>
      </li>
    </ul>
  </div>
</nav>
<?php
$content = ob_get_contents();
ob_end_clean();
return $content;
}

// [archive-filter-headlines]
add_shortcode('archive-filter-headlines','archive_filter_headlines');
function archive_filter_headlines ($atts, $content = null) { ob_start(); ?>
<nav class="filter">
  <div class="filter-wrapper format_text">
    <h2><?php single_cat_title(); ?></h2>
    <ul class="filter-menu dropdown">
      <li>
        <a href="#" class="dd-lable"><span class="hidden-md">Region</span><span class="ss-icon hidden-lg">maplocation</span></a>
        <?php wp_nav_menu( array( 'theme_location' => 'headlines_region' ) ); ?>
      </li>
      <li class="or hidden-xs">or</li>
      <li>
        <a href="#"><span class="hidden-md">Type</span><span class="ss-icon hidden-lg">heartbook</span></a>
        <?php wp_nav_menu( array( 'theme_location' => 'headlines_type' ) ); ?>
      </li>
      <li class="or hidden-xs">or</li>
      <li>
        <a href="#"><span class="hidden-md">Product</span><span class="ss-icon hidden-lg">browseonline</span></a>
        <?php wp_nav_menu( array( 'theme_location' => 'headlines_product' ) ); ?>
      </li>
    </ul>
  </div>
</nav>
<?php
$content = ob_get_contents();
ob_end_clean();
return $content;
}



