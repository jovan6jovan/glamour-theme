<?php

get_header();

while(have_posts()) {
  the_post();

  pageBanner();

  /* the_content(); */

?>
  <section class="about-info">
  <h2 class="h2-for-mobile">Naša snaga je Vaša lepota</h2>
  <div class="about-info-container">
      <img src="<?php echo get_theme_file_uri('/img/salon.jpg') ?>" alt="Frizerski salon Glamur" class="float">
      <div class="div-for-about-info-img-for-desktop">
          <img src="<?php echo get_theme_file_uri('/img/about-info.png') ?>" alt="Frizura sa svečanost" class="about-info-img-for-desktop">
      </div>
      <div class="div-for-about-info-p-and-h2">
            <h2 class="h2-for-desktop">Naša snaga je Vaša lepota</h2>

            <p>Frizerski salon <b>Glamur</b>, počeo je zvanično sa radom u avgustu 2018. godine, kao proizvod dugogodišnjeg kvalitetnog rada sa raznim klijentima, počevši od dece, pa sve do penzionera. </p>

            <p>Bilo je potrebno mnogo volje i truda, ali zahvaljujući upravo tome, doprineli smo da sada ovaj salon bude tu za Vas, i Vašu lepotu. </p>

            <p>Kao i uvek do sada, trudimo se da pratimo najnovije trendove, i da na osnovu toga činimo Vas i nas zadovoljnim. </p>
      </div>
  </div> <!-- .about-info-container -->
  
  <p class="about-p-lg">Negujemo individualni pristup, jer želimo biti sigurni da ćete dobiti najbolju frizuru za sebe!</p>
</section>

<section class="about-cards">
  <div class="about-card">
      <h4>Misija</h4>
      <p>Mi smo novonastali frizerski salon koji se svakodnevno trudi da dosledno zadovoljava želje, potrebe i očekivanja svojih klijenata.</p>
  </div>
  <div class="about-card">
      <h4>Vizija</h4>
      <p>Naša vizija je da postanemo prepoznatljivi kod klijenata po kvalitetu i pristupačnim cenama. Uz dobru organizaciju i razumevanje zaposlenih lica pružiti kvalitetnu uslugu klijentima. Kreirati brend, i postati lokalni lider u ovom poslu.</p>
  </div>
</section>

<section class="about-parallax parallax-linear" style="background-image: url(<?php echo get_theme_file_uri('/img/tools.gif') ?>);">
  <h2>Opremljeni smo kvalitetnom opremom uz koju lako postižemo željene rezultate</h2>
</section>

<section class="about-clients">
  <h2>Šta naši klijenti kažu</h2>
  <div class="quote-container">
      <blockquote>
          Kvalitetna usluga, ljubazno osoblje, sve u svemu jako sam zadovoljna frizerskim salonom <strong>Glamur</strong>. <br> Sve preporuke!
          <span>&mdash; Slađa</span>
      </blockquote>
      <blockquote>
          Bez obzira na to što su mladi, frizeri koji ovde rade su iskusni, i uvek umeju da saslušaju mušteriju. <br> Prijatna i opuštena atmosfera uz kvalitetnu uslugu je ono što me tera da frizerski salon <strong>Glamur</strong> preporučim svima koje poznajem!
          <span>&mdash; Jelena</span>
      </blockquote>
  </div>
</section>

<section class="about-services">
  <h2>Interesuju vas usluge koje nudimo?</h2>
  <a href="<?php echo site_url('/usluge') ?>" class="button">Pogledajte usluge &gt;&gt;</a>
</section>

<?php }

get_footer();

 ?>