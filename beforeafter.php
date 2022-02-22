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
    <link href="css/beforeafter.css" rel="stylesheet" type="text/css">


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>



<div class="container my-5">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 pb-lg-5 align-items-center rounded-3 border shadow-lg">
        <div class="col-lg-6  p-3 p-lg-5 pt-lg-3">
            <h1 class="vidstover">Overskrift</h1>
            <p class="vidsttekst mb-3 mt-3">Quickly design and customize responsive mobile-first sites with Bootstrap, the world’s most popular front-end open source toolkit, featuring Sass variables.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <button type="button" class="vidstknap btn-lg px-4 me-md-2">Knap</button>
            </div>
        </div>

        <div class="col-lg-4 offset-lg-1  p-0 overflow-hidden">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/kontakt-placeholder.png" class="d-block w-100 mb-3" alt="...">
                        <img src="image/kontakt-placeholder.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="image/kontakt-placeholder.png" class="d-block w-100 mb-3" alt="...">
                        <img src="image/kontakt-placeholder.png" class="d-block w-100" alt="...">

                    </div>
                    <div class="carousel-item">
                        <img src="image/kontakt-placeholder.png" class="d-block w-100 mb-3" alt="...">
                        <img src="image/kontakt-placeholder.png" class="d-block w-100" alt="...">

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
