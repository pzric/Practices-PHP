<?php
$a=1;
$b=0;
for($i=1;$i<=8;$i++){
	$d=$a+$b;
	$a=$b;
	$b=$d;
	echo $d,",";
}
?>
	