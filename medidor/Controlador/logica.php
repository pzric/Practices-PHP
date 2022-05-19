<?php
session_start();
$id_u=$_SESSION['id'];
if($_POST){
  $res=$_POST['res'];
  $res2=$_POST['res1'];
  if($res==$res2){
    $sql="SELECT * FROM medidor WHERE id=$id_u";
    $ressql=mysqli_query($mysqli,$sql);
    while ($row=mysqli_fetch_row($ressql)){
      $puntos=$row[6];
    }
    $puntos=$puntos+10;
    $sentencia="UPDATE medidor SET puntos='$puntos' WHERE id=$id_u";
    $resent=mysqli_query($mysqli,$sentencia);
  }
}
?>
