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
    <link href="css/Forside.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include 'navbar.php';?>





<section class="testim" id="testim">
    <div class="wrap">

        <span id="right-arrow" class="arrow right fa fa-chevron-right"></span>
        <span id="left-arrow" class="arrow left fa fa-chevron-left"></span>

        <ul class="dots" id="testim-dots">
            <li class="dot active"></li>
            <li class="dot"></li>
            <li class="dot"></li>
            <li class="dot"></li>
            <li class="dot"></li>
        </ul>

        <div class="cont" id="testim-content">

            <div class="active">
                <div class="img"><img src="#" alt=""></div>
                <h2>Lorem N. Ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                    deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
            </div>

            <div>
                <div class="img"><img src="#" alt=""></div>
                <h2>Lorem L. Ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                    deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
            </div>

            <div>
                <div class="img"><img src="#" alt=""></div>
                <h2>Lorem R. Ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                    deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
            </div>

            <div>
                <div class="img"><img src="#" alt=""></div>
                <h2>Lorem P. Ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                    deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
            </div>

            <div>
                <div class="img"><img src="#" alt=""></div>
                <h2>Lorem Q. Ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                    deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
            </div>
            <div>
                <div class="img"><img src="#" alt=""></div>
                <h2>Lorem Q. Ipsum</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates quasi aliquid vel voluptatum
                    deleniti! Corrupti velit, porro facere facilis laboriosam accusantium, eos beatae maiores.</p>
            </div>
        </div>

    </div>
</section>


<?php include 'footer.php';?>




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="Js/js.js"></script>
</body>
</html>
