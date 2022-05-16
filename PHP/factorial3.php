<html>
<head><title>FACTORIAL</title></head>
<body><center><form action="factorial2.php" method="POST">
<p><font size=+2 color="greend">DESDE QUE NUMERO</font></p><input type="text" name="valor1">
<p><input type="submit" value="CALCULAR"></p>
<table border=2>
<?php
if($_POST){
	$a=$_POST['valor1'];
	echo "<hr>".$a;
	$svar=1;
	for($matte=2;$matte<=$a;$matte++){
		$svar=$svar*$matte;
	}
	echo "=".$svar;
}
?>
</table></form></center></html>
