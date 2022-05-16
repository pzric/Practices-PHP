<html>
<head><title>CICLOS</title></head>
<body bgcolor="#ffeaa7"><center><form action="ejemplo3.php" method="POST">
<p><font size=+2 color="greend">HASTA QUE TABLA</font></p><input type="text" name="valor2">
<p><input type="submit" value="CALCULAR"></p>
<table border=2>
<?php
if($_POST){
$b=$_POST['valor2'];
for($c=1;$c<=$b;$c++){
	for($e=1;$e<=10;$e++){
		$d=$c*$e;
		echo "<td><br>",$c,"X",$e,"=",$d,"</td>";
}
echo "<tr>";
}
}
?>
</table></form></center></html>
