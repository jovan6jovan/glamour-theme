<?php get_header(); ?>

<section class="page-banner" style="background-image: url(<?php echo get_theme_file_uri('/img/blog-banner.png') ?>);">
      <h2>Dobrodošli na naš blog</h2>
      <p>Budite u toku sa našim najnovijim akcijama i novitetima.</p>
</section>

<section class="blog-blog-posts">
    <?php 
        while(have_posts()) {
            the_post(); ?>
            <div class="blog-posts-container">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="metabox">
                    <p>Autor: <?php the_author_posts_link(); ?>, <?php the_time('d. m. Y.'); ?> u kategoriji <?php echo get_the_category_list(', '); ?></p>
                </div>
                <div class="generic-content">
                    <?php the_excerpt(); ?>
                    <p><a class="button-btn" href="<?php the_permalink(); ?>">Pročitajte više &raquo;</a></p>
                </div>
                <hr>
            </div>
        <?php }
        echo paginate_links();
    ?>
</section> <!-- .blog-blog-posts -->

<?php get_footer(); ?>
