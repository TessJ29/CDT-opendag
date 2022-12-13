<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
            <!-- Navigation Bar -->
            <?php $this->view("partials/navbar"); ?>


<h1>Registreren voor de opendag</h1>
<section class="login__form">
    <div class="container">
    <form class="form" method="post" action="/registeropenday/">
    <label for="">Voornaam</label>
    <input name="firstname" id="firstname" type="text">
    <br>
    <label for="">Achternaam    </label>
    <input name="lastname" id="lastname" type="text">

    <br>
    <label for="email">Email</label>
    <input name="email" type="email">

    <br>
    <label for="phone">Mobiel</label>
    <input name="phone" type="tel" pattern="(^\+[0-9]{2}|^\+[0-9]{2}\(0\)|^\(\+[0-9]{2}\)\(0\)|^00[0-9]{2}|^0)([0-9]{9}$|[0-9\-\s]{10}$)" placeholder="+310624141572"> 

    <br>
    <input type="submit">
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