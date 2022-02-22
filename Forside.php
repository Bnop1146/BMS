<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Bengtsons Multiservice</title>
    <link rel="shortcut icon" type="image/x-icon" href="image/favicon.ico" />

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/Forside.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<?php include 'navbar.php';?>

<div class="banner" id="bannersek">

    <div class="bannerdel">
        <p class="over2">Overskrift</p>
        <p class="over3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ea explicabo nisi quia blanditiis assumenda quos veritatis sit deleniti porro nulla temporibus deserunt, iure in labore incidunt quis eos.</p>
        <a href="#"><button type="button" class="bannercta btn">Læs mere</button></a>
    </div>
    <video autoplay muted loop>
        <source src="image/ømer.mp4" type="video/mp4">
    </video>

</div>

<div class="servicesek">
    <div class="servicerow row">
    </div>
    <div class="row">
        <div class="column">
            <div class="card">
                <div class="icon-wrapper" data-aos="fade-down" data-aos-duration="2000">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="75" viewBox="0 0 161.049 153.009">
                        <g id="Sikker_betaling_ikon" data-name="Sikker betaling ikon" transform="translate(-61.327 -57.743)">
                            <g id="Group_1" data-name="Group 1" transform="translate(61.327 57.743)">
                                <path id="Subtraction_2" data-name="Subtraction 2" d="M.16,149.574H0V0H.188A14,14,0,0,1,5.579,1.074l56.1,23.373A14.027,14.027,0,0,1,70.294,37.39,147.538,147.538,0,0,1,68.539,60.3,132.108,132.108,0,0,1,63.7,80.561,121.305,121.305,0,0,1,47.312,113.28a116.5,116.5,0,0,1-10.273,12.529A110.441,110.441,0,0,1,26.23,135.831,87.045,87.045,0,0,1,5.55,148.5,13.984,13.984,0,0,1,.16,149.574Zm.015-130.5h0L.2,130.386c24.144-12.008,50.317-41.929,51.363-89.9Z" transform="translate(69.237)"/>
                                <path id="Subtraction_3" data-name="Subtraction 3" d="M.16,0H0V149.572H.188A14,14,0,0,0,5.579,148.5l56.1-23.373a14.027,14.027,0,0,0,8.619-12.942,147.537,147.537,0,0,0-1.755-22.91A132.106,132.106,0,0,0,63.7,69.013,121.305,121.305,0,0,0,47.312,36.294,116.5,116.5,0,0,0,37.039,23.765,110.444,110.444,0,0,0,26.23,13.743,87.046,87.046,0,0,0,5.55,1.074,13.984,13.984,0,0,0,.16,0ZM.175,130.5h0L.2,19.188c24.144,12.008,50.317,41.929,51.363,89.9Z" transform="translate(70.294 149.574) rotate(180)"/>
                                <rect id="Rectangle_21" data-name="Rectangle 21" width="25.898" height="107.291" rx="12.949" transform="translate(56.552 20.613)" fill="#fff"/>
                            </g>
                            <g id="Group_2" data-name="Group 2" transform="translate(61.327 57.743)">
                                <path id="Subtraction_2-2" data-name="Subtraction 2" d="M.16,149.574H0V0H.188A14,14,0,0,1,5.579,1.074l56.1,23.373A14.027,14.027,0,0,1,70.294,37.39,147.538,147.538,0,0,1,68.539,60.3,132.108,132.108,0,0,1,63.7,80.561,121.305,121.305,0,0,1,47.312,113.28a116.5,116.5,0,0,1-10.273,12.529A110.441,110.441,0,0,1,26.23,135.831,87.045,87.045,0,0,1,5.55,148.5,13.984,13.984,0,0,1,.16,149.574Zm.015-130.5h0L.2,130.386c24.144-12.008,50.317-41.929,51.363-89.9Z" transform="translate(69.237)"/>
                                <path id="Subtraction_3-2" data-name="Subtraction 3" d="M.16,0H0V149.572H.188A14,14,0,0,0,5.579,148.5l56.1-23.373a14.027,14.027,0,0,0,8.619-12.942,147.537,147.537,0,0,0-1.755-22.91A132.106,132.106,0,0,0,63.7,69.013,121.305,121.305,0,0,0,47.312,36.294,116.5,116.5,0,0,0,37.039,23.765,110.444,110.444,0,0,0,26.23,13.743,87.046,87.046,0,0,0,5.55,1.074,13.984,13.984,0,0,0,.16,0ZM.175,130.5h0L.2,19.188c24.144,12.008,50.317,41.929,51.363,89.9Z" transform="translate(70.294 149.574) rotate(180)"/>
                                <rect id="Rectangle_21-2" data-name="Rectangle 21" width="25.898" height="107.291" rx="12.949" transform="translate(56.552 20.613)" fill="#fff"/>
                            </g>
                            <path id="credit-card-regular" d="M112.725,32H10.271A10.257,10.257,0,0,0,0,42.25v75.164a10.257,10.257,0,0,0,10.271,10.25H112.725A10.257,10.257,0,0,0,123,117.414V42.25A10.257,10.257,0,0,0,112.725,32ZM11.552,42.25h99.891a1.285,1.285,0,0,1,1.281,1.281V52.5H10.271V43.531A1.285,1.285,0,0,1,11.552,42.25Zm99.891,75.164H11.552a1.285,1.285,0,0,1-1.281-1.281v-36.3H112.725v36.3A1.285,1.285,0,0,1,111.443,117.414ZM41,96.06V104.6a2.57,2.57,0,0,1-2.562,2.562H23.062A2.57,2.57,0,0,1,20.5,104.6V96.06A2.57,2.57,0,0,1,23.062,93.5H38.436A2.57,2.57,0,0,1,41,96.06Zm41,0V104.6a2.57,2.57,0,0,1-2.562,2.562H50.394a2.57,2.57,0,0,1-2.562-2.562V96.06A2.57,2.57,0,0,1,50.394,93.5H79.435A2.57,2.57,0,0,1,82,96.06Z" transform="translate(99.381 83.088)" fill="#5099f4"/>
                        </g>
                    </svg>

                </div>
                <h3 class="mt-2" data-aos="fade-down">Sikker Betaling</h3>
                <p data-aos="fade-down">
                    Efter afslutning af arbejdet
                    får du en faktura
                </p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="icon-wrapper" data-aos="fade-down" data-aos-duration="2000">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="75" viewBox="0 0 150 153.009">
                        <g id="Gratis_opmåling_Ikon" data-name="Gratis opmåling Ikon" transform="translate(-61.106 -56.524)">
                            <path id="home-solid" d="M72.927,62.282l-47.964,39.5v42.636a4.162,4.162,0,0,0,4.162,4.162l29.152-.075a4.162,4.162,0,0,0,4.142-4.162v-24.9a4.162,4.162,0,0,1,4.162-4.162h16.65a4.162,4.162,0,0,1,4.162,4.162v24.881a4.162,4.162,0,0,0,4.162,4.175l29.142.081a4.162,4.162,0,0,0,4.162-4.162V101.757L76.907,62.282a3.171,3.171,0,0,0-3.98,0Zm75.764,26.85L126.942,71.205V35.172a3.122,3.122,0,0,0-3.122-3.122H109.252a3.122,3.122,0,0,0-3.122,3.122v18.89L82.839,34.9a12.487,12.487,0,0,0-15.869,0L1.118,89.132a3.122,3.122,0,0,0-.416,4.4l6.634,8.065a3.122,3.122,0,0,0,4.4.424l61.193-50.4a3.171,3.171,0,0,1,3.98,0l61.2,50.4a3.122,3.122,0,0,0,4.4-.416l6.634-8.065a3.122,3.122,0,0,0-.442-4.4Z" transform="translate(61.263 24.474)"/>
                            <path id="Subtraction_1" data-name="Subtraction 1" d="M138.484,30.154H11a11,11,0,0,1-11-11V11A11,11,0,0,1,11,0h4.816V12.333a3,3,0,0,0,3,3h2.673a3,3,0,0,0,3-3V0H37.244V12.333a3,3,0,0,0,3,3h2.673a3,3,0,0,0,3-3V0H58.671V12.333a3,3,0,0,0,3,3h2.674a3,3,0,0,0,3-3V0H80.1V12.333a3,3,0,0,0,3,3h2.673a3,3,0,0,0,3-3V0h12.754V12.333a3,3,0,0,0,3,3H107.2a3,3,0,0,0,3-3V0h12.755V12.333a3,3,0,0,0,3,3h2.673a3,3,0,0,0,3-3V0h6.856a11,11,0,0,1,11,11v8.154a11,11,0,0,1-11,11Z" transform="translate(61.106 179.379)" fill="#5099f4"/>
                        </g>
                    </svg>


                </div>
                <h3 class="mt-2" data-aos="fade-down">Gratis Opmåling</h3>
                <p data-aos="fade-down">
                    Første samtale og
                    opmåling er altid gratis

                </p>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <div class="icon-wrapper" data-aos="fade-down" data-aos-duration="2000">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="75" viewBox="0 0 186.202 149.522">
                        <g id="Group_25" data-name="Group 25" transform="translate(-1055.701 -840.473)">
                            <path id="tag-solid" d="M0,57.843V11.013A11.013,11.013,0,0,1,11.013,0H57.843A11.013,11.013,0,0,1,65.63,3.226l48.612,48.612a11.013,11.013,0,0,1,0,15.574L67.412,114.243a11.013,11.013,0,0,1-15.574,0L3.226,65.63A11.013,11.013,0,0,1,0,57.843Zm25.7-43.16A11.013,11.013,0,1,0,36.709,25.7,11.013,11.013,0,0,0,25.7,14.684Z" transform="translate(1236.903 867.527) rotate(90)" fill="#fff" stroke="#000" stroke-width="10"/>
                            <path id="tag-solid-2" data-name="tag-solid" d="M0,57.843V11.013A11.013,11.013,0,0,1,11.013,0H57.843A11.013,11.013,0,0,1,65.63,3.226l48.612,48.612a11.013,11.013,0,0,1,0,15.574L67.412,114.243a11.013,11.013,0,0,1-15.574,0L3.226,65.63A11.013,11.013,0,0,1,0,57.843Zm25.7-43.16A11.013,11.013,0,1,0,36.709,25.7,11.013,11.013,0,0,0,25.7,14.684Z" transform="translate(1178.169 845.473) rotate(90)" fill="#fff" stroke="#000" stroke-width="10"/>
                            <g id="Path_1" data-name="Path 1" transform="translate(1137.659 897.881)" fill="#5099f4">
                                <path d="M 24.42191314697266 44.84382247924805 C 18.9670238494873 44.84382247924805 13.83863353729248 42.71957397460938 9.981443405151367 38.86238479614258 C 6.124253273010254 35.00519180297852 4.000003337860107 29.87680244445801 4.000003337860107 24.42191314697266 C 4.000003337860107 18.9670238494873 6.124253273010254 13.83863353729248 9.981443405151367 9.981443405151367 C 13.83863353729248 6.124253273010254 18.9670238494873 4.000003337860107 24.42191314697266 4.000003337860107 C 29.87680244445801 4.000003337860107 35.00519180297852 6.124253273010254 38.86238479614258 9.981443405151367 C 42.71957397460938 13.83863353729248 44.84382247924805 18.9670238494873 44.84382247924805 24.42191314697266 C 44.84382247924805 29.87680244445801 42.71957397460938 35.00519180297852 38.86238479614258 38.86238479614258 C 35.00519180297852 42.71957397460938 29.87680244445801 44.84382247924805 24.42191314697266 44.84382247924805 Z" stroke="none"/>
                                <path d="M 24.42191314697266 8 C 15.36684036254883 8 8 15.36684036254883 8 24.42191314697266 C 8 33.47698593139648 15.36684036254883 40.84382629394531 24.42191314697266 40.84382629394531 C 33.47698593139648 40.84382629394531 40.84382629394531 33.47698593139648 40.84382629394531 24.42191314697266 C 40.84382629394531 15.36684036254883 33.47698593139648 8 24.42191314697266 8 M 24.42191314697266 0 C 37.90977096557617 0 48.84382629394531 10.93405532836914 48.84382629394531 24.42191314697266 C 48.84382629394531 37.90977096557617 37.90977096557617 48.84382629394531 24.42191314697266 48.84382629394531 C 10.93405532836914 48.84382629394531 0 37.90977096557617 0 24.42191314697266 C 0 10.93405532836914 10.93405532836914 0 24.42191314697266 0 Z" stroke="none" fill="#5099f4"/>
                            </g>
                            <line id="Line_2" data-name="Line 2" x2="23.952" transform="translate(1149.994 916.899)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="6"/>
                            <line id="Line_3" data-name="Line 3" x2="23.952" transform="translate(1149.994 927.904)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="6"/>
                        </g>
                    </svg>

                </div>
                <h3 class="mt-2" data-aos="fade-down">Prismatch</h3>
                <p data-aos="fade-down">
                    Har du fået et bedre
                    tilbud, så forsøger
                    vi at matche det
                </p>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="icon-wrapper" data-aos="fade-down" data-aos-duration="2000">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="75" viewBox="0 0 136.445 146.265">
                        <g id="Garanti_ikon" data-name="Garanti ikon" transform="translate(-1234.327 -414.148)">
                            <g id="Group_3" data-name="Group 3" transform="translate(1234.327 414.148)">
                                <path id="Subtraction_2" data-name="Subtraction 2" d="M.156,146.265H0V0H.184A13.687,13.687,0,0,1,5.456,1.05L60.311,23.906a13.717,13.717,0,0,1,8.429,12.656,144.275,144.275,0,0,1-1.716,22.4A129.184,129.184,0,0,1,62.29,78.779a118.622,118.622,0,0,1-16.025,32A113.925,113.925,0,0,1,36.22,123.026a108,108,0,0,1-10.57,9.8A85.12,85.12,0,0,1,5.427,145.215,13.675,13.675,0,0,1,.156,146.265ZM.171,18.649h0L.2,127.5c23.61-11.742,49.2-41,50.227-87.911Z" transform="translate(67.706)"/>
                                <path id="Subtraction_3" data-name="Subtraction 3" d="M.156,0H0V146.264H.184a13.688,13.688,0,0,0,5.272-1.05l54.855-22.856A13.717,13.717,0,0,0,68.739,109.7a144.275,144.275,0,0,0-1.716-22.4A129.184,129.184,0,0,0,62.29,67.486a118.622,118.622,0,0,0-16.025-32A113.923,113.923,0,0,0,36.22,23.24a108,108,0,0,0-10.57-9.8A85.121,85.121,0,0,0,5.427,1.05,13.675,13.675,0,0,0,.156,0ZM.171,127.616h0L.2,18.764c23.61,11.742,49.2,41,50.227,87.911Z" transform="translate(68.739 146.265) rotate(180)"/>
                                <rect id="Rectangle_21" data-name="Rectangle 21" width="25.325" height="104.918" rx="12.662" transform="translate(55.302 20.157)" fill="#fff"/>
                            </g>
                            <path id="check-solid" d="M32.119,134.232,1.385,103.5a4.728,4.728,0,0,1,0-6.687l6.687-6.687a4.728,4.728,0,0,1,6.687,0l20.7,20.7L79.808,66.483a4.728,4.728,0,0,1,6.687,0l6.687,6.687a4.728,4.728,0,0,1,0,6.687L38.806,134.233a4.728,4.728,0,0,1-6.687,0Z" transform="translate(1268.157 379.38)" fill="#5099f4"/>
                        </g>
                    </svg>

                </div>
                <h3 class="mt-2" data-aos="fade-down">Garanti</h3>
                <p data-aos="fade-down">
                    Mulighed for garanti
                    på holdbarheden, ved
                    årlig vedligeholdelse.
                </p>
            </div>
        </div>
    </div>
