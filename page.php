<?php

get_header();

while(have_posts()) {
  the_post();

  pageBanner();

  the_content();

 }

get_footer();

 ?>
