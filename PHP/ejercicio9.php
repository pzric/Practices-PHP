<html>
<head><title>OPERACONES BASICAS</title></head>
<body bgcolor="#ffeaa7"><center><form action="ejercicio9.php" method="POST">
<p><font size=+2 color="red">ESCIBE UNA PALABRA</font></p><input type="text" name="valor1">
<p><input type="submit" value="CALCULAR"></p><font size=+2 color="greend">
<?php
if($_POST){
  $pal=$_POST['valor1'];
  $num=strlen($pal);
  $num2=$num;
  $num3=0;
  for($i=1;$i<=$num;$i++){
    $num2=$num2-1;
    $pal2=$pal[$num2];
    echo $pal2;
    $pal3=$pal[$i];
    echo $pal3;
    }
  /*if($pal[$num2]==$pal2){
     echo "<p>ES UN PALINDROMO<p>";
     echo $pal," igual que ",$pal2;
   }
   else{
     echo "NO ES PALINDROMO<br>";
     echo $pal," no es igual que ",$pal2;
   }*/
}
?>
</font></form></center></body></html>
