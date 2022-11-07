<?php
require_once APPROOT . '../helpers/session_helper.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>




    <h1>Register</h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-sm-6">



                <form action="<?= URLROOT ?>/Register/register" method="post">
                    <div class="form-group">
                        <?php flash('register') ?>
                        <input type="hidden" name="type" value="register">
                        <label for="usersName" class="form-label">Voornaam:</label>
                        <input name="usersName" type="text" class="form-control" placeholder="Full firstname...">

                        <label for="usersEmail" class="form-label">Email:</label>
                        <input name="usersEmail" type="text" class="form-control" placeholder="Email...">

                        <label for="usersLastname" class="form-label">Achternaam:</label>
                        <input name="usersLastname" type="text" class="form-control" placeholder="Full lastname...">


                        <label for="usersPwd" class="form-label">Wachtwoord:</label>
                        <input name="usersPwd" type="password" class="form-control" placeholder="Password...">

                    </div>
                    <br>
                    <button type="submit" class="btn btn-info d-grid gap-2 col-6 mx-auto">Register</button>
                </form>
            </div>
            <div class="col-12 col-sm-6">
                <img src="/public/img/Person.png" alt="register" class="w-75 max-auto d-block">
            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>