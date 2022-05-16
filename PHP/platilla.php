<html>
<head>
  <meta charset="UTF-8">
  <title>PRUEBA DE BOOTSTRAP</title>
  <meta name="viewport" content="widht=divice-widht, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<center>
<body>
  <h1>hola mundo</h1>
  <p><button class="btn btn-primary">BOTON</button>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</center>
</html>


<html>
<head>
<title>sumar</title>
</head>
<body>
<center>suma valores</center>
<form action="sumaphp.php"  method="post">
<table>
<tr>
<td><input type="text" name="valor1"></td>
<tr>
<td><input type="text" name="valor2"></td>
<tr>
<td><input type="submit"value="sumar"></td>
</table>
</form>
</body>
</html>
<?php
if($_POST){
$a=$_POST['valor1'];
$b=$_POST['valor2'];
$c=$a+$b;
echo $c;
}
?>
