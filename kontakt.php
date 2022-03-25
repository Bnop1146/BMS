<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>BMS - Kontakt</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico" />

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/kontakt.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>



<?php include 'navbar.php';?>

<div class="hero-full-screen">

    <div class="top-content-section"></div>

    <div class="middle-content-section">
        <h1 class="hovedtitle">Kontakt</h1>
    </div>

    <div class="bottom-content-section" data-magellan data-threshold="0">
        <a href="#main-content-section">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 30 30">
                <path d="M24 12c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12zm-18.005-1.568l1.415-1.414 4.59 4.574 4.579-4.574 1.416 1.414-5.995 5.988-6.005-5.988z"/>
            </svg>
        </a>
    </div>

</div>

<div id="main-content-section" data-magellan-target="main-content-section">



<div class="omkontakt mt-4 p-3 text-center" id="omkontakt">
    <div class="kontaktcon container" >
        <p class="kontaktover" data-aos="fade-down">Kontakt os</p>
        <p class="kontakttekst mt-3" data-aos="fade-down">
            Brug venligst kontaktformularen herunder for at kontakte os med diverse spørgsmål. Vi vender tilbage med svar hurtigst muligt. Du er også velkommen til at ringe til os.
        </p>
    </div>
</div>
</div>





<div class="kontaktsektion container-fluid p-3" data-aos="fade-down" id="kontaktformular">
    <div class="row">
        <div class="sektion2 col-sm-12 col-md-12 col-lg-5 mt-5">


            <div class="kontaktinfo">
                <p class="infoover">Information</p>
                <div class="line"></div>
                <p class="infotekst2 mt-3">Adresse: 4990, Sakskøbing, Danmark</p>
                <p class="infotekst2">CVR: 40748016</p>
            </div>

            <div class="kontaktinfo mt-5">
                <p class="infoover">E-mail</p>
                <div class="line"></div>
                <p class="infotekst2 mt-3">Bengtson-multiservice@outlook.dk</p>
            </div>

            <div class="kontaktinfo mt-5">
                <p class="infoover">Telefon tid</p>
                <div class="line"></div>
                <p class="infotekst2 mt-3">Mandag - Søndag: 07.00 - 20.00</p>
            </div>

        </div>
        <?php
        $message_sent = false;
        if (isset($_POST['email']) && $_POST['email'] !='') {

            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userPhone = $_POST['phone'];
            $userAdresse = $_POST['adresse'];
            $message = $_POST['message'];

            $to = "tekbas425@gmail.com";

            $body = "Fra: " . $userName . "\r\n";
            $body .= "Email: " .$userEmail. "\r\n";
            $body .= "Phone: " .$userPhone. "\r\n";
            $body .= "Adresse: " .$userAdresse. "\r\n";
            $body .= "Besked: " .$message. "\r\n";

            mail($to,$message,$body);

            $message_sent = true;
        }
        ?>

        <div class="sektion1 col-sm-12 col-md-12 col-lg-7 mt-5 p-3  ">
            <div class="contact-section">


                <form class="contact-form" action="#" method="post">
                    <span>* Navn
                    <input type="text" class="contact-form-text mb-4" aria-label="" name="name" id="name">
                    </span>

                    <span>* E-mail
                    <input type="email" class="contact-form-text mb-4"  aria-label="" name="email" id="email">
                    </span>

                    <span>* Telefon nr
                    <input type="text" class="contact-form-text mb-4"  aria-label="" name="phone">
                    </span>

                    <span class="mb-3">* Adresse
                    <input type="text" class="contact-form-text mb-4"  aria-label="" name="adresse">
                    </span>


                    <span>* Besked
                    <textarea name="message" class="contact-form-text mb-4"  aria-label=""></textarea>
                    </span>

                       <input type="submit" class="vidstknap contact-form-btn" value="Send">

                </form>
            </div>


        </div>

    </div>
</div>




<div class ="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d147212.3729493155!2d11.527006303525113!3d54.79414568398577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ad483267ace70f%3A0x3a1bd558d2b06866!2s4990%20Saksk%C3%B8bing!5e0!3m2!1sda!2sdk!4v1647952566661!5m2!1sda!2sdk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>


<?php include 'footer.php';?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 3000,
        once: true,
    });
</script>
</body>
</html>
