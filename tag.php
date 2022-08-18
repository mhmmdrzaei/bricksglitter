<?php get_header(); ?>
<main>
  <section class="container">
      <h1>Tag Archives: <?php single_tag_title(); ?></h1>
      <?php get_template_part( 'loop', 'tag' ); ?>
  </section>
</main>
<?php get_footer(); ?>