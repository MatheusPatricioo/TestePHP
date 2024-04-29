<?php

// Função que recebe outra função como parâmetro
function calcular($funcao,$a, $b) {
    // Verifica se a variável é uma função
    if (is_callable($funcao)) {
        // Chama a função passada como parâmetro
        $resultado = $funcao($a, $b); // Passando os argumentos necessários para a função soma()
        printando($resultado);
    } else {
        echo "O parâmetro não é uma função válida.";
    }
}

// Definição de uma função que será passada como parâmetro
function soma($a, $b) {
    $somando = $a + $b;
    return $somando;
}
function Mult($a, $b) {
    $somando = $a * $b;
    return $somando;
}

// Chamada da função 'calcular' passando 'soma' como parâmetro
calcular('soma',10,2);
calcular('Mult',10,2);
function printando($resultado) {
    echo 'resultado: ' . $resultado;
}
