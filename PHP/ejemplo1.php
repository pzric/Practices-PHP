<html>
<head><title>Suma de dos valores</title></head>
<body><center><form action="ejemplo1.php" method="POST">
<p><font size=+2 color="red">ESCRIBE EL PRIMER VALOR</font></p><input type="text" name="valor1">
<p><font size=+2 color="blue">ESCRIBE EL SEGUNDO VALOR</font></p><input type="text" name="valor2">
<p><input type="submit" value="CALCULAR"></p>
<?php
if($_POST){
$a=$_POST['valor1'];$b=$_POST['valor2'];$c=0;$c=$a+$b;
echo "<font color='greend'>EL RESULTADO DE <b>",$a,"</b> MAS <i>",$b,"</i> ES:<u><h2>",$c,"</h2></u></font>";
}
?>
</form></center></html>
