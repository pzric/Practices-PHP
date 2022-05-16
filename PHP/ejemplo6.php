<html>
<head>
  <title>SUMA DE DOS NUMEROS</title>
</head>
<body bgcolor="#ffff603837">
  <i><font size=+2>
  <?php
  function fecha_hoy(){ #esta es una funcion para mostrar la fecha
    echo date ('d/m/Y'); #muestra la fecha
    }
    fecha_hoy(); #realiza el llamado de la funcion
    ?>
  </font>
  <font size=+1>
  <center>
    <form action="ejemplo6.php" method="post">
      <p>DAME UN NUMERO</P>
        <input type="text" name="valor1">
      <p>DAME OTRO NUMERO</P>
        <input type="text" name="valor2">
      <p><input type="submit" value="CALCULAR"></p>
      </form>
<?php
  function mensaje(){
    echo "EL RESULTADO ESTA BIEN"; #funcion que muestra un mensaje
  }
  echo "<p>";
  function suma($v,$w){ #estafuncion es para realizar una suma
    $c=$v+$w;
    echo "EL RESULTADO DE LA SUMA ES:",$c;
  }
  echo "</p>";
  echo "<p>";
  function multiplicar($x,$z){ #estafuncion es para realizar una suma
    $c=$x*$z;
    echo "EL RESULTADO DE LA MULTIPLICACION ES:",$c;
  }
  echo "</p>";
  echo "<p>";
  function resta($d,$e){ #estafuncion es para realizar una suma
    $c=$d-$e;
    echo "EL RESULTADO DE LA RESTA ES:",$c;
  }
  echo "</p>";
  if($_POST){
    $a=$_POST['valor1'];
    $b=$_POST['valor2'];
    echo"<p>";
    suma($a,$b);   #realiza la llamada de la funcion
    echo"</p>";
    echo "<p>";
    multiplicar($a,$b); #reaiza la llaada de la funcion
    echo "</p>";
    echo "<p>";
    resta($a,$b); #reaiza la llaada de la funcion
    echo "</p>";
    echo "<p>";
    mensaje();
    echo "</p>";
  }
?>
</center>
</body>
</html>
