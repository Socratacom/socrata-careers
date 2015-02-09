<footer>
<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <div class="stacked-logo footer-logo"></div>
      <p class="copyright">Copyright &copy; <?php echo date('Y'); ?><br/>Socrata, Inc.<br/>All rights reserved.</p>
    </div>
    <div class="col-sm-3 hidden-xs">
      <h3>Sitemap</h3>
      <?php wp_nav_menu( array( 'theme_location' => 'sitemap' )); ?>
    </div>
    <div class="col-sm-3">
      <h3>Get In Touch</h3>
      <p>83 S. King Street<br>Suite 107<br>Seattle WA, 98104</p>
      <p><strong>T</strong> 206.340.8008</p>
    </div>
    <div class="col-sm-3">
      <h3>Join Us</h3>
      <?php wp_nav_menu( array( 'theme_location' => 'social' )); ?>
    </div>
  </div>
</div>
</footer>
<?php wp_footer(); ?>
<script>new gnMenu( document.getElementById( 'gn-menu' ) );</script>
</body>