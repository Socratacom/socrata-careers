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
  <section class="section-wrapper" style="background-color:#ecf0f1;">
    <div class="container">
    	<div class="row">
    		<div class="col-sm-12 text-center">
    			<h1>Careers at Tyler Technologies</h1>
    			<div class="tyler-logo" style="width:250px; height:100px; display:inline-block; margin-bottom:1.63em"></div>
    			<p class="narrow-content" style="margin-bottom:4rem">Who are we? We’re a software company! But we are unlike any software company you’ve ever heard of. All of our clients are local government clients. That’s right — it’s our mission to make local and state government more accessible, efficient and connected. We are helping our clients improve the communities in which we all live and work.</p> 
    			<p><a href="https://www.tylertech.com/careers" target="_blank" rel="noopener noreferrer" class="btn btn-lg btn-primary">View All Jobs</a></p>
    			
    		</div>
    	</div>
    </div>
  </section>
  <section class="cta-jobs">
    <div class="container">
        <ul>
            <li><div class="cta-stuart"><a href="http://snuffleupadata.com/" target="blank"></a></div></li>
            <li><span>Still have questions?</span> Contact our HR Department.</li>
            <li><a href="mailto:DI-hr@tylertech.com" class="btn btn-inverse">Email Us</a></li>
        </ul>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="50" viewBox="0 0 100 100" preserveAspectRatio="none">
    <path class="white-path" d="M0 0 L100 100 L0 100 Z"></path>
    </svg>
</section>
</div>


<?php get_footer(); ?>

