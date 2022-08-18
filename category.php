<?php get_header(); ?>
<main class="archivePage">
  <section class="container archivePage">
   <?php // Start the loop ?>
     <section class="mobileArchiveControl" aria-label="Mobile control that opens the search settings menu">
             Add Archive Filter +
           </section>
           <section class="results"aria-label="Search results are displayed in this container">
             
             <?php echo do_shortcode('[wd_asp elements="results" ratio="100%" id=3]'); ?>

           </section>
           <section class="searchSettings" aria-label="Search Settings displayed here, choose from controls such as year, type of event, and event categories">
             <section class="close">&#x2715</section>
             <?php echo do_shortcode('[wd_asp elements="search,settings" ratio="100%,100%" id=3]'); ?>
             <button class="applyFilters">Apply Search Filters</button>
           </section>
      
  </section>
</main>


<?php get_footer(); ?>