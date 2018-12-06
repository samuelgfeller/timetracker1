<?php
class Log{
    private $contact_id;
    private $service_id;
    private $comment;
    private $von;
    private $startMins;
    private $startHours;
    private $startSecs;
    //(private $start;)boolean-

    public function __construct($contact_id,$service_id,$comment){
      $this->contact_id = $contact_id;
      $this->service_id = $service_id;
      $this->comment = $comment;
      $this->von=date('G:i:s');/*actual time*/;
      $this->startHours=date('G');
      $this->startMins=date('i');
      $this->startSecs=date('s');
    }
    public function getVon(){
      return $this->von;
    }
    public function getStartHours(){
      return $this->startHours;
    }
    public function getStartMins(){
      return $this->startMins;
    }
    public function getStartSecs(){
      return $this->startSecs;
    }
    public function getContact_id(){
      return $this->contact_id;
    }
    public function getService_id(){
      return $this->service_id;
    }
    public function getComment(){
      return $this->comment;
    }

}
?>
