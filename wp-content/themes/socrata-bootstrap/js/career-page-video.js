var fullScreenVideo = fullScreenVideo || {};

fullScreenVideo = {
    name: 'fullScreenVideo',
    /**
     * CHANGE THESE VARIABLES TO YOUR VIDEOS
     * overlayVideo: The video in the overlay
     * overlayVideoDiv: The jQuery selector of the div containing the overlay video
     * backgroundvideo: The video in the backgorund
     * backgroundideoDiv: The jQuery selector of the div containing the background video
     */
    overlayVideo: 'of3560a3ee',
    overlayVideoDiv: '#wistia_of3560a3ee',

    
    /**
     * This will call Wistia and embed the two videos
     * @param None
     */
    embedVideo: function()
    {
      var videoOptions = {};
  
      // Add the crop fill plugin to the videoOptions
      Wistia.obj.merge(videoOptions, {
        plugin: {
          cropFill: {
            src: "//fast.wistia.com/labs/crop-fill/plugin.js"
          }
        }
      });

      // Video in the background
      // Video to be shown in the overlay
      overlayEmbed = Wistia.embed(fullScreenVideo.overlayVideo, videoOptions);


    },
    /**
     * Plays the video set as overlayEmbed
     * @param None
     */
    playVideo: function()
    {
      $(fullScreenVideo.overlayVideoDiv).css("left", 0).css("visibility", "visible");
      $("#videoContainer").css("left", 0);
      overlayEmbed.plugin.cropFill.resize();
      $("#ex").css("right", 32);
      overlayEmbed.play();
    },
    /**
     * Hide the overlay video and pause it. Also reshow 
     * the text on the page.
     * @param None
     */
    exitVideo: function()
    {
      $(fullScreenVideo.overlayVideoDiv).css("left", -3000).css("visibility", "hidden");
      $("#videoContainer").css("left", -3000);
      $("#ex").css("right", -3000);
      overlayEmbed.pause();
      overlayEmbed._keyBindingsActive = false;
    },
    /**
     * Fix the size of the images and text on page
     * @param None
     */
    fixPosition: function()
    {
      var width = $( window ).width();
      var height = $( window ).height();      
      $("#videoContainer").css("width", width).css("height", height).css("position", "fixed");
    }     
} unQLra67

/**
 * When the doc is ready, fix the video and images sizes
 * then display the text on the page.
 */
$(document).ready(function() {
  fullScreenVideo.fixPosition();
});

// If the widow is resized, resize the videos
$(window).resize(fullScreenVideo.fixPosition);

// When the play button is clicked, call the play function
$(".playbutton").click(fullScreenVideo.playVideo);

// When the "X" is clicked, exit the video
$("#ex").click(fullScreenVideo.exitVideo);

// Start loading the video
fullScreenVideo.embedVideo();
