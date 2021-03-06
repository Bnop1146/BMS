<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>BMS - Om Bengtsons Multiservice</title>
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
    <link href="css/Om BMS.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include 'navbar.php';?>

<div class="hero-full-screen">

    <div class="top-content-section"></div>

    <div class="middle-content-section">
        <h1 class="hovedtitle">Om Bengtsons Multiservice</h1>
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

<div class="BMS">

<div class="omcon container p-4 mb-3">
    <div class="row">
        <div class="om1sek col-sm-12 col-md-6 col-lg-6" data-aos="fade-down">
            <p class="om1over">Om Bengtsons Multiservice</p>
            <div class="om1line"></div>
            <p class="om1tekst mb-4">
                I 2019 startede Nikolaj Bengtson firmaet Bengtson Multiservice, med fokus på serviceydelser til udendørsarealer.
                Vi udfører vores arbejde på Sydsjælland og Lolland-Falster.
                Med fire kernekompetencer er det muligt at levere den bedste serviceydelse til overkommelige priser.
                Bengtson Multiservice ønsker at gøre en forskel for dig som kunde, vi tager alle vores opgaver seriøst store som små.
                Vi vægter kundetilfredshed og kvalitet frem for alt, derfor er vi meget opmærksomme på alt vores arbejde bliver udført nøje.
            </p>

        </div>

        <div class="om2sek col-sm-12 col-md-6 col-lg-6" data-aos="fade-down">
            <img src="image/before-after-placeholder.png" class="om2billede img-fluid" alt="">
        </div>
    </div>
</div>

<div class="omcon2 container p-4 mb-3 mb-lg-5">
    <div class="row">

        <div class="om2sek col-sm-12 col-md-6 col-lg-6" data-aos="fade-down">
            <img src="image/om-1.jpg" class="om2billede img-fluid" alt="">
        </div>

        <div class="om1sek col-sm-12 col-md-6 col-lg-6" data-aos="fade-down">
            <p class="om1over mt-4 mt-lg-0">Tilfredsheds garanti</p>
            <p class="om1tekst">
                Alle vores produkter er godkendt af Miljøstyrelsen, vi går ikke på kompromis med miljøet.
                Vi afslutter ikke en opgave før vores kunder er tilfredse og arbejdet lever op til vores standarder.
                Det eneste du skal gøre er at kontakte os for et uforpligtende tilbud, så klarer vi resten.
                Vi kan tilbyde professionel hjælp til fliserens, facaderens, algebehandling, tagrens & maling.
            </p>


            <h5 class="uforpligtover">Kontakt os for et uforpligtende tilbud:</h5>
            <ul class="uforpligt">
                <li class="om1tekst"> Mobil: 20 99 04 91 </li>
                <li class="om1tekst"> E-mail: Bengtson-multiservice@outlook.dk</li>

            </ul>
        </div>

    </div>
</div>

</div>

<div class="booksektion px-5 py-5 text-left ">
    <div class="bookosek" data-aos="fade-down">
        <h2 class="bookover">Skal du være den næste glad kunde!
        </h2>
        <p class="booktekst">Vi anbefaler at vedligeholde de forskellige overflader, som f.eks. tag, flise og facader
            med en rens og algebehandling minimum hvert år for holdebare og rene overflader.
            Så giv os et kald for et godt tilbud.</p>
            <a class="vidstknap btn" href="kontakt.php" role="button">
                <span class="spinner-grow spinner-grow-sm me-2"></span>
                Kontakt
            </a>

    </div>
</div>

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
