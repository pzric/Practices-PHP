<html>
<head><title>CONTADOR</title></head>
<body bgcolor="#ffeaa7"><center><form action="ejercicio3.php" method="POST">
<p><font size=+2 color="red">NOMBRE COMPLETO</font></p><input type="text" name="valor1">
<p><input type="submit" value="CALCULAR"></p><font size=+2 color="greend">
<?php
if($_POST){
  $v1=$_POST['valor1'];
  $num=strlen($v1);
  if($num==0){
    echo "cero caracteres";    
  }
  else{
    echo "El numero de caracteres es: ",$num;
  }
}
?>
</font></form></center></body></html>
