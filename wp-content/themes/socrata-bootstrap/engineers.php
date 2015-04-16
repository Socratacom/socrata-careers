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
        <p id="playbutton" class="text-center"><span class="glyphicon glyphicon-play-circle playbutton" aria-hidden="true"></span></p>
      </div>
    </div>
    <?php echo do_shortcode('[slantLeft color="#fff;"]'); ?>
    <?php echo do_shortcode('[stuart-engineer]'); ?>
  </section>









  <!--<section id="video_container">
    <div id="text">
      <div id="playbutton">
        <h1>Our Employees, Improving Our World</h1>
        <span class="glyphicon glyphicon-play-circle playbutton" aria-hidden="true"></span>
      </div>
    </div>
    <div id="cover_all"></div>
  </section>-->
  <?php if(have_posts()): while(have_posts()): the_post();?>
  <?php the_content()?>
  <?php endwhile; ?>
  <?php endif;?>
</div>
<div id="videoContainer">
<div id="ex"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:#fff;"></span></div>
<div id="wistia_mknj6l5g3l" class="wistia_embed overlayVideo" ></div>
</div>
<?php get_template_part( 'call-to-action' ); ?>
<?php get_footer(); ?>
