<?php

get_header();

while(have_posts()) {
  the_post();

  pageBanner(); 

?>

<section class="services-services">
    <h2>Najistaknutije usluge koje pružamo</h2>
    <section class="services-container">
        <div class="services-service">
            <h4>Šišanje</h4>
            <p>Muškarci, žene, dečaci, devojčice, momci i devojke. Svi se možete šišati kod nas.</p>
        </div>
        <div class="services-service">
            <h4>Feniranje</h4>
            <p>Sve vrste feniranja: loknasto feniranje, ravno feniranje, kovrdžanje, talasi, spiralni talasi...</p>
        </div>
        <div class="services-service">
            <h4>Farbanje</h4>
            <p>Razne vrste farbanja: šatiranje, ombre, sombre, balayage, bojenje pramenova...</p>
        </div>
        <div class="services-service">
            <h4>Keratin</h4>
            <p>Ispravljanje kose keratinom. Najefikasniji i najbezbedniji način dolaska do zdravog izgleda Vaše kose.</p>
        </div>
    </section>
</section> <!-- .services-services -->

<section class="services-pricing">
    <h2>Cenovnik naših usluga</h2>
    <div class="dotted-lists-container">
        <ul class="dotted-list">
            <li><span>Muško šišanje</span><span>250 RSD</span></li>
            <li><span>Žensko šišanje</span><span>300 RSD</span></li>
            <li><span>Dečije šišanje</span><span>200 RSD</span></li>
            <li><span>Muško šišanje i pranje kose</span><span>300 RSD</span></li>
            <li><span>Žensko šišanje i pranje kose</span><span>400 RSD</span></li>
            <li><span>Feniranje</span><span>350 RSD</span></li>
            <li><span>Šišanje i feniranje</span><span>600 RSD</span></li>
            <li><span>Farbanje uslužno</span><span>300 RSD</span></li>
            <li><span>Farbanje izrastka</span><span>700 RSD</span></li>
            <li><span>Farbanje kratke kose</span><span>900 RSD</span></li>
            <li><span>Farbanje srednje kose</span><span>1100 RSD</span></li>
            <li><span>Farbanje duge kose</span><span>1300 RSD</span></li>
        </ul>
        <ul class="dotted-list">
            <li><span>Pramenovi kratke kose</span><span>900 RSD</span></li>
            <li><span>Pramenovi srednje kose</span><span>1100 RSD</span></li>
            <li><span>Pramenovi duge kose</span><span>1300 RSD</span></li>
            <li><span>Frizure</span><span>700-1500 RSD</span></li>
            <li><span>Preliv</span><span>400 RSD</span></li>
            <li><span>Balejaž kratke kose</span><span>2000 RSD</span></li>
            <li><span>Balejaž srednje kose</span><span>2300 RSD</span></li>
            <li><span>Balejaž duge kose</span><span>2500 RSD</span></li>
            <li><span>Talasi presa figaro</span><span>500 RSD</span></li>
            <li><span>Skidanje brade</span><span>100 RSD</span></li>
            <li><span>Obrve</span><span>250 RSD</span></li>
            <li><span>Nausnice</span><span>150 RSD</span></li>
        </ul>
    </div>
</section> <!-- .services-pricing -->

 <section class="services-gallery">
    <h2>Naši radovi</h2>
    <div class="services-gallery-container">
        <div>
            <a href="<?php echo get_theme_file_uri('/img/slika2.png') ?>" data-lightbox="services-gallery">
                <img src="<?php echo get_theme_file_uri('/img/slika2.png') ?>" class="vertical" alt="Uvijena kosa">
            </a>
        </div> 
        <div>
            <a href="<?php echo get_theme_file_uri('/img/pre_i_posle.png') ?>" data-lightbox="services-gallery">
                <img src="<?php echo get_theme_file_uri('/img/pre_i_posle.png') ?>" class="normal" alt="Ispravljanje kose keratinom pre i posle">
            </a>
        </div> 
        <div>
            <a href="<?php echo get_theme_file_uri('/img/slika1.png') ?>" data-lightbox="services-gallery">
                <img src="<?php echo get_theme_file_uri('/img/slika1.png') ?>" class="vertical" alt="Ispravljena kosa">
            </a>
        </div>
        <div>
            <a href="<?php echo get_theme_file_uri('/img/slika4.png') ?>" data-lightbox="services-gallery">
                <img src="<?php echo get_theme_file_uri('/img/slika4.png') ?>" class="vertical" alt="Uvijena srednje duga kosa">
            </a>
        </div>
        <div>
            <a href="<?php echo get_theme_file_uri('/img/slika6.png') ?>" data-lightbox="services-gallery">
                <img src="<?php echo get_theme_file_uri('/img/slika6.png') ?>" class="normal" alt="Konjski rep frizura">
            </a>
        </div>
        <div>
            <a href="<?php echo get_theme_file_uri('/img/slika3.png') ?>" data-lightbox="services-gallery">
                <img src="<?php echo get_theme_file_uri('/img/slika3.png') ?>" class="vertical" alt="Uvijena duga kosa">
            </a>
        </div>
        <div>
            <a href="<?php echo get_theme_file_uri('/img/slika9.png') ?>" data-lightbox="services-gallery">
                <img src="<?php echo get_theme_file_uri('/img/slika9.png') ?>" class="vertical" alt="Loknasta kosa">
            </a>
        </div>
        <div>
            <a href="<?php echo get_theme_file_uri('/img/slika8.png') ?>" data-lightbox="services-gallery">
                <img src="<?php echo get_theme_file_uri('/img/slika8.png') ?>" class="normal" alt="Skraćena plava kosa">
            </a>
        </div>
        <div>
            <a href="<?php echo get_theme_file_uri('/img/pre_i_posle2.png') ?>" data-lightbox="services-gallery">
                <img src="<?php echo get_theme_file_uri('/img/pre_i_posle2.png') ?>" class="normal" alt="Ispravljanje kose pre i posle">
            </a>
        </div>
        <div>
            <a href="<?php echo get_theme_file_uri('/img/balayage.jpg') ?>" data-lightbox="services-gallery">
                <img src="<?php echo get_theme_file_uri('/img/balayage.jpg') ?>" class="big" alt="Balejaž">
            </a>
        </div>
    </div>  <!-- .services-gallery-container -->

    <p class="services-paragraph_for_instagram">Preostale radove možete pogledati na našem <a href="https://www.instagram.com/glamur_up_mp/" target="_blank">Instagram profilu</a></p>
</section> <!-- .services-gallery-->

<section class="services-contact-us">
    <h2>Kontaktirajte nas</h2>
    <a href="<?php echo site_url('/kontakt') ?>" class="button animated">Kontakt stranica &gt;&gt;</a>
</section>

<?php }

get_footer();

 ?>
