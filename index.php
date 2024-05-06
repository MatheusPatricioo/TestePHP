<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<?php
session_start();
require('header.php'); // Inclui o arquivo 'header.php', que pode conter configurações ou outros códigos necessários

// Verifica se a variável de sessão 'aviso' foi definida antes de tentar acessá-la
if(isset($_SESSION['aviso'])) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<div class="container">
    <h2>Formulário</h2>

    <form method="POST" action="recebedor.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="idade">Idade:</label>
        <input type="text" id="idade" name="idade">

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <input type="submit" value="Enviar">
    </form>
</div>

</body>
</html>
