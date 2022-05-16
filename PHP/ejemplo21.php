<?php
function fecha_hoy(){
  echo date ('d/m/Y');
  }
  fecha_hoy();
  ?>
<html>
<head><title>secuencias</title></head>
<body bgcolor="yellow"><center><form action="ejemplo21.php" method="POST">
<p><font size=+2 color="blue">DAME UN NUMERO</font></p><input type="text" name="valor1">
<p><input type="submit" value="CALCULAR"></p><font size=+2 color="black">
<?php
if($_POST){
  $v1=$_POST['valor1'];
    while($v1<>0){
    $num = array('');
    $num[]=$v1;
    if($v1<0){
      echo "se a ingresado un numero negativo";
    }
    if($v1>0){
      echo "numero positivo";
    }
  }
  echo "fin del proceso";
  echo $num[1];
}
?>
</font></body></html>
