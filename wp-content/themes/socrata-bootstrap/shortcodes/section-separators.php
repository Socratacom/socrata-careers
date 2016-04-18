<?php

 // [slantRight background="#ccc" shape="#fff"]
add_shortcode("slantRight", "slant_right");
function slant_right($atts) {
  extract(shortcode_atts(array(
    "color" => '',
  ), $atts));
  return '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="50" viewBox="0 0 100 100" preserveAspectRatio="none" class="slant">
	 <path d="M0 0 L0 100 L100 100 Z" style="fill:'.$color.'; stroke:none;" />
  </svg>';
}

 // [slantLeft background="#ccc" shape="#fff"]
add_shortcode("slantLeft", "slant_left");
function slant_left($atts) {
  extract(shortcode_atts(array(
    "color" => '',
  ), $atts));
  return '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="50" viewBox="0 0 100 100" preserveAspectRatio="none" class="slant">
    <path d="M100 0 L0 100 L100 100 Z" style="fill:'.$color.'; stroke:none;" />
	</svg>';
}


/**
 * YouTube Modal
 */
function youtube_modal( $atts ) {
  ob_start(); 
  ?>

<!-- Video / Generic Modal -->
<div class="modal video-modal" id="mediaModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button" data-dismiss="modal"><i class="fa fa-times"></i></button>
      <div class="modal-body">
        <!-- content dynamically inserted -->
      </div>
    </div>
  </div>
</div>
<script>
(function($){var pl=/\+/g,searchStrict=/([^&=]+)=+([^&]*)/g,searchTolerant=/([^&=]+)=?([^&]*)/g,decode=function(s){return decodeURIComponent(s.replace(pl," "));};$.parseQuery=function(query,options){var match,o={},opts=options||{},search=opts.tolerant?searchTolerant:searchStrict;if('?'===query.substring(0,1)){query=query.substring(1);}while(match=search.exec(query)){o[decode(match[1])]=decode(match[2]);}return o;};$.getQuery=function(options){return $.parseQuery(window.location.search,options);};$.fn.parseQuery=function(options){return $.parseQuery($(this).serialize(),options);};}(jQuery));
jQuery(document).ready(function($){
$('a[href^="https://www.youtube.com"]').on('click', function(e){
var queryString = $(this).attr('href').slice( $(this).attr('href').indexOf('?') + 1);
var queryVars = $.parseQuery( queryString );
if ( 'v' in queryVars )
{
e.preventDefault();
var vidWidth = 1280; // default
var vidHeight = 720; // default
if ( $(this).attr('data-width') ) { vidWidth = parseInt($(this).attr('data-width')); }
if ( $(this).attr('data-height') ) { vidHeight =  parseInt($(this).attr('data-height')); }
var iFrameCode = '<div class="container"><div class="row"><div class="col-sm-10 col-sm-offset-1"><div class="frame"><div class="video-container"><iframe width="' + vidWidth + '" height="'+ vidHeight +'" scrolling="no" allowtransparency="true" allowfullscreen="true" src="https://www.youtube.com/embed/'+  queryVars['v'] +'?rel=0&wmode=transparent&showinfo=0&autoplay=1" frameborder="0"></iframe></div></div></div></div></div>';
$('#mediaModal .modal-body').html(iFrameCode);
$('#mediaModal').modal();
}
});
$('#mediaModal').on('hidden.bs.modal', function () {
$('#mediaModal .modal-body').html('');
});
}); 
</script>

  <?php
  $content = ob_get_contents();
  ob_end_clean();
  return $content;
}
add_shortcode('youtube-modal', 'youtube_modal');