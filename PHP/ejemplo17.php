<html>
<head><title>ELEVAR</title></head><body>
<center><form action="ejemplo17.php"  method="post">
NUMERO A ELEVAR<br><input type="text" name="valor1"><br>
A QUE NUEMERO SE ELEVARA<br><input type="text" name="valor2"><br>
<input type="submit"value="CALCULAR"></form>
<?php
if($_POST){
  function elevar(){
    $b=$_POST['valor1'];
    $c=$_POST['valor2'];
    echo $a=pow($b,$c);
  }
elevar();
}
?>
</body>
</html>
