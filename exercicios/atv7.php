<?php
//null cao é mt parecido com operador ternário 
//null cao  só funciona no PHP 7.4 pra frente
// esse "isset" significa: está setado ou sejam se está setedo... Sendo assim, isset($sobrenome): Esta função verifica
// se a variável $sobrenome está definida. 
//Se estiver definida, ela retorna true; caso contrário, retorna false.
//O operador ternário ? : é usado para avaliar uma expressão e retornar um valor com base na condição.
$nome = 'Matheus';
$sobrenome = ' Patricio';
$nomeCompleto = $nome;
$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';
// se eu fosse usar o nullcao, a expressao ficaria: $nomeCompleto .= $sobrenome ?? '';


echo $nomeCompleto;
