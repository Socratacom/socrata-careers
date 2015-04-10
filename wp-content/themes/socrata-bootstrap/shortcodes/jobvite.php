<?php

 // [jobvite]
add_shortcode("jobvite", "socrata_jobvite");
function socrata_jobvite() {
  return '
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
	';
}
