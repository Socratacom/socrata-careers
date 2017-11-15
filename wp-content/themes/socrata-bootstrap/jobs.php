<?php
/*
Template Name: Jobs
*/
get_header(); ?>
<div id="page">
  <section class="clouds">
    <div class="container">
      <div class="section-wrapper">
        <h1 class="text-center">We're Hiring</h1>
        <h2 class="text-center">Come join us!</h2>
      </div>
    </div>
    <?php echo do_shortcode( '[slantLeft color="#fff;"]' ); ?>
    <?php echo do_shortcode( '[stuart-jobs]' ); ?>
  </section>
  <section>
    <div class="container">
      <div class="section-wrapper">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <!-- START JOBVITE CODE -->
            <div class="jv-careersite" data-careersite="socrata"></div>
            <script src="https://jobs.jobvite.com/__assets__/scripts/careersite/public/iframe.js"></script>
            <script>Jobvite = { careersite: 'socrata' };</script>
            <script src="https://jobs.jobvite.com/__assets__/scripts/careersite/public/redirect.js"> </script>
            <!-- END JOBVITE CODE -->          
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="locations" style="background-color:#ecf0f1;">
    <div class="container">
      <div class="section-wrapper">
        <h1 class="text-center">Our Offices</h1>
        <p class="text-center narrow-content" style="margin-bottom:1.63em">Socrata is located in Seattle WA, Washington DC, and London UK. These cities offer a vibrant, exciting lifestyle and are a great place to work. Our offices are located next to numerous amenities.</p>       
        <div class="row">
          <div class="col-sm-4">
            <p class="text-center"><img src="/wp-content/themes/socrata-bootstrap/images/seattle.png" class="img-responsive" style="margin:auto;"></p>
            <h3 class="text-center">Socrata in Seattle</h3>
            <p class="text-center">705 5th Ave S., Suite 600<br>Seattle WA, 98104</p>
            <p class="text-center"><a href="https://goo.gl/maps/jCDY2r1DkHk" target="_blank">View Map</a></p>
          </div>
          <div class="col-sm-4">
            <p class="text-center"><img src="/wp-content/themes/socrata-bootstrap/images/dc.png" class="img-responsive" style="margin:auto;"></p>
            <h3 class="text-center">Socrata in Washington, DC</h3>
            <p class="text-center">1875 Connecticut Ave NW, Suite 715<br>Washington DC, 20009</p>
            <p class="text-center"><a href="https://goo.gl/maps/awyQk4WU8bJ2" target="_blank">View Map</a></p>
          </div>
          <div class="col-sm-4">
            <p class="text-center"><img src="/wp-content/themes/socrata-bootstrap/images/london.png" class="img-responsive" style="margin:auto;"></p>
            <h3 class="text-center">Socrata in London</h3>
            <p class="text-center">1 Primrose Street, #9027<br>London EC2A 2EX, United Kingdom</p>
            <p class="text-center"><a href="https://goo.gl/maps/QbCUUmXFBGA2" target="_blank">View Map</a></p>
          </div>   
        </div>
      </div>
    </div>
  </section>
  <section class="cta-jobs">
    <div class="container">
        <ul>
            <li><div class="cta-stuart"><a href="http://snuffleupadata.com/" target="blank"></a></div></li>
            <li><span>Still have questions?</span> Contact our HR Department.</li>
            <li><a href="mailto:hr@socrata.com" class="btn btn-inverse">Email Us</a></li>
        </ul>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="50" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path class="white-path" d="M0 0 L100 100 L0 100 Z"></path>
    </svg>
</section>
</div>


<?php get_footer(); ?>

