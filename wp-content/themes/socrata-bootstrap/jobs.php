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
        <h2 class="text-center">Do you have what it takes?</h2>
      </div>
    </div>
    <?php echo do_shortcode( '[slantLeft color="#fff;"]' ); ?>
    <?php echo do_shortcode( '[stuart-jobs]' ); ?>
  </section>
  <section>
    <div class="container">
      <div class="section-wrapper">
        <div class="row">
          <div class="col-sm-12">
            <p class="text-center"><a href="#process" class="btn btn-primary">The Hiring Process</a> <a href="#positions" class="btn btn-primary">Open Positions</a></p>
          </div>
        </div>
      </div>
    </div>
    <?php echo do_shortcode( '[slantRight color="#ecf0f1;"]' ); ?>
  </section>
  <section id="process" class="clouds">    
    <div class="container">
      <div class="section-wrapper">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <h2 class="text-center">The Hiring Process</h2>
          <p class="text-center">Hiring well and building strong teams has been a driving factor in Socrata's success. The products we've built, the customers we've supported and the innovation we've created wouldn’t be possible without our talented employees. As Socrata continues to grow we are looking for individuals who embody our core values and will take us to the next level. If you’re ready to work with a remarkable team to improve the world through data transpar-ency, look no further. Here’s how we hire.</p>
        </div>
        <div class="col-sm-6 col-sm-offset-3">
          <dl class="hiring-process">
              <dt>Informational Phone Call <small>(optional)</small></dt>
              <dd>If you have questions about Socrata, the role, the team or are still testing your level of interest, the hiring manager or a team member will likely schedule a 30 to 60 minute informational call with you. This is not a phone interview, but rather a chance for you to gather all the data you need before you interview. If you feel ready to go straight into the phone interview and get your questions answered there, we will skip this stage.</dd>
              <dt>Phone Screens</dt>
              <dd>Two phone interviews take place, one hour each. These are typically with the hiring manager and one other team member. These screens are to test against the core competencies of the job and to vet culture ﬁt.</dd>
              <dt>Homework Assignment <small>(Engineers, Sales Engineers, Project Managers and UX Designers)</small></dt>
              <dd>We will give you a homework assignment (for engineers we call this a "coding challenge") to get a better understanding of your hands on design or technical skills. This is not timed, and should take a few hours to complete. The Socrata team reviews the assignment and will let you know if we are going forward within 48 hours of submission. If successful, we’ll revisit your work in the onsite interview.</dd>
              <dt>Onsite Interview</dt>
              <dd>Please reserve four hours for the onsite interview, which will typically take place in the morning (9am - 1pm) or afternoon (1pm - 5pm). We often times pair two interviewers together, so you can expect to meet with one or two people each hour. The people you will meet with in person include the hiring manager, two members of the team you’ll potentially be joining, and a senior member of the business from another department. Sales and UX candidates can expect to do a presentation as a part of the onsite interview. Director and VP level candidates can expect their interview loop to last up ﬁve hours.  </dd>
              <dt>Hiring Decision</dt>
              <dd>Typically the team convenes within 24 hours of your interview to go over the feedback and determine whether we are moving forward with an oﬀer. We reach out to you within three business days of your in-person interview with the hiring decision. If adjustments need to be made to that timeline we will notify you within one day of your interview.</dd>
              <dt>Welcome to the Team</dt>
          </dl>
        </div>
      </div>
    </div>
    </div>
    <?php echo do_shortcode( '[slantLeft color="#fff;"]' ); ?>
  </section>
  <section id="positions">
    <div class="container">
      <div class="section-wrapper">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
          <h2 class="text-center">Open Positions at Socrata</h2>
          <iframe id="jobviteframe" src="https://hire.jobvite.com/CompanyJobs/Careers.aspx?k=JobListing&amp;c=qCL9Vfwb&amp;v=1&amp;jvresize=https://careers.socrata.com/FrameResize.html" height="500" width="100%" frameborder="0" scrolling="no"></iframe>
          <script type="text/javascript">function resizeFrame(e,t){if(t)window.scrollTo(0,0);var n=document.getElementById("jobviteframe");if(n)n.height=e}var l=location.href;var args="";var k="";var iStart=l.indexOf("?jvk=");if(iStart==-1)iStart=l.indexOf("&jvk=");if(iStart!=-1){iStart+=5;var iEnd=l.indexOf("&",iStart);if(iEnd==-1)iEnd=l.length;k=l.substring(iStart,iEnd)}iStart=l.indexOf("?jvi=");if(iStart==-1)iStart=l.indexOf("&jvi=");if(iStart!=-1){iStart+=5;var iEnd=l.indexOf("&",iStart);if(iEnd==-1)iEnd=l.length;args+="&j="+l.substring(iStart,iEnd);if(!k.length)args+="&k=Job";var iStart=l.indexOf("?jvs=");if(iStart==-1)iStart=l.indexOf("&jvs=");if(iStart!=-1){iStart+=5;var iEnd=l.indexOf("&",iStart);if(iEnd==-1)iEnd=l.length;args+="&s="+l.substring(iStart,iEnd)}}iStart=l.indexOf("?jvsrc=");if(iStart==-1)iStart=l.indexOf("&jvsrc=");if(iStart!=-1){iStart+=7;var iEnd=l.indexOf("&",iStart);if(iEnd==-1)iEnd=l.length;args+="&jtsrc="+l.substring(iStart,iEnd)}if(k.length)args+="&k="+k;if(args.length)document.getElementById("jobviteframe").src+=args</script>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="jovana recruiters">
    <div class="container">
      <div class="row">        
        <div class="col-sm-6">
          <div class="bubble">
            <ul class="thumb-block">
              <li class="hidden-sm hidden-md hidden-lg jovana-thumb"></li>
              <li>
                <h3>Meet Jovana Teodorovic</h3>
                <p>Director of Talent</p>
              </li> 
            </ul>            
            <p><i>"As the Director of Talent at Socrata, I partner with the leadership team to ensure the company attracts and retains the best talent in the nation. I get to work with exceptional people who are passionate about data, their customers and Socrata's road to greatness. Watching Socrata grow over the past year has been the highlight of my career and I can't wait to see what happens next!"</i></p>
            <ul>
              <li><i class="fa fa-envelope"></i> <a href="mailto:jovana.teodorovic@socrata.com">Contact Me</a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6"></div>
      </div>
    </div>
    <?php echo do_shortcode('[slantLeft color="#fff"]'); ?>
  </section>

  <section class="locations">
    <div class="container">
      <div class="section-wrapper">
        <h1 class="text-center">Our Offices</h1>
        <p class="text-center narrow-content" style="margin-bottom:1.63em">Socrata is located in Seattle WA, Washington DC, and London UK. These cities offer a vibrant exciting lifestyle and are a great place to work. Our offices are located next to numerous amenities.</p>
        <div class="hidden-xs hidden-sm">
          <p id="playbutton" class="text-center"><a class="btn btn-primary playbutton" aria-hidden="true">Why Work at Socrata?</a></p>
        </div>
        <div class="hidden-md hidden-lg">
          <p class="text-center"><a href="//fast.wistia.net/embed/iframe/of3560a3ee?popover=true" class="wistia-popover[height=480,playerColor=7b796a,width=853] btn btn-primary">Why Work at Socrata?</a></p>
        </div>
        <script charset="ISO-8859-1" src="//fast.wistia.com/assets/external/popover-v1.js"></script>
        <div class="row">
          <div class="col-sm-4">
            <p class="text-center"><img src="/wp-content/themes/socrata-bootstrap/images/seattle.png" class="img-responsive" style="margin:auto;"></p>
            <h3 class="text-center">Socrata in Seattle</h3>
            <p class="text-center">83 S. King Street, Suite 107<br>Seattle WA, 98104</p>
            <p class="text-center"><a href="https://goo.gl/maps/BMZ1q" target="_blank">View Map</a><br><a href="/wp-content/uploads/2015/04/MovingToSeattle_DS_R2.pdf">Download Moving to Seattle</a></p>
          </div>
          <div class="col-sm-4">
            <p class="text-center"><img src="/wp-content/themes/socrata-bootstrap/images/dc.png" class="img-responsive" style="margin:auto;"></p>
            <h3 class="text-center">Socrata in Washington, DC</h3>
            <p class="text-center">1150 17th Street NW, Suite 200<br>Washington, D.C.</p>
            <p class="text-center"><a href="https://goo.gl/maps/uY3g9" target="_blank">View Map</a></p>
          </div>
          <div class="col-sm-4">
            <p class="text-center"><img src="/wp-content/themes/socrata-bootstrap/images/london.png" class="img-responsive" style="margin:auto;"></p>
            <h3 class="text-center">Socrata in London</h3>
            <p class="text-center">14-22 Elder St.<br>London E1 6BT, UK</p>
            <p class="text-center"><a href="https://goo.gl/maps/VKghj" target="_blank">View Map</a></p>
          </div>   
        </div>
      </div>
    </div>
  </section> 

  <section class="henry recruiters">
    <div class="container">
      <div class="row">        
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
          <div class="bubble">
            <ul class="thumb-block">
              <li class="hidden-sm hidden-md hidden-lg henry-thumb"></li>
              <li>
                <h3>Meet Henry Hippely</h3>
                <p>Recruiter</p>
              </li> 
            </ul>
            <p><i>"I chose to work at Socrata because of the combination of immensely talented people working on real world problems that will improve quality of life for all. Seeing everyone's passion on a daily basis is incredibly inspiring and not something you find often!"</i></p>
            <ul>
              <li><i class="fa fa-envelope"></i> <a href="mailto:henry.hippely@socrata.com">Contact Me</a></li>
              <li><i class="fa fa-mobile"></i> (425) 785-2296</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php echo do_shortcode('[slantRight color="#fff"]'); ?>
  </section>
</div>
<div id="videoContainer">
  <div id="ex"><span class="glyphicon glyphicon-remove" aria-hidden="true" style="color:#fff;"></span></div>
  <div id="wistia_of3560a3ee" class="wistia_embed overlayVideo" ></div>
</div>


<?php get_footer(); ?>

