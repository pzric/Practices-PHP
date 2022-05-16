<html>
<head><title>CALCULAR</title></head>
<body bgcolor="#ffeaa7"><center><form action="ejercicio1.php" method="POST">
<p><font size=+2 color="red">INGRESA LA EDAD</font></p><input type="password" name="edad">
<p><font size=+2 color="blue">DINERO EN EL BOLSILLO</font></p><input type="password" name="dinero">
<p><input type="submit" value="CALCULAR"></p><font size=+2 color="greend">
<?php
if($_POST){
  $edad=$_POST['edad'];
  $dinero=$_POST['dinero'];
  $suma1=((($edad*2)+5)*500);
  if($dinero>=1000){
    echo "error mas de mil pesos";
  }
  else{
    $suma2=(($suma1+$dinero)-3758);
    echo "codificado: ",$suma2;
    $suma3=$suma2+1258;
    echo "<br>";
    echo "decodificado: ",$suma3;
  }
}
?>
</font></form></center></body></html>
