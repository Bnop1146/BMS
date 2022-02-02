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

<div class="px-5 py-5 text-left heroimage text-center">
    <div class="herosek">
        <h1 class="heroover">Om Bengtson Multiservice </h1>
    </div>
</div>


<div class="BMS">

<div class="omcon container p-4 mb-3">
    <div class="row">
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

<div class="omcon2 container p-4 mb-3 mb-lg-5">
    <div class="row">

        <div class="om2sek col-sm-12 col-md-6 col-lg-6">
            <img src="image/before-after-placeholder.png" class="om2billede img-fluid" alt="">
        </div>

        <div class="om1sek col-sm-12 col-md-6 col-lg-6">
            <p class="om1over mt-4">Overskrift</p>
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

<div class="booksektion px-5 py-5 text-left ">
    <div class="bookosek">
        <h2 class="bookover">Overskrift</h2>
        <p class="booktekst">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a class="bookknap btn" href="#" role="button">Klik</a>

    </div>
</div>





<?php include 'footer.php';?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
