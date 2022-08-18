<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>
<main>
  <section class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
  </section>


</main>

<?php get_footer(); ?>