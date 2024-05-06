<?php
$nome = 'Matheus';
$idade = 27;
$forca = 60;
$agilidade = 80;
$destreza = 50;
$vida = 1000;
$mana = 928;

$lista = [$nome, $idade, $forca, $agilidade, $destreza];
$atributos = [$forca, $agilidade, $destreza, $mana];

echo 'Meu nome é ' . $nome . ', meu resumo é ' . implode(', ', $lista) . ', meus atributos são ' . implode(', ', $atributos);
?>
