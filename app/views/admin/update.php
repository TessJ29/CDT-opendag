<?= $data['title']; ?>

<form action="<?= URLROOT; ?>/admin/update" method="post">
  <table>
    <tbody>
        <tr>
            <td>
                <label for="usersName">Naam:</label>
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
                <label for="usersUid">GebruikersUid</label>
                <input type="text" name="usersUid" value="<?= $data["row"]->usersUid?>">
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