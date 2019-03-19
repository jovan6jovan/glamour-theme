<?php

get_header();

while (have_posts()) {
  the_post(); ?>

<section class="page-banner" style="background-image: url(<?php echo get_theme_file_uri('/img/blog-banner.png') ?>);">
    <h2><?php the_title(); ?></h2>
    <p><?php the_field('page_banner_subtitle') ?></p>
</section>

<div class="single-post-container">
  <div class="metabox metabox-for-blog">
    <p>
    <a class="metabox__blog-home-link" href="<?php echo site_url('/blog') ?>"><i class="fa fa-home"></i> Blog početna</a>
    <span>Autor: <?php the_author_posts_link(); ?>, <?php the_time('d. m. Y.'); ?> u kategoriji <?php echo get_the_category_list(', '); ?></span>
    </p> 
  </div>

  <div class="blog-blog-posts blog-single-post">
    <div class="generic-content">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php }

get_footer();

 ?>
