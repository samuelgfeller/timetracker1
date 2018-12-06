<?php
include("index.php");

class InsertInDb{

    public function saveContact($contact){
      $db = new mysqli('localhost', 'root', '', 'timetracker');

      $name=$contact->getName();
      $taetigkeit=$contact->getTaetigkeit();
      $adresse=$contact->getAdresse();
      $sql = "INSERT INTO timetracker.contact (company_id,ort_id,name,adresse,taetigkeit) VALUES (2,3,'$name','$adresse','$taetigkeit')";
      if ($db->query($sql) === true) {
        echo "Neuer Eintrag erfolgreich hinzugefügt";
      } else {
          echo "Error: ". $sql."<br>".$db->error;
      }
      $db->close();
    }

}
?>
