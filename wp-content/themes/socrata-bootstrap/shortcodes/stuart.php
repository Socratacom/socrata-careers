<?php

 // [stuart-engineer]
add_shortcode("stuart-engineer", "stuart_engineer");
function stuart_engineer() {
  return '
<div class="stuart engineer"></div>
  ';
}

 // [stuart-team]
add_shortcode("stuart-team", "stuart_team");
function stuart_team() {
  return '
<div class="stuart team"></div>
  ';
}

 // [stuart-jobs]
add_shortcode("stuart-jobs", "stuart_jobs");
function stuart_jobs() {
  return '
<div class="stuart jobs"></div>
  ';
}
