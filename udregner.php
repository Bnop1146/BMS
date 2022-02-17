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
    <link href="css/udregner.css" rel="stylesheet" type="text/css">


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>





<div class="priscon container shadow-lg">
    <div class="prisinner">

    <h2 class="prisover text-center">Udregn din pris her</h2>

    <p class="pristekst text-center">Få en cirka pris her, for hvad det kan koste</p>

    <form class="prisberegner">
        <div class="form-group ">
            <label for="price">Pris pr. m²</label>
            <select class="form-select" id="price">
                <option disabled selected value="0">Vælg en Tjeneste</option>
                <option value="100">Fliserens</option>
                <option value="54">Algebehandling</option>
                <option value="73">Facaderens</option>
                <option value="143">Tagrens og Maling</option>
            </select>

        </div>

        <div class="form-group mt-3">
            <label for="quantity">Antal m²
                <span class="label label-primary quantity-label"></span>

            </label>
            <input type="range" name="quantity" value="1" min="1"  max="350" step="1" class="form-control slider">
        </div>

    </form>

    <div class="pristotal text-end mt-5 text-giant total">
    </div>

    </div>

</div>


<script src="js/udregner.js"></script>





</body>
</html>


