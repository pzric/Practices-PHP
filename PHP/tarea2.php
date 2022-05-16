<html>
<head>
  <title>MULTI TAREAS</title>
</head>
<body bgcolor="#fff131345">
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
    <form action="tarea2.php" method="post">
      <p>DAME UN NUMERO</P>
        <input type="text" name="valor1">
      <p>DAME OTRO NUMERO</P>
        <input type="text" name="valor2">
      <p><input type="submit" value="CALCULAR"></p>
      </form>
	  <table border=2>
<?php
  function suma($v1,$v2)
  {
	$a=$v1+$v2;
	echo '<br>',$v1,"+",$v2,"=",$a;
}
function resta($v1,$v2)
{
	$b=$v1-$v2;
	echo '<br>',$v1,"-",$v2,"=",$b;
}
function multiplicacion($v1,$v2)
{
	$c=$v1*$v2;
echo '<br>',$v1,"*",$v2,"=",$c;
}
function divicion($v1,$v2)
{
	$d=$v1/$v2;
	echo '<br>',$v1,"/",$v2,"=",$d;
}
function elevacion($v1,$v2)
{
		$d=pow($v1,$v2);
		echo $v1,"^",$v2,"=",$d;
}
function fac($v3,$v1,$v2)
{
	$b=1;
	$c=0;
	$f=0;
	while($b<$v2){
		$b++;
		$c=($v1^$f)*$b;
		$v1=$c;
		$f=1;
		$e=	1+$v1+$c;
		echo $v3," hasta ",$v2,"=",$e;
	}
function tabla ($v1){
		for($e=1;$e<=10;$e++){
			$d=$v1*$e;
			echo "<td><br>",$v1,"X",$e,"=",$d,"</td>";
			}
			echo "<tr>";
			}
}
  echo "</p>";
  if($_POST){
    $a=$_POST['valor1'];
    $b=$_POST['valor2'];
    echo"<p>";
    echo "la suma es:",suma($a,$b);
    echo"</p>";
    echo"<p>";
    echo "la resta es:",resta($a,$b);
    echo"</p>";
    echo "<p>";
    echo "la multiplicacion es:",multiplicacion($a,$b);
    echo "</p>";
    echo "<p>";
    echo "la divicion es:",divicion($a,$b);
    echo "</p>";
    echo"<p>";
    echo "la elevacion es:",elevacion($a,$b);
    echo"</p>";
	  echo"<p>";
    echo "el factorial de:",fac($a,$a,$b);
    echo"</p>";
	  echo"<p>";
    echo"la tabla del ",$a," es:",tabla($a);
    echo"</p>";
  }
?>
</table>
</center>
</body>
</html>
