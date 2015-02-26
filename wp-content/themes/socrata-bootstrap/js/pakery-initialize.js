var container = document.querySelector('#team-container');
var pckry;
// initialize Packery after all images have loaded
imagesLoaded( container, function() {
  pckry = new Packery( container, {
    // options...
    itemSelector: '.item'
  });
});
