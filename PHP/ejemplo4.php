<html>
<head><title>ECUACION</title></head>
<body><center><form action="ejemplo4.php" method="POST">
<p><font size=+2 color="greend">DAME UN NUMERO</font></p><input type="text" name="valor1">
<p><input type="submit" value="CALCULAR"></p>
<?php
if($_POST){
	$a=$_POST['valor1'];
	echo "<hr>";
	$svar=1;
	$b=1;
	for($matte=2;$matte<=$a;$matte++){
		$svar=$svar*$matte;
		$b=1+1;
		$res=pow($b,$b)/$svar;
		$c=$res+$res;
	}	
	echo "el resultado es:",$res;
}
?>
</form></center></html>
