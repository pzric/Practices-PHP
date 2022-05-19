<?php
require("../controlador/conexion.php");
$id=rand(1,21);
$result=mysqli_query($mysqli,"SELECT * FROM preguntas WHERE id=$id");
$extraido=mysqli_fetch_array($result);
echo "<table>";
echo "<tr><td colspan='2'><h2>Categoria:".$extraido['categoria']."</h2></td></tr>";
echo "<tr><td colspan='2'><h1>".$extraido['pregunta']."</h1></td></tr>";
echo "<input class='invi' type='text' value='$extraido[respuesta]' name='res1'>";
echo "<tr><td><input class='bot1' type='submit' value='$extraido[a]' name='res'></td>";
echo "<td><input class='bot2' type='submit' value='$extraido[b]' name='res'></td></tr>";
echo "<tr><td><input class='bot3' type='submit' value='$extraido[c]' name='res'></td>";
echo "<td><input class='bot4' type='submit' value='$extraido[d]' name='res'></td></tr>";
echo "</table>";
?>
