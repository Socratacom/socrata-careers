<?php
/*
Template Name: Full Width
*/
get_header(); ?>
<div id="page">
	<div class="container content">
		<div class="row">
			<div class="col-xs-12">
		  		<?php if(have_posts()): while(have_posts()): the_post();?>
	          	<?php the_content()?>
		        <?php endwhile; ?>
		        <?php endif;?>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
