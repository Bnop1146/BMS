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
    <link rel="shortcut icon" type="image/x-icon" href=""/>

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
<div class="beforecon container" data-aos="fade-down"">
    <p class="beforeover">Overskrift</p>
    <p class="beforetekst mt-3 mb-4 " data-aos="fade-down">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        Ut enim ad minim veniam, quis nostrud
    </p>
</div>

<header class="header__main" data-aos="fade-down">


    <div class="sliders">
        <svg class="slider__mask" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1080" width="0" height="0">
            <defs>
                <!-- Slide 1 -->

                <pattern id="pattern1l" patternUnits="userSpaceOnUse" width="562" height="366" viewBox="0 0 562 366">
                    <image xlink:href="https://images.unsplash.com/photo-1454328911520-ccf83f1ef41d?dpr=1&auto=format&fit=crop&w=600&h=600&q=80&cs=tinysrgb&crop=&bg=" width="600px" height="600px"/>
                </pattern>
                <pattern id="pattern1r" patternUnits="userSpaceOnUse" x="365px" width="562" height="366" viewBox="0 0 562 366">
                    <image xlink:href="https://images.unsplash.com/photo-1497215842964-222b430dc094?dpr=1&auto=format&fit=crop&w=600&h=600&q=80&cs=tinysrgb&crop=&bg=" width="600px" height="600px"/>
                </pattern>

                <!-- Slide 2 -->

                <pattern id="pattern2l" patternUnits="userSpaceOnUse" width="562" height="366" viewBox="0 0 562 366">
                    <image xlink:href="https://images.unsplash.com/photo-1497377825569-02ad2f9edb81?dpr=1&auto=format&fit=crop&w=600&h=600&q=80&cs=tinysrgb&crop=&bg=" width="600px" height="600px"/>
                </pattern>
                <pattern id="pattern2r" patternUnits="userSpaceOnUse" x="365" width="562" height="366" viewBox="0 0 562 366">
                    <image xlink:href="https://images.unsplash.com/photo-1496060169243-453fde45943b?dpr=1&auto=format&fit=crop&w=600&h=600&q=80&cs=tinysrgb&crop=&bg=" width="600px" height="600px"/>
                </pattern>
            </defs>
        </svg>

        <div class="slide" id="slide-1">
            <svg class="slide__bg" viewBox="0 0 1920 1080" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1920" height="1080">
                <rect x="0" y="0" width="1920" height="1080" fill="url(#bg1)" />
            </svg>
            <div class="slide__images">
                <div class="slide__image slide__image--left">
                    <svg viewBox="0 0 900 365" 	xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px">
              <path d="M 0 0 L 0 365 L 351.2382 365 L 562 0 L 0 0 Z" fill="url(#pattern1l)"/>
            </svg>
                </div>

                <div class="slide__image slide__image--right">
                    <svg viewBox="0 0 900 365" 	xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px">
              <path d="M 900 365 L 900 0 L 548.7618 0 L 338 365 L 900 365 Z" fill="url(#pattern1r)"/>
            </svg>
                </div>
            </div>
        </div>

        <div class="slide" id="slide-2">
            <svg class="slide__bg" viewBox="0 0 1920 1080" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1920" height="1080">
                <rect x="0" y="0" width="1920" height="1080" fill="url(#bg2)" />
            </svg>
            <div class="slide__images">
                <div class="slide__image slide__image--left">
                    <svg viewBox="0 0 900 365"	xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px">
              <path d="M 0 0 L 0 365 L 351.2382 365 L 562 0 L 0 0 Z" fill="url(#pattern2l)"/>
            </svg>
                </div>

                <div class="slide__image slide__image--right">
                    <svg viewBox="0 0 900 365" 	xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px">
              <path d="M 900 365 L 900 0 L 548.7618 0 L 338 365 L 900 365 Z" fill="url(#pattern2r)"/>
            </svg>
                </div>
            </div>
        </div>

        <div class="slide" id="slide-3">
            <svg class="slide__bg" viewBox="0 0 1920 1080" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1920" height="1080">
                <rect x="0" y="0" width="1920" height="1080" fill="url(#bg2)" />
            </svg>
            <div class="slide__images">
                <div class="slide__image slide__image--left">
                    <svg viewBox="0 0 900 365"	xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px">
              <path d="M 0 0 L 0 365 L 351.2382 365 L 562 0 L 0 0 Z" fill="url(#pattern2l)"/>
            </svg>
                </div>

                <div class="slide__image slide__image--right">
                    <svg viewBox="0 0 900 365" 	xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px">
              <path d="M 900 365 L 900 0 L 548.7618 0 L 338 365 L 900 365 Z" fill="url(#pattern2r)"/>
            </svg>
                </div>
            </div>
        </div>

        <div class="slide" id="slide-4">
            <svg class="slide__bg" viewBox="0 0 1920 1080" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="1920" height="1080">
                <rect x="0" y="0" width="1920" height="1080" fill="url(#bg2)" />
            </svg>
            <div class="slide__images">
                <div class="slide__image slide__image--left">
                    <svg viewBox="0 0 900 365"	xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px">
              <path d="M 0 0 L 0 365 L 351.2382 365 L 562 0 L 0 0 Z" fill="url(#pattern2l)"/>
            </svg>
                </div>

                <div class="slide__image slide__image--right">
                    <svg viewBox="0 0 900 365" 	xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" x="0px" y="0px">
              <path d="M 900 365 L 900 0 L 548.7618 0 L 338 365 L 900 365 Z" fill="url(#pattern2r)"/>
            </svg>
                </div>
            </div>
        </div>

        <div class="slider__pagination mt-5">
            <a href="#slide-1" class="button mb-3">Fliserens</a>
            <a href="#slide-2" class="button mb-3">Algebehandling</a>
            <a href="#slide-3" class="button mb-3">Facaderens</a>
            <a href="#slide-4" class="button mb-3">Tagrens og maling</a>

        </div>
</header>




<script src="Js/beforeafter.js"></script>
</body>
</html>
