<?php
//class mySQLclass{
function companies(){
  $db = new mysqli('localhost', 'root', '', 'timetracker');
  $sql = "SELECT id,name FROM timetracker.company";
  $result=$db->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<option name='company' value='".$row['id']."'>".$row['name']."</option>";
  }
  $db->close();
}
function places(){
  $db = new mysqli('localhost', 'root', '', 'timetracker');
  $sql = "SELECT id,ort,PLZ FROM timetracker.ort";
  $result=$db->query($sql);
  while($row = $result->fetch_assoc()) {
    echo "<option name='ort' value='".$row['id']."'>".$row['PLZ']." ".$row['ort']."</option>";
  }
  $db->close();
}
function contacts(){
    $db = new mysqli('localhost', 'root', '', 'timetracker');
    $sql = "SELECT id,name FROM timetracker.contact";
    $result=$db->query($sql);
    while($row = $result->fetch_assoc()) {
      echo "<option name='contact' value='".$row['id']."'>".$row['name']."</option>";
    }
    $db->close();
}
function services(){
    $db = new mysqli('localhost', 'root', '', 'timetracker');
    $sql = "SELECT id,name FROM timetracker.service";
    $result=$db->query($sql);
    while($row = $result->fetch_assoc()) {
      echo "<option name='service' value='".$row['id']."'>".$row['name']."</option>";
    }
    $db->close();
}
function results(){
  $db = new mysqli('localhost', 'root', '', 'timetracker');
  $log = "SELECT contact.name AS contactName,service.name AS serviceName,log.von,log.bis,log.datum,log.comment,log.total FROM ((timetracker.log INNER JOIN timetracker.service ON service.id=log.service_id) INNER JOIN timetracker.contact ON contact.id = log.contact_id) ORDER BY datum DESC,von DESC; ";
  $result=$db->query($log);
  while($row = $result->fetch_assoc()) {
    echo "Datum: ".$row['datum']."<br>Kontakt: ".$row['contactName']."<br>Service: ".$row['serviceName']."<br>Von <time>".$row['von']."</time> bis <time>".$row['bis']."</time><br>Total: <time>".$row['total']."</time><br>Kommentar: ".$row['comment']."<br><br>";
  }
  $db->close();
}
//}
 ?>
