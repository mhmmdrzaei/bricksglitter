<?php get_header();  ?>
<main class="archivePage">
  <section class="container archivePage">
   <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <section class="results">
        <?php echo do_shortcode('[wd_asp elements="results" ratio="100%" id=1]'); ?>
      </section>
      <section class="searchSettings">
        <?php echo do_shortcode('[wd_asp elements="search,settings" ratio="100%,100%" id=1]'); ?>
      </section>
      

      <?php endwhile; // end the loop?>
  </section>
</main>

<?php get_footer(); ?>