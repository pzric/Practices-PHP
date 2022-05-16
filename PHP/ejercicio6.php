<?php

$v1=rand(0,10);
$v2=rand(0,10);
$v3=rand(0,10);
$v4=rand(0,10);
if($v1==$v2){
  if($v1==$v3){
    if($v1==$v4){
      echo "felicidades has ganado<br>";
      echo $v1," ",$v2," ",$v3," ",$v4;
    }
    else{
      echo "suerte para la proxima<br>";
      echo $v1," ",$v2," ",$v3," ",$v4;
    }
  }
  else{
    echo "suerte para la proxima<br>";
    echo $v1," ",$v2," ",$v3," ",$v4;
  }
}
else{
  echo "suerte para la proxima<br>";
  echo $v1," ",$v2," ",$v3," ",$v4;
}
?>
