<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>BMS - Algebehandling</title>
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
    <link href="css/algebehandling.css" rel="stylesheet" type="text/css">


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include 'navbar.php'; ?>

<div class="hero-full-screen">

    <div class="top-content-section"></div>

    <div class="middle-content-section">
        <h1 class="hovedtitle">Algebehandling</h1>
    </div>

    <div class="bottom-content-section" data-magellan data-threshold="0">
        <a href="#main-content-section">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M24 12c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12zm-18.005-1.568l1.415-1.414 4.59 4.574 4.579-4.574 1.416 1.414-5.995 5.988-6.005-5.988z"/>
            </svg>
        </a>
    </div>

</div>


<div id="main-content-section" data-magellan-target="main-content-section"></div>

<br><br><br>

<div class="background pb-2">

    <div class="omcon2 container p-4 mb-3 mb-lg-5">
        <div class="row">

            <div class="om2sek col-sm-12 col-md-6 col-lg-6" data-aos="fade-down">
                <img src="image/video-placeholder.png" class="om2billede img-fluid" alt="">
            </div>

            <div class="om1sek col-sm-12 col-md-6 col-lg-6 " data-aos="fade-down">
                <p class="om1over">Er husets overflader grønt og bevokset så lad os hjælpe dig med at få dit flotte huse tilbage!</p>
                <div class="om1line"></div>
                <p class="om1tekst">
                    Ud over alger og mos ikke er kønt, så kan det også være skadeligt for dit tag.
                    Det virker som svampe der holder på fugten og konstant gør det muligt for fugt,
                    at sive ned i din tagkonstruktion og dermed gøre stor skade! Med en algebehandling kan du forebygge og ofte helt undgå store skader på taget. En algebehandling skal virke fra 1-8 måneder,
                    før du kan se det fulde resultat, alt efter bevoksning samt vind og vejr.

                </p>

            </div>

        </div>
    </div>

    <br>

    <div class="booksektion px-5 py-5 text-left">
        <div class="bookosek" data-aos="fade-down">
            <h2 class="bookover">Vi anbefaler</h2>
            <p class="booktekst">Vi anbefaler at vedligeholde de forskellige overflader, som f.eks. tag, flise og facader med en algebehandling minimum hvert år for et holdbart og rent tag.</p>
            <a class="bookknap btn" href="kontakt.php" role="button">
                <span class="spinner-grow spinner-grow-sm me-2"></span>
                Kontakt

            </a>

        </div>
    </div>

    <br><br>

    <div class="omcon container p-4 mb-3 mb-lg-5">
        <div class="row mt-5 ">
            <div class="om1sek  col-sm-12 col-md-6 col-lg-6" data-aos="fade-down">
                <p class="om1over ">Algebehandling af husets overflader
                </p>
                <p class="om1tekst ">
                    Det danske klima kan oftest være fugtigt. Regn og skygge kan være medvirkende til, at skabe gode betingelser for mos og alger. Dette kan i visse tilfælde forårsage skade på dit tag, hvis det udvikler sig, får lov at gro. Bengtson Multiservice står klar med professionel hjælp for at kunne bekæmpe denne byrde. En algebehandling vil forebygge mod eventuelle skader på dit tag, som mos og fugt kan have forårsaget. Algebehandlingen skal have lov til at virke 1 – 8 måneder, før det fulde resultat kan ses. Det afhænger af bevoksningen samt vind og vejr. Vi anvender udelukkende miljøgodkendte midler, herunder Neutralon som er godkendt af Miljøstyrelsen, til algebekæmpelse i Danmark. Ved algebehandling af dit tag sikrer du, at der i fremtiden ikke vil komme mos, og alger på dit tag.
                    Bengtson Multiservice tilbyder også algebehandling af dine fliser. Ved behandlingen, har det effekt fra det bliver sprøjtet på. Før endeligt resultat, kan der gå nogle uger, da vind samt vejr klarer resten.
                </p>



            </div>

            <div class="om2sek col-sm-12 col-md-6 col-lg-6" data-aos="fade-down">
                <img src="image/before-after-placeholder.png" class="om2billede img-fluid" alt="">
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