<?php
function fecha_hoy(){
  echo date ('d/m/Y');
  }
  fecha_hoy();
  ?>
<html>
<head><title>secuencias</title></head>
<body><center><form action="ejemplo19.php" method="POST">
<p><font size=+2 color="blue">HASTA QUE NUMERO</font></p><input type="text" name="valor1">
<p><input type="submit" value="CALCULAR"></p>
<?php
if($_POST){
  function fact(){
    $n=$_POST['valor1'];
    $b=1;
    $d=1;
    echo $b,"<hr>";
    for($i=1; $i<=$n; $i++)
      {
        $a=pow($i,$i);
         echo "elevacion:",$a."<br>";

        $b=$i*$b;
    	   echo "factorial:",$b."<br>";

         $c=$a/$b;
         echo "divicion:",$c,"<br>";

         $d=$c+$d;
         echo "la suma es:",$d,"<br>";
         echo"<hr>";
      }
    }
    fact();
}
?>
</body>
</html>
