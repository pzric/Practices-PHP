<html>
<head><title>OPERACONES BASICAS</title></head>
<body bgcolor="#ffeaa7"><center><form action="ejercicio2.php" method="POST">
<p><font size=+2 color="red">VALOR 1</font></p><input type="text" name="valor1">
<p><font size=+2 color="blue">VALOR 2</font></p><input type="text" name="valor2">
<p><input type="submit" value="CALCULAR"></p><font size=+2 color="greend">
<?php
if($_POST){
  $v1=$_POST['valor1'];$v2=$_POST['valor2'];echo "<hr>";
  $suma=$v1+$v2;echo "La suma de: ",$v1,"+",$v2,"=",$suma,"<hr>";
  $resta=$v1-$v2;echo "La resta de: ",$v1,"-",$v2,"=",$resta,"<hr>";
  $multi=$v1*$v2;echo "La multiplicacion de: ",$v1,"*",$v2,"=",$multi,"<hr>";
  $divicion=$v1/$v2;echo "La divicion de: ",$v1,"/",$v2,"=",$divicion;echo "<hr>";
}
?>
</font></form></center></body></html>
