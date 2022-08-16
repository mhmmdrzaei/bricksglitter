<?php get_header(); ?>
<main class="archivePage">
  <section class="container archivePage">
   <?php // Start the loop ?>
      <section class="results">
        <?php echo do_shortcode('[wd_asp elements="results" ratio="100%" id=3]'); ?>
      </section>
      <section class="searchSettings">
        <?php echo do_shortcode('[wd_asp elements="search,settings" ratio="100%,100%" id=3]'); ?>
      </section>
      
  </section>
</main>


<?php get_footer(); ?>