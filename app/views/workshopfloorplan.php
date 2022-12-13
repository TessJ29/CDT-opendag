<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Standard meta-tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MBO Utrecht</title>
        <!-- stylesheet links -->
        <link rel="stylesheet" href="./scss/main.css">
    </head>
    <body>

        <!-- Navigation bar -->
        <?php $this->view("partials/navbar"); ?>

        <!-- Content -->
        <section class="floorplan">
            <div>
                <div class="floorplan__info">
                    <h2>Workshop titel</h2>
                    <p>Workshop informatie.</p>
                    <button>
                        <a href="">Inschrijven voor workshop</a>
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </button>
                </div>
                <div class="floorplan__img">
                    <img src="../../public/img/plattegrond3.png" alt="">
                </div>
            </div>
        </section>

        <!-- Footer -->
        <?php $this->view("partials/footer"); ?>

        
        <!-- Javascripts -->
        <!-- Icon Javascripts -->
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </body>
</html>