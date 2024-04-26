<?php
// Função para converter um caractere para seu valor ASCII
function charToAscii($char) {
    // Obtém o primeiro caractere da string (trataremos apenas o primeiro caractere)
    $char = substr($char, 0, 1);
    // Converte o caractere para seu valor ASCII usando a função ord()
    return ord($char);
}

// Função para converter um número decimal para binário
function decimalToBinary($decimal) {
    // Inicializa a string binária como vazia
    $binary = "";
    // Loop para converter o número decimal para binário
    while ($decimal > 0) {
        // Calcula o próximo dígito binário
        $bit = $decimal % 2;
        // Adiciona o dígito binário ao início da string binária
        $binary = $bit . $binary;
        // Divide o número decimal pela base binária (2)
        $decimal = floor($decimal / 2);
    }
    // Retorna a string binária resultante
    return $binary;
}

// String de entrada
$string = "Hello Mundo porra ";

// Itera sobre cada caractere da string
for ($i = 0; $i < strlen($string); $i++) {
    $char = $string[$i]; // Obtém o caractere atual
    $ascii = charToAscii($char); // Converte o caractere para seu valor ASCII
    $binary = decimalToBinary($ascii); // Converte o valor ASCII para binário
    echo "Caractere: $char | ASCII: $ascii | Binário: $binary <br>";
}
?>
