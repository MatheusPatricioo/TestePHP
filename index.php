<?php
/*
function recursividade($a, $b){
    $recurs = $a / $b;

    echo (round($recurs))."<br/>";
    if(round($recurs) > 0){
        recursividade($recurs, $b);
    }
}

recursividade(500, 2);
*/

function recursividade($a, $b, $contador){
    $contador--;
    $recurs = $a / $b;
    echo (round($recurs))."<br/>";
    if($contador > 0){
        recursividade($recurs, $b, $contador);
    }
}

recursividade(400, 2, 20);
