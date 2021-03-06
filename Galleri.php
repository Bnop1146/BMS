<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>BMS - Galleri</title>
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
    <link href="css/Galleri.css" rel="stylesheet" type="text/css">


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>


<?php include 'navbar.php'; ?>


<div class="hero-full-screen">

    <div class="top-content-section"></div>

    <div class="middle-content-section">
        <h1 class="hovedtitle">Galleri</h1>
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

<div class="beforecon container mt-5">
    <p class="beforeover">Galleri</p>
    <p class="beforetekst mt-3 mb-4 ">
        Se billeder fra arbejdet her i Bengtsons-multiservice


    </p>
</div>


<div class="gallery p-5" id="gallery">
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-1.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-2.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-3.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-4.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-5.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-6.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-7.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-8.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-9.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-10.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-11.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-12.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-13.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-14.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-15.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-16.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-17.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-18.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-19.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-20.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-21.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-22.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-23.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-24.jpg" alt=""></div>
    </div>
    <div class="gallery-item">
        <div class="content"><img src="image/galleri-25.jpg" alt=""></div>
    </div>
</div>


<?php include 'footer.php'; ?>


<script src="js/Galleri.js"></script>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 3000,
        reset: false,
    });
</script>

</body>
</html>

