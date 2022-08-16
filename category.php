<?php get_header(); ?>

<div class="main">
  <div class="container">
    <div class="content">
      <h1>Category Archives: <?php single_cat_title(); ?></h1>
    	<?php
    		$category_description = category_description();
    		if ( ! empty( $category_description ) )
    			echo '' . $category_description . '';
    	   get_template_part( 'loop', 'category' );
        ?>
         <?php echo do_shortcode('[wd_asp elements="search,settings" ratio="100%,100%" id=1]'); ?>

         <?php echo do_shortcode('[wd_asp elements="results" ratio="100%" id=1]'); ?>

    </div> <!-- /.content -->

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>