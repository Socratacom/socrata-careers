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
        'not_found_in_trash' => 'Not found in Trash'
      ),
      'public' => true,
      'menu_position' => 5,
      'supports' => array( 'title', 'thumbnail', 'revisions' ),
      'taxonomies' => array( '' ),
      'menu_icon' => '',
      'has_archive' => true,
      'rewrite' => array('with_front' => false, 'slug' => 'headlines')
    )
  );
}

// MENU ICON
//Using Dashicon Font http://melchoyce.github.io/dashicons/
add_action( 'admin_head', 'add_headlines_icon' );
function add_headlines_icon(){
?>
<style>
#adminmenu .menu-icon-socrata-headlines div.wp-menu-image:before {
  content: '\f488';
}
</style>
<?php
}