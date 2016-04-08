<?php

function script_enqueues()
{
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, null, false);
  wp_enqueue_script( 'jquery' );
  wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, null);
  wp_enqueue_style('bootstrap-css');

  wp_register_style('styles-css', get_template_directory_uri() . '/css/styles.min.css', false, 1.1);
  wp_enqueue_style('styles-css');

  wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600', false, null);
  wp_enqueue_style('google-fonts');
  wp_register_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', false, null);
  wp_enqueue_style('fontawesome');
  wp_register_script('modernizr', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', false, null, true);
  wp_enqueue_script('modernizr');
  wp_register_script('html5shiv.js', get_template_directory_uri() . '/js/html5shiv.js', false, null, true);
  wp_enqueue_script('html5shiv.js');
  wp_register_script('respond', get_template_directory_uri() . '/js/respond.min.js', false, null, true);
  wp_enqueue_script('respond');
  wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', false, null, true);
  wp_enqueue_script('bootstrap-js');
  wp_register_script('classie-js', get_template_directory_uri() . '/js/classie.js', false, null, true);
  wp_enqueue_script('classie-js');
  wp_register_script('jumplink-js', get_template_directory_uri() . '/js/smooth-jump-links.js', false, null, true);
  wp_enqueue_script('jumplink-js');
  wp_register_script('ytplayers', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.min.js', false, null, true);
  wp_enqueue_script('ytplayers');
  // wp_register_script('smooth-scroll-js', get_template_directory_uri() . '/js/smooth-scrolling.js', false, null, true);
  // wp_enqueue_script('smooth-scroll-js');

}
add_action('wp_enqueue_scripts', 'script_enqueues', 100);



function team_and_culture_scripts() {
  if (is_page('team-and-culture')) {
    wp_enqueue_script('masonry');
    wp_register_script('packery-js', get_template_directory_uri() . '/js/packery.pkgd.min.js', false, null, true);  
    wp_enqueue_script('packery-js');
    wp_register_script('packery-initialize', get_template_directory_uri() . '/js/pakery-initialize.js', false, null, true);  
    wp_enqueue_script('packery-initialize');
  }
}
add_action('wp_enqueue_scripts', 'team_and_culture_scripts');



