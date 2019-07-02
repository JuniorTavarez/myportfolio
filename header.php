<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133123302-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-133123302-1');
</script>

    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/main.css">
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
    <header>
        <div class="logo">
          <a href="/" class="name">JT</div>
        </div>
        <div class="header-menu">
          <a href="/">Home</a>
          <a href="/#services-section">Services</a>
          <a href="/#portfolio-section">Portfolio</a>
          <a href="/#experience-section">Experience</a>
          <a href="/contact">Contact</a>
        </div>
        <div class="menu-btn">
          <i class="fas fa-bars"></i>
        </div>
    </header>
    <div class="mobile-menu">
        <a href="/">Home</a>
        <a href="/#services-section">Services</a>
        <a href="/#portfolio-section">Portfolio</a>
        <a href="/#experience-section">Experience</a>
        <a href="/contact">Contact</a>
    </div>