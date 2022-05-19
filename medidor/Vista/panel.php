<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html" charset="utf-8"/>
    <title></title>
  </head>
  <script type="text/javascript" src="js/animacion.js"></script>
  <body onLoad="redireccionar()" class="color1"><link rel="stylesheet" href="../css/estilos.css">
    <script language="JavaScript">
  function redireccionar() {
    setTimeout("location.href='../modelo/final.php'", 40000);
  }
  </script>
    <div class="contenedor">
      <form class="contenedor2" action="panel.php" method="POST">
        <?php
        include '../modelo/preguntas.php';
        include '../controlador/logica.php';
         ?>
      </form>
    </div>
  </body>
</html>
