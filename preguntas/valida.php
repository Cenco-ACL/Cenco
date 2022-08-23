<?php
if($_POST["preg1"]=="Facturación y Pagos"){
  header("location:preguntafac.php");
}else if($_POST["preg1"]=="Solicitud de prepago"){
  header("location:preguntasol.php");
}else if($_POST["preg1"]=="Viaje al extranjero"){
  header("location:preguntavia.php");
}else if($_POST["preg1"]=="Desconocimiento de deuda"){
  header("location:preguntades.php");
}else{
  header("location:../preguntas.php");
}

?>
