<?php

function script_enqueues()
{
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, null, false);
  wp_enqueue_script( 'jquery' );
  wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, null);
  wp_enqueue_style('bootstrap-css');

  wp_register_style('styles-css', get_template_directory_uri() . '/css/styles.css', false, 1.4);
  wp_enqueue_style('styles-css');

  wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,600', false, null);
  wp_enqueue_style('google-fonts');
  wp_register_style('fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', false, null);
  wp_enqueue_style('fontawesome');
  wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, null, true);
  wp_enqueue_script('modernizr');
  wp_register_script('html5shiv.js', get_template_directory_uri() . '/js/html5shiv.js', false, null, true);
  wp_enqueue_script('html5shiv.js');
  wp_register_script('respond', get_template_directory_uri() . '/js/respond.min.js', false, null, true);
  wp_enqueue_script('respond');
  wp_register_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.js', false, null, true);
  wp_enqueue_script('bootstrap-js');
  wp_register_script('classie-js', get_template_directory_uri() . '/js/classie.js', false, null, true);
  wp_enqueue_script('classie-js');
  // wp_register_script('ytplayers', get_template_directory_uri() . '/js/jquery.mb.YTPlayer.min.js', false, null, true);
  // wp_enqueue_script('ytplayers');
  // wp_register_script('smooth-scroll-js', get_template_directory_uri() . '/js/smooth-scrolling.js', false, null, true);
  // wp_enqueue_script('smooth-scroll-js');

}
add_action('wp_enqueue_scripts', 'script_enqueues', 100);




