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
          <iframe id="jobviteframe" src="http://hire.jobvite.com/CompanyJobs/Careers.aspx?k=JobListing&amp;c=qCL9Vfwb&amp;v=1&amp;jvresize=http://www.socrata.com/FrameResize.html" height="500" width="100%" frameborder="0" scrolling="no"></iframe>
          <script type="text/javascript">function resizeFrame(e,t){if(t)window.scrollTo(0,0);var n=document.getElementById("jobviteframe");if(n)n.height=e}var l=location.href;var args="";var k="";var iStart=l.indexOf("?jvk=");if(iStart==-1)iStart=l.indexOf("&jvk=");if(iStart!=-1){iStart+=5;var iEnd=l.indexOf("&",iStart);if(iEnd==-1)iEnd=l.length;k=l.substring(iStart,iEnd)}iStart=l.indexOf("?jvi=");if(iStart==-1)iStart=l.indexOf("&jvi=");if(iStart!=-1){iStart+=5;var iEnd=l.indexOf("&",iStart);if(iEnd==-1)iEnd=l.length;args+="&j="+l.substring(iStart,iEnd);if(!k.length)args+="&k=Job";var iStart=l.indexOf("?jvs=");if(iStart==-1)iStart=l.indexOf("&jvs=");if(iStart!=-1){iStart+=5;var iEnd=l.indexOf("&",iStart);if(iEnd==-1)iEnd=l.length;args+="&s="+l.substring(iStart,iEnd)}}iStart=l.indexOf("?jvsrc=");if(iStart==-1)iStart=l.indexOf("&jvsrc=");if(iStart!=-1){iStart+=7;var iEnd=l.indexOf("&",iStart);if(iEnd==-1)iEnd=l.length;args+="&jtsrc="+l.substring(iStart,iEnd)}if(k.length)args+="&k="+k;if(args.length)document.getElementById("jobviteframe").src+=args</script>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="jovana recruiters">
    <div class="container">
      <div class="row">
        <div class="col-sm-6"></div>
        <div class="col-sm-6">
          <div class="bubble">
            <h3>Meet Jovana Teodorovic</h3>
            <p>Director of Talent</p>
            <p><i>"As Socrata's Director of Talent I'm fortunate to work with some of the most intelligent, most creative and wittiest people in the tech industry. I love coming to work every day and seeing the passion everyone has for what we are doing, and the remarkable work that occurs as a result of that passion."</i></p>
            <ul>
              <li><i class="fa fa-envelope"></i> <a href="mailto:jovana.teodorovic@socrata.com">Let me find you a job</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="henry recruiters">
    <div class="container">
      <div class="row">        
        <div class="col-sm-6">
          <div class="bubble">
            <h3>Meet Henry Hippely</h3>
            <p>Recruiter</p>
            <p><i>"I chose to work at Socrata because of the combination of immensely talented people working on real world problems that will improve quality of life for all. Seeing everyone's passion on a daily basis is incredibly inspiring and not something you find often!"</i></p>
            <ul>
              <li><i class="fa fa-envelope"></i> <a href="mailto:henry.hippely@socrata.com">Let me find you a job</a></li>
              <li><i class="fa fa-mobile"></i> (425) 785-2296</li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6"></div>
      </div>
    </div>
  </section>
  <section>
<div class="container">
<div class="section-wrapper">
<div class="row">
<div class="col-sm-6">
<p class="text-center"><img src="http://placehold.it/200x200" class="img-circle"></p>
<h3 class="text-center">Socrata in Seattle</h3>
</div>
<div class="col-sm-6">
<p class="text-center"><img src="http://placehold.it/200x200" class="img-circle"></p>
<h3 class="text-center">Socrata in Washington, DC</h3>
</div>
</div>
</div>
</div>
</section>




</div>

<?php get_template_part( 'call-to-action' ); ?>
<?php get_footer(); ?>

