<?php


    include("./connect_db.php");
    include("./functions.php");

    $firstname = sanitize($_POST["firstname"]);
    $lastname = sanitize($_POST["lastname"]);
    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);

    $sql = "INSERT INTO `register` (`id`,
                                    `firstname`,
                                    `lastname`,
                                    `email`,
                                    `password`,
                                    `userrole`,
                                    `activated`)
                  value             (Null,
                                     '$firstname',
                                     '$lastname',
                                     '$email',
                                     '$password',
                                     'customer',
                                     1);";
    
    mysqli_query($conn, $sql);

    header("Location: ../login.php");

    ?>