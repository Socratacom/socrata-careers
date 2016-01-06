<?php

function site_setup() {
  add_editor_style('css/editor-style.css');
  add_theme_support('post-thumbnails');
	update_option('thumbnail_size_w', 170);
  update_option('medium_size_w', 470);
  update_option('large_size_w', 970);
}
add_action('init', 'site_setup');

// Adding New On-the-fly Image resizing
function tuts_custom_img( $thumb_size, $image_width, $image_height ) { 
  global $post; 
  $params = array( 'width' => $image_width, 'height' => $image_height );   
  $imgsrc = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID, '' ), $thumb_size );
  $custom_img_src = bfi_thumb( $imgsrc[0], $params );   
  return $custom_img_src;   
}


function site_search_form( $form ) {
    $form = '<form class="form-inline" role="search" method="get" id="searchform" action="' . home_url('/') . '" >
    <div class="form-group">
		    <input class="form-control" type="text" value="' . get_search_query() . '" name="s" id="s" />
    </div>
		<button type="submit" id="searchsubmit" value="'. esc_attr__('Search') .'" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Search</button>
    </form>';
    return $form;
}
add_filter( 'get_search_form', 'site_search_form' );

// Register Menus

add_action( 'init', 'register_my_menus' );
function register_my_menus() {
  register_nav_menus(
    array(
        'social' => __( 'Social Menu' ),
        'sitemap' => __( 'Sitemap Menu' ),
        'header' => __( 'Header Menu' ),
        'mobile' => __( 'Mobile Menu' )
    )
  );
}

//Page Slug Body Class
function add_slug_body_class( $classes ) {
global $post;
  if ( isset( $post ) ) {
    $classes[] = $post->post_name;
  }
  return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );
