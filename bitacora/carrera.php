<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <script src="js/jquery.js"></script>
    <?php
    include 'partes/barra.html';
    require("partes/conexion.php");
    ?>
  </head>
  <body>
    <div class="zonaScript">
      <script>
        function consultaReal()
        {
          var datos = $.ajax({
            url: "progeso.php",
            dataType: "text",
            async: false
          }).responseText;

          var contenido = document.getElementById('contenido');
          contenido.innerHTML = datos;
        }
          setInterval(consultaReal,500);
      </script>
    </div>
    <div class="row" id="contenido">
      <div class="col-md-4">
        <p>
          <table border=0><form action="carrera.php" method="POST"><br>
          <th>CLAVE CARRERA<th><input class="caja1" type="number" name="clavec" pattern="number" required><tr>
          <th>NOMBRE CARRERA<th><input class="caja2" type="text" name="nombrec" required><tr>
          <th>NUMER DEPARTAMENTO<th><input class="caja2" type="text" name="numerodep" required><tr>
          <th rowspan="2" align="center"><input class="bot" type="submit" value="AGREGAR"></th>
        </table>
        </p>
        <?php
        if($_POST){
          $clavec=$_POST['clavec'];
          $nombrec=$_POST['nombrec'];
          $numerodep=$_POST['numerodep'];
          $sql=mysqli_query($mysqli,"SELECT * FROM carrera WHERE clave_carrera='$clavec'");
        	if($f=mysqli_fetch_assoc($sql)){
        		if($clavec==$f['clave_carrera']){
              echo "<center><div class='alert alert-danger alert-dismissible fade show' role='alert'>
              <strong>ERROR!</strong> La clave ya existe.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
              </div></center>";
            }
          }
          else{
              mysqli_query($mysqli,"INSERT INTO carrera VALUES('$clavec','$nombrec','$numerodep')");
              echo "<center><div class='alert alert-success alert-dismissible fade show' role='alert'>
              <strong>EXITO!</strong> Agregado correctamente
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
              </div></center>";
            }
          }
        ?>
      </p>
      </div>
      <div class="col-md-8">
       <p>
         <?php
         $sql=("SELECT * FROM carrera");
         $query=mysqli_query($mysqli,$sql);
         echo "<table class='table table-hover'><thead><tr>";
         echo "<th scope='col'>Calve carrera";
         echo "<th scope='col'>Nombre carrera";
         echo "<th scope='col'>Numero departamento";
         echo "<th scope='col'>";
         echo "<th scope='col'></tr></thead>";
         while ($extraido=mysqli_fetch_array($query)){
           echo "<tbody><tr><td>",$extraido[0];
           echo "<td>",$extraido[1];
           echo "<td>",$extraido[2];
           echo "<td><a href=''><img src='img/modificar.png' high=20 width=20>";
           echo "<td><a href='carrera.php?clave_carrera=$extraido[clave_carrera]&idborrar=2'><img src='img/eliminar.png' high=20 width=20>";
           echo "</tr></tbody>";
           }
         echo "</table>";
         extract($_GET);
         if(@$idborrar==2){
          $sqlborrar="DELETE FROM carrera WHERE clave_carrera=$clave_carrera";
         	$resborrar=mysqli_query($mysqli,$sqlborrar);
         	echo '<script>alert("REGISTRO ELIMINADO")</script>';
         	echo "<script>location.href='carrera.php'</script>";
         }
          ?>
       </p>
     </div>
    </div>
  </body>
</html>
