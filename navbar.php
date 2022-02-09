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

<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
        <a class="navbar-brand" href="#">
            <object class="logosvg" id="logo" data="image/Logo-hvid.svg"></object>

        </a>
        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="#">Forside</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link1 " href="#">Om Bengtsons Multiservice</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link2 dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Tjenester
                    </a>
                    <ul class="dropdown-menu dropdown-menu-macos mx-0 shadow" style="width: 220px;">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Separated link</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link3 " href="#">Galleri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link4 nav-link " href="#">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script type="text/javascript">
    const logo = document.querySelector('.logosvg');
    const nav = document.querySelector('.navbar');
    const navLink = document.querySelector('.nav-link');
    const navLink1 = document.querySelector('.nav-link1');
    const navLink2 = document.querySelector('.nav-link2');
    const navLink3 = document.querySelector('.nav-link3');
    const navLink4 = document.querySelector('.nav-link4');

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 600) {
            nav.classList.add('bg-light', 'shadow');
            navLink.classList.add('text-black');
            navLink1.classList.add('text-black');
            navLink2.classList.add('text-black');
            navLink3.classList.add('text-black');
            navLink4.classList.add('text-black');

        } else {
            nav.classList.remove('bg-light', 'shadow');
            navLink.classList.remove('text-black');
            navLink1.classList.remove('text-black');
            navLink2.classList.remove('text-black');
            navLink3.classList.remove('text-black');
            navLink4.classList.remove('text-black');

        }
    });


</script>

</body>
</html>
