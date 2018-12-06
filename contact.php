<?php
$db = new mysqli('localhost', 'root', '', 'timetracker');

if($db->connect_errno > 0){ die('Unable to connect to database [' . $db->connect_error . ']');}

$sql = "SELECT * FROM contact";
$result = $db->query($sql);

class contact{
    public $prop1="I'm a class property";

    public function setContact($newval){
      $this->prop1=$newval;
    }
    public function getContact(){
      return $this->prop1 . "<br>";
    }
  }
  $obj=new contact;

  echo $obj->getProperty();
  $obj->setProperty("New Value");
  echo $obj->getProperty();


 ?>
