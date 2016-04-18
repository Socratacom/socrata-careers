<footer>
<div class="container">
  <div class="row">
    <div class="col-sm-2">
      <div class="color-logo footer-logo"></div>
      <p class="copyright">Copyright &copy; <?php echo date('Y'); ?><br/>Socrata, Inc.<br/>All rights reserved.</p>
    </div>
    <div class="col-sm-2 hidden-xs">
      <h3>Sitemap</h3>
      <?php wp_nav_menu( array( 'theme_location' => 'sitemap' )); ?>
    </div>
    <div class="col-sm-2">
      <h3>Seattle</h3>
      <p>705 5th Ave S.<br>Suite 600<br>Seattle WA, 98104</p>
      <p><strong>T</strong> 206.340.8008</p>
    </div>
    <div class="col-sm-2">
      <h3>Washington DC</h3>
      <p>1875 Connecticut Ave NW<br>Suite 715<br>Washington, D.C. 20009</p>
    </div>    
    <div class="col-sm-2">
      <h3>London</h3>
      <p>14-22 Elder St.<br>London E1 6BT, UK</p>
    </div>   
    <div class="col-sm-2">
      <h3>Join Us</h3>
      <?php wp_nav_menu( array( 'theme_location' => 'social' )); ?>
    </div>
  </div>
</div>
</footer>
<?php wp_footer(); ?>
</body>