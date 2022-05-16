<html>
<head><title>FACTORIAL</title></head>
<body><center><form action="factorial2.php" method="POST">
<p><font size=+2 color="greend">DESDE QUE NUMERO</font></p><input type="text" name="valor1">
<p><input type="submit" value="CALCULAR"></p>
<table border=2>
<?php
if($_POST){
	$a=$_POST['valor1'];
	function factorial($n){
		if($n==1){
			return 1;
		}
		else{
			return $n*factorial($n-1);
		}
	}	
	echo factorial($a);
}
?>
</table></form></center></html>
