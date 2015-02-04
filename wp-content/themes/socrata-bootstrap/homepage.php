<?php
/*
Template Name: Homepage
*/
get_header(); ?>
<div id="page">
	<section style="height:300px; background:#ccc; position: relative;">
	<svg id="" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" style="position:absolute; left:0; bottom:0;">
				<path id="trianglePath1" d="M0 0 L50 100 L100 0 Z"></path>
				<path id="trianglePath2" d="M50 100 L100 40 L100 0 Z"></path>
			</svg>
			</section>
	<div class="container content">
		<div class="row"> cheese
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
