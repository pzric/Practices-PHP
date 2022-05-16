<?php
include 'partes/barra.html';
require("partes/conexion.php");
$sql=("SELECT * FROM bitacora");
$query=mysqli_query($mysqli,$sql);
echo "<table class='table table-hover'><thead><tr>";
echo "<th scope='col'>Id";
echo "<th scope='col'>Operacion";
echo "<th scope='col'>Usuario";
echo "<th scope='col'>Host";
echo "<th scope='col'>Fecha";
echo "<th scope='col'>Tabla</tr></thead>";
while ($extraido=mysqli_fetch_array($query)){
  echo "<tbody><tr><td>",$extraido[0];
  echo "<td>",$extraido[1];
  echo "<td>",$extraido[2];
  echo "<td>",$extraido[3];
  echo "<td>",$extraido[4];
  echo "<td>",$extraido[5];
  echo "</tr></tbody>";
  }
echo "</table>";
 ?>
