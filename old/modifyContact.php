<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>modify Contact</title>
  </head>
  <body>
    <?php $id=$_GET['id'];?>
    <form action="editContact.php?id=<?php echo $id; ?>" method="GET">
          Name: <br>
          <input type="text" name="name" value="<?php echo $_GET["name"];?>"><br>
          Strasse / Hausnummer: <br>
           <input type="text" name="adresse" value="<?php echo $_GET["adresse"];?>"><br>
          Tätigkeit: <br>
           <input type="text" name="taetigkeit" value="<?php echo $_GET["taetigkeit"];?>"><br>
           <input type="submit" value="Submit">
    </form>
  </body>
</html>
