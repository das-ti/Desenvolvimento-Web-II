<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <title>Formulário</title>
</head>

<body>
    <form action="#" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="txtnome" id="nome" placeholder="primeiro nome">
        <label for="sobrenome">Sobrenome: </label>
        <input type="text" name="txtsobrenome" id="sobrenome" placeholder="sobrenome">
        <input type="submit" value="Enviar" id="button">
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST["txtnome"];
    $sobrenome = $_POST["txtsobrenome"];
    echo "Olá, " . $nome . " " . $sobrenome;
}
?>