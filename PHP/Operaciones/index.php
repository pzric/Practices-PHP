<html>
<head>
  <meta charset="UTF-8">
  <title><?php echo "MENU" ?></title>
  <meta name="viewport" content="widht=divice-widht, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
</head>
<center>
  <body class="color8">
      <font size=+1>
        <br><br><br>
        <p><strong>DA CLIC EN ALGUNA OPCION</strong></P>
        <form action="suma.php" method="post">
        <input class="bot" type="submit" value="SUMA">
        </form>

        <form action="resta.php" method="post">
        <input class="bot" type="submit" value="RESTA">
        </form>

        <form action="multi.php" method="post">
        <input class="bot" type="submit" value="MULTIPLICACION">
        </form>

        <form action="divicion.php" method="post">
        <input class="bot" type="submit" value="DIVISION">
        </form>

        <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</center>
</html>
