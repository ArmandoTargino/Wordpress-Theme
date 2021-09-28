<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Restaurant Website</title>
  <?php wp_head(); ?>
</head>

<body>
  <header>
  <a href="#" class="logo">Better Food<span>.</span></a>
    <div class="menuToggle" onclick="toggleMenu();"></div>
  <?php
  wp_nav_menu(
    array(
      'theme_location'=>'top-menu',
      'menu_id'=>'main-menu',
      'container'=>'ul',
      'menu_class'=>'navigation',
    )
  );?>


  </header>