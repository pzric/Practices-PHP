<?php
class hola {
  var $v1=6;
  var $v2=12;
  function mensaje(){
    echo $this->v1*$this->v2;
  }
  function divide(){
    echo $this->v2/$this->v1;
  }
}
$nuevo=new hola();
echo $nuevo->divide();
echo "<br>";
$nuevo1=new hola();
echo $nuevo1->mensaje();
 ?>
