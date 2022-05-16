<html>
<head><title>CONTADOR</title></head>
<body bgcolor="#ffeaa7"><center><form action="ejercicio4.php" method="POST">
<p><font size=+2 color="red">NOMBRE COMPLETO</font></p><input type="text" name="valor1">
<p><input type="submit" value="CALCULAR"></p><font size=+2 color="greend">
<?php
if($_POST){
  $v1=$_POST['valor1'];
  $num=strlen($v1);
  echo "numero de caracteres: ",$num,"<br>";
  for($i=1;$i<=$num;$i++){
    echo $i,".-",$v1,"<br>";
  }
  $num2=count(explode(" ",$v1));
  $sum=$num2-1;
  echo "El numero de espacios es: ",$sum;
}
?>
</font></form></center></body></html>
