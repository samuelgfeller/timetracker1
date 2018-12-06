<?php
class Contact{
    private $name;
    private $taetigkeit;
    private $adresse;
    private $company_id;
    private $ort_id;

    /*public function __construct($id){
      //get id from getFromDb.php
    }*/
    public function __construct($name, $taetigkeit, $adresse,$company_id,$ort_id){
      $this->name = $name;
      $this->taetigkeit  = $taetigkeit;
      $this->adresse = $adresse;
      $this->company_id = $company_id;
      $this->ort_id = $ort_id;
    }
    public function save(){

      $db = new mysqli('localhost', 'root', '', 'timetracker');
      $sql = "INSERT INTO timetracker.contact (company_id,ort_id,name,adresse,taetigkeit) VALUES ($this->company_id,$this->ort_id,'$this->name','$this->adresse','$this->taetigkeit')";
      if ($db->query($sql) === true) {
        echo "Neuer Eintrag erfolgreich hinzugefügt";
      } else {
          echo "Error: ". $sql."<br>".$db->error;
      }
      $db->close();
    }
    public function setName($name){
    $this->name=$name;
    }
    public function getId(){
      return $this->name;
    }
    public function setTaetigkeit($taetigkeit){
      $this->taetigkeit=$taetigkeit;
    }
    public function getTaetigkeit(){
      return $this->taetigkeit;
    }
    public function setAdresse($adresse){
      $this->adresse=$adresse;
    }
    public function getAdresse(){
      return $this->adresse;
    }
}
?>
