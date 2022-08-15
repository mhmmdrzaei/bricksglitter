<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css"> 
  <!-- <script src="scripts/main.js"></script> -->
  <script src="https://kit.fontawesome.com/7ba0bbb744.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <title>
    Bricks & Glitter - Under Construction
  </title>
  <style type="text/css">
    body {
      font-family: sans-serif;
      width: 95%;
      max-width: 1400px;
      height: 100vh;
      margin: 0 auto;
      background: rgb(255,255,255);
      background: linear-gradient(151deg, rgba(255,255,255,1) 0%, rgba(0,151,255,1) 55%);
    }
    section.information{
        background: white;
        padding: 10px;
        width: 80%;
        text-align: center;
      max-width: 630px;
      margin: 0 auto;
      border: 1px solid black;
    }

    .logo {
        margin-bottom: 10vh;
        margin-top: 20px;
    }
    img {
      max-width: 120px;
      width: 35%;
      height: 35%;
    }
    a {
        color: #0029FF;
        font-weight: bold;
        text-decoration: none;
    }
    h3 {
        text-transform: uppercase;
        font-weight: 300;
        margin-bottom: 50px;
    }
    h2 {
        font-weight: 500;
        margin-bottom: 50px;
    }
    .socialcontact {
        width: 300px;
        margin: 20px auto;
    }

  </style>
</head>
<body>


<main class="homeContainer">
<section class="container">
    <figure class="logo">
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
      <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Bricks & Glitter Organizational logo">
      </a>
    </figure>
    <section class="information">
        <h3>
            Site Under Construction
        </h3>
        <h2>
            Bricks & Glitter Festival 2022<br>
            August 20-27
        </h2>
        <section class="socialcontact">
            <p>Check out <a href="https://www.instagram.com/bricksglitter/" target="_blank">Our Instagram</a> for the events in the meantime!</p>
        </section>
    </section>
 
</section>
</main>
</body>
</html>
