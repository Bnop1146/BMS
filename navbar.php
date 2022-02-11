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

<nav class="navbar fixed-top navbar-expand-lg navbar-dark ">
    <div class="container">

        <a class="navbar-brand" href="#">
            <svg xmlns= "http://www.w3.org/2000/svg" class="logosvg" viewBox="0 0 678.661 242.2">
                <path id="logo" data-name="Union 167" d="M4137.314-978.8c-.825,0-1.618-.118-2.653-.215-2.411-.26-5.279-1.563-12.512-5.735-14.859-8.6-40.209-23.135-60.542-34.865-25.742-14.728-27.045-15.575-29.522-19.094l-2.086-3.063v-116l2.086-3.063c2.412-3.454,4.3-4.693,23.331-15.51,5.8-3.259,25.936-14.924,35.517-20.529,1.956-1.173,8.407-4.888,14.338-8.276s13.945-8.017,17.855-10.3a71.469,71.469,0,0,1,9.775-4.953,13.448,13.448,0,0,1,10.1.912c2.086,1.042,15.379,8.668,35.255,20.2,3.391,1.955,7.822,4.561,9.776,5.669,1.955,1.175,8.407,4.889,14.337,8.277,33.172,19.094,35.583,20.529,37.8,23.069,3.649,4.172,3.519,2.8,3.779,60.543.131,46.6.066,54.025-.847,58.065-1.433,6.517-2.867,7.756-19.55,17.2-3.583,2.085-8.407,4.821-10.752,6.191s-7.169,4.17-10.752,6.191-10.036,5.735-14.338,8.277c-41.216,23.979-46.228,27-50.392,27Zm-42.536-171.023c-2.8,4.237-9.319,14.208-14.533,22.158-8.082,12.316-9.515,14.924-9.515,17.008,0,2.412.066,2.477,3.259,3.324l3.258.847v22.092c0,19.289.13,22.092.979,22.092a5.83,5.83,0,0,1,2.281.651c3.193,1.565,3.779,1.825,5.865,2.281a14.742,14.742,0,0,1,3.258,1.043c.521.26,3.324,1.3,6.191,2.216,2.867.977,5.93,2.02,6.844,2.411a49.148,49.148,0,0,0,6.516,2.412c1.891.521,11.8,3.975,15.642,5.474,6.321,2.412,14.533,5.018,15.9,5.018,1.5,0,10.038-2.411,13.751-3.91.716-.26,6.125-2.02,12.057-3.909,13.619-4.3,13.75-4.366,15.314-4.953.716-.261,2.476-.782,3.91-1.173l2.607-.717.2-26.98c.131-25.285.195-26.915,1.3-26.459.586.261,2.542.913,4.3,1.435,3,.912,3.194.912,4.694-.521a5.1,5.1,0,0,0,1.563-2.216c0-.652-12.773-13.49-32-32-5.149-5.018-5.67-5.344-9.059-5.735-1.955-.26-5.018-.717-6.842-1.042-1.759-.326-6.062-1.043-9.45-1.565-6.777-1.107-9.058-1.433-14.01-2.346-1.761-.261-6.322-1.042-10.1-1.63s-8.276-1.3-10.1-1.628c-1.76-.326-4.562-.717-6.191-.977l-2.933-.392Zm47.639,79.246v-23.982l-1.7,3.258a34.571,34.571,0,0,1-1.955,3.454c-.195.261-4.626-1.042-6.255-1.891a5.658,5.658,0,0,0-2.086-.585,63.715,63.715,0,0,1-9.189-2.608c-2.737-1.042-8.343-2.606-9.515-2.606a2.072,2.072,0,0,1-1.564-.652c-.195-.391-1.041-.651-1.89-.651a3.052,3.052,0,0,1-1.955-.522,12.153,12.153,0,0,0-3.519-1.107c-3-.652-3.063-.717-3.258-3.454-.2-3-.2-3.063,2.737-2.084,1.108.325,5.995,1.823,10.818,3.258s10.688,3.193,13.033,3.91c7.754,2.346,9.319,2.606,10.231,1.825a2.353,2.353,0,0,0,.847-1.173,28.2,28.2,0,0,1,2.346-4.693c1.37-2.216,3.324-5.865,4.5-8.081,1.173-2.151,2.868-5.344,3.845-6.972,3.128-5.67,4.756-8.6,7.038-12.839,3.976-7.3,5.866-10.752,6.583-11.6.717-.912.717-.977,14.6,12.513l8.016,7.819v60.151l-5.279,1.76c-2.932.977-5.735,1.63-6.191,1.433-.716-.261-.913-3.583-.913-17.27,0-18.572.325-17.27-3.584-15.705-.717.26-3.063,1.042-5.214,1.63s-4.3,1.172-4.691,1.368c-.652.13-.847,4.3-.847,17.726v17.53l-2.738.849c-1.563.521-3.062,1.042-3.455,1.237a54.286,54.286,0,0,1-7.95,2.672C4142.611-1046.661,4142.417-1051.875,4142.417-1070.578Zm231.815,20.094a8.538,8.538,0,0,1-3.705-2.812,7.687,7.687,0,0,1-1.463-4.484h6.916a3.356,3.356,0,0,0,1.027,2.261,3.3,3.3,0,0,0,2.28.779,3.556,3.556,0,0,0,2.279-.665,2.224,2.224,0,0,0,.837-1.842,2.183,2.183,0,0,0-.666-1.634,5.371,5.371,0,0,0-1.634-1.063,26.082,26.082,0,0,0-2.754-.95,29.919,29.919,0,0,1-4.218-1.6,7.791,7.791,0,0,1-2.812-2.355,6.57,6.57,0,0,1-1.178-4.066,6.992,6.992,0,0,1,2.7-5.833,11.086,11.086,0,0,1,7.03-2.109,11.216,11.216,0,0,1,7.107,2.109,7.549,7.549,0,0,1,2.887,5.871h-7.029a2.747,2.747,0,0,0-.951-2.033,3.343,3.343,0,0,0-2.241-.741,2.791,2.791,0,0,0-1.9.626,2.259,2.259,0,0,0-.722,1.806,2.239,2.239,0,0,0,1.216,2.014,19.9,19.9,0,0,0,3.8,1.557,35.141,35.141,0,0,1,4.2,1.672,7.975,7.975,0,0,1,2.793,2.319,6.2,6.2,0,0,1,1.178,3.914,7.681,7.681,0,0,1-1.159,4.142,8.121,8.121,0,0,1-3.363,2.964,11.5,11.5,0,0,1-5.206,1.1A13.721,13.721,0,0,1,4374.232-1050.484Zm-77.729-.285a9.207,9.207,0,0,1-3.933-3.725,11.886,11.886,0,0,1-1.444-6.061v-15.921h6.5v15.959a5.286,5.286,0,0,0,1.177,3.687,4.452,4.452,0,0,0,3.459,1.292,4.572,4.572,0,0,0,3.5-1.292,5.177,5.177,0,0,0,1.216-3.687v-15.959h6.5v15.921a11.325,11.325,0,0,1-1.52,6.042,9.73,9.73,0,0,1-4.085,3.724,12.841,12.841,0,0,1-5.72,1.255A12.537,12.537,0,0,1,4296.5-1050.769Zm186.353-.571a12.247,12.247,0,0,1-4.77-4.807,14.221,14.221,0,0,1-1.71-7.03,14.336,14.336,0,0,1,1.71-7.049,12.214,12.214,0,0,1,4.77-4.825,13.838,13.838,0,0,1,6.934-1.73,13.271,13.271,0,0,1,8.133,2.509,12.043,12.043,0,0,1,4.521,6.84H4495.3a5.774,5.774,0,0,0-2.26-2.547,6.36,6.36,0,0,0-3.326-.873,6.206,6.206,0,0,0-4.864,2.089,8.091,8.091,0,0,0-1.862,5.586,8.089,8.089,0,0,0,1.862,5.586,6.206,6.206,0,0,0,4.864,2.09,6.35,6.35,0,0,0,3.326-.875,5.77,5.77,0,0,0,2.26-2.545h7.144a11.954,11.954,0,0,1-4.521,6.821,13.342,13.342,0,0,1-8.133,2.489A13.838,13.838,0,0,1,4482.855-1051.339Zm23.579,1.54v-26.676h16.34v5.205h-9.842v5.4h8.7v5.016h-8.7v5.852h9.842v5.207Zm-40.167,0v-26.676h6.5v26.676Zm-20.292,0-9.462-26.676h6.916l6.613,20.14,6.649-20.14h6.878l-9.462,26.676Zm-18.62,0-5.548-10.071h-1.558v10.071h-6.5v-26.676h10.906a12,12,0,0,1,5.376,1.1,7.6,7.6,0,0,1,3.326,3.022,8.423,8.423,0,0,1,1.1,4.274,7.942,7.942,0,0,1-1.5,4.751,8.076,8.076,0,0,1-4.427,2.964l6.155,10.565Zm-7.106-14.669h4.027a3.686,3.686,0,0,0,2.679-.873,3.3,3.3,0,0,0,.893-2.471,3.2,3.2,0,0,0-.893-2.394,3.686,3.686,0,0,0-2.679-.873h-4.027Zm-27.057,14.669v-26.676h16.341v5.205h-9.842v5.4h8.7v5.016h-8.7v5.852h9.842v5.207Zm-34.579,0v-26.676h6.5v26.676Zm-16.835,0v-21.471h-7.068v-5.205h20.635v5.205h-7.069v21.471Zm-23.75,0v-26.676h6.5v21.66h8.513v5.016Zm-37.961,0v-16l-5.965,16h-5.245l-6-16.037v16.037h-6.5v-26.676h7.675l7.486,18.468,7.411-18.468h7.637v26.676Zm321.194-43.316a29.236,29.236,0,0,1-11.135-10.923A30.53,30.53,0,0,1,4586-1119.8a30.3,30.3,0,0,1,4.122-15.725,29.319,29.319,0,0,1,11.135-10.88,31.14,31.14,0,0,1,15.427-3.91,31.146,31.146,0,0,1,15.429,3.91,28.7,28.7,0,0,1,11.049,10.88,30.79,30.79,0,0,1,4.038,15.725,30.768,30.768,0,0,1-4.081,15.766,29.013,29.013,0,0,1-11.049,10.923,30.91,30.91,0,0,1-15.386,3.91A31.141,31.141,0,0,1,4601.262-1093.115Zm3.91-39.355q-4.291,4.674-4.293,12.666,0,7.9,4.293,12.622t11.517,4.717a14.644,14.644,0,0,0,11.433-4.76q4.293-4.759,4.292-12.579,0-7.906-4.292-12.623a14.708,14.708,0,0,0-11.433-4.717Q4609.466-1137.145,4605.172-1132.47Zm-59.118,41.14a19.116,19.116,0,0,1-8.287-6.29,17.185,17.185,0,0,1-3.272-10.03h15.47a7.507,7.507,0,0,0,2.295,5.058,7.378,7.378,0,0,0,5.1,1.743,7.978,7.978,0,0,0,5.1-1.488,4.977,4.977,0,0,0,1.87-4.123,4.885,4.885,0,0,0-1.488-3.655,12.014,12.014,0,0,0-3.655-2.38,59.02,59.02,0,0,0-6.163-2.125,67.122,67.122,0,0,1-9.435-3.57,17.434,17.434,0,0,1-6.291-5.269,14.69,14.69,0,0,1-2.634-9.1q0-8.329,6.035-13.047t15.724-4.717q9.861,0,15.9,4.717t6.46,13.132h-15.725a6.152,6.152,0,0,0-2.125-4.547,7.487,7.487,0,0,0-5.015-1.658,6.249,6.249,0,0,0-4.25,1.4,5.055,5.055,0,0,0-1.615,4.038,5,5,0,0,0,2.72,4.5,44.571,44.571,0,0,0,8.5,3.485,78.609,78.609,0,0,1,9.392,3.74,17.888,17.888,0,0,1,6.248,5.185,13.881,13.881,0,0,1,2.634,8.754,17.19,17.19,0,0,1-2.591,9.266,18.17,18.17,0,0,1-7.523,6.629,25.743,25.743,0,0,1-11.645,2.465A30.692,30.692,0,0,1,4546.055-1091.33Zm-112.667-1.913A27.545,27.545,0,0,1,4422.592-1104a31.546,31.546,0,0,1-3.868-15.725,31.784,31.784,0,0,1,3.868-15.766,27.537,27.537,0,0,1,10.752-10.8,31.552,31.552,0,0,1,15.725-3.868q10.71,0,18.063,5.184a24.476,24.476,0,0,1,9.733,14.365H4460.8a10.874,10.874,0,0,0-4.632-4.547,15.159,15.159,0,0,0-7.1-1.572,14.6,14.6,0,0,0-11.3,4.632q-4.251,4.632-4.25,12.367,0,8.246,4.462,12.878t12.283,4.632a14.853,14.853,0,0,0,9.053-2.72,15.418,15.418,0,0,0,5.4-7.819h-18.444v-10.71h31.619v13.514a28.491,28.491,0,0,1-5.483,10.115,28.93,28.93,0,0,1-9.816,7.565,30.354,30.354,0,0,1-13.431,2.889A31.79,31.79,0,0,1,4433.387-1093.243Zm260.738,3.444-24.31-36.806v36.806H4655.28v-59.671h14.535l24.31,36.975v-36.975h14.535v59.671Zm-195.585,0v-48.025h-15.81v-11.646h46.154v11.646h-15.809v48.025Zm-102.425,0-24.309-36.806v36.806h-14.535v-59.671h14.535l24.309,36.975v-36.975h14.535v59.671Zm-84.83,0v-59.671h36.549v11.646H4325.82v12.07h19.465v11.219H4325.82v13.09h22.014v11.646Zm-56.015,0v-59.671h26.859q9.1,0,14.237,4.166a13.773,13.773,0,0,1,5.143,11.3,13.653,13.653,0,0,1-2.763,8.755,14.282,14.282,0,0,1-7.353,4.845,13.881,13.881,0,0,1,8.331,5.143,14.6,14.6,0,0,1,3.145,9.222,14.657,14.657,0,0,1-5.228,11.857q-5.227,4.378-14.578,4.378Zm14.535-11.731h10.71a8.62,8.62,0,0,0,5.652-1.657,5.884,5.884,0,0,0,2-4.8,6.146,6.146,0,0,0-2.083-4.93,8.533,8.533,0,0,0-5.737-1.786h-10.54Zm0-23.8h9.52a8.421,8.421,0,0,0,5.482-1.573,5.649,5.649,0,0,0,1.913-4.632,5.777,5.777,0,0,0-1.913-4.675,8.272,8.272,0,0,0-5.482-1.614h-9.52Zm-128.693,6.007c-.065-.391,0-5.41,0-11.21.065-11.991.783-10.752-6.191-11.6a19.039,19.039,0,0,1-3.78-.782c-.26-.195.717-1.172,2.282-2.151,3.193-2.15,3.779-2.216,8.472-1.237,1.889.39,4.1.847,4.952.977,1.369.26,1.434.521,1.434,7.3,0,3.844-.261,7.3-.587,7.625-.521.586-3.323,5.6-5.735,10.1-.349.7-.659,1.092-.786,1.092C4141.134-1119.21,4141.113-1119.248,4141.113-1119.323Z"
                      transform="translate(-4030 1221.001)"
                      fill="white"/>
            </svg>


        </a>

        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">


           <span class="navbar-toggler">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="white" class="bi bi-list" viewBox="0 0 16 16">
                  <path id="burger" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
           </span>


        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="Forside.php">Forside</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link1 " href="Om BMS.php">Om Bengtsons Multiservice</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link2 dropdown-toggle" href="fliserens.php" id="navbarDropdown" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        Tjenester
                    </a>
                    <ul class="dropdown-menu dropdown-menu-macos mx-0 shadow">
                        <li><a class="dropdown-item" href="fliserens.php">Fliserens</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="algebehandling.php">Algebehandling</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="facaderens.php">Facaderens</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="tagogmaling.php">Tagrens og Maling</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-link3 " href="Galleri.php">Galleri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link4 nav-link " href="kontakt.php">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script type="text/javascript">

    const burger = document.getElementById('burger');
    const logo = document.getElementById("logo");
    const nav = document.querySelector('.navbar');
    const navLink = document.querySelector('.nav-link');
    const navLink1 = document.querySelector('.nav-link1');
    const navLink2 = document.querySelector('.nav-link2');
    const navLink3 = document.querySelector('.nav-link3');
    const navLink4 = document.querySelector('.nav-link4');

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 400) {
            logo.setAttribute("fill", "#78C1FF");
            burger.setAttribute("fill", "black" )
            nav.classList.add('bg-light', 'shadow');
            navLink.classList.add('text-black');
            navLink1.classList.add('text-black');
            navLink2.classList.add('text-black');
            navLink3.classList.add('text-black');
            navLink4.classList.add('text-black');

        } else  {
            logo.setAttribute("fill", "white");
            burger.setAttribute("fill", "white" )
            nav.classList.remove('bg-light', 'shadow');
            navLink.classList.remove('text-black');
            navLink1.classList.remove('text-black');
            navLink2.classList.remove('text-black');
            navLink3.classList.remove('text-black');
            navLink4.classList.remove('text-black');
            logo.classList.remove("scroll-logo");

        }
    });



</script>



</body>
</html>
