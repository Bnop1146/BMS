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

<div class="flipcon container">
    <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
            <div class="flip-box">
                <div class="flip-box-inner">
                    <div class="flip-box-front">
                        <div class="frontinner mt-4"></div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="122" viewBox="0 0 117.239 122">
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
                        <h2>Fliserens</h2>
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
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="122" viewBox="0 0 120.264 122">
                            <g id="Algae_ikon" data-name="Algae ikon" transform="translate(-62.636 517.097)">
                                <path id="Path_3" data-name="Path 3" d="M236.771-460.345c-1.411.689-3.379,3.248-4.33,5.642-.623,1.476-.754,2.427-.722,5.413a34.968,34.968,0,0,0,.459,5.806c.426,2,.394,2.3-.164,3.543-.623,1.411-2.493,2.952-3.51,2.952-.525,0-.59-.426-.59-4.592,0-5.216-.394-7.512-1.476-8.791-.689-.787-.984-.886-2.854-.886-2.591,0-4.068.689-6.364,3.018-2.2,2.231-3.084,4.068-3.084,6.3,0,2.067.394,2.69,3.477,5.773,4.33,4.33,5.183,8.266,3.543,16.6a15.748,15.748,0,0,1-.754,2.985c-.459.525-2.362-1.115-3.215-2.723-1.968-3.707-5.15-6.265-7.774-6.265a6.082,6.082,0,0,0-5.937,4.756,6.8,6.8,0,0,0,3.411,6.922,19.968,19.968,0,0,0,6.692,2.493,8.16,8.16,0,0,1,2.526.689c2.821,1.279,4.3,3.215,6.134,7.971,1.542,4,1.64,4.56.787,5.412-1.378,1.378-2.919.82-6.429-2.263-4.33-3.838-7.151-5.577-9.087-5.577-2.985,0-5.478,3.411-5.511,7.512,0,2.493.689,3.838,2.526,4.855,1.9,1.05,3.018,1.181,10.1,1.214,6.331.033,6.626.066,8.365.886a9.566,9.566,0,0,1,4.953,5.052c1.214,2.493,1.247,4.166.131,5.249a2.528,2.528,0,0,1-1.181.82,29.809,29.809,0,0,1-3.838-2.165c-6.626-4.166-9.218-4.888-12.4-3.444-2.723,1.247-5.347,4.4-5.38,6.429a7.263,7.263,0,0,0,2.034,4.592c2.263,2.591,4.264,2.985,8.824,1.837,6.233-1.607,10.1-1.673,13.252-.23a15.954,15.954,0,0,1,6.134,6.036c.623,1.378.623,1.443.033,2.624a4.764,4.764,0,0,1-1.476,1.706c-1.247.689-3.018.131-7.086-2.132-3.608-2.034-5.708-2.493-8.168-1.837-1.87.492-4.428,2.624-5.9,4.822a6.243,6.243,0,0,0-1.345,3.871,4.185,4.185,0,0,0,.886,3.477,7.094,7.094,0,0,0,7.61,3.28,25.7,25.7,0,0,0,5.183-2.2c5.642-2.985,6.331-3.313,8.168-3.641,4.363-.787,7.217.919,11.055,6.692,2.624,3.936,7.709,9.611,9.414,10.5a4.422,4.422,0,0,0,4.494-.328l1.05-.787-2.263-1.935c-1.247-1.05-3.247-2.723-4.461-3.707a18.144,18.144,0,0,1-5.741-7.348c-.262-.689-.2-.886.492-1.345a1.483,1.483,0,0,1,1.771-.164,9.544,9.544,0,0,0,2.952.394c3.313,0,5.183-1.673,7.085-6.3,1.05-2.591,1.214-6.134.361-7.741a5.906,5.906,0,0,0-6.561-3.084c-1.673.492-3.74,2.624-5.117,5.281-1.312,2.526-2.231,3.575-3.051,3.575-.886,0-3.772-2.821-4.888-4.756-1.771-3.084-1.05-5.839,2.132-8a43.69,43.69,0,0,1,4.822-2.592c5.347-2.493,7.348-5.249,7.348-9.906-.033-4.166-3.641-7.25-7.315-6.266a8.658,8.658,0,0,0-3.28,2.395c-2.723,2.821-3.215,3.477-4.658,6.462-1.87,3.805-3.707,4.855-5.675,3.313-.984-.787-1.378-1.9-1.9-5.249a18.346,18.346,0,0,0-1.115-4.133c-1.017-2.263-1.279-3.576-.853-4.363.591-1.05,1.476-1.082,4.133-.2a15.477,15.477,0,0,0,3.543.82c2.3,0,4.1-1.968,4.822-5.281.525-2.395-.164-4.855-2.165-7.84-2.395-3.543-2.493-3.674-4.133-3.838-2.559-.3-3.969.722-7.348,5.347l-.722.951-.984-.951c-1.607-1.509-1.771-2.3-1.64-7.479.131-5.281.394-6.134,2.427-7.676,2.329-1.8,4.3-.951,6.2,2.591a42.013,42.013,0,0,0,2.591,4.035l1.64,2.362,2.067.164c2.854.23,4.232-.164,5.675-1.575,3.608-3.543,3.772-9.644.328-12.76-2.1-1.9-4.035-1.935-8.463-.164-3.969,1.575-5.413,1.148-6.3-1.837-.623-2.132.066-3.346,3.313-5.741,2.46-1.8,2.854-1.968,4.363-1.968a17.228,17.228,0,0,1,4.232.82c2.985.951,3.543.984,5.577.3a7.252,7.252,0,0,0,2.985-2.132c1.378-1.542,2.821-4.527,2.821-5.806a6.221,6.221,0,0,0-2.362-3.936c-2.067-1.279-6.1-.787-10.1,1.247a14.142,14.142,0,0,1-2.3.984c-.59,0-.066-2.132,1.575-6.561a25.967,25.967,0,0,0,1.542-5.314c0-1.41-.787-2.395-2.427-3.083A3.615,3.615,0,0,0,236.771-460.345Z" transform="translate(-111.308 -56.194)" fill="#78c1ff"/>
                                <path id="Path_4" data-name="Path 4" d="M129.659-441.245a8.425,8.425,0,0,0-1.87,1.87,3.826,3.826,0,0,0-.656,3.051,5.407,5.407,0,0,0,.82,2.788A5.292,5.292,0,0,0,136.81-434a5.309,5.309,0,0,0-4.494-8A4.447,4.447,0,0,0,129.659-441.245Z" transform="translate(-59.148 -66.211)" fill="#051b64"/>
                                <path id="Path_5" data-name="Path 5" d="M179.624-396.154A4.458,4.458,0,0,0,177-392.677a3.792,3.792,0,0,0,6.233,2.723A3.647,3.647,0,0,0,179.624-396.154Z" transform="translate(-95.073 -96.056)" fill="#d9eeff"/>
                                <path id="Path_10" data-name="Path 10" d="M179.624-396.154A4.458,4.458,0,0,0,177-392.677a3.792,3.792,0,0,0,6.233,2.723A3.647,3.647,0,0,0,179.624-396.154Z" transform="translate(-70.056 -104.859)" fill="#d9eeff"/>
                                <path id="Path_11" data-name="Path 11" d="M179.624-396.154A4.458,4.458,0,0,0,177-392.677a3.792,3.792,0,0,0,6.233,2.723A3.647,3.647,0,0,0,179.624-396.154Z" transform="translate(-44.304 -49.982)" fill="#d9eeff"/>
                                <path id="Path_6" data-name="Path 6" d="M153.385-346.152a9.561,9.561,0,0,0-3.049,11.364c1.386,3.419,5.451,6.19,8.87,6.19s7.484-2.772,8.87-6.19A9.505,9.505,0,0,0,159.206-348,10.15,10.15,0,0,0,153.385-346.152Z" transform="translate(-86.92 -130.765)" fill="#5099f4"/>
                                <path id="Path_7" data-name="Path 7" d="M402.634-273.77a9.93,9.93,0,0,0-2.091,15.745,9.674,9.674,0,0,0,15.807-2.645A9.946,9.946,0,0,0,402.634-273.77Z" transform="translate(-245.714 -194.352)" fill="#051b64"/>
                                <path id="Path_8" data-name="Path 8" d="M450.241-227.2c-1.44,1.5-1.74,2.341-1.74,4.8,0,2.641.24,3.241,1.981,4.8a6.8,6.8,0,0,0,11.284-6.3C460.8-228.941,453.842-230.982,450.241-227.2Z" transform="translate(-278.992 -220.22)" fill="#d9eeff"/>
                                <path id="Path_9" data-name="Path 9" d="M421.924-179.756a3.373,3.373,0,0,0-1.424,3.279,3.373,3.373,0,0,0,1.424,3.279,4.383,4.383,0,0,0,6.9-1.122C430.983-179.066,425.72-183.164,421.924-179.756Z" transform="translate(-259.82 -249.931)" fill="#5099f4"/>
                            </g>
                        </svg>
                        <h2>Algebehandling</h2>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="122" viewBox="0 0 133.722 112">
                                <g id="Group_26" data-name="Group 26" transform="translate(7039.136 -5120)">
                                    <rect id="Rectangle_394" data-name="Rectangle 394" width="103.176" height="26.473" transform="translate(-7039.136 5120)" fill="#78c1ff"/>
                                    <rect id="Rectangle_395" data-name="Rectangle 395" width="103.176" height="26.473" transform="translate(-7008.59 5205.527)" fill="#78c1ff"/>
                                    <rect id="Rectangle_396" data-name="Rectangle 396" width="67.2" height="26.473" transform="translate(-6972.615 5177.019)" fill="#d9eeff"/>
                                    <rect id="Rectangle_397" data-name="Rectangle 397" width="64.485" height="26.473" transform="translate(-7039.136 5177.019)" fill="#78c1ff"/>
                                    <rect id="Rectangle_398" data-name="Rectangle 398" width="45.479" height="26.473" transform="translate(-7039.136 5148.509)" fill="#d9eeff"/>
                                    <rect id="Rectangle_399" data-name="Rectangle 399" width="28.509" height="26.473" transform="translate(-7039.136 5205.527)" fill="#d9eeff"/>
                                    <rect id="Rectangle_400" data-name="Rectangle 400" width="86.206" height="26.473" transform="translate(-6991.621 5148.509)" fill="#78c1ff"/>
                                    <rect id="Rectangle_401" data-name="Rectangle 401" width="28.509" height="26.473" transform="translate(-6933.924 5120)" fill="#d9eeff"/>
                                    <circle id="Ellipse_192" data-name="Ellipse 192" cx="1.697" cy="1.697" r="1.697" transform="translate(-7034.385 5124.751)" fill="#051b64"/>
                                    <circle id="Ellipse_193" data-name="Ellipse 193" cx="1.697" cy="1.697" r="1.697" transform="translate(-7003.839 5210.279)" fill="#051b64"/>
                                    <circle id="Ellipse_194" data-name="Ellipse 194" cx="1.697" cy="1.697" r="1.697" transform="translate(-6967.864 5181.091)" fill="#051b64"/>
                                    <circle id="Ellipse_195" data-name="Ellipse 195" cx="1.697" cy="1.697" r="1.697" transform="translate(-7034.385 5181.091)" fill="#051b64"/>
                                    <circle id="Ellipse_196" data-name="Ellipse 196" cx="1.697" cy="1.697" r="1.697" transform="translate(-6986.87 5153.261)" fill="#3b3b3b"/>
                                    <circle id="Ellipse_197" data-name="Ellipse 197" cx="1.697" cy="1.697" r="1.697" transform="translate(-6929.173 5124.751)" fill="#051b64"/>
                                    <circle id="Ellipse_198" data-name="Ellipse 198" cx="1.697" cy="1.697" r="1.697" transform="translate(-6944.106 5124.751)" fill="#051b64"/>
                                    <circle id="Ellipse_199" data-name="Ellipse 199" cx="1.697" cy="1.697" r="1.697" transform="translate(-6913.56 5210.279)" fill="#051b64"/>
                                    <circle id="Ellipse_200" data-name="Ellipse 200" cx="1.697" cy="1.697" r="1.697" transform="translate(-6913.56 5181.091)" fill="#051b64"/>
                                    <circle id="Ellipse_201" data-name="Ellipse 201" cx="1.697" cy="1.697" r="1.697" transform="translate(-6982.796 5181.091)" fill="#051b64"/>
                                    <circle id="Ellipse_202" data-name="Ellipse 202" cx="1.697" cy="1.697" r="1.697" transform="translate(-7001.803 5153.261)" fill="#051b64"/>
                                    <circle id="Ellipse_203" data-name="Ellipse 203" cx="1.697" cy="1.697" r="1.697" transform="translate(-7018.773 5210.279)" fill="#051b64"/>
                                    <circle id="Ellipse_204" data-name="Ellipse 204" cx="1.697" cy="1.697" r="1.697" transform="translate(-6913.56 5153.261)" fill="#051b64"/>
                                    <circle id="Ellipse_205" data-name="Ellipse 205" cx="1.697" cy="1.697" r="1.697" transform="translate(-6944.106 5139.685)" fill="#051b64"/>
                                    <circle id="Ellipse_206" data-name="Ellipse 206" cx="1.697" cy="1.697" r="1.697" transform="translate(-6913.56 5225.212)" fill="#051b64"/>
                                    <circle id="Ellipse_207" data-name="Ellipse 207" cx="1.697" cy="1.697" r="1.697" transform="translate(-6913.56 5196.703)" fill="#051b64"/>
                                    <circle id="Ellipse_208" data-name="Ellipse 208" cx="1.697" cy="1.697" r="1.697" transform="translate(-6982.796 5196.703)" fill="#051b64"/>
                                    <circle id="Ellipse_209" data-name="Ellipse 209" cx="1.697" cy="1.697" r="1.697" transform="translate(-7001.803 5168.194)" fill="#051b64"/>
                                    <circle id="Ellipse_210" data-name="Ellipse 210" cx="1.697" cy="1.697" r="1.697" transform="translate(-7018.773 5225.212)" fill="#051b64"/>
                                    <circle id="Ellipse_211" data-name="Ellipse 211" cx="1.697" cy="1.697" r="1.697" transform="translate(-6913.56 5168.194)" fill="#051b64"/>
                                    <circle id="Ellipse_212" data-name="Ellipse 212" cx="1.697" cy="1.697" r="1.697" transform="translate(-7034.385 5139.685)" fill="#051b64"/>
                                    <circle id="Ellipse_213" data-name="Ellipse 213" cx="1.697" cy="1.697" r="1.697" transform="translate(-7003.839 5225.212)" fill="#051b64"/>
                                    <circle id="Ellipse_214" data-name="Ellipse 214" cx="1.697" cy="1.697" r="1.697" transform="translate(-6967.864 5196.703)" fill="#051b64"/>
                                    <circle id="Ellipse_215" data-name="Ellipse 215" cx="1.697" cy="1.697" r="1.697" transform="translate(-7034.385 5196.703)" fill="#051b64"/>
                                    <circle id="Ellipse_216" data-name="Ellipse 216" cx="1.697" cy="1.697" r="1.697" transform="translate(-6986.87 5168.194)" fill="#051b64"/>
                                    <circle id="Ellipse_217" data-name="Ellipse 217" cx="1.697" cy="1.697" r="1.697" transform="translate(-6929.173 5139.685)" fill="#051b64"/>
                                </g>
                            </svg>
                            <h2>Facaderens</h2>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="122" viewBox="0 0 185.285 112">
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

                            <h2>Tagrens og Maling</h2>
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



<br>
<br>
<br>
<br>

<section id="testimonials" class="text-center">
    <div class="container">
        <div class="row">
            <div class="kundesek col-12">
                <div>
                    <h2 class="andover mb-3">Overskrift</h2>
                    <p class="andtekst mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Praesentium ea explicabo nisi.
                    </p>
                </div>



                <ul class="nav nav-pills justify-content-center mb-3" id="pills-tab" role="tablist">
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

<br>
<br>
<br>
<br>


<div class="booksektion px-5 py-5 text-left ">
    <div class="bookosek">
        <h2 class="bookover">Overskrift</h2>
        <p class="booktekst">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <a class="bookknap btn" href="#" role="button">Klik</a>

    </div>
</div>



<?php include 'footer.php';?>




<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="Js/js.js"></script>
</body>
</html>
