<html>
<head><title>Suma de dos valores</title></head>
<body bgcolor="#ffeaa7"><center><form action="ejemplo2.php" method="POST">
<p><font size=+2 color="red">ESCRIBE UN NUMERO</font></p><input type="text" name="valor1">
<p><input type="submit" value="CALCULAR"></p>
<?php
if($_POST){
$a=$_POST['valor1'];$c=$a;$datos="HOLA MUNDO";#$c=$c*9;
echo "<font color='greend'>EL NUMERO INTRODUCIDO ES:<u><h2>",$c*9,"</h2></u></font>";
echo "<font color='blue'>",$datos,"</font>";
}
?>
</form></center></html>
