<?php
/**
 * @package git-log_theme
 */
?>
<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
  <meta charset="<?PHP bloginfo('charset'); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <?php wp_head(); ?>
  <title>
    <?php if(is_home()): ?>
      <?php bloginfo('name'); ?>
    <?php endif; ?>
    <?php if(is_single()): ?>
      <?php single_post_title(); ?>｜<?php bloginfo('name'); ?>
    <?php endif; ?>
    <?php if(is_tag()): ?>
      <?php single_tag_title(); ?>｜<?php bloginfo('name'); ?>
    <?php endif; ?>
    <?php if(is_category()): ?>
      <?php single_tag_title(); ?>｜<?php bloginfo('name'); ?>
    <?php endif; ?>
  </title>
</head>
<body>
  <header>
    <div class="header">
      <h1 class="header__logo">
        <a href="<?php bloginfo("url") ?>">
          <img src="<?php bloginfo("template_url") ?>/images/GiT_logo.png" alt="Givery Technology">
        </a>
      </h1>
      <div class="header__side">
        <form class="header__search" method="get" action="<?php bloginfo('url'); ?>">
          <input type="text" name="s">
          <button><span class="glyphicon glyphicon-search"></span></button>
        </form>
      </div>
    </div>
  </header>

  <div class="wrapper">
