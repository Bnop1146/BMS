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
    <link href="css/fliserens.css" rel="stylesheet" type="text/css">


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include 'navbar.php'; ?>

<div class="hero-full-screen">

    <div class="top-content-section"></div>

    <div class="middle-content-section">
        <h1 class="hovedtitle">Fliserens</h1>
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

<div class="background pb-2">

    <div class="omcon container p-4 mb-3 mb-lg-5">
        <div class="row mt-5 ">
            <div class="om1sek  col-sm-12 col-md-6 col-lg-6" data-aos="fade-down">
                <p class="om1over ">Fliserens og imprægnering</p>
                <div class="om1line"></div>
                <p class="om1tekst mb-4 ">
                    Der er i gennemsnittet 171 regnvejrsdage i Danmark. Det kan sætte sine spor på dine fliser, da de kan være glatte grundet alger, mos og flisepest. Derudover kan der komme frostsprængninger samt algevækst, som kan forkorte flisernes levetid. Er dine fliser præget af disse faktorer, kan en fliserens hjælpe med at løse problemet. En fliserens af Bengtson Multiservice, sikrer du en professionel rens af dine fliser. Efter en fliserens, bliver dine fliser imprægneret som vil betyde, at dine fliser vil være vandafvisende og modstandsdygtige overfor alger, flisepest og andet skidt. En fliserens samt derefter imprægnering vil betyde, at dine fliser vil fremstå som nye igen, afhængigt af hvor medtaget belægningen er. Imprægneringen beskytter derefter dine fliser mod fornyet algevækst. Vil du sikre dig flotte fliser hvert år, kan du med fordel vælge vores garantiordning. Garantiordningen indebærer en årlig efterbehandling som bekæmper de alger som skulle have lagt sig i tidens løb.
                </p>

            </div>

            <div class="om2sek col-sm-12 col-md-6 col-lg-6" data-aos="fade-down">
                <img src="image/fliserens-2.jpg" class="om2billede img-fluid" alt="">
            </div>
        </div>
    </div>

    <br>

    <div class="booksektion px-5 py-5 text-left">
        <div class="bookosek" data-aos="fade-down">
            <h2 class="bookover">Vi anbefaler</h2>
            <p class="booktekst">Vi anbefaler at vedligeholde de forskellige overflader, som f.eks. tag, flise og facader med en algebehandling minimum hvert år for et holdbart og rent tag.</p>
            <a class="bookknap btn" href="kontakt.php" role="button">
                <span class="spinner-grow spinner-grow-sm me-2"></span>
                Kontakt
            </a>

        </div>
    </div>

    <br><br>

    <div class="omcon2 container p-4 mb-3 mb-lg-5">
        <div class="row">

            <div class="om2sek col-sm-12 col-md-6 col-lg-6" data-aos="fade-down">
                <img src="image/fliserens-1.jpg" class="om2billede img-fluid" alt="">
            </div>

            <div class="om1sek col-sm-12 col-md-6 col-lg-6 " data-aos="fade-down">
                <p class="om1over">Fordele ved fliserens og imprægnering:</p>
                <div class="om1line"></div>


                <p class="om1tekst">
                    En fliserens samt imprægnering, kan være en miljømæssig og økonomisk fordel. Da det oftest kan være en dyr fornøjelse at udskifte hele belægningen. En fliserens samt imprægnering er derfor det rigtige valg hvis du år, efter år vil have, at dine fliser skal fremstå som værende nye.
                </p>

                <p class="om1tekst ">
                    - Undgå at fugt siver ned i tagkonstruktionen
                </p>
                <p class="om1tekst">
                    - Undgå frostsprængninger i taget

                </p>
                <p class="om1tekst">
                    - Undgå unødvendige udgifter til reparation
                </p>
                <p class="om1tekst">
                    - Få et rent tag uden alger og mos
                </p>
                <p class="om1tekst">
                    - Få et pænt og præsentabelt tag
                </p>
                <p class="om1tekst">
                    - Forlæng tagets levetid
                </p>


            </div>

        </div>
    </div>
</div>

<?php include 'footer.php'; ?>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 3000,
        once: true,
    });
</script>

</body>
</html>