<footer>
  <section class="footerContainer" aria-label="footer menu container">
    <section class="socialMenu" aria-label="Bricks & Glitter Social media links">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'social'
      )); ?>
    </section>
    <section class="footerMenu" aria-label="Footer Menu pages">
      <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'footer'
    )); ?>
    </section>

  </section>
</footer>



<?php wp_footer(); ?>
</body>
</html>