</div>


<div class="container my-5" data-aos="fade-down">
    <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">

        <div class="col-sm-12 col-md-6 col-lg-5 offset-lg-1 p-3 p-lg-5 pt-lg-3 mt-md-3 mb-md-3 mt-lg-4 mb-lg-4">
            <h1 class="vidstover display-4 fw-bold lh-1">Vidste du at?</h1>
            <p class="vidsttekst">At alger og mos kan virke som svampe, der gør det muligt for fugt at trænge ned i tagkonstruktionen og derved kan forsage alvorlige skader?</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
                <a class="vidstknap btn" href="#" role="button">
                    <span class="spinner-grow spinner-grow-sm me-2"></span>
                    læs mere
                </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4  mb-4 overflow-hidden">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/zpOULjyy-n8?rel=0" title="YouTube video" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>



<div class="flipcon container">
    <div class="fliprow row">

        <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="frontinner mt-4"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="122" viewBox="0 0 117.239 122" data-aos="fade-down">
                            <g id="Group_24" data-name="Group 24" transform="translate(-511 -639)">
                                <path id="Path_703" data-name="Path 703" d="M0,0H26.185V47.015H0Z" transform="translate(511 662.21)" fill="#d9eeff"/>
                                <path id="Path_698" data-name="Path 698" d="M0,0H26.185V47.015H0Z" transform="translate(541.351 639)" fill="#d9eeff"/>
                                <path id="Path_706" data-name="Path 706" d="M0,0H26.185V47.015H0Z" transform="translate(541.351 690.18)" fill="#78c1ff"/>
                                <path id="Path_704" data-name="Path 704" d="M0,0H26.185V47.61H0Z" transform="translate(511 713.39)" fill="#78c1ff"/>
                                <path id="Path_700" data-name="Path 700" d="M0,0H26.185V47.015H0Z" transform="translate(571.702 713.985)" fill="#78c1ff"/>
                                <path id="Path_696" data-name="Path 696" d="M0,0H26.185V19.639H0Z" transform="translate(541.351 741.361)" fill="#d9eeff"/>
                                <rect id="Rectangle_329" data-name="Rectangle 329" width="26.185" height="19.639" transform="translate(571.702 639)" fill="#78c1ff"/>
                                <rect id="Rectangle_330" data-name="Rectangle 330" width="26.185" height="19.639" transform="translate(511 639)" fill="#78c1ff"/>
                                <path id="Path_701" data-name="Path 701" d="M0,0H26.185V19.639H0Z" transform="translate(602.054 741.361)" fill="#d9eeff"/>
                                <path id="Path_702" data-name="Path 702" d="M0,0H26.185V47.015H0Z" transform="translate(602.054 690.18)" fill="#78c1ff"/>
                                <path id="Path_697" data-name="Path 697" d="M0,0H26.185V47.015H0Z" transform="translate(571.702 662.805)" fill="#d9eeff"/>
                                <path id="Path_699" data-name="Path 699" d="M0,0H26.185V47.015H0Z" transform="translate(602.054 639)" fill="#d9eeff"/>
                            </g>
                        </svg>
                        <h2 data-aos="fade-down">Fliserens</h2>
                    </div>
                    <div class="flip-box-back">
                        <div class="backinner mt-4">
                            <p>En fliserens kan få dine fliser til at se ud som nye, på meget kort tid</p>
                            <a class="flipcta btn" href="#" role="button">Læs mere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="frontinner mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="122" viewBox="0 0 120.264 122" data-aos="fade-down">
                                <g id="Algae_ikon" data-name="Algae ikon" transform="translate(-62.636 517.097)">
                                    <path id="Path_3" data-name="Path 3" d="M236.771-460.345c-1.411.689-3.379,3.248-4.33,5.642-.623,1.476-.754,2.427-.722,5.413a34.968,34.968,0,0,0,.459,5.806c.426,2,.394,2.3-.164,3.543-.623,1.411-2.493,2.952-3.51,2.952-.525,0-.59-.426-.59-4.592,0-5.216-.394-7.512-1.476-8.791-.689-.787-.984-.886-2.854-.886-2.591,0-4.068.689-6.364,3.018-2.2,2.231-3.084,4.068-3.084,6.3,0,2.067.394,2.69,3.477,5.773,4.33,4.33,5.183,8.266,3.543,16.6a15.748,15.748,0,0,1-.754,2.985c-.459.525-2.362-1.115-3.215-2.723-1.968-3.707-5.15-6.265-7.774-6.265a6.082,6.082,0,0,0-5.937,4.756,6.8,6.8,0,0,0,3.411,6.922,19.968,19.968,0,0,0,6.692,2.493,8.16,8.16,0,0,1,2.526.689c2.821,1.279,4.3,3.215,6.134,7.971,1.542,4,1.64,4.56.787,5.412-1.378,1.378-2.919.82-6.429-2.263-4.33-3.838-7.151-5.577-9.087-5.577-2.985,0-5.478,3.411-5.511,7.512,0,2.493.689,3.838,2.526,4.855,1.9,1.05,3.018,1.181,10.1,1.214,6.331.033,6.626.066,8.365.886a9.566,9.566,0,0,1,4.953,5.052c1.214,2.493,1.247,4.166.131,5.249a2.528,2.528,0,0,1-1.181.82,29.809,29.809,0,0,1-3.838-2.165c-6.626-4.166-9.218-4.888-12.4-3.444-2.723,1.247-5.347,4.4-5.38,6.429a7.263,7.263,0,0,0,2.034,4.592c2.263,2.591,4.264,2.985,8.824,1.837,6.233-1.607,10.1-1.673,13.252-.23a15.954,15.954,0,0,1,6.134,6.036c.623,1.378.623,1.443.033,2.624a4.764,4.764,0,0,1-1.476,1.706c-1.247.689-3.018.131-7.086-2.132-3.608-2.034-5.708-2.493-8.168-1.837-1.87.492-4.428,2.624-5.9,4.822a6.243,6.243,0,0,0-1.345,3.871,4.185,4.185,0,0,0,.886,3.477,7.094,7.094,0,0,0,7.61,3.28,25.7,25.7,0,0,0,5.183-2.2c5.642-2.985,6.331-3.313,8.168-3.641,4.363-.787,7.217.919,11.055,6.692,2.624,3.936,7.709,9.611,9.414,10.5a4.422,4.422,0,0,0,4.494-.328l1.05-.787-2.263-1.935c-1.247-1.05-3.247-2.723-4.461-3.707a18.144,18.144,0,0,1-5.741-7.348c-.262-.689-.2-.886.492-1.345a1.483,1.483,0,0,1,1.771-.164,9.544,9.544,0,0,0,2.952.394c3.313,0,5.183-1.673,7.085-6.3,1.05-2.591,1.214-6.134.361-7.741a5.906,5.906,0,0,0-6.561-3.084c-1.673.492-3.74,2.624-5.117,5.281-1.312,2.526-2.231,3.575-3.051,3.575-.886,0-3.772-2.821-4.888-4.756-1.771-3.084-1.05-5.839,2.132-8a43.69,43.69,0,0,1,4.822-2.592c5.347-2.493,7.348-5.249,7.348-9.906-.033-4.166-3.641-7.25-7.315-6.266a8.658,8.658,0,0,0-3.28,2.395c-2.723,2.821-3.215,3.477-4.658,6.462-1.87,3.805-3.707,4.855-5.675,3.313-.984-.787-1.378-1.9-1.9-5.249a18.346,18.346,0,0,0-1.115-4.133c-1.017-2.263-1.279-3.576-.853-4.363.591-1.05,1.476-1.082,4.133-.2a15.477,15.477,0,0,0,3.543.82c2.3,0,4.1-1.968,4.822-5.281.525-2.395-.164-4.855-2.165-7.84-2.395-3.543-2.493-3.674-4.133-3.838-2.559-.3-3.969.722-7.348,5.347l-.722.951-.984-.951c-1.607-1.509-1.771-2.3-1.64-7.479.131-5.281.394-6.134,2.427-7.676,2.329-1.8,4.3-.951,6.2,2.591a42.013,42.013,0,0,0,2.591,4.035l1.64,2.362,2.067.164c2.854.23,4.232-.164,5.675-1.575,3.608-3.543,3.772-9.644.328-12.76-2.1-1.9-4.035-1.935-8.463-.164-3.969,1.575-5.413,1.148-6.3-1.837-.623-2.132.066-3.346,3.313-5.741,2.46-1.8,2.854-1.968,4.363-1.968a17.228,17.228,0,0,1,4.232.82c2.985.951,3.543.984,5.577.3a7.252,7.252,0,0,0,2.985-2.132c1.378-1.542,2.821-4.527,2.821-5.806a6.221,6.221,0,0,0-2.362-3.936c-2.067-1.279-6.1-.787-10.1,1.247a14.142,14.142,0,0,1-2.3.984c-.59,0-.066-2.132,1.575-6.561a25.967,25.967,0,0,0,1.542-5.314c0-1.41-.787-2.395-2.427-3.083A3.615,3.615,0,0,0,236.771-460.345Z" transform="translate(-111.308 -56.194)" fill="#78c1ff"/>
                                    <path id="Path_4" data-name="Path 4" d="M129.659-441.245a8.425,8.425,0,0,0-1.87,1.87,3.826,3.826,0,0,0-.656,3.051,5.407,5.407,0,0,0,.82,2.788A5.292,5.292,0,0,0,136.81-434a5.309,5.309,0,0,0-4.494-8A4.447,4.447,0,0,0,129.659-441.245Z" transform="translate(-59.148 -66.211)" fill="#fff"/>
                                    <path id="Path_5" data-name="Path 5" d="M179.624-396.154A4.458,4.458,0,0,0,177-392.677a3.792,3.792,0,0,0,6.233,2.723A3.647,3.647,0,0,0,179.624-396.154Z" transform="translate(-95.073 -96.056)" fill="#d9eeff"/>
                                    <path id="Path_10" data-name="Path 10" d="M179.624-396.154A4.458,4.458,0,0,0,177-392.677a3.792,3.792,0,0,0,6.233,2.723A3.647,3.647,0,0,0,179.624-396.154Z" transform="translate(-70.056 -104.859)" fill="#d9eeff"/>
                                    <path id="Path_11" data-name="Path 11" d="M179.624-396.154A4.458,4.458,0,0,0,177-392.677a3.792,3.792,0,0,0,6.233,2.723A3.647,3.647,0,0,0,179.624-396.154Z" transform="translate(-44.304 -49.982)" fill="#d9eeff"/>
                                    <path id="Path_6" data-name="Path 6" d="M153.385-346.152a9.561,9.561,0,0,0-3.049,11.364c1.386,3.419,5.451,6.19,8.87,6.19s7.484-2.772,8.87-6.19A9.505,9.505,0,0,0,159.206-348,10.15,10.15,0,0,0,153.385-346.152Z" transform="translate(-86.92 -130.765)" fill="#5099f4"/>
                                    <path id="Path_7" data-name="Path 7" d="M402.634-273.77a9.93,9.93,0,0,0-2.091,15.745,9.674,9.674,0,0,0,15.807-2.645A9.946,9.946,0,0,0,402.634-273.77Z" transform="translate(-245.714 -194.352)" fill="#fff"/>
                                    <path id="Path_8" data-name="Path 8" d="M450.241-227.2c-1.44,1.5-1.74,2.341-1.74,4.8,0,2.641.24,3.241,1.981,4.8a6.8,6.8,0,0,0,11.284-6.3C460.8-228.941,453.842-230.982,450.241-227.2Z" transform="translate(-278.992 -220.22)" fill="#d9eeff"/>
                                    <path id="Path_9" data-name="Path 9" d="M421.924-179.756a3.373,3.373,0,0,0-1.424,3.279,3.373,3.373,0,0,0,1.424,3.279,4.383,4.383,0,0,0,6.9-1.122C430.983-179.066,425.72-183.164,421.924-179.756Z" transform="translate(-259.82 -249.931)" fill="#5099f4"/>
                                </g>
                            </svg>

                            <h2 data-aos="fade-down">Algebehandling</h2>
                        </div>
                    </div>
                    <div class="flip-box-back">
                        <div class="backinner mt-4">
                        <p>En algebehandling er en behandling til hårde overflader fx. fliser, facader, tage som er blevet grønne af alger.</p>
                        <a class="flipcta btn" href="#" role="button">Læs mere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="frontinner mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="122" viewBox="0 0 133.722 112" data-aos="fade-down">
                                <g id="Group_26" data-name="Group 26" transform="translate(7039.136 -5120)">
                                    <rect id="Rectangle_394" data-name="Rectangle 394" width="103.176" height="26.473" transform="translate(-7039.136 5120)" fill="#78c1ff"/>
                                    <rect id="Rectangle_395" data-name="Rectangle 395" width="103.176" height="26.473" transform="translate(-7008.59 5205.527)" fill="#78c1ff"/>
                                    <rect id="Rectangle_396" data-name="Rectangle 396" width="67.2" height="26.473" transform="translate(-6972.615 5177.019)" fill="#d9eeff"/>
                                    <rect id="Rectangle_397" data-name="Rectangle 397" width="64.485" height="26.473" transform="translate(-7039.136 5177.019)" fill="#78c1ff"/>
                                    <rect id="Rectangle_398" data-name="Rectangle 398" width="45.479" height="26.473" transform="translate(-7039.136 5148.509)" fill="#d9eeff"/>
                                    <rect id="Rectangle_399" data-name="Rectangle 399" width="28.509" height="26.473" transform="translate(-7039.136 5205.527)" fill="#d9eeff"/>
                                    <rect id="Rectangle_400" data-name="Rectangle 400" width="86.206" height="26.473" transform="translate(-6991.621 5148.509)" fill="#78c1ff"/>
                                    <rect id="Rectangle_401" data-name="Rectangle 401" width="28.509" height="26.473" transform="translate(-6933.924 5120)" fill="#d9eeff"/>
                                    <circle id="Ellipse_192" data-name="Ellipse 192" cx="1.697" cy="1.697" r="1.697" transform="translate(-7034.385 5124.751)" fill="#fff"/>
                                    <circle id="Ellipse_193" data-name="Ellipse 193" cx="1.697" cy="1.697" r="1.697" transform="translate(-7003.839 5210.279)" fill="#fff"/>
                                    <circle id="Ellipse_194" data-name="Ellipse 194" cx="1.697" cy="1.697" r="1.697" transform="translate(-6967.864 5181.091)" fill="#fff"/>
                                    <circle id="Ellipse_195" data-name="Ellipse 195" cx="1.697" cy="1.697" r="1.697" transform="translate(-7034.385 5181.091)" fill="#fff"/>
                                    <circle id="Ellipse_196" data-name="Ellipse 196" cx="1.697" cy="1.697" r="1.697" transform="translate(-6986.87 5153.261)" fill="#fff"/>
                                    <circle id="Ellipse_197" data-name="Ellipse 197" cx="1.697" cy="1.697" r="1.697" transform="translate(-6929.173 5124.751)" fill="#fff"/>
                                    <circle id="Ellipse_198" data-name="Ellipse 198" cx="1.697" cy="1.697" r="1.697" transform="translate(-6944.106 5124.751)" fill="#fff"/>
                                    <circle id="Ellipse_199" data-name="Ellipse 199" cx="1.697" cy="1.697" r="1.697" transform="translate(-6913.56 5210.279)" fill="#fff"/>
                                    <circle id="Ellipse_200" data-name="Ellipse 200" cx="1.697" cy="1.697" r="1.697" transform="translate(-6913.56 5181.091)" fill="#fff"/>
                                    <circle id="Ellipse_201" data-name="Ellipse 201" cx="1.697" cy="1.697" r="1.697" transform="translate(-6982.796 5181.091)" fill="#fff"/>
                                    <circle id="Ellipse_202" data-name="Ellipse 202" cx="1.697" cy="1.697" r="1.697" transform="translate(-7001.803 5153.261)" fill="#fff"/>
                                    <circle id="Ellipse_203" data-name="Ellipse 203" cx="1.697" cy="1.697" r="1.697" transform="translate(-7018.773 5210.279)" fill="#fff"/>
                                    <circle id="Ellipse_204" data-name="Ellipse 204" cx="1.697" cy="1.697" r="1.697" transform="translate(-6913.56 5153.261)" fill="#fff"/>
                                    <circle id="Ellipse_205" data-name="Ellipse 205" cx="1.697" cy="1.697" r="1.697" transform="translate(-6944.106 5139.685)" fill="#fff"/>
                                    <circle id="Ellipse_206" data-name="Ellipse 206" cx="1.697" cy="1.697" r="1.697" transform="translate(-6913.56 5225.212)" fill="#fff"/>
                                    <circle id="Ellipse_207" data-name="Ellipse 207" cx="1.697" cy="1.697" r="1.697" transform="translate(-6913.56 5196.703)" fill="#fff"/>
                                    <circle id="Ellipse_208" data-name="Ellipse 208" cx="1.697" cy="1.697" r="1.697" transform="translate(-6982.796 5196.703)" fill="#fff"/>
                                    <circle id="Ellipse_209" data-name="Ellipse 209" cx="1.697" cy="1.697" r="1.697" transform="translate(-7001.803 5168.194)" fill="#fff"/>
                                    <circle id="Ellipse_210" data-name="Ellipse 210" cx="1.697" cy="1.697" r="1.697" transform="translate(-7018.773 5225.212)" fill="#fff"/>
                                    <circle id="Ellipse_211" data-name="Ellipse 211" cx="1.697" cy="1.697" r="1.697" transform="translate(-6913.56 5168.194)" fill="#fff"/>
                                    <circle id="Ellipse_212" data-name="Ellipse 212" cx="1.697" cy="1.697" r="1.697" transform="translate(-7034.385 5139.685)" fill="#fff"/>
                                    <circle id="Ellipse_213" data-name="Ellipse 213" cx="1.697" cy="1.697" r="1.697" transform="translate(-7003.839 5225.212)" fill="#fff"/>
                                    <circle id="Ellipse_214" data-name="Ellipse 214" cx="1.697" cy="1.697" r="1.697" transform="translate(-6967.864 5196.703)" fill="#fff"/>
                                    <circle id="Ellipse_215" data-name="Ellipse 215" cx="1.697" cy="1.697" r="1.697" transform="translate(-7034.385 5196.703)" fill="#fff"/>
                                    <circle id="Ellipse_216" data-name="Ellipse 216" cx="1.697" cy="1.697" r="1.697" transform="translate(-6986.87 5168.194)" fill="#fff"/>
                                    <circle id="Ellipse_217" data-name="Ellipse 217" cx="1.697" cy="1.697" r="1.697" transform="translate(-6929.173 5139.685)" fill="#fff"/>
                                </g>
                            </svg>

                            <h2 data-aos="fade-down">Facaderens</h2>
                    </div>
                    </div>
                    <div class="flip-box-back">
                        <div class="backinner mt-4">
                            <p>En facaderens er for dig der har en meget beskidt eller begroet facade.
                                Facaden renses og vaskes ned. </p>
                            <a class="flipcta btn" href="#" role="button">Læs mere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-6">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="frontinner mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="122" viewBox="0 0 185.285 112" data-aos="fade-down">
                                <g id="Group_33" data-name="Group 33" transform="translate(-1250.357 -2734)">
                                    <rect id="Rectangle_389" data-name="Rectangle 389" width="17.329" height="25.774" transform="translate(1276.485 2768.673)" fill="#d9eeff"/>
                                    <path id="Path_711" data-name="Path 711" d="M67.6.393l77.608-.33L101.332,107.948H12.281Z" transform="translate(1238.076 2733.938)" fill="#78c1ff"/>
                                    <path id="Path_712" data-name="Path 712" d="M9.107,1.022,20.763,0l-9.11,115.121L0,109.184Z" transform="matrix(0.891, -0.454, 0.454, 0.891, 1364.879, 2743.426)" fill="#78c1ff"/>
                                    <rect id="Rectangle_390" data-name="Rectangle 390" width="11.074" height="11.765" transform="translate(1364.879 2800.588)" fill="#d9eeff"/>
                                    <rect id="Rectangle_391" data-name="Rectangle 391" width="11.074" height="11.765" transform="translate(1378.67 2800.588)" fill="#d9eeff"/>
                                    <rect id="Rectangle_392" data-name="Rectangle 392" width="11.074" height="11.765" transform="translate(1378.67 2814.853)" fill="#d9eeff"/>
                                    <rect id="Rectangle_393" data-name="Rectangle 393" width="11.074" height="11.765" transform="translate(1364.879 2814.853)" fill="#d9eeff"/>
                                </g>
                            </svg>

                            <h2 data-aos="fade-down">Tagrens og Maling</h2>
                        </div>

                    </div>
                    <div class="flip-box-back">
                        <div class="backinner mt-4">
                            <p>Tagrens og maling, er for dig der ønsker at give huset et helt
                                nyt udtryk eller blot ønsker at taget skal stå helt skarpt.
                            </p>
                            <a class="flipcta btn" href="#" role="button">Læs mere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php include 'beforeafter.php';?>

