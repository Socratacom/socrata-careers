<?php

// TEAM AND CULTURE
// [team-culture"]
add_shortcode('team-culture','team_culture_shortcode');

function team_culture_shortcode( $atts ) {
	ob_start();
	extract( shortcode_atts( array (
		'type' => array ('socrata-team', 'socrata-headlines', 'post'),
		'order' => 'date',
		'orderby' => 'rand',
		'posts' => 100,
		), $atts ) );
		$options = array(
		'post_type' => $type,
		'order' => $order,
		'orderby' => $orderby,
		'posts_per_page' => $posts,
	);
	$query = new WP_Query( $options );
	if ( $query->have_posts() ) { ?>
	<div id="team-container">
	<div class="grid-sizer"></div>
	<?php while ( $query->have_posts() ) : $query->the_post(); ?>

	<?php 
		if (get_post_type() == 'socrata-headlines') { ?>
			<div class="item w2">
				<?php $meta = get_socrata_headlines_meta();
				if ($meta[1]) { ?>
				<figure class="effect-chico">
					<img src="<?php echo tuts_custom_img('full', 456, 300);?>"  class="img-responsive" />
					<figcaption>
					<?php $meta = get_socrata_headlines_meta(); if ($meta[1]) echo "<a href='$meta[1]' target='_blank'></a>"; ?>
					<div class="link-icon"><i class="fa fa-chain"></i></div>
					</figcaption>			
				</figure>
				<?php }
				else { ?>
				<img src="<?php echo tuts_custom_img('full', 456, 300);?>"  class="img-responsive" />
				<?php
				} ?>
				<div class="headline-content-wrapper">
					<h4><?php the_title()?></h4>
					<?php $meta = get_socrata_headlines_meta(); if ($meta[0]) echo "<p>$meta[0]</p>"; ?>
				</div>
			</div>
		<?php
		}
		elseif (get_post_type() == 'socrata-team') { ?>
			<div class="item">
				<img src="<?php echo tuts_custom_img('full', 456, 456);?>"  class="img-responsive" />
				<div class="team-content-wrapper">
					<h4><?php the_title()?></h4>
					<?php $meta = get_socrata_team_meta(); if ($meta[0]) echo "<p class='job-title'>$meta[0]</p>"; ?>
					<?php $meta = get_socrata_team_meta(); if ($meta[1]) echo "<p>$meta[1]</p>"; ?>
				</div>
			</div>
		<?php
		}
		else { ?>
			<div class="item w3">
				<figure class="effect-chico">
					<img src="<?php echo tuts_custom_img('full', 456, 300);?>"  class="img-responsive" />
					<figcaption>
						<a href="<?php the_permalink(); ?>"></a>
						<div class="link-icon"><i class="fa fa-chain"></i></div>
					</figcaption>			
				</figure>	
				<div class="blog-content-wrapper">
					<h4><?php the_title()?></h4>
				</div>
			</div>
		<?php
		}
	?>

	<?php endwhile; wp_reset_postdata(); ?>
	</div>


	<?php $content = ob_get_clean();
	return $content;
	} 
}