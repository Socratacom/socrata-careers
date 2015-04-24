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
    backgroundvideo: 'g92qhkv74k',
    backgroundideoDiv: '#wistia_g92qhkv74k',
    
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
            src: "https://fast.wistia.com/labs/crop-fill/plugin.js"
          }
        }
      });

      // Video in the background
      wistiaEmbed = Wistia.embed(fullScreenVideo.backgroundvideo, videoOptions);
      // Video to be shown in the overlay
      overlayEmbed = Wistia.embed(fullScreenVideo.overlayVideo, videoOptions);

      /**
       * We load the thumbnail in the background while we wait
       * for the video to load and play. Once loaded, we pause, reset to 
       * frame zero, show the video then play it.
       */
      wistiaEmbed.bind("play", function(){
        wistiaEmbed.pause();
        wistiaEmbed.time(0);
        $(fullScreenVideo.backgroundideoDiv).css('visibility', 'visible');
        wistiaEmbed.play();
        return this.unbind;
      });
    },
    /**
     * Plays the video set as overlayEmbed
     * @param None
     */
    playVideo: function()
    {
      $(fullScreenVideo.overlayVideoDiv).css("left", 0).css("visibility", "visible");
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
      $("#video_container").css("width", width).css("height", height);
      $("#main-image").css("width", width).css("height", height);
    }
     
}

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
