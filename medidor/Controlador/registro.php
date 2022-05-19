<?php
require("conexion.php");
if($_POST){
  $nombre=$_POST['nombre'];
  $escuela=$_POST['escuela'];
  $edad=$_POST['edad'];
  $correo=$_POST['correo'];
  $numero=$_POST['numero'];
  mysqli_query($mysqli,"INSERT INTO medidor VALUES('','$nombre','$escuela','$edad','$correo','$numero','')");
  session_start();
  $nombre=$_POST['nombre'];
  $edad=$_POST['edad'];
  $sql=mysqli_query($mysqli,"SELECT * FROM medidor WHERE nombre='$nombre' AND edad='$edad'");
  $f=mysqli_fetch_assoc($sql);
  $_SESSION['id']=$f['id'];
  header("Location: ../vista/panel.php");
}
?>
