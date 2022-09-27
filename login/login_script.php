<?php
   var_dump($_POST);
   include("../register/connect_db.php");
   include("../register/functions.php");


   if(empty($email) || empty($password))
   {
      header("Location: ../login.php");    
        } else {
    $sql = "SELECT * FROM `register` Where `email` = '$email'AND `password` = '$password' AND `activated` = 1";
    $result = mysqli_query($conn, $sql);

    if(!mysqli_num_rows($result)){
       header("Location: ../login.php");
    } else {
        $record = mysqli_fetch_assoc($result);

        if(!$record["activated"]) {
            header("Location: ../login.php");
        } elseif(!password_verify($password, $record["password"]))
        {
           header("Location: ../login.php");
        } else {
            $_SESSION["id"] = $record["id"];
            $_SESSION["userrole"] = $record["userrole"];

            switch($record["userrole"]){
                case 'customer':
                    header("Location: ../c-home.php");
                    break;
                case 'admin':
                    header("Location: ../a-home.php");
                    break;
                default:
                    header("Location: ../index.php");
                    break;
            }
        }
    }
   }
