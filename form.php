<?php include_once("getFromDb.php");?>
 <br><h1>Objekte hinzufügen</h1>
<!-- Kontakt hinzufügen-->
Kontakt hinzufügen: <form method="get" name="addContact">
  <input type="text" name="name" placeholder="Vorname und Nachname">
  <input type="text" name="adresse" placeholder="Strasse und Nr">
  <select name="company_id">
    <option value="" disabled selected>Firma</option>
    <?php companies();?>
  </select>
  <input type="text" name="taetigkeit" placeholder="Tätigkeit">
  <select name="ort_id">
    <option value="" disabled selected>Ort</option>
    <?php places();?>
  </select>
  <input type="submit" name="send" value="Kontakt hinzufügen">
</form><br>
<!-- Firma hinzufügen-->
Firma hinzufügen: <form method="get" name="addCompany">
  <input type="text" name="name" placeholder="Name der Firma">
  <input type="text" name="adresse" placeholder="Strasse und Nr">
  <select name="ort_id">
    <option value="" disabled selected>Ort</option>
    <?php places();?>
  </select>
  <input type="submit" name="send" value="Firma hinzufügen">
</form><br>
Ort hinzufügen: <form method="get" name="addPlace">
  <input type="text" name="name" placeholder="Name des Orts">
  <input type="number" name="plz" placeholder="PLZ">
  <input type="submit" name="send" value="Ort hinzufügen">
</form><br>
Service hinzufügen: <form method="get" name="addCompany">
  <input type="text" name="name" placeholder="Name des Services">
  <input type="submit" name="send" value="Service hinzufügen">
</form>
<!--<button type="button" name="button" onclick="location.href='index.php?display=all'">Einträge Sehen</button>-->
