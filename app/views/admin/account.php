<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <title>Admin</title>
</head>

<body>

    
    <h3><?= $data['title']; ?>
        <hr>
      <a class="btn btn-dark btn-lg " href="<?= URLROOT ?>/admin/dashboard">Terug</a>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-striped table-secondary">
                        <thead>
                            <th>Id</th>
                            <th>Voornaam</th>
                            <th>Email</th>
                            <th>Achternaam</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <?= $data['rows']; ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <!-- Dit is het javascript bestand -->
        <script src="js/app.js"></script>
</body>

</html>