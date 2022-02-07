<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>BMS - Test Galleri</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico" />

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/Galleri_Test.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<div class="gallery">
    <div class="gallery__column">
        <a href="" target="_blank" class="gallery__link">
            <figure class="gallery__thumb">
                <img src="image/kontakt-placeholder.png" alt="" class="gallery__image">
                <figcaption class="gallery__caption"></figcaption>
            </figure>
        </a>

        <a href="" target="_blank" class="gallery__link">
            <figure class="gallery__thumb">
                <img src="image/kontakt-placeholder.png" alt="" class="gallery__image">
                <figcaption class="gallery__caption"></figcaption>
            </figure>
        </a>

        <a href="" target="_blank" class="gallery__link">
            <figure class="gallery__thumb">
                <img src="image/kontakt-placeholder.png" alt="" class="gallery__image">
                <figcaption class="gallery__caption"></figcaption>
            </figure>
        </a>
    </div>

    <div class="gallery__column">
        <a href="" target="_blank" class="gallery__link">
            <figure class="gallery__thumb">
                <img src="image/kontakt-placeholder.png" alt="" class="gallery__image">
                <figcaption class="gallery__caption"></figcaption>
            </figure>
        </a>

        <a href="" target="_blank" class="gallery__link">
            <figure class="gallery__thumb">
                <img src="image/kontakt-placeholder.png" alt="" class="gallery__image">
                <figcaption class="gallery__caption"></figcaption>
            </figure>
        </a>

        <a href="" target="_blank" class="gallery__link">
            <figure class="gallery__thumb">
                <img src="image/kontakt-placeholder.png" alt="" class="gallery__image">
                <figcaption class="gallery__caption"></figcaption>
            </figure>
        </a>
    </div>

    <div class="gallery__column">
        <a href="https://unsplash.com/@marilezhava" target="_blank" class="gallery__link">
            <figure class="gallery__thumb">
                <img src="https://source.unsplash.com/Xm9-vA_bhm0/300x500" alt="Portrait by Mari Lezhava" class="gallery__image">
                <figcaption class="gallery__caption">Portrait by Mari Lezhava</figcaption>
            </figure>
        </a>

        <a href="https://unsplash.com/@ethanhaddox" target="_blank" class="gallery__link">
            <figure class="gallery__thumb">
                <img src="https://source.unsplash.com/NTjSR3zYpsY/300x300" alt="Portrait by Ethan Haddox" class="gallery__image">
                <figcaption class="gallery__caption">Portrait by Ethan Haddox</figcaption>
            </figure>
        </a>

        <a href="https://unsplash.com/@mr_geshani" target="_blank" class="gallery__link">
            <figure class="gallery__thumb">
                <img src="https://source.unsplash.com/2JH8d3ChNec/300x300" alt="Portrait by Amir Geshani" class="gallery__image">
                <figcaption class="gallery__caption">Portrait by Amir Geshani</figcaption>
            </figure>
        </a>
    </div>

    <div class="gallery__column">
        <a href="https://unsplash.com/@frxgui" target="_blank" class="gallery__link">
            <figure class="gallery__thumb">
                <img src="https://source.unsplash.com/FQhLLehm4dk/300x300" alt="Portrait by Guilian Fremaux" class="gallery__image">
                <figcaption class="gallery__caption">Portrait by Guilian Fremaux</figcaption>
            </figure>
        </a>

        <a href="https://unsplash.com/@majestical_jasmin" target="_blank" class="gallery__link">
            <figure class="gallery__thumb">
                <img src="https://source.unsplash.com/OQd9zONSx7s/300x300" alt="Portrait by Jasmin Chew" class="gallery__image">
                <figcaption class="gallery__caption">Portrait by Jasmin Chew</figcaption>
            </figure>
        </a>

        <a href="https://unsplash.com/@dimadallacqua" target="_blank" class="gallery__link">
            <figure class="gallery__thumb">
                <img src="https://source.unsplash.com/XZkEhowjx8k/300x500" alt="Portrait by Dima DallAcqua" class="gallery__image">
                <figcaption class="gallery__caption">Portrait by Dima DallAcqua</figcaption>
            </figure>
        </a>
    </div>
</div>






<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

