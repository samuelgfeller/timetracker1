<?php
class Company{
    private $name;
    private $adresse;
    private $ort_id;

    public function __construct($name, $adresse,$ort_id){
      $this->name = $name;
      $this->adresse = $adresse;
      $this->ort_id = $ort_id;
    }
    public function save(){
      $db = new mysqli('localhost', 'root', '', 'timetracker');
      $sql = "INSERT INTO timetracker.company (ort_id,name,adresse) VALUES ($this->ort_id,'$this->name','$this->adresse')";
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
