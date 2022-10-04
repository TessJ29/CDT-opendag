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
                        <a href="/workshop">VOORLICHTINGEN</a>
                    </li>
                    <li>
                        <a class="active" href="/contact">CONTACT</a>
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
    <section class="landing__section">
        <div class="intro">
            <div>
                <div class="circle-1"></div>
                <div class="circle-2"></div>
                <div>
                    <img src="" alt="">
                </div>
            </div>
        </div>
        <!-- <img src="./img/mbologo.png" alt=""> -->
    </section>

    <!-- Cantact page section -->
    <section class="contact_form">
        <form action="" method="post">
            <table>
                <tr>
                    <th>
                        <label for="inputFirstName">Voornaam</label>
                    </th>
                    <th>
                        <label for="inputLastName">Achternaam</label>
                    </th>
                </tr>
                <td>
                    <input type="text" name="FirstName" id="inputFirstName">
                </td>
                <td>
                    <input type="text" name="LastName" id="inputLastName">
                </td>
                <tr>
                    <th>
                        <label for="inputEmail">E-mail</label>
                    </th>
                    <th>
                        <label for="inputTel">Telefoon nummer</label>
                    </th>
                </tr>
                <tr>
                    <td>
                        <input type="email" name="Email" id="inputEmail">
                    </td>
                    <td>
                        <input type="tel" name="" id="inputTel">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="Message" id="inputMessage">
                    </td>
                </tr>
            </table>
        </form>
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

</body>

</html>