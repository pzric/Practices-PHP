<html>
<head><title>OPERACONES BASICAS</title></head>
<body bgcolor="#ffeaa7"><form action="ejercicio11.php" method="POST"><center>
<p><font size=+2 color="red">ESCIBE UNA PALABRA</font></p><input type="text" name="valor1">
<p><input type="submit" value="CALCULAR"></p><font size=+2 color="greend">
<?php
if($_POST){
  $cadena=$_POST['valor1'];
  for($i=0; $i<strlen($cadena); $i++){
    echo $cadena[$i];
  }
  echo "<br>".strlen($cadena)."<br>";
  for($i=strlen($cadena); $i>=0; $i--){
    echo $cadena[$i];
  }
}
 ?>
</font></form></center></body></html>
