<?php

 // [slantRight background="#ccc" shape="#fff"]
add_shortcode("slantRight", "slant_right");
function slant_right($atts) {
  extract(shortcode_atts(array(
    "color" => '',
  ), $atts));
  return '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="50" viewBox="0 0 100 100" preserveAspectRatio="none" class="slant">
	<path d="M0 0 L100 100 L0 100 Z" style="fill:'.$color.'; stroke:'.$color.';"></path>
	</svg>';
}

 // [slantLeft background="#ccc" shape="#fff"]
add_shortcode("slantLeft", "slant_left");
function slant_left($atts) {
  extract(shortcode_atts(array(
    "color" => '',
  ), $atts));
  return '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="50" viewBox="0 0 100 100" preserveAspectRatio="none" class="slant" style="background:'.$color.';">
	<path d="M0 0 L100 0 L0 100 Z"></path>
	</svg>';
}