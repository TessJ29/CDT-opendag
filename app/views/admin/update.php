<?= $data['title']; ?>

<form action="<?= URLROOT; ?>/admin/update" method="post">
  <table>
    <tbody>
        <tr>
            <td>
                <label for="usersName">Voornaam:</label>
                <input type="text" name="usersName" value="<?= $data["row"]->usersName?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="usersEmail">Email:</label>
                <input type="text" name="usersEmail" value="<?= $data["row"]->usersEmail?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="usersLastname">Achternaam:</label>
                <input type="text" name="usersLastname" value="<?= $data["row"]->usersLastname?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="usersId" value="<?= $data["row"]->usersId?>">
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