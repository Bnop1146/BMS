<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/navbar.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>



<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="navcon container-fluid">
        <a class="navbar-brand" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="180" class="logosvg" height="109.994" viewBox="0 0 295.88 109.994">
                <g id="Group_20" data-name="Group 20" transform="translate(-171.535 -4594.012)">
                    <g id="Group_19" data-name="Group 19" transform="translate(171.535 4594.012)">
                        <path id="Path_12" data-name="Path 12" d="M48.232-387.248A32.448,32.448,0,0,0,43.793-385c-1.776,1.036-5.416,3.137-8.109,4.676s-5.623,3.226-6.511,3.759c-4.351,2.545-13.5,7.843-16.13,9.323-8.642,4.913-9.5,5.475-10.6,7.044L1.5-358.806v52.681l.947,1.391c1.125,1.6,1.717,1.983,13.407,8.672,9.234,5.327,20.747,11.927,27.495,15.834,3.285,1.894,4.587,2.486,5.682,2.6,2.841.266,1.657.888,24.091-12.164,1.953-1.154,4.883-2.841,6.511-3.759s3.818-2.19,4.883-2.812,3.256-1.865,4.883-2.812c7.577-4.291,8.228-4.854,8.879-7.813.414-1.835.444-5.209.385-26.37-.118-26.222-.059-25.6-1.717-27.495-1.006-1.154-2.1-1.805-17.166-10.477-2.693-1.539-5.623-3.226-6.511-3.759-.888-.5-2.9-1.687-4.439-2.575-9.027-5.238-15.064-8.7-16.011-9.175A6.11,6.11,0,0,0,48.232-387.248ZM37.311-358.066c.829.148,2.871.474,4.587.74s3.788.622,4.587.74c2.249.414,3.285.562,6.363,1.065,1.539.237,3.492.562,4.291.71.829.148,2.22.355,3.108.474,1.539.177,1.776.326,4.114,2.6,8.731,8.405,14.532,14.236,14.532,14.532a2.311,2.311,0,0,1-.71,1.006c-.681.651-.77.651-2.131.237-.8-.237-1.687-.533-1.953-.651-.5-.207-.533.533-.592,12.016l-.089,12.253-1.184.326c-.651.178-1.45.414-1.776.533-.71.266-.769.3-6.955,2.249-2.693.858-5.15,1.657-5.475,1.776a36.438,36.438,0,0,1-6.245,1.776,48.984,48.984,0,0,1-7.221-2.279c-1.746-.681-6.245-2.249-7.1-2.486a22.233,22.233,0,0,1-2.96-1.1c-.414-.178-1.805-.651-3.108-1.1-1.3-.414-2.575-.888-2.812-1.006a6.7,6.7,0,0,0-1.48-.474,9.281,9.281,0,0,1-2.664-1.036,2.648,2.648,0,0,0-1.036-.3c-.385,0-.444-1.273-.444-10.033v-10.033l-1.48-.385c-1.45-.385-1.48-.414-1.48-1.509,0-.947.651-2.131,4.321-7.725,2.368-3.611,5.327-8.139,6.6-10.063l2.249-3.492,1.332.178C35.24-358.391,36.512-358.214,37.311-358.066Z" transform="translate(-1.5 387.52)" fill="#051b64"/>
                        <path id="Path_13" data-name="Path 13" d="M157.691-272.992c-.71.444-1.154.888-1.036.977a8.645,8.645,0,0,0,1.717.355c3.167.385,2.841-.178,2.812,5.268,0,2.634-.03,4.913,0,5.091,0,.148.178-.03.385-.444,1.1-2.042,2.368-4.321,2.6-4.587a13.211,13.211,0,0,0,.266-3.463c0-3.078-.03-3.2-.651-3.315-.385-.059-1.391-.266-2.249-.444C159.407-274,159.141-273.969,157.691-272.992Z" transform="translate(-110.722 307.478)" fill="#051b64"/>
                        <path id="Path_14" data-name="Path 14" d="M136.268-264.173c-.326.385-1.184,1.953-2.989,5.268-1.036,1.924-1.776,3.256-3.2,5.83-.444.74-1.213,2.19-1.746,3.167-.533,1.006-1.421,2.664-2.042,3.67a12.737,12.737,0,0,0-1.065,2.131,1.066,1.066,0,0,1-.385.533c-.414.355-1.125.237-4.647-.829-1.065-.326-3.729-1.125-5.919-1.776s-4.41-1.332-4.913-1.48c-1.332-.444-1.332-.414-1.243.947.089,1.243.118,1.273,1.48,1.569a5.513,5.513,0,0,1,1.6.5,1.387,1.387,0,0,0,.888.237c.385,0,.77.118.858.3a.939.939,0,0,0,.71.3,24.465,24.465,0,0,1,4.321,1.184,28.99,28.99,0,0,0,4.173,1.184,2.562,2.562,0,0,1,.947.266,9.692,9.692,0,0,0,2.841.858,15.925,15.925,0,0,0,.888-1.569l.77-1.48v10.891c0,8.494.089,10.862.385,10.862a24.662,24.662,0,0,0,3.611-1.213c.178-.089.858-.326,1.569-.562l1.243-.385v-7.961c0-6.1.089-7.991.385-8.05.178-.089,1.154-.355,2.131-.621s2.042-.622,2.368-.74c1.776-.71,1.628-1.3,1.628,7.133,0,6.215.089,7.725.414,7.843a9.484,9.484,0,0,0,2.812-.651l2.4-.8v-27.317l-3.64-3.552C136.594-264.617,136.594-264.587,136.268-264.173Z" transform="translate(-76.543 300.789)" fill="#051b64"/>
                    </g>
                    <text id="Bengtson" transform="translate(275.416 4652.075)" fill="#051b64" font-size="35" font-family="Poppins-Bold, Poppins" font-weight="700"><tspan x="0" y="0">BENGTSON</tspan></text>
                    <text id="Multiservice" transform="translate(277.233 4670.769)" fill="#051b64" font-size="14" font-family="Poppins-Bold, Poppins" font-weight="700"><tspan x="0" y="0">MULTISERVICE</tspan></text>
                </g>
            </svg>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Forside</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Om Bengtsons Multiservice</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Tjenester
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Fliserens</a></li>
                        <li><a class="dropdown-item" href="#">Algebehandling</a></li>
                        <li><a class="dropdown-item" href="#">Facaderens</a></li>
                        <li><a class="dropdown-item" href="#">Tagrens</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Galleri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
