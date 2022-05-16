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
          <table border=0><form action="prueba.php" method="POST"><br>
          <th>NUMERO TARJETA<th><input class="caja1" type="number" name="numero" pattern="number" required><tr>
          <th>NOMBRE<th><input class="caja2" type="text" name="nombre" required><tr>
          <th>APELLIDO PATERNO<th><input class="caja2" type="text" name="ape1" required><tr>
          <th>APELLIDO MATERNO<th><input class="caja2" type="text" name="ape2" required><tr>
          <th rowspan="2" align="center"><input class="bot" type="submit" value="AGREGAR"></th>
        </table>
        </p>
        <?php
        if($_POST){
          $num=$_POST['numero'];
          $nom=$_POST['nombre'];
          $ape1=$_POST['ape1'];
          $ape2=$_POST['ape2'];
          $nomcom=$nom." ".$ape1." ".$ape2;
          $sql=mysqli_query($mysqli,"SELECT * FROM maestros WHERE num_tarjeta='$num'");
        	if($f=mysqli_fetch_assoc($sql)){
        		if($num==$f['num_tarjeta']){
              echo "<center><div class='alert alert-danger alert-dismissible fade show' role='alert'>
              <strong>ERROR!</strong> El usuario ya existe.
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              <span aria-hidden='true'>&times;</span>
              </button>
              </div></center>";
            }
          }
          else{
              mysqli_query($mysqli,"INSERT INTO maestros VALUES('$num','$nomcom')");
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
         $sql=("SELECT * FROM maestros");
         $query=mysqli_query($mysqli,$sql);
         echo "<table class='table table-hover'><thead><tr>";
         echo "<th scope='col'>Num. Tarjeta";
         echo "<th scope='col'>Nombre Completo";
         echo "<th scope='col'>";
         echo "<th scope='col'></tr></thead>";
         while ($extraido=mysqli_fetch_array($query)){
           echo "<tbody><tr><td>",$extraido[0];
           echo "<td>",$extraido[1];
           echo "<td><a href=''><img src='img/modificar.png' high=20 width=20>";
           echo "<td><a href='maestros.php?num_tarjeta=$extraido[num_tarjeta]&idborrar=2'><img src='img/eliminar.png' high=20 width=20>";
           echo "</tr></tbody>";
           }
         echo "</table>";
         extract($_GET);
         if(@$idborrar==2){
          $sqlborrar="DELETE FROM maestros WHERE num_tarjeta=$num_tarjeta";
         	$resborrar=mysqli_query($mysqli,$sqlborrar);
         	echo '<script>alert("REGISTRO ELIMINADO")</script>';
         	echo "<script>location.href='maestros.php'</script>";
         }
          ?>
       </p>
     </div>
    </div>
  </body>
</html>
