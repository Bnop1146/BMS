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
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico" />

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/Galleri.css" rel="stylesheet" type="text/css">


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<header>

    <h1 class="heroTekstTjenester">Galleri</h1>

</header>

<?php include 'navbar.php';?>


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


<?php include 'footer.php';?>


<script src="./js/Galleri_Test2.js"></script>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>

