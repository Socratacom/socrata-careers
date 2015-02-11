<?php

add_shortcode("slantright", "separator_right");
function separator_right($atts) {
  extract(shortcode_atts(array(
    "fill" => '',
    "stroke" => '',
  ), $atts));
  return '


	<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="50" viewBox="0 0 100 100" preserveAspectRatio="none" style="background:#000;">
	<path d="M0 0 L100 100 L0 100 Z" style="fill:'.$fill.'; stroke:'.$stroke.';"></path>
	</svg>'
  ;
}