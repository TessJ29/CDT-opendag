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

<section class="login__form">
    <div class="container">
    <form class="form"caction="/authentication/login" method="post">
        <div class="input__forms">
            <div>
            <label for="email">Email</label>
            </div>
            <input name="email" id="email" type="text">
            <br>
            <div>
            <label for="password">Password</label>
            </div>
            <input name="password" id="email" type="password">
        </div>
        <div class="submit__btn">
            <button>
                        <a href="/authentication/register">Registreren</a>
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </button>
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