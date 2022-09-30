<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/main.css">
    <link rel="stylesheet" href="styling.css">

    <title>MBO Utrecht Opendag</title>
</head>

<body>

    <header>
        <nav>
            <div class="top__navbar">
                <ul class="navbar__logo">
                    <li><img src="./img/mbologo.png" alt=""></li>
                </ul>
                <div class="navbar__toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="navbar__contact--links">
                    <li>
                        <ion-icon name="mail-outline"></ion-icon>
                        <a href="">info@mboutrecht.nl</a>
                    </li>
                    <li>
                        <ion-icon name="logo-whatsapp"></ion-icon>
                        <a href="">06 - 257 050 51 (WhatsApp)</a>
                    </li>
                </ul>
                <ul class="navbar__media--links">
                    <li>
                        <a class="navbar__media--link" href="">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a class="navbar__media--link" href="">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a class="navbar__media--link" href="">
                            <ion-icon name="logo-youtube"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a class="navbar__media--link" href="">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a class="navbar__media--link" href="">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom__navbar">
                <ul>
                    <li>
                        <a href="./index.php">HOME</a>
                    </li>
                    <li>
                        <a href="./about.php">OVER MBO UTRECHT</a>
                    </li>
                    <li>
                        <a class="active" href="./course.php">OPLEIDINGEN</a>
                    </li>
                    <li>
                        <a href="./workshop.php">WORKSHOPS</a>
                    </li>
                </ul>
                <button>
                    <a href="">Enquette</a>
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </button>
            </div>
        </nav>
    </header>

    <section class="landing__section">
            <div class="intro">
                <div>
                    <h1>MBO Utrecht ICT opleidingen</h1>
                </div>
                <div>
                    <div class="circle-1"></div>
                    <div class="circle-2"></div>
                    <div>
                        <img src="./img/Coursepageimage.jpg" alt="">
                    </div>
                </div>
            </div>
            <!-- <img src="./img/mbologo.png" alt=""> -->
        </section>

    <section class="course_section">
        <div class="cards">
            <div class="card1">
                <ion-icon name="code-slash-outline" size="large"></ion-icon>
                <div class="cardtitle1">Software developer</div>
                <hr>
            </div>
            <div class="card2">
                <ion-icon name="laptop-outline" size="large"></ion-icon>
                <div class="cardtitle2">Expert IT systems and devices</div>
                <hr>
            </div>
            <div class="card3">
                <ion-icon name="headset-outline" size="large">
                    </>
                </ion-icon>
                <div class="cardtitle1">Medewerker ICT support</div>
                <hr>
            </div>
            <div class="card4">
                <ion-icon name="laptop-outline" size="large"></ion-icon>
                <div class="cardtitle2">Allround medewerker IT systems and devices</div>
                <hr>
            </div>
        </div>
        </div>
        <!-- tweede menu bar met dropdown menu -->
        
        <button onclick="myFunction()">
                    <a>Meer lezen</a>
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </button>
                <div id="SD">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat est quidem iusto? Repudiandae corporis ullam corrupti, tempore odio eos esse, eveniet quaerat veritatis non aliquam dicta praesentium dolorem vitae! Sequi.
                </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer__top--container">
            <div class="footer__top">
                <div>
                    <h3>Volg ons</h3>
                    <ul>
                        <li>
                            <ion-icon name="logo-facebook"></ion-icon>
                            <p>Facebook</p>
                        </li>
                        <li>
                            <ion-icon name="logo-instagram"></ion-icon>
                            <p>Instagram</p>
                        </li>
                        <li>
                            <ion-icon name="logo-youtube"></ion-icon>
                            <p>YouTube</p>
                        </li>
                        <li>
                            <ion-icon name="logo-twitter"></ion-icon>
                            <p>Twitter</p>
                        </li>
                        <li>
                            <ion-icon name="logo-linkedin"></ion-icon>
                            <p>LinkedIn</p>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3>Contact</h3>
                    <ul>
                        <li>
                            <ion-icon name="location-outline"></ion-icon>
                            <p>Daltonlaan 300 3584 BK Utrecht</p>
                        </li>
                        <li>
                            <ion-icon name="call-outline"></ion-icon>
                            <p>03 - 28 15 100</p>
                        </li>
                        <li>
                            <ion-icon name="logo-whatsapp"></ion-icon>
                            <p>06 - 257 050 51 (WhatsApp)</p>
                        </li>
                        <li>
                            <ion-icon name="mail-outline"></ion-icon>
                            <p>info@mboutrecht.nl</p>
                        </li>
                    </ul>
                </div>
                <div>
                    <h3>Snel naar</h3>
                    <ul>
                        <li>
                            <p><a href="">Homepagina</a></p>
                        </li>
                        <li>
                            <p><a href="">Opleidingen</a></p>
                        </li>
                        <li>
                            <p><a href="">Inschrijven voor workshop</a></p>
                        </li>
                    </ul>
                </div>
                <div>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <p>MBO Utrecht ICT Academie 2022. All rights reserved.</p>
        </div>
    </footer>
    <!-- Javascripts -->
    <script src="./js/script.js"></script>

    <script>

    </script>
    <!-- Icon Javascripts -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>