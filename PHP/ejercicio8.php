<html>
<head><title>OPERACONES BASICAS</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="widht=divice-widht, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <link rel="stylesheet" href="css/estilos.css"></head>
<body bgcolor="#ffeaa7"><form action="ejercicio8.php" method="POST">
<p><font size=+2 color="red">ESCIBE UNA PALABRA</font></p><input type="text" name="valor1">
<p><input type="submit" value="CALCULAR"></p><font size=+2 color="greend">
<?php
if($_POST){
  $pal=$_POST['valor1'];
  $pal2=strrev($pal);
  if($pal==$pal2){
    echo "ES UN PALINDROMO<br>";
    echo $pal," igual que ",$pal2;
  }
  else{
    echo "NO ES PALINDROMO<br>";
    echo $pal," no es igual que ",$pal2;
  }
}
?>
</font></form></body></html>
