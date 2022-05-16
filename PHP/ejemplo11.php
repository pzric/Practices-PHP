<?php
class dividir{
  var $resultado;
  function d($a,$b){
    $this->resultado=$a*$b;
  }
  function muestra(){
    echo $this->resultado,"<br>";
  }
}
$divicion=new dividir();
$divicion->d(11,4);

$divicion1=new dividir();
$divicion1->d(10,5);

$divicion->muestra();
$divicion1->muestra();

 ?>
