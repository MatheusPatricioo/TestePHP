<?php
/*// esse count serve para retornar o numero de elementos dentro do meu vetor;
$lista = ['l1','l2','l3','l4','l5','l6','l7'] ;
echo"Total: ".count( $lista )." <3";
*/
$lista = ['Lucas','Pedro','Paula','Fernanda','Fernando','comedordebotao','Rafinha'] ;
$aprovados = ['Lucas','Fernanda','Rafinha'];

$reprovados = array_diff($lista, $aprovados);

echo 'Os reprovados foram: ' . implode(', ', $reprovados);