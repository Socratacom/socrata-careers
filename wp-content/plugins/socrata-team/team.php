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