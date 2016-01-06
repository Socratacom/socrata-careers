<?php
/*
Plugin Name: Socrata Timeline
Plugin URI: http://socrata.com/
Description: This plugin manages the Socrata timeline.
Version: 1.0
Author: Michael Church
Author URI: http://socrata.com/
License: GPLv2
*/
include_once('metaboxes/meta_box.php');
include_once('inc/fields.php');


// REGISTER POST TYPE
add_action( 'init', 'create_timeline' );

function create_timeline() {
  register_post_type( 'socrata-timeline',
    array(
      'labels' => array(
        'name' => 'Timeline',
        'singular_name' => 'Timeline',
        'add_new' => 'Add New Event',
        'add_new_item' => 'Add New Event',
        'edit' => 'Edit Event',
        'edit_item' => 'Edit Event',
        'new_item' => 'New Event',
        'view' => 'View',
        'view_item' => 'View Event',
        'search_items' => 'Search Timeline',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash'
      ),
      'public' => true,
      'menu_position' => 5,
      'supports' => array( 'title', 'revisions' ),
      'taxonomies' => array( '' ),
      'menu_icon' => '',
      'has_archive' => true,
      'rewrite' => array('with_front' => false, 'slug' => 'timeline')
    )
  );
}

// MENU ICON
//Using Dashicon Font http://melchoyce.github.io/dashicons/
add_action( 'admin_head', 'add_timeline_icon' );
function add_timeline_icon(){
?>
<style>
#adminmenu .menu-icon-socrata-timeline div.wp-menu-image:before {
  content: '\f469';
}
</style>
<?php
}

// ENQEUE SCRIPTS
function timeline_enqeues() {
  wp_register_style( 'timeline_styles', plugins_url( 'css/styles.css' , __FILE__ ), false, null );
  wp_register_script( 'timeline_scripts', plugins_url( 'js/timeline.js' , __FILE__ ), false, null, true );
  if (is_page('brief-history') ) {    
    wp_enqueue_style( 'timeline_styles' );
    wp_enqueue_script( 'timeline_scripts' );
  } 
}
add_action('wp_enqueue_scripts', 'timeline_enqeues');

// Adding New On-the-fly Image resizing
function timeline_image( $thumb_size, $image_width, $image_height ) { 
  global $post; 
  $params = array( 'width' => $image_width, 'height' => $image_height ); 
  $meta = get_socrata_timeline_meta();  
  $imgsrc = wp_get_attachment_image_src( $meta[1], $thumb_size );
  $custom_img_src = bfi_thumb( $imgsrc[0], $params );     
  return $custom_img_src;   
}

// Shortcode [timeline]
add_shortcode('timeline','timeline_shortcode');
function timeline_shortcode($atts, $content = null) { ob_start(); ?>
  <section>
    <div class="container">
      <div class="section-wrapper">
        <div class="timeline-btn-wrap">
          <div class="timeline-btn now">Present</div>
        </div>
        <div id="socrata-timeline" class="socrata-container">    
          <?php $query = new WP_Query('post_type=socrata-timeline&orderby=date&order=desc&posts_per_page=100'); while ($query->have_posts()) : $query->the_post(); ?>
          <div class="socrata-timeline-block">
            <?php $meta = get_socrata_timeline_meta(); 
              if ($meta[1]) { ?>
                <img src="<?php echo timeline_image('full', 60, 60); ?>" class="img-circle socrata-timeline-image">
              <?php
              } else {
                echo "<div class='socrata-timeline-dot'></div>";
              }
            ?>            
            <div class="socrata-timeline-content">
              <h4><?php the_title(); ?></h4>
              <div class="timeline-date"><?php the_time('F Y') ?></div>
              <?php $meta = get_socrata_timeline_meta(); if ($meta[0]) echo "<div class='timeline-text'>$meta[0]</div>"; ?>
            </div>
          </div>
          <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <div class="timeline-btn-wrap">
          <div class="timeline-btn launch">2007</div>
        </div>
      </div>
    </div>
  </section>
<?php
$content = ob_get_contents();
ob_end_clean();
return $content;
}

