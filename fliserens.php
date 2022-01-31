<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Fliserens</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico" />

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/fliserens.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="body">


<div class="row">
    <div class="column">
        <h1>Overskrift</h1>
        <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Maecenas id erat accumsan
            blandit tortor quis, convallis mauris.
            Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Maecenas id erat accumsan
            blandit tortor quis, convallis mauris.
            Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Maecenas id erat accumsan
            blandit tortor quis, convallis mauris.
        </p>
    </div>
    <div class="column">
        <img src="image/tjenester-placeholder.png" alt="Forest" style="width:100%">
    </div>
</div>

<div class="row">
    <div class="column">
        <img src="image/tjenester-placeholder.png" alt="Forest" style="width:100%">
    </div>
    <div class="column">
        <h1>Overskrift</h1>
        <p>Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Maecenas id erat accumsan
            blandit tortor quis, convallis mauris.
            Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Maecenas id erat accumsan
            blandit tortor quis, convallis mauris.
            Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Maecenas id erat accumsan
            blandit tortor quis, convallis mauris.
        </p>
    </div>
</div>

<div class="row">
    <div class="column">
        <h1>Overskrift</h1>
        <p style="text-align: center">Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Maecenas id erat accumsan
            blandit tortor quis, convallis mauris.
            Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Maecenas id erat accumsan
            blandit tortor quis, convallis mauris.
            Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Maecenas id erat accumsan
            blandit tortor quis, convallis mauris.
        </p>
    </div>
    <div class="column">
        <img src="image/tjenester-placeholder.png" alt="Forest" style="width:100%">
    </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>