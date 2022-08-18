<?php get_header();  ?>
<main class="archivePage">
  <section class="container archivePage">
   <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <section class="mobileArchiveControl" aria-label="Mobile navigation for search settings in Archive page">
        Add Archive Filter +
      </section>
      <section class="results" aria-label="Search Results are displayed in this container">
        
        <?php echo do_shortcode('[wd_asp elements="results" ratio="100%" id=3]'); ?>

      </section>
      <section class="searchSettings" aria-label="Search Setting navigation">
        <section class="close">&#x2715</section>
        <?php echo do_shortcode('[wd_asp elements="search,settings" ratio="100%,100%" id=3]'); ?>
        <button class="applyFilters">Apply Search Filters</button>
      </section>
      

      <?php endwhile; // end the loop?>
  </section>
</main>

<?php get_footer(); ?>