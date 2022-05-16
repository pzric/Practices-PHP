<?php
function fecha_hoy(){
  echo date ('d/m/Y');
  }
  fecha_hoy();
  ?>
<html>
<head><title>secuencias</title></head>
<body bgcolor="yellow"><center><form action="ejemplo20.php" method="POST">
<p><font size=+2 color="blue">PRIMER NUMERO</font></p><input type="text" name="valor1">
<p><font size=+2 color="red">SEGUNDO NUMERO</font></p><input type="text" name="valor2">
<p><font size=+2 color="green">TERCER NUMERO</font></p><input type="text" name="valor3">
<p><input type="submit" value="CALCULAR"></p><font size=+2 color="black">
<?php
if($_POST){
  $v1=$_POST['valor1'];
  $v2=$_POST['valor2'];
  $v3=$_POST['valor3'];
  echo "<hr>";
  if($v1>$v2){
    if($v1>$v3){
      echo "el mayor es el valor 1: ",$v1;
    }
  }
  if($v2>$v1){
    if($v2>$v3){
      echo "el mayor es el valor 2: ",$v2;
    }
  }
  if($v3>$v1){
    if($v3>$v2){
      echo "el mayor es el valor 3: ",$v3;
    }
  }
}
?>
</font></body></html>
