<?php
function recursividade($a, $b){
    $recurs = $a / $b;

    echo (round($recurs))."<br/>";
    if(round($recurs) > 0){
        recursividade($recurs, $b);
    }
}

recursividade(500, 2);
