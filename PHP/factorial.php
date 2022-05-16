<html>
<head><title>FACTORIAL</title></head>
<body><center><form action="factorial.php" method="POST">
<p><font size=+2 color="greend">DESDE QUE NUMERO</font></p><input type="text" name="valor1">
<p><input type="submit" value="CALCULAR"></p>
<table border=2>
<?php
if($_POST){
	$a=$_POST['valor1'];
	$b=gmp_fact(10);
	echo gmp_strval($b),"/n";
}
}
?>
</table></form></center></html>
