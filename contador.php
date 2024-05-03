<?php
function recursividade($a, $b, $contador){
    $recurs = $a / $b;
    $contador--;
    echo $recurs."<br/>";
    if($contador > 0){
        recursividade($recurs, $b, $contador);
    }
}

recursividade(10, 20, 10);
