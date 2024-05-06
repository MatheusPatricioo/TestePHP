<?php
$ingredientes = [
    'açucar',
    'farinho de trigo',
    'ovo',
    'leite',
    'fermento em pó',
];

// Usando implode com "\n" como delimitador para quebrar cada ingrediente em uma linha separada
echo '<h2>Ingredientes</h2>';

foreach($ingredientes as $ingre) {
    echo "Item: ".$ingre."<br/>";
}

echo "testando puxar uma posição : ".$ingredientes[1]."<br/>"; // Correção aqui
?>
