<?php
if(ISSET($_POST['confirmar'])){
  $det=$_POST['det'];
  $cat=$_POST['cat'];
  mail('luiscordovaherrera@gmail.com','Titulo','Hola'.$det,'From: luiscordovaherrera@gmail.com');
  echo "Coreo enviadop";
}else{
  echo "Error con el correo";
}
?>
