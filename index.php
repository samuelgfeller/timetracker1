<link rel="stylesheet" href="style.css">

<?php
include_once("LogList.class.php");
$logList = new LogList("test");

//Kontakt hinzufügen
if (isset($_GET['send']) && $_GET['send'] == 'Kontakt hinzufügen') {
  header('Location: http://localhost/timetracker/index.php');
  include_once("Contact.class.php");
  $name=$_GET['name'];
  $taetigkeit=$_GET['taetigkeit'];
  $adresse=$_GET['adresse'];
  $comapany_id=$_GET['company_id'];
  $ort_id=$_GET['ort_id'];
  $c = new Contact($name, $taetigkeit, $adresse,$comapany_id, $ort_id);
  $c->save();
  exit();
}else if (isset($_GET['send']) && $_GET['send'] == 'Firma hinzufügen') { //Firma hinzufügen
  header('Location: http://localhost/timetracker/index.php');
  include_once("Company.class.php");
  $name=$_GET['name'];
  $adresse=$_GET['adresse'];
  $ort_id=$_GET['ort_id'];
  $c = new Company($name, $adresse, $ort_id);
  $c->save();
  exit();
}else if (isset($_GET['send']) && $_GET['send'] == 'Ort hinzufügen') { //Firma hinzufügen
  header('Location: http://localhost/timetracker/index.php');
  include_once("Ort.class.php");
  $name=$_GET['name'];
  $plz=$_GET['plz'];
  $o = new Ort($name, $plz);
  $o->save();
  exit();
}else if (isset($_GET['send']) && $_GET['send'] == 'Service hinzufügen') { //Service hinzufügen
  header('Location: http://localhost/timetracker/index.php');
  include_once("Service.class.php");
  $name=$_GET['name'];
  $se = new Service($name);
  $se->save();
  exit();
}else if (isset($_POST['send']) && $_POST['send'] == 'Starten') { //Starten
  include_once("Log.class.php");
  $contact_id=$_POST['contact_id'];
  //$company_id=$_GET['company_id'];
  $service_id=$_POST['service_id'];
  $comment=$_POST['comment'];
  $log = new Log($contact_id,$service_id,$comment);
  $logList->setLog($log);
  /*Write in a textfile*/
  $objData = serialize($logList);
    $fp = fopen("notice.txt", "w");
    fwrite($fp, $objData);
    fclose($fp);
?>
<br><br>
  <form class="form" method="post">
    <input type="submit" name="send" value="Stoppen">
  </form>
  <?php
}else if (isset($_POST['send']) && $_POST['send'] == 'Stoppen') { //Stoppen
  header('Location: http://localhost/timetracker/index.php');
  include_once("Log.class.php");
  /*Get data from txt file*/
    $objData = file_get_contents("notice.txt");
    $obj = unserialize($objData);
    $log = $obj->getLog();
    $obj->addLog($log);
   exit();
}
else{
  include_once("timetracker.php");
  ?>
  <script type="text/javascript">
  function show(x){
    if (x==1) {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("addObjects").innerHTML = this.responseText;
    }
    };
    xhttp.open("GET", "form.php", true);
    xhttp.send();
    document.getElementById("addObjectsBtn").style.display="none";

    }else if(x==2){
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("showResults").innerHTML = this.responseText;
    }
    };
    xhttp.open("GET", "results.php", true);
    xhttp.send();
    document.getElementById("showResultsBtn").style.display="none";

    }
  }
  </script>
  <button type="button" id="addObjectsBtn" onclick="show(1)">Objekte hinzufügen</button>
  <button type="button" id="showResultsBtn" onclick="show(2)">Resultate anzeigen</button>
    <div id="addObjects"></div>
    <div id="showResults"></div>

  <?php
}
  ?>
