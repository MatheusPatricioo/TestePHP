<?php
function data($semana){
    if($semana == "Monday"){
        return "Segunda-feira";
    }else if($semana == "Tuesday"){
        return "Terça-feira";
    }else if($semana == "Wednesday"){
        return "Quarta-feira";
    }else if($semana == "Thursday"){
        return "Quinta-feira";
    }else if($semana == "Friday"){
        return "Sexta-feira";
    }else if($semana == "Saturday"){
        return "Sábado";
    }else if($semana == "Sunday"){
        return "Domingo";
    }
}
$semana = date("d/m/Y");
$semanaIngles = date("l");
echo $semana." ".data($semanaIngles);
?>