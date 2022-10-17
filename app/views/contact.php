<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet css -->
    <link rel="stylesheet" href="../public/scss/main.css">


    <title>MBO Utrecht opendag</title>
</head>

<body>
    <!-- Navigation bar -->

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
                        <a href="/about">OVER MBO UTRECHT</a>
                    </li>
                    <li>
                        <a href="/course">OPLEIDINGEN</a>
                    </li>
                    <li>
                        <a class="active" href="/contact">CONTACT</a>
                    </li>
                    <li>
                        <a href="/workshop">VOORLICHTINGEN</a>
                    </li>

                </ul>
                <button>
                    <a href="">Enquette</a>
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </button>
            </div>
        </nav>
    </header>

    <!-- Landing image/banner -->
    <section class="contact_landing">
        <div class="intro">
            <div>
                <div class="circle-1"></div>
                <div class="circle-2"></div>
                <div>
                    <img src="../../public/img/contactimage.png" alt="">
                </div>
            </div>
        </div>
        <!-- <img src="./img/mbologo.png" alt=""> -->
    </section>
    <section class="cards_section">
        <div class="cards">
            <div class="card-call">
                <div class="title">
                    <ion-icon name="call-outline"></ion-icon>
                    <h2>BEL ONS</h2>
                </div>
                <p>06 - 257 050 51 (WhatsApp)</p>
                <p>030 - 28 15 100</p>
            </div>
            <div class="card-location">
                <div class="title">
                    <ion-icon name="location-outline"></ion-icon>
                    <h2>LOCATIE</h2>
                </div>
                <p>Daltonlaan 300 3584 BK Utrecht</p>
            </div>
            <div class="card-time">
                <div class="title">
                    <ion-icon name="time-outline"></ion-icon>
                    <h2>TIJDEN</h2>
                </div>
                <p>Wij zijn bereikbaar op schooldagen tussen</p>
                <p>8:30 en 17:00</p>
            </div>
        </div>
    </section>

    <!-- Cantact page section -->
    <section class="contact_form">
        <div class="form">
            <h1>Contact Formulier</h1>
            <form action="<?= URLROOT ?>/contact/create" method="post">
                <div class="inputSection">
                    <div>
                        <label for="FirstName">Voornaam</label>
                        <input type="text" name="FirstName" id="FirstName" placeholder="John" required="required">
                    </div>
                    <div>
                        <label for="LastName">Achternaam</label>
                        <input type="text" name="LastName" id="LastName" placeholder="Doe" required="required">
                    </div>
                </div>
                <div class="inputSection">
                    <div>
                        <label for="Email">E-mail</label>
                        <input type="email" name="Email" id="Email" placeholder="JohnDoe@example.com" required="required">
                    </div>
                    <div>
                        <label for="PhoneNumber">Telefoon nummer</label>
                        <input type="tel" name="PhoneNumber" id="PhoneNumber" placeholder="0612345678">
                    </div>
                </div>
                <div class="message">
                    <textarea type="text" name="Message" id="Message" placeholder="Voer hier uw bericht in" required="required"></textarea>
                </div>
                <input type="hidden" name="Id" id="Id">
                <div class="submit">
                    <input type="submit" value="Verzenden">
                </div>
            </form>
        </div>
        <div class="background_contactform">
        <div class="circles">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="circle-4"></div>
            <div class="circle-5"></div>
            <div class="circle-6"></div>
            <div class="circle-7"></div>
        </div>
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



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>