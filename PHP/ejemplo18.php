<?php
function fecha_hoy(){ 
  echo date ('d/m/Y');
  }
  fecha_hoy();
  ?>
<html>
<head><title>Suma de dos valores</title></head>
<body><center><form action="ejemplo18.php" method="POST">
<p><font size=+2 color="red">VALOR DE X</font></p><input type="text" name="valor1">
<p><font size=+2 color="blue">VALOR DE Y</font></p><input type="text" name="valor2">
<p><input type="submit" value="CALCULAR"></p>
<?php
if($_POST){
  function raiz(){
    $x=$_POST['valor1'];
    $y=$_POST['valor2'];
    echo ($x-$y)/(sqrt($x)-sqrt($y));
  }
  raiz();
}
?>
</body>
</html>
