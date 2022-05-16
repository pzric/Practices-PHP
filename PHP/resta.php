
<html>
<head>
  <meta charset="UTF-8">
  <title>RESTA</title>
  <meta name="viewport" content="widht=divice-widht, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<center>
  <body class="color8">
    <h1>RESTA<h1>
      <font size=+1>
        <br><br>
              <form action="resta.php" method="post">
              <br><br><br>
              <p><strong>DAME EL PRIMER VALOR</strong></P>
              <input type="text" name="valor1">
              <p><strong>DAME EL SEGUNDO VALOR</strong></P>
              <input type="text" name="valor2">
              <br><br>
              <p><input class="bot" type="submit" value="CALCULAR"></p>
            </form>
        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
<?php
if ($_POST){
$a=$_POST['valor1'];
$b=$_POST['valor2'];
class resta{
  var $resultado;
  function rest($a,$b){
    $this->resultado=$a-$b;
  }
  function muestra(){
    echo "EL RESULTADO ES:",$this->resultado,"<br>";
  }
}
$divicion=new resta();
$divicion->rest($a,$b);
$divicion->muestra();
}
 ?>
 </center>
 <form action="menu.php" method="post">
 <br><br><br><br><br><br>
 <p><input class="bot" type="submit" value="REGRESAR"></p>
</html>
