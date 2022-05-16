<html>
<head>
  <title>MULTI TAREAS</title>
</head>
<body bgcolor="#fffff123">
  <i><font size=+2>
  <?php
  function fecha_hoy(){ 
    echo date ('d/m/Y'); 
    }
    fecha_hoy();
?>
  </font>
  <font size=+1>
  <center>
    <form action="ejemplo9.php" method="post">
      <p>DAME UN NUMERO</P>
        <input type="text" name="valor1">
      <p><input type="submit" value="CALCULAR"></p>
      </form>
	  <table border=2>
<?php
  function par($v1)
  {
	  $d=0;
	  for($c=1;$c<=$v1;$c++){
	  $b=$c%2;
	  if($b==0){
		  $d=$d+$c;
		  }
		  else{
			  echo $c,",";
			  }
	  }
	  echo"<br>";
	return $d;	  
}
  echo "</p>";
  if($_POST){
    $a=$_POST['valor1'];
    echo"<p>";
    echo par($a);
    echo"</p>";
   }
?>
</table>
</center>
</body>
</html>