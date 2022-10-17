<?php 
   require_once APPROOT . '../helpers/session_helper.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

    <h1>Login</h1>
    

    <div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6">
 <form action= "<?= URLROOT?>/Login/login" method="POST">
      <?php flash('login') ?>
     <input type="hidden" name="type" value= "login">
     <div class="form-group">
     <label for="name/email" class="form-label">Vul hier uw e-mailadres of gebruikernaam in: </label>
     <input name="name/email" type="texy" class="form-control" placeholder="Username/Email...">
     
     </div>
     <div class="form-group">
     <label for="password" class="form-label">Vul hier wachtwoord in: </label>
     <input name="usersPwd" type="password" class="form-control" placeholder="Password...">
     </div>
     <br>
     <button type="submit" class="btn btn-danger d-grid gap-2 col-6 mx-auto">Log in</button>
 </form>
        </div>
        <div class="col-12 col-sm-6">
           <img src="/public/img/Person.png" alt="person" class="w-50 max-auto d-block">
        </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>