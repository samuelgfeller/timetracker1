<?php
$db = new mysqli('localhost', 'root', '', 'timetracker');

if($db->connect_errno > 0){ die('Unable to connect to database [' . $db->connect_error . ']'); }

$id=$_GET['id'];
$sql = "UPDATE FROM timetracker.contact WHERE id=$id";

if($db->query($sql)=== TRUE){
  echo "Updated successfully";
}
$db->close();
?>
<br> <button type="button" name="button" onclick="window.history.back();">Back</button>
