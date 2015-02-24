<?php

 // [timeline]
add_shortcode("timeline", "socrata_timeline");
function socrata_timeline() {
  return '
<div class="container"">
<div class="section-wrapper">
  <h1 class="text-center">A Brief History</h1>
  <div class="timeline-btn-wrap">
    <div class="timeline-btn now">2007</div>
  </div>

  <div id="socrata-timeline" class="socrata-container">
    
    <div class="socrata-timeline-block">
      <div class="socrata-timeline-dot">
      </div> <!-- socrata-timeline-dot -->
      <div class="socrata-timeline-content">
        <h4>CEO Kevin Merritt Founds Socrata</h4>
        <p>This cloud platform enables public sector organizations to easily manage and share their data.</p>
        <p><img src="http://placehold.it/100x100"></p>
      </div> <!-- socrata-timeline-content -->
    </div> <!-- socrata-timeline-block -->

    <div class="socrata-timeline-block">
      <div class="socrata-timeline-dot">
      </div> <!-- socrata-timeline-dot -->
      <div class="socrata-timeline-content">
        <h4>Dapibus Vulputate Consectetur</h4>
        <p>Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla.</p>
      </div> <!-- socrata-timeline-content -->
    </div> <!-- socrata-timeline-block -->

    <div class="socrata-timeline-block">
      <div class="socrata-timeline-dot">
      </div> <!-- socrata-timeline-dot -->
      <div class="socrata-timeline-content">
        <h4>Dapibus Vulputate Consectetur</h4>
        <p>Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla.</p>
      </div> <!-- socrata-timeline-content -->
    </div> <!-- socrata-timeline-block -->

    <div class="socrata-timeline-block">
      <div class="socrata-timeline-dot">
      </div> <!-- socrata-timeline-dot -->
      <div class="socrata-timeline-content">
        <h4>Dapibus Vulputate Consectetur</h4>
        <p>Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla.</p>
      </div> <!-- socrata-timeline-content -->
    </div> <!-- socrata-timeline-block -->

    <div class="socrata-timeline-block">
      <div class="socrata-timeline-dot">
      </div> <!-- socrata-timeline-dot -->
      <div class="socrata-timeline-content">
        <h4>Dapibus Vulputate Consectetur</h4>
        <p>Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla.</p>
      </div> <!-- socrata-timeline-content -->
    </div> <!-- socrata-timeline-block -->

    <div class="socrata-timeline-block">
      <div class="socrata-timeline-dot">
      </div> <!-- socrata-timeline-dot -->
      <div class="socrata-timeline-content">
        <h4>Dapibus Vulputate Consectetur</h4>
        <p>Maecenas faucibus mollis interdum. Donec ullamcorper nulla non metus auctor fringilla.</p>
      </div> <!-- socrata-timeline-content -->
    </div> <!-- socrata-timeline-block -->

  </div> <!-- socrata-timeline -->
  <div class="timeline-btn-wrap">
    <div class="timeline-btn launch">Present</div>
  </div>
  </div>
</div>
  ';
}
