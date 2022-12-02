<?php get_header();  ?>
<main class="pageMain">
  <section class="container">
    tesy
   <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <section class="pageContent">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
        </section>

      <?php endwhile; // end the loop?>
  </section>
</main>

<?php get_footer(); ?>