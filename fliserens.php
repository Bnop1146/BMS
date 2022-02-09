<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>BMS - Fliserens</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico" />

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/fliserens.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include 'navbar.php';?>

<div class="hero-full-screen">

    <div class="top-content-section"></div>

    <div class="middle-content-section">
        <h1>Fliserens Placeholder</h1>
    </div>

    <div class="bottom-content-section" data-magellan data-threshold="0">
        <a href="#main-content-section">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M24 12c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12zm-18.005-1.568l1.415-1.414 4.59 4.574 4.579-4.574 1.416 1.414-5.995 5.988-6.005-5.988z"/>
            </svg>
        </a>
    </div>

</div>



<div id="main-content-section" data-magellan-target="main-content-section">

<div class="omcon container p-4 mb-3 mb-lg-5">
    <div class="row mt-5">
        <div class="om1sek col-sm-12 col-md-6 col-lg-6">
            <p class="om1over">Overskrift</p>
            <div class="om1line"></div>
            <p class="om1tekst mb-4">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

        </div>

        <div class="om2sek col-sm-12 col-md-6 col-lg-6">
            <img src="image/before-after-placeholder.png" class="om2billede img-fluid" alt="">
        </div>
    </div>
</div>

<div class="prisTjenester container p-5 mt-5 mb-5 ">
    <div class="row col-md-6 offset-md-3">
        <div class="">
            <h2>Overskrift</h2>
            <p>Lorem ipsum dolor sit amet, consectetur
                adipiscing elit. Maecenas id erat accumsan
                blandit tortor quis, convallis mauris.</p>
            <br>


            <button class="btn-tjenester ">
                <span class="spinner-grow spinner-grow-sm"></span>
                Læs mere
            </button>
        </div>
    </div>
</div>


<div class="omcon2 container p-4 mb-3 mb-lg-5">
    <div class="row">

        <div class="om2sek col-sm-12 col-md-6 col-lg-6">
            <img src="image/video-placeholder.png" class="om2billede img-fluid" alt="">
        </div>

        <div class="om1sek col-sm-12 col-md-6 col-lg-6">
            <p class="om1over">Overskrift</p>
            <div class="om1line"></div>
            <p class="om1tekst">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>

        </div>

    </div>
</div>

</div>

<?php include 'footer.php';?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>