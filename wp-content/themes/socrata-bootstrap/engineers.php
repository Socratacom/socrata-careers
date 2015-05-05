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

        <div id="playbutton">
          <div class="hidden-xs hidden-sm">
            <p class="text-center"><span class="glyphicon glyphicon-play-circle playbutton" aria-hidden="true"></span></p>
          </div>
          <div class="hidden-md hidden-lg">
            <p class="text-center"><a href="//fast.wistia.net/embed/iframe/outkuximjq?popover=true" class="wistia-popover[height=480,playerColor=7b796a,width=853]"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a></p>
          </div>
          <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>   
        </div>
      </div>
    </div>
    <?php echo do_shortcode('[slantLeft color="#fff;"]'); ?>
    <?php echo do_shortcode('[stuart-engineer]'); ?>
  </section>
  <?php if(have_posts()): while(have_posts()): the_post();?>
  <?php the_content()?>
  <?php endwhile; ?>
  <?php endif;?>
</div>
<div id="videoContainer">
  <div id="ex"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:#fff;"></span></div>
  <div id="wistia_outkuximjq" class="wistia_embed overlayVideo" ></div>
</div>
<?php get_template_part( 'call-to-action' ); ?>
<?php get_footer(); ?>
