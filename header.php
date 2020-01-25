<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <meta name="robots" content="noindex" />
  <meta name="description" content="A self-taught programmer ">

  <!-- Twitter Meta Tags -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@Mr_spShuvo">
  <meta name="twitter:title" content="<?php bloginfo('name');  ?> | <?php bloginfo('description') ?>">
  <meta name="twitter:description" content="A self-taught Computer Programmer. Studying Business Administration in undergrad. Love to learn about new things, especially about the Business & Technology.">
  <meta name="twitter:image" content="<?php echo site_url(); ?>/wp-content/themes/spshuvo/assets/img/icon.png">
  
  <!-- Facebook Meta Tags -->
  <meta property="og:image" content="<?php echo site_url(); ?>/wp-content/themes/spshuvo/assets/img/icon.png" itemprop="thumbnailUrl">
  <meta property="og:title" content="<?php bloginfo('name');  ?> | <?php bloginfo('description') ?>">
  <meta property="og:url" content="<?php echo site_url(); ?>">
  <meta property="og:site_name" content="<?php bloginfo('name');  ?>">
  <meta property="og:type" content="website" />
  <meta property="og:description" content="A self-taught Computer Programmer. Studying Business Administration in undergrad. Love to learn about new things, especially about the Business & Technology.">

  <meta property="fb:app_id" content="118506799477780" />

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri().'/assets/img/favicon.ico'; ?>" type="image/x-icon">
  <title><?php bloginfo('name');  ?> | <?php bloginfo('description') ?></title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="<?php if(is_front_page()) echo 'home-header' ?>">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo site_url('/'); ?>">
          <img src="<?php echo get_stylesheet_directory_uri().'/assets/img/logo.png'; ?>" alt="" srcset="">
          <span id="nav-title">Mr.spShuvo</span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
          data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="toggle-icon icon ion-md-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto ">
            <li class="nav-item">
              <a href="<?php echo site_url('/about') ?>"> 😎 &nbsp; About Me</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('/coding') ?>"> 👨🏻‍💻 &nbsp; Coding</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('/design') ?>"> 👨‍🎨 &nbsp; Design</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('/business') ?>"> 👨‍💼 &nbsp; Business</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('/journal') ?>"> ✍️ &nbsp; Journal</a>
            </li>
            <li class="nav-item">
              <a href="<?php echo site_url('/projects') ?>"> 🗂 &nbsp; Projects</a>
            </li>
          </ul>
          <span>
            <a href="<?php echo site_url('/contact') ?>" class="btn btn-main">
              Contact Now <i class="icon ion-md-arrow-round-forward"></i>
            </a>
          </span>
        </div>
      </div>
    </nav>
  </header>