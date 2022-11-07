<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Survey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    
  <h3><?= $data['title']; ?>
        <hr>

    <div class="container">
      <div class="row">
          <div class="col-10">
            <a class="btn btn-dark btn-lg " href="<?= URLROOT ?>/admin/dashboard">Terug</a>
          </div>
          <div class="col-2">
          <a class="btn btn-success btn-lg " href="<?= URLROOT ?>/admin/create">Toevoegen</a>
          </div>
      </div>
    </div>
 
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover table-striped table-secondary">
                        <thead>
                            <th>Id</th>
                            <th>Vragen</th>
                            <th>Antwoorden</th>
                            <th>update</th>
                            <th>delete</th>
                        </thead>
                        <tbody>
                        <?= $data['rows']; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>