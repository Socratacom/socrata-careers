<?php
/*
Template Name: Full Width
*/
get_header(); ?>
<div id="page">
	<div class="content">

  		<?php if(have_posts()): while(have_posts()): the_post();?>
      	<?php the_content()?>
        <?php endwhile; ?>
        <?php endif;?>

	</div>
</div>
<?php get_template_part( 'call-to-action' ); ?>
<?php get_footer(); ?>
