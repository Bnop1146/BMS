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





<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-faded">
    <div class="navcon container-fluid">
        <a class="navbar-brand" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="180" height="110" class="logosvg" viewBox="0 0 431.889 156.592">
                <g id="Group_34" data-name="Group 34" transform="translate(-78.179 -36.395)">
                    <g id="Group_23" data-name="Group 23" transform="translate(78.179 36.395)">
                        <path id="Path_12" data-name="Path 12" d="M68.03-387.132a46.191,46.191,0,0,0-6.32,3.2c-2.528,1.475-7.711,4.466-11.545,6.657s-8.005,4.593-9.269,5.351C34.7-368.3,21.682-360.756,17.932-358.65c-12.3,6.994-13.525,7.795-15.084,10.028L1.5-346.641v75l1.348,1.98c1.6,2.275,2.444,2.823,19.087,12.345,13.146,7.584,29.536,16.98,39.143,22.542,4.677,2.7,6.531,3.539,8.09,3.708,4.045.379,2.36,1.264,34.3-17.317,2.781-1.643,6.952-4.045,9.27-5.351s5.435-3.118,6.952-4,4.635-2.654,6.952-4c10.786-6.109,11.713-6.91,12.64-11.123.59-2.612.632-7.416.548-37.542-.169-37.331-.084-36.446-2.444-39.143-1.433-1.643-2.992-2.57-24.438-14.915-3.834-2.191-8.005-4.593-9.269-5.351-1.264-.716-4.129-2.4-6.32-3.666-12.851-7.458-21.446-12.388-22.795-13.062A8.7,8.7,0,0,0,68.03-387.132ZM52.482-345.588c1.18.211,4.087.674,6.531,1.053s5.393.885,6.531,1.053c3.2.59,4.677.8,9.059,1.517,2.191.337,4.972.8,6.109,1.011,1.18.211,3.16.506,4.424.674,2.191.253,2.528.463,5.857,3.708,12.43,11.966,20.688,20.267,20.688,20.688a3.29,3.29,0,0,1-1.011,1.433c-.969.927-1.1.927-3.034.337-1.138-.337-2.4-.758-2.781-.927-.716-.295-.758.758-.843,17.106l-.126,17.444-1.685.463c-.927.253-2.065.59-2.528.758-1.011.379-1.1.421-9.9,3.2-3.834,1.222-7.331,2.36-7.795,2.528a51.874,51.874,0,0,1-8.89,2.528c-.885,0-6.194-1.685-10.281-3.244-2.486-.969-8.89-3.2-10.112-3.539a31.655,31.655,0,0,1-4.213-1.559c-.59-.253-2.57-.927-4.424-1.559-1.854-.59-3.666-1.264-4-1.433a9.542,9.542,0,0,0-2.107-.674,13.213,13.213,0,0,1-3.792-1.475,3.771,3.771,0,0,0-1.475-.421c-.548,0-.632-1.812-.632-14.284v-14.283l-2.107-.548c-2.065-.548-2.107-.59-2.107-2.149,0-1.348.927-3.034,6.152-11,3.371-5.14,7.584-11.587,9.4-14.326l3.2-4.972,1.9.253C49.533-346.051,51.345-345.8,52.482-345.588Z" transform="translate(-1.5 387.52)" fill="#fff"/>
                        <path id="Path_13" data-name="Path 13" d="M158.137-272.638c-1.011.632-1.643,1.264-1.475,1.39a12.316,12.316,0,0,0,2.444.506c4.508.548,4.045-.253,4,7.5,0,3.75-.042,6.994,0,7.247,0,.211.253-.042.548-.632,1.559-2.907,3.371-6.152,3.708-6.531a18.807,18.807,0,0,0,.379-4.93c0-4.382-.042-4.55-.927-4.719-.548-.084-1.98-.379-3.2-.632C160.581-274.07,160.2-274.028,158.137-272.638Z" transform="translate(-91.271 321.732)" fill="#fff"/>
                        <path id="Path_14" data-name="Path 14" d="M148.206-264.106c-.463.548-1.685,2.781-4.256,7.5-1.475,2.739-2.528,4.635-4.55,8.3-.632,1.053-1.728,3.118-2.486,4.508-.758,1.433-2.022,3.792-2.907,5.225a18.132,18.132,0,0,0-1.517,3.034,1.518,1.518,0,0,1-.548.758c-.59.506-1.6.337-6.615-1.18-1.517-.463-5.309-1.6-8.427-2.528s-6.278-1.9-6.994-2.107c-1.9-.632-1.9-.59-1.77,1.348.126,1.77.169,1.812,2.107,2.233a7.848,7.848,0,0,1,2.275.716,1.974,1.974,0,0,0,1.264.337c.548,0,1.1.169,1.222.421a1.337,1.337,0,0,0,1.011.421,34.83,34.83,0,0,1,6.152,1.685,41.274,41.274,0,0,0,5.941,1.685,3.647,3.647,0,0,1,1.348.379,13.8,13.8,0,0,0,4.045,1.222,22.683,22.683,0,0,0,1.264-2.233l1.1-2.107v15.505c0,12.093.126,15.463.548,15.463a35.111,35.111,0,0,0,5.14-1.728c.253-.126,1.222-.463,2.233-.8l1.77-.548v-11.334c0-8.68.126-11.376.548-11.461.253-.126,1.643-.506,3.034-.885s2.907-.885,3.371-1.053c2.528-1.011,2.317-1.854,2.317,10.154,0,8.848.126,11,.59,11.166a13.5,13.5,0,0,0,4-.927l3.413-1.138v-38.89l-5.182-5.056C148.669-264.738,148.669-264.7,148.206-264.106Z" transform="translate(-63.179 316.235)" fill="#fff"/>
                    </g>
                    <text id="Bengtson" transform="translate(226.067 121.382)" fill="#fff" font-size="52" font-family="Poppins-Bold, Poppins" font-weight="700"><tspan x="0" y="0">BENGTSON</tspan></text>
                    <text id="Multiservice" transform="translate(228.654 147.314)" fill="#fff" font-size="22" font-family="Poppins-Bold, Poppins" font-weight="700"><tspan x="0" y="0">MULTISERVICE</tspan></text>
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
                    <ul class="dropdown-menu m-auto text-center" aria-labelledby="navbarDropdownMenuLink">
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



</body>
</html>
