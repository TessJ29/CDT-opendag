<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- css -->
    <link rel="stylesheet" href="../public/scss/main.css">

    <title>MBO Utrecht Opendag</title>
</head>

<body>
    <!-- Navigation Bar -->
    <?php $this->view("partials/navbar"); ?>

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
                <div class="line"></div>
                <div class="course-information">
                    <button data-toggle="dropdown" data-target="#data-SD">
                        <a>Meer lezen</a>
                        <ion-icon name="arrow-forward-outline" id="rotated-icon"></ion-icon>
                    </button>
                </div>
            </div>
            <div class="card2">
                <ion-icon name="laptop-outline" size="large"></ion-icon>
                <div class="cardtitle2">Expert IT systems and devices</div>
                <div class="line"></div>
                <div class="course-information">
                    <button data-toggle="dropdown" data-target="#data-ED">
                        <a>Meer lezen</a>
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </button>
                </div>
            </div>
            <div class="card3">
                <ion-icon name="headset-outline" size="large"></ion-icon>
                <div class="cardtitle1">Medewerker ICT support</div>
                <div class="line"></div>
                <div class="course-information">
                    <button data-toggle="dropdown" data-target="#data-MI">
                        <a>Meer lezen</a>
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </button>
                </div>
            </div>
            <div class="card4">
                <ion-icon name="laptop-outline" size="large"></ion-icon>
                <div class="cardtitle2">Allround medewerker IT systems and devices</div>
                <div class="line"></div>
                <div class="course-information">
                    <button data-toggle="dropdown" data-target="#data-AD">
                        <a>Meer lezen</a>
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="course_information">
        <div class="info">
            <div id="data-SD" class="dropdown-menu">
                <div class="content-left">
                    <ion-icon name="code-slash-outline"></ion-icon>
                </div>
                <div class="content-right">
                    <h3>Software Developer</h3>
                    <p>Tijdens deze drie tot vier-jarige opleiding leer je hoe je zelfstandig apps, games of
                        webapplicaties kunt maken met behulp van frameworks en object georiënteerd programmeren.
                        Het is een echte programmeeropleiding, geen knippen en plakken maar degelijk codekloppen.
                        Je werkt projectmatig en gebruikt programmeertalen zoals PHP, C#, Javascript en SQL. Je
                        ontwikkelt je beroepshouding, presentatietechnieken
                        en leert samen te werken. Je leert een product ontwikkelen, bouwen, testen, documenteren en
                        opleveren.</p>
                    <p>NIVEAU 4 BOL 3-4 JR</p>
                </div>
            </div>
        </div>
        <div class="info">
            <div id="data-ED" class="dropdown-menu">
                <div class="content">
                    <div class="content-left">
                        <ion-icon name="laptop-outline"></ion-icon>
                    </div>
                    <div class="content-right">
                        <h3>Expert IT systems and devices</h3>
                        <p>Als Expert IT systems and devices ben jij er verantwoordelijk voor dat alle collega’s hun
                            werk op een goede manier kunnen doen. Jij houd je vooral bezig met service, beheer en
                            veiligheid van verschillende netwerken en servers. Jij weet hoe de verschillende apparaten
                            programma’s en besturingssystemen werken (bijvoorbeeld Windows, Linux, Android en macOS).
                            Wanneer iemand jou een vraag stelt over zijn pc, Ipad, mobiel, internet, server of
                            programma, kun jij ze verder helpen. Ook weet je (straks) wat cloudcomputing is.
                            Je probeert problemen te voorkomen. En als er dan toch een probleem is, ga jij meteen op
                            zoek naar een oplossing. Het is ook jouw taak om het bedrijf goed te kennen.
                            Uiteraard moet je je steeds verdiepen in nieuwe ontwikkelingen op het gebied van ICT. Hoe
                            kun je nieuwe technologieën toepassen? Hoe blijf je hackers een stap voor? Daarnaast geef je
                            ook adviezen over hoe de ICT security kan worden verbeterd. Jij bent de specialist.
                            Jij leert, ook onder stress, jouw medewerkers op de ICT-afdeling instructies te geven en te
                            motiveren.</p>
                        <p>NIVEAU 4 BOL 3-4 JR</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="info">
            <div id="data-MI" class="dropdown-menu">
                <div class="content-left">
                    <ion-icon name="headset-outline"></ion-icon>
                </div>
                <div class="content-right">
                    <h3>Medewerker ICT support</h3>
                    <p>Tijdens de opleiding leer je van alles wat met ICT en Elektro te maken heeft:
                        elektro-installatietechniek, datanetwerken, domotica, software, en hoe een computer in elkaar
                        zit.
                        Ook ontwikkel je tijdens je studie vaardigheden om andere computergebruikers te kunnen helpen.
                        We besteden aandacht aan de nieuwste technologieën op het gebied van elektro en ICT.
                        Als je een techneut bent en graag met je handen werkt, kun je als medewerker ICT alle kanten
                        uit. Waar je ook voor kiest: jij zorgt ervoor dat ICT-voorzieningen goed blijven werken en helpt
                        gebruikers als ze er problemen mee hebben.</p>
                    <p>NIVEAU 2 BOL 1 JR</p>
                </div>
            </div>
        </div>
        <div class="info">
            <div id="data-AD" class="dropdown-menu">
                <div class="content-left">
                    <ion-icon name="laptop-outline"></ion-icon>
                </div>
                <div class="content-right">
                    <h3>Allround medewerker IT systems and devices</h3>
                    <p>Als Allround medewerker IT systems and devices zorg jij ervoor dat je collega werknemers in een
                        bedrijf hun werk kunnen doen. Zonder laptop, internet, e-mail, telefoon en werkende programma’s
                        kan niemand werken. Jij zorgt ervoor dat het netwerk snel en betrouwbaar is.
                        Gelukkig hoef je dat niet in je eentje te doen. Je werkt soms alleen, maar vaak ook in een team.
                        Je werkt vooral aan het helpen van gebruikers en het installeren en configureren van allerlei
                        programma’s en apparaten.
                        Het maakt voor jou niet veel uit of iemand een vraag heeft over zijn laptop, tablet, telefoon,
                        internet of een ingewikkeld programma. Iedere vraag is voor jou een leuke uitdaging. Ook geef je
                        gebruikers uitleg en instructies, zodat zij goed met hun hardware en programma’s kunnen werken.
                    </p>
                    <p>NIVEAU 3 BOL 2 JR</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php $this->view("partials/footer"); ?>

    <!-- Javascripts -->
    <script src="./js/script.js"></script>

    <script>
    // Rotate arrow when clicked on -- Not finished
    // let rotation = 0;
    // function rotateIcon() {
    //   rotation += 90; // add 90 degrees, you can change this as you want
    //   if (rotation === 90) { 
    //     // 360 means rotate back to 0
    //     rotation = 0;
    //   }
    //         document.querySelector("#rotated-icon").style.transform = "rotate(90deg)";
    //     }

    // Dropdown
    // let show = id => {
    //     let dropElement = document.getElementById(id);
    //     if (dropElement.style.display === "none") {
    //         dropElement.style.display = "block";
    //     } else {
    //         dropElement.style.display = "none";
    //     }
    // }
    var list = document.querySelectorAll("[data-toggle=dropdown]");
    for (var i = 0, s = list.length; i < s; i++) {
        var elm = list[i];
        elm.addEventListener("click", function() {
            // this for loop will hide previously clicked drop downs
            for (var j = 0, z = list.length; j < z; j++) {
                if (list[j] != this) {
                    var elm = document.querySelector(list[j].getAttribute("data-target"));
                    var str = elm.className.replace("d-block");
                    elm.className = str;
                }
            } // if you like, remove the above loop
            var obj = document.querySelector(this.getAttribute("data-target"));
            if (obj.className.indexOf("d-block") > 0) {
                var temp = obj.className.replace("d-block", "");
                obj.className = temp;
            } else {
                obj.className += " d-block";
            }
        });
    }
    </script>
    <!-- Icon Javascripts -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>