<?php

$_POST["guardar"];
if (isset($_POST["guardar"])) {
  echo $_POST["Nombres"];
  echo "<br>";
  echo $_POST["Apellidos"];
  echo "<br>";
  echo $_POST["FechaN"];
  echo "<br>";
  echo $_POST["Correo"];
  echo "<br>";
  echo $_POST["Password"];
  echo "<br>";
  if($_POST["carrera"] == 'TCEI'){
    echo "TNS EN COMPUTACIÓN E INFORMÁTICA";
  }elseif ($_POST["carrera"] == 'TGPP') {
    echo "TNS EN GESTIÓN PORTUARIA Y PESQUERA";
  }elseif ($_POST["carrera"] == 'TTS') {
    echo "TNS EN TRABAJO SOCIAL";
  }elseif ($_POST["carrera"] == 'TEISE') {
    echo "TNS EN ELECTRICIDAD INDUSTRIAL Y SISTEMAS ELÉCTRICOS";
  }elseif ($_POST["carrera"] == 'TEDP') {
    echo "TNS EN EDUCACIÓN DE PÁRVULOS";
  }elseif ($_POST["carrera"] == 'TMI') {
    echo "TNS EN MECÁNICA INDUSTRIAL";
  }else {
    echo "Carrera No Detectada";
  }
  echo "<br>";
  echo $_POST["jornada"];
  echo "<br>";
  if($_POST["grat"]=='Gratuidad')
  {
    echo "Tiene Gratuidad";
  }else {
    echo "No Tiene Gratuidad";
  }
  echo "<br>";
  if($_POST["alim"]=='Alimentacion')
  {
    echo "Tiene Beca de Alimentacion";
  }else {
    echo "No Tiene Beca de Alimentacion";
  }

}else {
  echo "No se han enviado datos";
}


?>
