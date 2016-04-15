<?php
/*
Template Name: Engineers
*/
get_header(); ?>
<div id="page">
  <section class="green-sea">
    <div class="container">
      <div class="section-wrapper">
        <h1 class="text-center">Engineers wanted!</h1>
        <h2 class="text-center">Get to know some of our engineers. Watch this short video.</h2>
        <p class="text-center"><a href="https://www.youtube.com/watch?v=pxh1wwyqdb8" role="button" style="color:white; font-size: 50px;"><i class="fa fa-play-circle-o"></i></a></p>
      </div>
    </div>
    <?php echo do_shortcode('[slantLeft color="#fff;"]'); ?>
    <?php echo do_shortcode('[stuart-engineer]'); ?>
    <?php echo do_shortcode('[youtube-modal]'); ?>
  </section>
  <?php if(have_posts()): while(have_posts()): the_post();?>
  <?php the_content()?>
  <?php endwhile; ?>
  <?php endif;?>
</div>
<?php get_template_part( 'call-to-action' ); ?>
<?php get_footer(); ?>
