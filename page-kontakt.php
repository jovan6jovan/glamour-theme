<?php

get_header();

while(have_posts()) {
  the_post();

  pageBanner();

  // Message VARS

  $msg = '';
  $msgClass = '';
 
// Check for submit
if(filter_has_var(INPUT_POST, 'submit')) {
    // Get form data
    $name = htmlspecialchars($_POST['message_name']);
    $email = htmlspecialchars($_POST['message_email']);
    $message = htmlspecialchars($_POST['message_text']);
    $human = htmlspecialchars($_POST['message_human']);

    // Check required fields
    if(!empty($name) && !empty($email) && !empty($message) && !empty($human)) { 
        // Passed
        // Human check
        if(!$human == 0) {
            if($human != 5) {
                $msg = 'Verifikacija da ste čovek nije uspela';
                $msgClass = 'error';
            } else {
                // Check email
                if(filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
                // Failed
                $msg = 'Neispravna email adresa';
                $msgClass = 'error';
                } else {
                    // Passed
                    // Recipient email
                    $toEmail = 'jovanjocabg94@gmail.com';
                    $subject = 'Poruka od korisnika ' .$name;
                    $body = '<h2>Nova poruka</h2>
                            <h4>Ime</h4>
                            <p>'.$name.'</p>
                            <h4>Email</h4>
                            <p>'.$email.'</p>
                            <h4>Tekst poruke</h4>
                            <p>'.$message.'</p>
                            ';
                    // Email headers
                    $headers = "MIME-Version: 1.0" ."\r\n";
                    $headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";
                    // Additional headers
                    $headers.= "From: " .$name. "<".$email.">". "\r\n";

                    if (mail($toEmail, $subject, $body, $headers)) {
                        // Email sent
                        $msg = 'Uspešno ste poslali poruku';
                        $msgClass = 'success';
                    } else {
                        // Failed
                        $msg = 'Nažalost, Vaša poruka nije poslata.';
                        $msgClass = 'error';
                    }
                }
            }
        }
    }
    else {
        // Failed
        $msg = 'Molimo Vas da popunite sva polja.';
        $msgClass = 'error';
    }
}

?>

<section class="form-container">
    <div class="wrapper animated bounceInLeft">
        <div class="company-info">
            <h3>Adresa i broj telefona:</h3>
            <ul>
                <li><i class="fa fa-road"></i> Bulevar Revolucije 92a, Kaluđerica</li>
                <li><i class="fa fa-phone"></i> +381 64 256 38 95</li>
            </ul>
        </div>
                
        <div class="contact">
            <?php 
            if($msg != '') { ?>
                <div class="<?php echo $msgClass ?>">
                    <?php echo $msg; ?>
                </div>
            <?php } 
            ?>
            <form action="<?php echo site_url('/kontakt') ?>" method="POST">
                  <p>
                    <label for="message_name">Vaše ime <span>*</span></label>
                    <input type="text" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>">
                  </p>
                  <p>
                    <label for="message_email">Vaš Email <span>*</span></label>
                    <input type="email" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>">
                  </p>
                  <p class="full">
                    <label for="message_text">Vaša poruka <span>*</span></label>
                    <textarea name="message_text" rows="5"><?php echo esc_attr($_POST['message_text']); ?></textarea>
                  </p>
                  <p>
                    <label for="message_human">Dokažite da niste robot <span>*</span> <br> 2 + 3 = <br> </label> 
                    <input name="message_human">
                  </p>
                  <p class="full">
                    <button type="submit" name="submit">Pošaljite</button>
                  </p>
            </form>
        </div>
    </div>
</section>
    
<section class="contact-location">
    <h2>Naša lokacija</h2>
    <div id="mapa">
    </div>
</section>


<?php }

get_footer();

 ?>
