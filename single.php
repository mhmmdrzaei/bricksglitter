<?php get_header(); ?>
<main>
  <section class="container">
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <section class="pageMain">
      <?php 
          $embedCode = get_field('livestream_embed_code');
          if( !empty( $embedCode ) ): ?>
             <section class="livestreamOn">
               <?php the_field('livestream_embed_code'); ?>
             </section> 
          <?php else: ; ?>
           <figure class="eventSingleImg">
             <?php  the_post_thumbnail('large');?>
           </figure>
          <?php endif; ?>
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>
    </section>
    <section class="pageSide">
      <?php project_posted_in(); ?>
      <?php the_category(); ?>
    </section>

    <?php endwhile; // end of the loop. ?>
  </section>
</main>


<?php get_footer(); ?>