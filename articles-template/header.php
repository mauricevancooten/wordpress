<!DOCTYPE html>
<html lang="en-UK">

<head>
  
  <meta charset="utf-8">
  <title><?php wp_title() ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/articles-template/assets/css/styles.css" >

  <?php wp_head(); ?> 
   
</head>

<body>

  

  <header>
    <h1><?php echo get_bloginfo( 'name' ); ?></h1>
  </header> 

  <?php
      $main_menu = array(
      'theme_location' => 'main-menu',
      'container' => '',
      'items_wrap' => '<ul>%3$s</ul>'
      );
    ?>

  <nav><?php wp_nav_menu($main_menu); ?></nav>