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
        <h1>Galleri Placeholder</h1>
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



    <div class="gallery p-5" id="gallery">
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,care" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,studied" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,substance" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,choose" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,past" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,lamp" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,yet" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,eight" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,crew" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,event" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,instrument" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,practical" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,pass" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,bigger" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,number" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,feature" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,line" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,railroad" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,pride" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,too" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,bottle" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,base" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,cell" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,bag" alt=""></div>
        </div>
        <div class="gallery-item">
            <div class="content"><img src="https://source.unsplash.com/random/?tech,card" alt=""></div>
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

