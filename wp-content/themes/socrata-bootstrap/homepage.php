<?php
/*
Template Name: Homepage
*/
get_header(); ?>
<div id="page">
  <?php if(have_posts()): while(have_posts()): the_post();?>
  <?php the_content()?>
  <?php endwhile; ?>
  <?php endif;?>
</div>
<div id="ex"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:#fff;"></span></div>
<div id="wistia_of3560a3ee" class="wistia_embed overlayVideo" ></div>
<?php get_template_part( 'call-to-action' ); ?>
<?php get_footer(); ?>