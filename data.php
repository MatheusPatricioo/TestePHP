<?php
// Função para traduzir o dia da semana de inglês para português
function data($semana){
    
    switch($semana){
        case "Monday":
            return "Segunda-feira"; 
            break;
        case "Tuesday":
            return "Terça-feira"; 
            break;
        case "Wednesday":
            return "Quarta-feira"; 
            break;
        case "Thursday":
            return "Quinta-feira"; 
            break;
        case "Friday":
            return "Sexta-feira"; 
            break;
        case "Saturday":
            return "Sábado"; 
            break;
        case "Sunday":
            return "Domingo"; 
            break;
        default:
            return "Dia inválido"; 
    }
}

// Obtém a data atual no formato "d/m/Y" e armazena em $semana
$semana = date("d/m/Y");

// Obtém o nome do dia da semana em inglês (por exemplo, "Monday", "Tuesday", etc.) e armazena em $semanaIngles
$semanaIngles = date("l");

// Chama a função data() passando o nome do dia da semana em inglês como argumento e armazena a tradução em $semanaTraduzida
$semanaTraduzida = data($semanaIngles);

// Imprime na tela a data atual e o dia da semana traduzido
echo $semana . " " . $semanaTraduzida;
?>
