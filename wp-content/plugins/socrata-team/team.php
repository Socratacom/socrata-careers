<?php
/*
Plugin Name: Socrata Team
Plugin URI: http://socrata.com/
Description: This plugin manages the Socrata team.
Version: 1.0
Author: Michael Church
Author URI: http://socrata.com/
License: GPLv2
*/
include_once('metaboxes/meta_box.php');
include_once('inc/fields.php');


// REGISTER POST TYPE
add_action( 'init', 'create_team' );

function create_team() {
  register_post_type( 'socrata-team',
    array(
      'labels' => array(
        'name' => 'Team',
        'singular_name' => 'Team',
        'add_new' => 'Add New Member',
        'add_new_item' => 'Add New Member',
        'edit' => 'Edit Member',
        'edit_item' => 'Edit Member',
        'new_item' => 'New Member',
        'view' => 'View',
        'view_item' => 'View Member',
        'search_items' => 'Search Team',
        'not_found' => 'Not found',
        'not_found_in_trash' => 'Not found in Trash'
      ),
      'public' => true,
      'menu_position' => 5,
      'supports' => array( 'title', 'thumbnail', 'revisions' ),
      'taxonomies' => array( '' ),
      'menu_icon' => '',
      'has_archive' => true,
      'rewrite' => array('with_front' => false, 'slug' => 'team')
    )
  );
}

// MENU ICON
//Using Dashicon Font http://melchoyce.github.io/dashicons/
add_action( 'admin_head', 'add_team_icon' );
function add_team_icon(){
?>
<style>
#adminmenu .menu-icon-socrata-team div.wp-menu-image:before {
  content: '\f307';
}
</style>
<?php
}

// Body Classes for Styling 
add_filter('body_class', 'team_styling');
function team_styling($classes) {
  if ('socrata-team' == get_post_type() && is_archive() || 'socrata-team' == get_post_type() && is_single() || is_page('team-and-culture')) { 
    $classes[] = 'team'; 
  }
  return $classes; 
}

// ENQEUE SCRIPTS
function team_enqeues() {
  wp_register_style( 'team_styles', plugins_url( 'css/styles.css' , __FILE__ ), false, null );
  if ( 'team' == get_post_type() && is_single() || 'team' == get_post_type() && is_archive() || is_page('team-and-culture') ) {    
    wp_enqueue_style( 'team_styles' );
  } 
}
add_action('wp_enqueue_scripts', 'team_enqeues');

// TEAM AND CULTURE
// [team-culture"]
add_shortcode('team-culture','team_culture_shortcode');

function team_culture_shortcode( $atts ) {
  ob_start();
  extract( shortcode_atts( array (
    'type' => array ('socrata-team', 'socrata-headlines', 'post'),
    'orderby' => 'rand',
    'order' => 'asc',
    'posts' => 100,
    ), $atts ) );
    $options = array(
    'post_type' => $type,
    'orderby' => $orderby,
    'order' => $order,
    'posts_per_page' => $posts,
  );
  $query = new WP_Query( $options );
  if ( $query->have_posts() ) { ?>
  <div id="team-container">
  <div class="grid-sizer"></div>
  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
  <?php 
    if (get_post_type() == 'socrata-headlines') { ?>
    <div class="item w2">        
      <?php $meta = get_socrata_headlines_meta();
      if ($meta[1]) { ?>
      <figure class="effect-chico">
        <img src="<?php echo tuts_custom_img('full', 456, 300);?>"  class="img-responsive" />
        <figcaption>
          <a href="<?php echo $meta[1]; ?>" target="_blank"></a>
          <div class="link-icon"><i class="fa fa-chain"></i></div>
        </figcaption>     
      </figure>
      <div class="headline-content-wrapper">
        <h4><a href="<?php echo $meta[1]; ?>" target="_blank"><?php the_title()?></a></h4>
        <?php if ($meta[0]) echo "<p>$meta[0]</p>"; ?>
      </div>
      <?php }
      else { ?>
        <img src="<?php echo tuts_custom_img('full', 456, 300);?>"  class="img-responsive" />
        <div class="headline-content-wrapper">
          <h4><?php the_title()?></h4>
          <?php if ($meta[0]) echo "<p>$meta[0]</p>"; ?>
        </div>
      <?php
      } ?>
    </div>
    <?php
    }
    elseif (get_post_type() == 'socrata-team') { ?>
    
      <?php $meta = get_socrata_team_meta();
      if ($meta[2]) { ?>
      <div class="item">
        <figure class="effect-chico">
          <img src="<?php echo tuts_custom_img('full', 300, 300);?>"  class="img-responsive" />
          <figcaption>
            <a data-toggle="modal" data-target="#<?php  global $post; $post_slug=$post->post_name; echo $post_slug; ?>"></a>
            <div class="link-icon"><i class="fa fa-chain"></i></div>
          </figcaption>     
        </figure>
        <div class="team-content-wrapper">
          <h4><a data-toggle="modal" data-target="#<?php  global $post; $post_slug=$post->post_name; echo $post_slug; ?>"><?php the_title()?></a></h4>
          <?php if ($meta[0]) echo "<p class='job-title'>$meta[0]</p>"; ?>
          <?php if ($meta[1]) echo "<p>$meta[1]</p>"; ?>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="<?php  global $post; $post_slug=$post->post_name; echo $post_slug; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-sm-3">
                    <img src="<?php echo tuts_custom_img('full', 300, 300);?>"  class="img-responsive img-circle profile-image" />
                  </div>
                  <div class="col-sm-9">
                    <h1><?php the_title()?></h1>
                    <?php if ($meta[0]) echo "<h4 class='job-title'>$meta[0]</h4>"; ?>
                    <?php echo $meta[2]; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php }
      else { ?>
      <div class="item">
        <img src="<?php echo tuts_custom_img('full', 300, 300);?>"  class="img-responsive" />
        <div class="team-content-wrapper">
          <h4><?php the_title()?></h4>
          <?php if ($meta[0]) echo "<p class='job-title'>$meta[0]</p>"; ?>
          <?php if ($meta[1]) echo "<p>$meta[1]</p>"; ?>
        </div>
      </div>
      <?php
      } ?>
    <?php
    }
  ?>
  <?php endwhile; wp_reset_postdata(); ?>
  </div>
  <?php $content = ob_get_clean();
  return $content;
  } 
}

