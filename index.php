<?php
require_once('header.php'); // Inclui o arquivo 'header.php', que pode conter configurações ou outros códigos necessários
?>

<form method="POST" action="recebedor.php"> <!-- Formulário com método de envio POST e ação para 'recebedor.php' -->

    <label>
        Nome:
        <br/>
        <input type="text" name="nome" /> <!-- Campo de entrada para o nome do usuário -->
    </label>
    <br />
    <br />

    <label>
        Idade:
        <br/>
        <input type="idade" name="idade" /> <!-- Campo de entrada para a idade do usuário -->
    </label>
    <br />
    <br />

    <label>
        Email:
        <br/>
        <input type="email" name="email" /> <!-- Campo de entrada para o email do usuário -->
    </label>
    <br />
    <br />

    <label>
        Senha:
        <br />
        <input type="password" name="senha" /> <!-- Campo de entrada para a senha do usuário (tipo password para ocultar os caracteres) -->
    </label>
    <br />
    <br />

    <input type="submit" value="Enviar" /> <!-- Botão de envio do formulário -->

</form>
