<?php
    require_once APPROOT . '../helpers/session_helper.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Standard meta-tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MBO Utrecht</title>
    <!-- stylesheet links -->
    <link rel="stylesheet" href="/public/scss/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    <!-- Navigation bar -->

    <?php $this->view("partials/navbar"); ?>

    <!-- Content -->

    <section class="register__form">
        <div class="container">
            <form method="post" action="<?= URLROOT ?>/Register/register" class="form">
                <?php flash('register') ?>
                <ion-icon name="person-outline"></ion-icon>
                <input type="hidden" name="type" value="register">
                <div class="input__forms">
                    <div>
                        <div>
                            <label for="usersName">Voornaam: </label>
                        </div>
                        <input name="usersName" type="text">
                        <div>
                            <label for="usersLastname">Achternaam: </label>
                        </div>
                        <input name="usersLastname" type="text">
                    </div>
                    <div>
                        <div>
                            <label for="usersEmail">Email: </label>
                        </div>
                        <input name="usersEmail" type="email">
                        <div>
                            <label for="usersPwd">Wachtwoord: </label>
                        </div>
                        <input name="usersPwd" type="password">
                    </div>
                </div>
                <div class="submit__btn">
                    <button type="submit">
                        Registreren
                        <ion-icon name="arrow-forward-  outline"></ion-icon>
                    </button>
                </div>
            </form>
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
        </div>
    </section>

    <!-- Footer -->
    <?php $this->view("partials/footer"); ?>

    <!-- Javascripts -->

    <script src="./js/script.js"></script>

    <!-- Icon Javascripts -->

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>