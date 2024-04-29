<?php

function somar($x,$y,$z=0) {
    $total = $x+$y+$z;
    return $total;
}

$x = somar(1,2);
$y = somar(1,2);
$z = somar($x,$y,3);

echo $z;