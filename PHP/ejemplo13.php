<center>
1.-SUMA<br>
2.-RESTA<br>
3.-MULTIPLICACION<br>
4.-DIVICION
<form action="ejemplo13.php" method="POST">
<p><font size=+2 color="greend">DAME UNA OPCION</font></p><input type="text" name="valor1">
<p><font size=+2 color="red">ESCRIBE EL PRIMER VALOR</font></p><input type="text" name="valor2">
<p><font size=+2 color="blue">ESCRIBE EL SEGUNDO VALOR</font></p><input type="text" name="valor3">
<p><input type="submit" value="CALCULAR"></p>
<?php
if($_POST){
  $s=$_POST['valor1'];
  switch($s){
case 1;
	suma();
	break;
case 2;
	resta();
	break;
case 3:
	multiplicacion();
	break;
case 4;
	divicion();
	break;
default;
echo "la opcion o existe";
break;
}
  class operaciones{
        var $resultado;
      function suma(){
        $b=$_POST['valor2'];
        $c=$_POST['valor3'];
        $this->resultado=$b+$c;
      }
      function resta(){
        $b=$_POST['valor2'];
        $c=$_POST['valor3'];
        $this->resultado=$b-$c;
      }
      function multiplicacion(){
        $b=$_POST['valor2'];
        $c=$_POST['valor3'];
        $this->resultado=$b*$c;
      }
      function divicion(){
        $b=$_POST['valor2'];
        $c=$_POST['valor3'];
        $this->resultado=$b/$c;
      }
      function muestra(){
        echo $this->resultado,"<br>";
      }
    }
    $divicion=new operaciones();
    $divicion->muestra();
  }

?>
