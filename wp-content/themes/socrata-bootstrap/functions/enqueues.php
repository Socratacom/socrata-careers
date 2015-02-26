<?php

function script_enqueues()
{
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', false, null, false);
  wp_enqueue_script( 'jquery' );
  wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', false, null);
  wp_enqueue_style('bootstrap-css');
  wp_register_style('custom-css', get_template_directory_uri() . '/css/custom.css', false, null);
  wp_enqueue_style('custom-css');
  wp_register_style( 'google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,600', false, null);
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
  wp_register_script('gnmenu-js', get_template_directory_uri() . '/js/gnmenu.js', false, null, true);
  wp_enqueue_script('gnmenu-js');
}
add_action('wp_enqueue_scripts', 'script_enqueues', 100);

// Targeted Scripts
function homepage_scripts() {
  if (is_page_template('homepage.php')) {
    wp_register_script('wistiaExternal', 'https://fast.wistia.com/assets/external/E-v1.js', false, null, false);
    wp_enqueue_script('wistiaExternal');
    wp_register_script('wistiaCropFill', 'https://fast.wistia.com/labs/crop-fill/plugin.js', false, null, false);
    wp_enqueue_script('wistiaCropFill');
    wp_register_script('homeVideo', get_template_directory_uri() . '/js/home-page-video.js', false, null, true);    
    wp_enqueue_script('homeVideo');
    wp_register_style('homepage-css', get_template_directory_uri() . '/css/homepage.css', false, null);
    wp_enqueue_style('homepage-css');
  }
}
add_action('wp_enqueue_scripts', 'homepage_scripts');

function why_socrata_scripts() {
  if (is_page('why-socrata')) {
    wp_register_script('timeline-js', get_template_directory_uri() . '/js/timeline.js', false, null, true);  
    wp_enqueue_script('timeline-js');
    wp_register_style('timeline-css', get_template_directory_uri() . '/css/timeline.css', false, null);
    wp_enqueue_style('timeline-css');
  }
}
add_action('wp_enqueue_scripts', 'why_socrata_scripts');

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


