<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/estilos.css">
    <script src="../js/jquery.js"></script>
    <title></title>
  </head>
  <body>
    <h1 class="p1">TABLA DE POSICIONES</h1>
    <div class="zonaScript">
      <script>
        function consultaReal()
        {
          var datos = $.ajax({
            url: "../modelo/tabla.php",
            dataType: "text",
            async: false
          }).responseText;
          var contenido = document.getElementById('contenido');
          contenido.innerHTML = datos;
        }
          setInterval(consultaReal,500);
      </script>
    </div>
    <div class="contenedor" id="contenido">
    </div>
  </body>
</html>
