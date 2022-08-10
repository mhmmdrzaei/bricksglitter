<?php get_header();  ?>
<main>
  <section class="container">
   <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <section class="pageMain">
        <?php if( have_rows('about_page_content' ) ): ?>
            <?php while( have_rows('about_page_content') ): the_row(); ?>
             <section class="aboutLangEach" id="<?php the_sub_field('language_label') ?>">
               <?php the_sub_field('language_text') ?>
             </section>
            
          <?php endwhile; ?>
        <?php endif; ?>
      </section>
      <section class="pageside">
        <?php if( have_rows('about_page_content' ) ): ?>
            <?php while( have_rows('about_page_content') ): the_row(); ?>
             <a href="#<?php the_sub_field('language_label') ?>"><?php the_sub_field('language_label') ?></a>
            
          <?php endwhile; ?>
        <?php endif; ?>
      </section>



      <?php endwhile; // end the loop?>
  </section>
</main>

<?php get_footer(); ?>