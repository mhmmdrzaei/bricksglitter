<?php get_header();  ?>
<main>
  <section class="container aboutPageContainer">
   <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <section class="pageMain">
        <?php if( have_rows('about_page_content' ) ): ?>
            <?php while( have_rows('about_page_content') ): the_row(); ?>
              <?php 

              if( get_sub_field('language_label') == 'Right To Left' ) {; ?>
                  <section class="aboutLangEach rtldirection" id="<?php the_sub_field('language_label') ?>">
                    <?php the_sub_field('language_text') ?>
                  </section>
              <?php } else { ?>
             <section class="aboutLangEach" id="<?php the_sub_field('language_label') ?>">
               <?php the_sub_field('language_text') ?>
             <?php } ?>
             </section>
            
          <?php endwhile; ?>
        <?php endif; ?>
      </section>
      <section class="pageside">
        <section class="pageSideContent">
          <section class="languageSelect">
            <h3>Language:</h3>
            <?php if( have_rows('about_page_content' ) ): ?>
                <?php while( have_rows('about_page_content') ): the_row(); ?>
                 <a class="languageLinkEach" href="#<?php the_sub_field('language_label') ?>"><?php the_sub_field('language_label') ?></a>
                
              <?php endwhile; ?>
            <?php endif; ?>
          </section>

          <figure class="featuredImageAbout">
             <?php  the_post_thumbnail('large');?>
          </figure>
        </section>

      </section>



      <?php endwhile; // end the loop?>
  </section>
</main>

<?php get_footer(); ?>