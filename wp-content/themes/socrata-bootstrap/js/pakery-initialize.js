$(window).load(function() {

  var $boxes = $('.item');
  $boxes.hide();

	var container = ('#team-container');
	var pckry;
	// initialize Packery after all images have loaded
	imagesLoaded( container, function() {
		$boxes.fadeIn(500);
	  pckry = new Packery( container, {
	    // options...
	    itemSelector: '.item',
	    columnWidth: '.grid-sizer'
	  });
	});
});





