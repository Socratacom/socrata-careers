<?php
/*
Template Name: Homepage
*/
get_header(); ?>
<div id="page">
  <section id="video_container" >
    <div id="playbutton">
      <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
    </div>
    <div id="cover_all"></div>
    <div id="main-image"></div>
    <div id="wistia_z1ggfo8f86" class="wistia_embed backgroundVideo" ></div>    
  </section>
	<section class="text-block">
		<h1>Core value statement. Donec ullamcorper nulla non metus auctor fringilla. Vivamus sagittis lacus.</h1>
	</section>	
</div>
<div id="ex"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:#fff;"></span></div>
<div id="wistia_fji9juvptr" class="wistia_embed overlayVideo" ></div>
<?php get_template_part( 'call-to-action' ); ?>
<?php get_footer(); ?>