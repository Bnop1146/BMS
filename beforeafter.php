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


<div class="container my-5" >
    <div class="row p-4 pb-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">

        <div class="col-sm-12 col-md-6 col-lg-5 offset-lg-1 p-3 p-lg-5 pt-lg-3 mt-md-3 mb-md-3 mt-lg-4 mb-lg-4">
            <h1 class="vidstover display-4 fw-bold lh-1">Overskrift</h1>
            <p class="vidsttekst">orem ipsum dolor sit amet consectetur
                adipisicing elit. Praesentium ea explicabo nisi quia blanditiis assumenda
                quos veritatis.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <a class="vidstknap btn" href="#" role="button">
                    <span class="spinner-grow spinner-grow-sm me-2"></span>
                    læs mere
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 wrapper mb-4 overflow-hidden">
            <div class="images">
                <div class="img-1"></div>
                <div class="img-2"></div>
            </div>
            <div class="slider">
                <div class="drag-line">
                    <span></span>
                </div>
                <input type="range" min="0" max="100" value="50">
            </div>
        </div>
    </div>
</div>

<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides ">
        <div class="numbertext">1 / 3</div>
        <img src="image/forside-placeholder.png" style="width:100%">
        <div class="text">Caption Text</div>
    </div>

    <div class="mySlides ">
        <div class="numbertext">2 / 3</div>
        <img src="image/kontakt-placeholder.png" style="width:100%">
        <div class="text">Caption Two</div>
    </div>

    <div class="mySlides ">
        <div class="numbertext">3 / 3</div>
        <img src="image/tjenester-placeholder.png" style="width:100%">
        <div class="text">Caption Three</div>
    </div>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>


<script>
    const slider = document.querySelector(".slider input");
    const img = document.querySelector(".images .img-2");
    const dragLine = document.querySelector(".slider .drag-line");
    slider.oninput = () => {
        let sliderVal = slider.value;
        dragLine.style.left = sliderVal + "%";
        img.style.width = sliderVal + "%";
    }
</script>

<script src="js/beforeafter.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 3000,
        once: true,
    });
</script>

</body>

