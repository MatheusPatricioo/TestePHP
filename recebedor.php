<?php
//filter_input: quando ele puxa a variavel(por ex, $nome) e nao acha, ele deixa como false
//filter_input:se ele achar, poe como true.

$nome = filter_input(INPUT_POST,'nome'); // Obtém o valor da variável 'nome' enviada via POST
$senha = filter_input(INPUT_POST,'senha'); // Obtém o valor da variável 'senha' enviada via POST

if($nome && $senha){ // Verifica se tanto 'nome' quanto 'senha' têm valores definidos
    echo 'NOME: '. $nome."<br/>"; // Se ambos têm valores, imprime o valor de 'nome'
    echo 'SENHA: '. $senha; // e o valor de 'senha'
} else {
    echo 'NÃO ENVIOU'; // Se algum dos valores estiver vazio (ou seja, se o usuário não enviou nada), exibe 'NÃO ENVIOU'
}
