<?php get_header(); ?>
<div id="page">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div id="content" role="main">
          <header class="archive-header">
            <h3>Blog Category: <?php single_cat_title(''); ?></h3>
          </header>
          <?php if(have_posts()): while(have_posts()): the_post();?>
          <article role="article" id="post_<?php the_ID()?>">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
            <h4>
              <em>
                <span class="text-muted" class="author">By <?php the_author() ?>,</span>
                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
              </em>
            </h4>
            <?php the_post_thumbnail(); ?>
            <?php the_content( __( '&hellip; Continue reading <i class="glyphicon glyphicon-arrow-right"></i>', 'bst' ) ); ?>
            <p class="text-muted">
              <i class="glyphicon glyphicon-folder-open"></i>&nbsp; Filed under: <?php _e(''); ?> <?php the_category(', ') ?><br/>
              <i class="glyphicon glyphicon-comment"></i>&nbsp; Comments: <?php comments_popup_link('None', '1', '%'); ?>
            </p>
            <hr/>
          </article>
          <?php endwhile; ?>
          <ul class="pagination">
            <li class="older"><?php next_posts_link('&laquo; Older') ?></li>
            <li class="newer"><?php previous_posts_link('Newer &raquo;') ?></li>
          </ul>
          <?php endif;?>
        </div><!-- #content -->
      </div>
    </div><!-- .row -->
  </div><!-- .container -->
</div><!-- #page -->
<?php get_footer(); ?>