<?php get_header();  ?>
<main class="archivePage">
  <section class="container archivePage">
   <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <section class="mobileArchiveControl">
        Add Archive Filter +
      </section>
      <section class="results">
        
        <?php echo do_shortcode('[wd_asp elements="results" ratio="100%" id=1]'); ?>

      </section>
      <section class="searchSettings">
        <section class="close">X</section>
        <?php echo do_shortcode('[wd_asp elements="search,settings" ratio="100%,100%" id=1]'); ?>
        <button class="applyFilters">Apply Search Filters</button>
      </section>
      

      <?php endwhile; // end the loop?>
  </section>
</main>

<?php get_footer(); ?>