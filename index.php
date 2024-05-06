<?php
<<<<<<< HEAD
require_once('header.php');
?>

<form method="POST" action="recebedor.php">

    <label>
        Nome:
        <br/>
        <input type="text" name="nome" />
    </label>
    <br />
    <br />

    <label>
        Senha:
        <br />
        <input type="password" name="senha" /> 
    </label>
    <br />
    <br />

    <input type="submit" value="Enviar" /> 

</form>
=======
require('config.php');
require('header.php');


echo 'Conteudo do site...<br/>';

echo "NOME DE USUARIO: ".$usuario;
>>>>>>> f02553a731630ba5b16ffcd3cdb4fd8dfe177522
