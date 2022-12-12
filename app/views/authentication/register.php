<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/authentication/register" method="post">
        <label for="firstname">Voornaam</label>
        <input name="firstname" id="firstname" type="text">
        <br>
        <label for="lastname">Achternaam</label>
        <input name="lastname" id="lastname" type="text">

        <br>
        <label for="email">Email</label>
        <input name="email" id="email" type="text">

        <br>
        <label for="password">Password</label>
        <input name="password" id="email" type="password">

        <br>
        <label for="phone">Telefoonnummer</label>
        <input name="phone" id="phone" type="text">

        <br>
        <label for="role">Role</label>
        <input name="role" id="role" type="number">

        <input type="submit">
    </form>
</body>
</html>