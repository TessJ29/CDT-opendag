<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/scss/main.css">
    <title>Document</title>
</head>
<body>

    <!-- Navigation Bar -->
    <?php $this->view("partials/navbar"); ?>

<section class="register__form">
    <div class="container">
        <form class="form" action="/register" method="post">
            <div class="input__forms">
            <div>
                <label for="firstname">Voornaam</label>
            </div>
            <input name="firstname" id="firstname" type="text">
            <br>
            <div>
                <label for="lastname">Achternaam</label>
            </div>
            <input name="lastname" id="lastname" type="text">
    
            <br>
            <div>
                <label for="email">Email</label>
            </div>
            <input name="email" id="email" type="text">
            </div>
            <div class="input__forms">
            <br>
            <div>
                <label for="password">Password</label>
            </div>
            <input name="password" id="email" type="password">
    
            <br>
            <div>
                <label for="phone">Telefoonnummer</label>
            </div>
            <input name="phone" id="phone" type="text">
            <br>
            <div class="submit__btn">
            <button>
                        <a href="/authentication/register">Registreren</a>
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </button>
            </div>
            </div>
        </form>
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