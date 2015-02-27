<?php
/*
Template Name: Homepage
*/
get_header(); ?>
<div id="page">
  <section id="video_container">
    <div id="text">
      <div id="playbutton">
        <h1>Our Employees, Improving Our World</h1>
        <span class="glyphicon glyphicon-play-circle playbutton" aria-hidden="true"></span>
      </div>
    </div>
    <div id="cover_all"></div>
    <div id="main-image"></div>
    <div id="wistia_ivn4euvi4n" class="wistia_embed backgroundVideo" ></div>
    <svg class="video-break" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="150" viewBox="0 0 100 100" preserveAspectRatio="none">
      <path class="white-path" d="M0 10 L50 100 L0 100 Z"></path>
      <path class="blue-path" d="M51 100 L100 100 L100 10 Z"></path>
      <path class="white-path" d="M50 100 L100 100 L100 50 Z"></path>
    </svg>
  </section>
	<section class="text-block">
		<h1>Socrata is a donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus.</h1>
	</section>
</div>
<div id="ex"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:#fff;"></span></div>
<div id="wistia_u2kc7ff0qp" class="wistia_embed overlayVideo" ></div>
<?php get_template_part( 'call-to-action' ); ?>
<?php get_footer(); ?>