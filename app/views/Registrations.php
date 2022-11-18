<?php $registrations = $this->RegistrationsModel->getRegistrations(); ?>
<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./scss/main.css">
</head>
<!-- Navigation Bar -->
<?php $this->view("partials/navbar"); ?>

<body>
    <table>
        <tr>
            <th>id</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Phone</th>
        </tr>
        <?php
        $rows = "";
        // var_dump($data["rows"]);
        foreach ($data["rows"] as $value) {
            $rows .= "<tr>
                <td>$value->id</td>
                <td>" . htmlentities($value->firstname, ENT_QUOTES, 'ISO-8859-1') . "</td>
                <td>" . htmlentities($value->lastname, ENT_QUOTES, 'ISO-8859-1') . "</td>
                <td>" . htmlentities($value->email, ENT_QUOTES, 'ISO-8859-1') . "</td>
                <td>" . number_format($value->phone, 0, ',', '') . "</td>
            </tr>";
            echo $rows;
        }
        ?>
    </table>
    <button>
        <a href=../index.php>terug</a>
        <ion-icon name="arrow-forward-outline"></ion-icon>
    </button>
    <?php $this->view("partials/footer"); ?>
</body>

</html>