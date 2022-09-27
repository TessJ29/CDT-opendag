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
            <form action="./register/register_script.php" method="post">
            <div class="form-group">
             <label for="firstname" class="form-label">Voornaam:</label>
             <input name="firstname" type="text" class="form-control" id="firstname" autofocus>

             <label for="laststname" class="form-label">Achternaam:</label>
             <input name="lasttname" type="text" class="form-control" id="lastname" autofocus>
             
             <label for="inputEmail1" class="form-label">E-mail: </label>
             <input name="email" type="email" class="form-control" id="email" aria-describedby="email" autofocus>

             <label for="password" class="form-label">wachtwoord:</label>
             <input name = "password" type="password" class="form-control" id="password" aria-describedby="password" autofocus>
              </div>
              <br>
              <button type="submit" class="btn btn-info d-grid gap-2 col-6 mx-auto">Register</button>
            </form>
            </div>
                    <div class="col-12 col-sm-6">
           <img src="./img/Person.png" alt="Register" class="w-75 max-auto d-block">
        </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>