<?php include 'udregner.php';?>


<div class="baggrundb">


<section id="testimonials" class="kundeand text-center">
    <div class="container">
        <div class="row">
            <div class="kundesek col-12">
                <div>
                    <h2 class="andover mb-3" data-aos="fade-down">Overskrift</h2>
                    <p class="andtekst mb-4" data-aos="fade-down">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium ea explicabo nisi.
                    </p>
                </div>



                <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist" data-aos="fade-down">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                            <img src="image/before-after-placeholder.png" alt="">
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <img src="image/before-after-placeholder.png" alt="">
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">
                            <img src="image/before-after-placeholder.png" alt="">
                        </button>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        <div class="review" data-aos="fade-down">
                            <div class="stars">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bx-star"></i>
                            </div>
                            <p class="lead mt-4 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ea explicabo nisi quia blanditiis assumenda quos veritatis sit deleniti porro nulla temporibus deserunt, iure in labore incidunt quis eos.</p>
                            <h5 class="kundeover title-sm mb-0">Navn</h5>
                        </div>


                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="review">
                            <div class="stars">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bx-star"></i>
                            </div>
                            <p class="lead mt-4 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ea explicabo nisi quia blanditiis assumenda quos veritatis sit deleniti porro nulla temporibus deserunt, iure in labore incidunt quis eos.</p>
                            <h5 class="kundeover title-sm mb-0">Navn</h5>                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="review">
                            <div class="stars">
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bxs-star"></i>
                                <i class="bx bx-star"></i>
                            </div>
                            <p class="lead mt-4 mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium ea explicabo nisi quia blanditiis assumenda quos veritatis sit deleniti porro nulla temporibus deserunt, iure in labore incidunt quis eos.</p>
                            <h5 class="kundeover title-sm mb-0">Navn</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="booksektion px-5 py-5 text-left">
    <div class="bookosek" data-aos="fade-down">
        <h2 class="bookover">Overskrift</h2>
        <p class="booktekst">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a class="vidstknap btn" href="#" role="button">
            <span class="spinner-grow spinner-grow-sm me-2"></span>
            læs mere

        </a>

    </div>
</div>


</div>


<?php include 'footer.php';?>




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 2000,
        once: true,
    });
</script>

</body>
</html>
