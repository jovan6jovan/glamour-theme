<?php get_header(); ?>
    
    <section class="hero">
        <div class="left-half">
            <div class="left-half-content">
                <h1><strong>Mi se trudimo da Vi izgledate lepo</strong></h1>
                <p>Uvek dobro raspoloženje osoblja frizerskog salona <b>Glamur</b> trudi se da svojim iskustvom i kreativnošću doprinese da <em>Vi</em> izgledate lepo, i da samim tim izazove obostrano zadovoljstvo.</p>
                <a href="<?php echo site_url('/o-nama') ?>" class="button animated bounce">Saznajte više &gt;&gt;</a>
            </div>
        </div>
        <div class="right-half" style="background-image: url(<?php echo get_theme_file_uri('/img/mobile-hero.jpg') ?>);">
        
        </div>
        
        <div class="scroll">
            <a href="#info"><i class="fas fa-angle-double-down"></i></a>
        </div>
    </section>
    
    <section class="info" id="info"> <!-- info -->
        <img src="<?php echo get_theme_file_uri('/img/salon.jpg') ?>" alt="Frizerski salon Glamur">
        <div class="info-wrapper">
            <h2>Kada i kako smo počeli sa radom?</h2>
            <p>Vlasnik frizerskog salona Glamur, Đurđa, prvi susret sa frizerskim poslom ostvarila je sada već davne 2006. godine. Od tada, klijenti su se samo nizali, i vraćali još zadovoljniji.</p>

            <p>Nakon dvanaest godina iskustva, rešila je da ostvari svoj san, i da nastavi sa radom u sopstvenom salonu.</p>
            
            <a href="<?php echo site_url('/o-nama') ?>" class="more-info-about-us button">Više o nama &gt;&gt;</a>
        </div>
    </section> <!-- kraj info-a -->
     
     <section class="services" id="services"> <!-- services -->
        <h2>Kategorije usluga</h2>
        <div class="services-img">
            <div>
                <img src="<?php echo get_theme_file_uri('/img/feniranje.png') ?>" class="rounded" alt="Feniranje kose">
                <h3>Feniranje</h3>
            </div>
            <div>
                <img src="<?php echo get_theme_file_uri('/img/sisanje-musko.jpg') ?>" class="rounded" alt="Muško šišanje">
                <h3>Muško šišanje</h3>
            </div>
            <div>
                <img src="<?php echo get_theme_file_uri('/img/sisanje-zensko.jpg') ?>" class="rounded" alt="Žensko šišanje">
                <h3>Žensko šišanje</h3>
            </div>
            <div>
                <img src="<?php echo get_theme_file_uri('/img/oblikovanje-brade.jpg') ?>" class="rounded" alt="Oblikovanje brade">
                <h3>Oblikovanje brade</h3>
            </div>
        </div>
        <p>Iznad se nalazi samo nekoliko usluga koje Vam pružamo. Za cene i detaljniji prikaz, kliknite na dugme ispod.</p>
        <a href="<?php echo site_url('/usluge') ?>" class="button">Pogledajte cene &gt;&gt;</a>
    </section> <!-- kraj services-a -->
    
    <section class="gallery"> <!-- gallery -->
        <h2>Naši radovi</h2>
        <p>Nudimo širok izbor frizerskih usluga i za muške i za ženske osobe. <br>
        Ispod su samo neke od slika naših zadovoljnih mušterija. <br>
        Za više slika, posetite stranicu <a href="<?php echo site_url('/usluge') ?>">usluge</a>.
        </p>
        <div class="gallery-container"> <!-- gallery-container -->
            <div class="main-img">
                <img src="<?php echo get_theme_file_uri('/img/slika1.png') ?>" alt="Ispravljena kosa" id="current">
            </div>
            <div class="imgs">
                <img src="<?php echo get_theme_file_uri('/img/slika1.png') ?>" alt="Ispravljena kosa">
                <img src="<?php echo get_theme_file_uri('/img/slika2.png') ?>" alt="Uvijena kosa">
                <img src="<?php echo get_theme_file_uri('/img/slika3.png') ?>" alt="Uvijena duga kosa">
                <img src="<?php echo get_theme_file_uri('/img/slika4.png') ?>" alt="Uvijena srednje duga kosa">
                <img src="<?php echo get_theme_file_uri('/img/slika9.png') ?>" alt="Loknasta kosa">
                <img src="<?php echo get_theme_file_uri('/img/slika8.png') ?>" alt="Skraćena plava kosa">
            </div>
        </div> <!-- kraj gallery-container-a -->
    </section> <!-- kraj gallery -->
     
    <section class="blog-posts" id="blog"> <!-- blog-posts -->
        <h2>Novosti sa našeg bloga</h2>
        <p>Saznajte sve o novim stvarima koje Vam pripremamo. <br>
        Akcije, noviteti i drugo!</p>
        <div class="posts">
            <?php
                $homepagePosts = new WP_Query(array(
                    'posts_per_page' => 3
                ));
                while($homepagePosts->have_posts()) {
                    $homepagePosts->the_post(); ?>

                        <article>
                            <h4><?php the_title(); ?></h4>
                            <a href="<?php the_permalink(); ?>"><span class="date"><?php the_time('F d, Y')   ?></span></a>
                            <p>
                            <?php if(has_excerpt()) {
                                the_excerpt();
                            } else {
                                echo wp_trim_words(get_the_content(), 15);
                            } ?>
                            <a href="<?php the_permalink(); ?>" class="see-more">Pročitaj više &raquo;</a>
                            </p>
                        </article>
                    
                <?php } wp_reset_postdata();
            ?>
        </div>
        <a href="<?php echo site_url('/blog') ?>" class="button">Više sa bloga &gt;&gt;</a>
    </section> <!-- kraj blog-posts -->

<?php get_footer(); ?>
