<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>

</head>

<body>

  <div id="global-container">


    <header id="main-header">

      <h1 class="site-title"><?php bloginfo('name'); ?></h1>
      <h2 class="site-description"><?php bloginfo('description'); ?></h2>

    </header><!-- /#main-header -->


    <nav id="main-nav">
      <ul class="menu">
        <li><a href="">Menú item 1</a></li>
        <li><a href="">Menú item 2</a></li>
        <li><a href="">Menú item 3</a></li>
        <li><a href="">Menú item 4</a></li>
        <li><a href="">Menú item 5</a></li>
        <li><a href="">Menú item 6</a></li>
      </ul>
    </nav><!-- /#main-nav -->


    <section id="global-content" class="cf">