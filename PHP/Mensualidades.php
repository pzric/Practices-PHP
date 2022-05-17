<?php
$a = 12; //mensualidades
$b = 24965; //Monto
$suma = 0;
$c = intdiv($b, $a);
$d = $b % $a;
for ($i = 1; $i <= $a; $i++) {
    if ($i == 12) {
        $res = $c + $d;
        echo "La mensualidad ".$i." es: ".$res."\n";
    }
    else {
        $res = $c;
        echo "La mensualidad ".$i." es: ".$res."\n";
    }
    $suma = $suma + $res;
}
echo "El monto total es :".$suma;
?>
