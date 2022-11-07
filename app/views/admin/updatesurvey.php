<?= $data['title']; ?>

<form action="<?= URLROOT; ?>/admin/updateSurvey" method="post">
  <table>
    <tbody>
        <tr>
            <td>
                <label for="Question">Vraag:</label>
                <input type="text" name="Question" value="<?= $data["row"]->Question?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="Answer">Antwoord:</label>
                <input type="text" name="Answer" value="<?= $data["row"]->Answer?>">
            </td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="Id" value="<?= $data["row"]->Id?>">
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