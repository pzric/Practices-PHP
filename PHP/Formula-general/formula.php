<?php
if ($_POST) {
  $a=$_POST['a'];
  $b=$_POST['b'];
  $c=$_POST['c'];
  if(($a&$b&$c)==0){
    echo '<script>alert("ERROR DATOS ")</script> ';
		echo "<script>location.href='index.php'</script>";
  }
  else {
    $x=sqrt(($b**2)-(4*$a*$c));
    if ($x<=1) {
      echo '<script>alert("ERROR VALORES FUERA DE RANGO")</script> ';
  		echo "<script>location.href='index.php'</script>";
    }
    else {
      $x1=(-$b+$x)/(2*$a);
      $x2=(-$b-$x)/(2*$a);
      echo "El valor de x1 es:",$x1,"<br>";
      echo "El valor de x2 es:",$x2;
    }
  }
}
 ?>
