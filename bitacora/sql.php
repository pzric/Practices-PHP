<?php
include 'partes/barra.html';
require("partes/conexion.php");
$sql=("SELECT num_tarjeta,nombre FROM maestros UNION ALL SELECT clave_carrera,nom_carrera FROM carrera ");
$query=mysqli_query($mysqli,$sql);
echo "<table class='table table-hover'><thead><tr>";
echo "<th scope='col'>Id";
echo "<th scope='col'>Nombre</tr></thead>";
while ($extraido=mysqli_fetch_array($query)){
  echo "<tbody><tr><td>",$extraido[0];
  echo "<td>",$extraido[1];
  echo "</tr></tbody>";
  }
echo "</table>";

$sql2=("SELECT clave_carrera FROM carrera LEFT JOIN departamento ON carrera.clave_carrera = departamento.num_departamento INTERSECT
        SELECT clave_carrera FROM carrera RIGHT JOIN departamento ON carrera.clave_carrera = departamento.num_departamento");
$query2=mysqli_query($mysqli,$sql2);
echo "<table class='table table-hover'><thead><tr>";
echo "<th scope='col'>Id";
echo "<th scope='col'>Nombre";
echo "<th scope='col'>Carrera</tr></thead>";
while ($extraido2=mysqli_fetch_array($query2)){
  echo "<tbody><tr><td>",$extraido2[0];
  echo "<td>",$extraido2[1];
  echo "<td>",$extraido2[2];
  echo "</tr></tbody>";
  }
echo "</table>";

 ?>
