<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php is_front_page() ? bloginfo('name') : wp_title( '|', true, 'right' ); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="http://careers.socrata.com/favicon.ico">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 8]>
<div class="alert alert-warning">
  You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->
<header>
  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">         
      <a class="white-logo header-logo" href="<?php echo home_url('/'); ?>"></a>
      <a class="corporate-link hidden-xs" href="http://socrata.com"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back to Socrata.com</a>
      <!-- Main Menu -->
      <?php wp_nav_menu( array( 'theme_location' => 'header', 'container_class' => 'hidden-xs' )); ?>
      <!-- Mobile Menu -->
      <ul id="gn-menu" class="gn-menu-main hidden-sm hidden-md hidden-lg">
        <li class="gn-trigger">
          <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
          <nav class="gn-menu-wrapper">
            <?php wp_nav_menu( array( 'theme_location' => 'mobile', 'container_class' => 'gn-scroller', 'menu_class' => 'gn-menu' )); ?>
          </nav>
        </li>
      </ul>
    </div>
  </nav>
</header>