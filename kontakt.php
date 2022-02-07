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
<div class="px-5 py-5 text-left herobillede">
    <div class="herosek">
        <h1 class="imgover">Kontakt</h1>
    </div>
</div>






<div class="omkontakt mt-4 p-3 text-center" id="omkontakt">
    <div class="kontaktcon container" >
        <p class="kontaktover">Kontakt os</p>
        <div class="kontaktline"></div>
        <p class="kontakttekst mt-3">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </p>
    </div>
</div>


<?php
$message_sent = false;
if (isset($_POST['email']) && $_POST['email'] !='') {

    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $messageSubject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "tekbas425@gmail.com";
    $body = "";

    $body .= "Fra: " .$userName. "\r\n";
    $body .= "Email: " .$userEmail. "\r\n";
    $body .= "Besked: " .$message. "\r\n";

    mail($to,$messageSubject,$body);

    $message_sent = true;
}
?>



<div class="kontaktsektion container-fluid p-3" data-aos="fade-up" id="kontaktformular">
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
                    <input type="text" class="contact-form-text mb-4"  aria-label="" name="">
                    </span>

                    <span class="mb-3">* Adresse
                    <input type="text" class="contact-form-text mb-4"  aria-label="" name="">
                    </span>


                    <span>* Besked
                    <textarea name="message" class="contact-form-text mb-4"  aria-label=""></textarea>
                    </span>

                    <input type="submit" class="contact-form-btn" value="Send">

                </form>
            </div>


        </div>

    </div>
</div>




<div class ="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2301.4283020820562!2d11.8627130158927!3d54.772437780302575!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47ad30feb5b165f5%3A0xac1a3baf932b3324!2sSlotsbryggen%2014%2C%204800%20Nyk%C3%B8bing%20Falster!5e0!3m2!1sda!2sdk!4v1639384262331!5m2!1sda!2sdk" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>


<?php include 'footer.php';?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
