<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>BMS - Facaderens</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico"/>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/facaderens.css" rel="stylesheet" type="text/css">


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include 'navbar.php'; ?>

<div class="hero-full-screen">

    <div class="top-content-section"></div>

    <div class="middle-content-section">
        <h1 class="hovedtitle">Facaderens</h1>
    </div>

    <div class="bottom-content-section" data-magellan data-threshold="0">
        <a href="#main-content-section">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 30 30">
                <path d="M24 12c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12zm-18.005-1.568l1.415-1.414 4.59 4.574 4.579-4.574 1.416 1.414-5.995 5.988-6.005-5.988z"/>
            </svg>
        </a>
    </div>

</div>


<div id="main-content-section" data-magellan-target="main-content-section"></div>

<br><br><br>

<div class="background pb-2">

    <div class="omcon container p-4 mb-3 mb-lg-5">
        <div class="row mt-5 ">
            <div class="om1sek  col-sm-12 col-md-6 col-lg-6" data-aos="fade-down">
                <p class="om1over ">Om Facaderens</p>
                <div class="om1line"></div>
                <p class="om1tekst mb-4 ">
                    De kolde og fugtige måneder, kan sætte sine spor i form af mos, og grimme algebegroninger på murværk samt facader osv. Det er de grønne alger og fugtige plantebegroninger, som typisk trives bedst på de nordvendte facader. Her er vækstbetingelserne nemlig meget optimale, da de ikke får meget sollys, og dermed mere fugt. Her vil en facaderens kunne gøre stor forskel og sørge for, at facaden eller området vil kunne fremstå pænt, og velholdt igen.
                    En facaderens består af en algebehandling, som påføres for at bekæmpe algerne. Bagefter renser vi facaden med højtryk og evt. varmt vand, samt justerer bar på anlægget, alt efter opgaven. Derefter anbefaler vi en imprægnering af facaden for at beskytte overfladen mod fremtidige alger. Her tilbyder vi også en årlig vedligeholdelsesaftale, så facaden fortsat kan holde sig pæn.

                </p>

            </div>

            <div class="om2sek col-sm-12 col-md-6 col-lg-6" data-aos="fade-down">
                <img src="image/facaderens-1.jpg" class="om2billede img-fluid" alt="">
            </div>
        </div>
    </div>

    <br>

    <div class="booksektion px-5 py-5 text-left">
        <div class="bookosek" data-aos="fade-down">
            <h2 class="bookover">Vi anbefaler</h2>
            <p class="booktekst">Vi anbefaler at vedligeholde de forskellige overflader, som f.eks. tag, flise og facader
                med en rens og algebehandling minimum hvert år for holdebare og rene overflader.
                Så giv os et kald for et godt tilbud.</p>
            <a class="bookknap btn" href="kontakt.php" role="button">
                <span class="spinner-grow spinner-grow-sm me-2"></span>
                Kontakt

            </a>

        </div>
    </div>

    <br><br>

    <div class="omcon2 container p-4 mb-3 mb-lg-5">
        <div class="row">

            <div class="om2sek col-sm-12 col-md-6 col-lg-6" data-aos="fade-down">
                <img src="image/facaderens-2.jpg" class="om2billede img-fluid" alt="">
            </div>

            <div class="om1sek col-sm-12 col-md-6 col-lg-6 " data-aos="fade-down">
                <p class="om1over">Fordele ved facaderens:</p>
                <div class="om1line"></div>
                <p class="om1tekst ">
                    - Kan øge værdien og udseendet

                </p>
                <p class="om1tekst">
                    - Bygningen fremstår pænt og velholdt

                </p>
                <p class="om1tekst">
                    - Beskyttet overflade mod alger fremadrettet
                </p>
                <p class="om1tekst">
                    - Bekæmpelse af alger
                </p>

            </div>

        </div>
    </div>
</div>

    <?php include 'footer.php'; ?>


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