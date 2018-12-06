<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto|Encode+Sans+Expanded" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <h1>Zeiterfassung</h1>
    <?php include_once("getFromDb.php");?>
    <form class="form" method="post">
      Firma:<br>
      <select name="company_id"><!--Rueckgabe ist id der Firma-->
        <?php companies();?>
      </select><br><br>
      Kontakt:<br>
      <select name="contact_id">
        <?php contacts();?>
      </select><br><br>
      Service:<br>
      <select name="service_id">
        <?php services();?>
      </select><br><br>
      Kommentar:<br>
      <input type="text" name="comment" placeholder="Kommentar"><br><br>
      <input type="submit" name="send" value="Starten">
    </form>
  </body>
</html>
