<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php is_front_page() ? bloginfo('name') : wp_title( '|', true, 'right' ); ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="https://careers.socrata.com/socrata-favicon.ico">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!--[if lt IE 8]>
<div class="alert alert-warning">
  You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->
<header class="banner" role="banner">
  <nav class="navbar navbar-default ">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="ui-menu__content">
            <i class="ui-menu__line ui-menu__line_1"></i>
            <i class="ui-menu__line ui-menu__line_2"></i>
            <i class="ui-menu__line ui-menu__line_3"></i>
          </span>
        </button>
        <a class="logo header-logo" href="<?php echo home_url('/'); ?>"></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/team-and-culture">Team &amp; Culture</a></li>
          <li><a href="/brief-history">Brief History</a></li>
          <li><a href="/engineers">Engineers</a></li>
          <li><a href="/jobs">Jobs</a></li>
          <li class="hidden-xs hidden-sm"><a href="https://socrata.com" class="btn btn-default">Back to Socrata.com</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>