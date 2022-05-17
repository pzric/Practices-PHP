<?php
$a = 12;
$b = 24965.968;
$suma = 0;
$c = intdiv($b, $a);
$d = $b % $a;
for ($i = 1; $i <= 12; $i++) {
    if ($i == 12) {
        $res = $c + $d;
        echo "La menualidad ".$i." es: ".$res."\n";
    }
    else {
        $res = $c;
        echo "La menualidad ".$i." es: ".$res."\n";
    }
    $suma = $suma + $res;
}
echo "El monto total es :".$suma;
?>
