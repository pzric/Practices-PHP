<html>
<head>
  <title>SALARIO</title>
</head>
<body bgcolor="#fffff123">
  <i><font size=+2>
  <?php
  function fecha_hoy(){ #esta es una funcion para mostrar la fecha
    echo date ('d/m/Y'); #muestra la fecha
    }
    fecha_hoy(); #realiza el llamado de la funcion
    ?>
  </font>
  <font size=+1>
  <center>
    <form action="ejemplo8.php" method="post">
      <p>PAGO POR HORA</P>
        <input type="text" name="valor1">
      <p>HORAS TRABAJADAS</P>
        <input type="text" name="valor2">
      <p><input type="submit" value="CALCULAR"></p>
      </form>
	  <table border=2>
<?php
  function suma($v1,$v2)
  {
	$a=$v1*$v2;
	$b=$a;
    $c=$a*.16;	
	return ($b-$c);
}
  echo "</p>";
  if($_POST){
    $a=$_POST['valor1'];
    $b=$_POST['valor2'];
    echo"<p>";
    echo "EL MONTO A PAGAR ES:",suma($a,$b);
    echo"</p>";
   }
?>
</table>
</center>
</body>
</html>