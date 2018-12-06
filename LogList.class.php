<?php
class LogList{
    private $name;
    private $start;//boolean
    private $von;
    private $startMins;
    private $startHours;
    private $startSecs;
    private $logg;

    public function __construct(){
    }
    public function save(){
      $db = new mysqli('localhost', 'root', '', 'timetracker');
      $sql = "INSERT INTO timetracker.service (name) VALUES ('$this->name')";
      if ($db->query($sql) === true) {
        echo "Neuer Eintrag erfolgreich hinzugefügt";
      } else { echo "Error: ". $sql."<br>".$db->error;   }
      $db->close();
    }
    public function addLog($log){
      include_once("Log.class.php");
      $this->von=$log->getVon();
      $this->startMins=$log->getStartMins();
      $this->startHours=$log->getStartHours();
      $this->contact_id=$log->getContact_id();
      $this->service_id=$log->getService_id();
      $this->comment =$log->getComment();
      $this->startSecs =$log->getStartSecs();

      $bis=date('G:i:s');/*actual time*/
      $datum=date('Y-m-d');
      $hours=date('G')-$this->startHours;
      $mins=date('i')-$this->startMins;
      $secs=date('s')-$this->startSecs;
      if($secs<0){
        $secs=$secs+60;
        $mins=$mins-1;
      }if ($mins<0) {
        $mins=$mins+60;
        $hours=$hours-1;
      }
      $total=$hours." Std. ".$mins." Min. ".$secs." Sek.";
      $db = new mysqli('localhost', 'root', '', 'timetracker');
      $sql = "INSERT INTO timetracker.log (contact_id,service_id,von,bis,datum,comment,total) VALUES ($this->contact_id,$this->service_id,'$this->von','$bis','$datum','$this->comment','$total')";
      if ($db->query($sql) === true) {
        echo "Neuer Eintrag erfolgreich hinzugefügt";
      } else { echo "Error: ". $sql."<br>".$db->error;   }
      $db->close();
    }
    public function setLog($log){
      $this->logg=$log;
    }
    public function getLog(){
      return $this->logg;
    }

}
?>
