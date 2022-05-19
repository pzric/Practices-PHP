<?php
require("../controlador/conexion.php");
$result=mysqli_query($mysqli,"SELECT * FROM medidor ORDER BY puntos ASC");
echo "<table border=+3>";
echo "<tr><td>NOMBRE</td>";
echo "<td>PUNTOS</td></tr>";

while ($extraido=mysqli_fetch_array($result))
{
  echo "<tr><td>",$extraido['nombre']."</td>";
  echo "<td>",$extraido['puntos']."</td></tr>";
  echo "</tr>";
}
echo "</table>";
?>
