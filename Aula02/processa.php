<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST["txtnome"];
    $sobrenome = $_POST["txtsobrenome"];
    echo "Olá, " . $nome . " " . $sobrenome;
}
?>