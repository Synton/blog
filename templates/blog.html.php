<!-- Hier wird ein Template erstellt und mit der Methode Post definiert.
     Dieses Template wird später in einer PHP Datei eingebunden. -->
<h1>Blog erstellen</h1>
<form  action="createblog.php" method="post">
  <table>
    <tr>
      <td>
        <label for="blogname">Blog Titel: </label>
      </td>
      <td>
        <input type="text" id="blogname" name="blogname" required="required">
      </td>
    </tr>
    <tr>
      <td>&nbsp;
      </td>
      <td>&nbsp;
      </td>
    </tr>
   
    <tr>
      <td align="center" colspan="2">
        <input type="submit" value="Erstellen" />
      </td>
    </tr>
</table>
