<center><form action="ejemplo12.php" method="POST">
<p><font size=+2 color="red">ESCRIBE EL PRIMER VALOR</font></p><input type="text" name="valor1">
<p><font size=+2 color="blue">ESCRIBE EL SEGUNDO VALOR</font></p><input type="text" name="valor2">
<p><input type="submit" value="CALCULAR"></p>
<?php
if ($_POST){
$a=$_POST['valor1'];
$b=$_POST['valor2'];
class dividir{
  var $resultado;
  function d($a,$b){
    $this->resultado=$a*$b;
  }
  function div($a,$b){
    $this->resultado=$a/$b;
  }
  function muestra(){
    echo $this->resultado,"<br>";
  }
}
$divicion=new dividir();
$divicion->d($a,$b);
$divicion1=new dividir();
$divicion1->div($a,$b);
$divicion->muestra();
$divicion1->muestra();
}
 ?>
</form></center>
