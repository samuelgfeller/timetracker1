<?php
class Service{
    private $name;

    public function __construct($name){
      $this->name = $name;
    }
    public function save(){
      $db = new mysqli('localhost', 'root', '', 'timetracker');
      $sql = "INSERT INTO timetracker.service (name) VALUES ('$this->name')";
      if ($db->query($sql) === true) {
        echo "Neuer Eintrag erfolgreich hinzugefügt";
      } else { echo "Error: ". $sql."<br>".$db->error;   }
      $db->close();
    }
    public function setName($name){
    $this->name=$name;
    }
    public function getName(){
      return $this->name;
    }

}
?>
