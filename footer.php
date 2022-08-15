<footer>
  <section class="footerContainer">
    <section class="socialMenu">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'social'
      )); ?>
    </section>
    <section class="footerMenu">
      <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'footer'
    )); ?>
    </section>

  </section>
</footer>

<script>
// scripts.js, plugins.js and jquery are enqueued in functions.php
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>