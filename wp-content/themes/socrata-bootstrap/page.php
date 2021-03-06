<?php get_header(); ?>
<div id="page">
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-sm-12"><!-- Content Column -->
          <?php if(have_posts()): while(have_posts()): the_post();?>
            <?php the_content()?>
          <?php endwhile; ?>
          <?php else: ?>
          <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>  
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_template_part( 'call-to-action' ); ?>
<?php get_footer(); ?>
