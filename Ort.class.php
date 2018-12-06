<?php
class Ort{
    private $name;
    private $plz;

    public function __construct($name, $plz){
      $this->name = $name;
      $this->plz = $plz;
    }
    public function save(){
      $db = new mysqli('localhost', 'root', '', 'timetracker');
      $sql = "INSERT INTO timetracker.ort (ort,PLZ) VALUES ('$this->name',$this->plz)";
      if ($db->query($sql) === true) {
        echo "Neuer Eintrag erfolgreich hinzugefügt";
      } else { echo "Error: ". $sql."<br>".$db->error;   }
      $db->close();
    }

}
?>
