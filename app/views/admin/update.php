<?= $data['title']; ?>

<form action="<?= URLROOT; ?>/admin/update" method="post">
  <table>
    <tbody>
        <tr>
            <td>
                <label for="firstname">Voornaam:</label>
                <input type="text" name="firstname" id="firstname" value="<?= $data["row"]->firstname?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="lastname">Achternaam:</label>
                <input type="text" name="lastname" id="lastname" value="<?= $data["row"]->lastname?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" value="<?= $data["row"]->email?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="password">Wachtwoord</label>
                <input type="text" name="password" id="password" value="<?= $data["row"]->password?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="userrole">Gebruikersrol</label>
                <select name="userrole" id="userrole">
                    <option value="customer"<?php if($data['row']->userrole == 'customer') {echo 'Selected';}?>>Customer</option>
                    <option value="admin"<?php if($data['row']->userrole == 'admin') {echo 'Selected';}?>>Admin</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="id" value="<?= $data["row"]->id?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Verzenden">
            </td>
        </tr>
    </tbody>
  </table>
</form>