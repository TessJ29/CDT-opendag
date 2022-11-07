<?= $data['title']; ?>
<form action="<?= URLROOT; ?>/admin/create" method="post">
  <table>
    <tbody>
      <tr>
        <td>
          <label for="Question">Vraag:</label>
          <input type="text" name="Question" id="Question">
        </td>
      </tr>
      <tr>
        <td>
          <label for="Answer">Antwoord:</label>
          <input type="text" name="Answer" id="Answer">
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