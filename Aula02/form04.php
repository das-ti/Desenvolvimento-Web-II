<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <form action="#" method="post">
        <label>Valor 1: </label>
        <input type="text" name="txtvalor1">
        <br><br>

        <label>Valor 2: </label>
        <input type="text" name="txtvalor2">
        <br>
        
        <input type="submit" value="SOMAR" name="btnsoma">
        <input type="submit" value="MULTIPLICAR" name="btnmult">
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $v1 = $_POST["txtvalor1"];
    $v2 = $_POST["txtvalor2"];
    
    if(isset($_POST["btnsoma"])){
    
        echo "Resultado da soma: " . ($v1 + $v2);
    }
    else if(isset($_POST["btnmult"])){
        echo "Resultado da multiplicação: " . ($v1 * $v2);
    }
}
?>