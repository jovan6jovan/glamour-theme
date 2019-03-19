<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
  <header id="home">
    <nav class="navbar animated bounceInRight">
      <span class="navbar-toggle" id="js-navbar-toggle">
        <i class="fas fa-bars"></i>
      </span>
      <a href="<?php echo site_url() ?>" class="logo">Glamur</a>
      <ul class="main-nav" id="js-menu">
        <li><a href="<?php echo site_url() ?>" class="nav-links">Početna</a></li>
        <li <?php if (is_page('o-nama')) echo 'class="current-menu-item"' ?> ><a href="<?php echo site_url('/o-nama') ?>" class="nav-links">O nama</a></li>
        <li <?php if (is_page('usluge')) echo 'class="current-menu-item"' ?> ><a href="<?php echo site_url('/usluge') ?>" class="nav-links">Usluge</a></li>
        <li <?php if(get_post_type() == 'post') echo 'class="current-menu-item"'?>><a href="<?php echo site_url('/blog') ?>" class="nav-links">Blog</a></li>
        <li <?php if (is_page('kontakt')) echo 'class="current-menu-item"' ?> ><a href="<?php echo site_url('/kontakt') ?>" class="nav-links">Kontakt</a></li>
      </ul>
    </nav>
  </header>

  <button onclick="topFunction()" id="scroll-to-top" title="Nazad na početak"><i class="fas fa-angle-up"></i></button>
  