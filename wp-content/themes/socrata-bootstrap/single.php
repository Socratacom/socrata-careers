<?php get_header(); ?>
<div id="page">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="content" role="main">
          <?php if(have_posts()): while(have_posts()): the_post();?>
          <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
            <header>
              <h2><?php the_title()?></h2>
              <h4>
                <em>
                <span class="text-muted" class="author">By <?php the_author() ?>,</span>
                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
                </em>
              </h4>
              <p class="text-muted">
                <i class="glyphicon glyphicon-folder-open"></i>&nbsp; Filed under: <?php _e(''); ?> <?php the_category(', ') ?><br/>
                <i class="glyphicon glyphicon-comment"></i>&nbsp; Comments: <?php comments_popup_link('None', '1', '%'); ?>
              </p>
            </header>
            <?php the_post_thumbnail(); ?>
            <?php the_content()?>
            <hr/>
          </article>
          <?php comments_template('/comments.php'); ?>
          <?php endwhile; ?>
          <?php endif;?>
        </div><!-- #content -->
      </div>
    </div><!-- .row -->
  </div><!-- .container -->
</div><!-- #page -->
<?php get_footer(); ?>