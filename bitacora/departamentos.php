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
          <table border=0><form action="departamentos.php" method="POST"><br>
          <th>NUMERO DEPARTAMENTO<th><input class="caja1" type="number" name="ndepa" pattern="number" required><tr>
          <th>NOMBRE DEPARTAMENTO<th><input class="caja2" type="text" name="nomdepa" required><tr>
          <th>JEFE DEPARTAMENTO<th><input class="caja2" type="text" name="jefedepa" required><tr>
          <th rowspan="2" align="center"><input class="bot" type="submit" value="AGREGAR"></th>
        </table>
        </p>
        <?php
        if($_POST){
          $ndepa=$_POST['ndepa'];
          $nomdepa=$_POST['nomdepa'];
          $jefedepa=$_POST['jefedepa'];
          $sql=mysqli_query($mysqli,"SELECT * FROM departamento WHERE num_departamento='$ndepa'");
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
              mysqli_query($mysqli,"INSERT INTO departamento VALUES('$ndepa','$nomdepa','$jefedepa')");
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
         $sql=("SELECT * FROM departamento");
         $query=mysqli_query($mysqli,$sql);
         echo "<table class='table table-hover'><thead><tr>";
         echo "<th scope='col'>ID";
         echo "<th scope='col'>Nombre Departamento";
         echo "<th scope='col'>Jefe";
         echo "<th scope='col'>";
         echo "<th scope='col'></tr></thead>";
         while ($extraido=mysqli_fetch_array($query)){
           echo "<tbody><tr><td>",$extraido[0];
           echo "<td>",$extraido[1];
           echo "<td>",$extraido[2];
           echo "<td><a href=''><img src='img/modificar.png' high=20 width=20>";
           echo "<td><a href='departamento.php?num_departamento=$extraido[num_departamento]&idborrar=2'><img src='img/eliminar.png' high=20 width=20>";
           echo "</tr></tbody>";
           }
         echo "</table>";
         extract($_GET);
         if(@$idborrar==2){
          $sqlborrar="DELETE FROM departamento WHERE num_departamento=$num_departamento";
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
