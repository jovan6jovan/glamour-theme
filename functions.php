<?php

function pageBanner() { ?>

  <section class="page-banner" style="background-image: url(<?php $pageBannerImage = get_field('page_banner_background_image'); echo $pageBannerImage['url'] ?>);">
      <h2><?php the_title(); ?></h2>
      <p><?php the_field('page_banner_subtitle') ?></p>
  </section>

<?php }

function glamur_files() {
  wp_enqueue_script('main-script', get_theme_file_uri('/js/script.js'), null, '1.0', true);
  wp_enqueue_script('lightbox', get_theme_file_uri('/js/lightbox.min.js'), array('jquery'), '2.10.0', false);
  wp_enqueue_script('leaflet-js', '//unpkg.com/leaflet@1.3.4/dist/leaflet.js', null, '1.3.4', false);
  wp_enqueue_script('map-js', get_theme_file_uri('/js/map.js'), null, '1.0', true);
  wp_enqueue_style('animate-css','//cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css');
  wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Didact+Gothic|Poppins');
  wp_enqueue_style('font-awesome','//use.fontawesome.com/releases/v5.4.1/css/all.css');
  wp_enqueue_style('leaflet-css', '//unpkg.com/leaflet@1.3.4/dist/leaflet.css');
  wp_enqueue_style('lightbox-css', get_theme_file_uri('/css/lightbox.min.css'));
  
  wp_enqueue_style('glamur_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'glamur_files');

function glamur_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails', array('post', 'page'));
}

add_action('after_setup_theme', 'glamur_features');

 ?>
