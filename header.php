<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>
    <link rel="preload" href="<?php bloginfo('template_directory'); ?>/fonts/GoodSans-Regular.woff" as="font" type="font/woff2" crossorigin="anonymous">
   <link rel="preload" href="<?php bloginfo('template_directory'); ?>/fonts/GoodSans-BoldItalic.woff" as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="<?php bloginfo('template_directory'); ?>/fonts/GoodSans-Bold.woff" as="font" type="font/woff2" crossorigin="anonymous">
</head>


<body <?php body_class(); ?>>

<header>
  <img src="<?php bloginfo('template_directory'); ?>/images/whiteGlitter.png" alt="decoration background sparkle" class="pngsparkle">
  <section class="headeContainer container">
    <figure class="logo">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
      <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Bricks & Glitter Organizational logo">
      </a>
    </figure>
    <div id="hamburger" onclick="this.classList.toggle('open');">
        <svg width="50" height="50" viewBox="0 0 100 100">
          <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
          <path class="line line2" d="M 20,50 H 80" />
          <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
      </div>
    <nav class="primaryMenu">
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_location' => 'primary'
      )); ?>
    </nav>
  </section>    

</header><!--/.header-->

