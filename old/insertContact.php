<?php
$db = new mysqli('localhost', 'root', '', 'timetracker');

if($db->connect_errno > 0){
  die('Unable to connect to database [' . $db->connect_error . ']');
}


$name=$_GET['name'];
$adresse=$_GET['adresse'];
$taetigkeit=$_GET['taetigkeit'];
$ort_id=$_GET['ort_id'];
$company_id=$_GET['taetigkeit'];
$sql = "INSERT INTO timetracker.contact (company_id,ort_id,name,adresse,taetigkeit) VALUES (2,3,'$name','$adresse','$taetigkeit')";

if($db->query($sql)=== TRUE){
  echo "Created successfully";
}
$db->close();
?>
<button type="button" name="button" onclick="window.history.back();">Back</button>
