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
/*
function recursividade($a, $b, $contador){
    $contador--;
    $recurs = $a / $b;
    echo ($recurs)."<br/>";
    if($contador > 0){
        recursividade($recurs, $b, $contador);
    }
}

recursividade(100, 2, 10);
*/

function recursividade($a, $b) {
    $divisor = $a / $b;

    echo (round($divisor)). "<br/>";
    if(round($divisor) >0) {
        recursividade($divisor, $b);
    }
};

recursividade(100,2);