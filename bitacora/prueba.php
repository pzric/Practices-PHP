<link rel="stylesheet" href="css.css">
<script src="js/jquery.js"></script>
<script type="text/javascript">

function openDialog() {

    $('#overlay').fadeIn('fast', function() {

        $('#popup').css('display','block');

        $('#popup').animate({'left':'30%'},500);

    });

}



function closeDialog(id) {

    $('#'+id).css('position','absolute');

    $('#'+id).animate({'left':'-100%'}, 500, function() {

        $('#'+id).css('position','fixed');

        $('#'+id).css('left','100%');

        $('#overlay').fadeOut('fast');

    });

}

</script>
<div id="popup" class="popup">

    <a onclick="closeDialog('popup');" class="close"></a>

    <div>

      <table border=0><form action="carrera.php" method="POST"><br>
      <th>CLAVE CARRERA<th><input class="caja1" type="number" name="clavec" pattern="number" required><tr>
      <th>NOMBRE CARRERA<th><input class="caja2" type="text" name="nombrec" required><tr>
      <th>NUMER DEPARTAMENTO<th><input class="caja2" type="text" name="numerodep" required><tr>
      <th rowspan="2" align="center"><input class="bot" type="submit" value="AGREGAR"></th>
    </table>
    </div>
 <a href="" onclick="openDialog();">Mostrar Popup</a>
</div>
