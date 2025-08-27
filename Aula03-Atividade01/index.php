<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pizzaria</title>
</head>

<body>
    <main>
        <section>
            <h1>TopPizzaria</h1>
            <h3>Novo Pedido</h3>
            <form action="#" method="post">
                <label for="txtnome">Seu nome:</label><br>
                <input type="text" name="txtnome" id="txtnome" required>
                <br><br>
                <label for="sabor">Escolha o sabor da pizza:</label><br>
                <select name="sltsabor" id="sabores">
                    <option value="Mussarela">Mussarela - R$ 30,00</option>
                    <option value="Calabresa">Calabresa - R$ 32,00</option>
                    <option value="Caipira">Caipira - R$ 35,00</option>
                    <option value="Brocolis">Brócolis - R$ 37,00</option>
                </select>
                <br><br>
                <label for="rdsim">Borda recheada:</label><br>
                <input type="radio" value="Não" name="rdborda" id="rdnao" checked>Não
                <input type="radio" value="Sim" name="rdborda" id="rdsim">Sim
                <br><br>
                <label for="">Bebidas (você pode escolher mais de uma):</label><br>
                <input type="checkbox" value="8" name="ckbebidas[]">Refri de lata - R$ 8,00 <br>
                <input type="checkbox" value="10" name="ckbebidas[]">Suco 500ml - R$ 10,00 <br>
                <input type="checkbox" value="5" name="ckbebidas[]">Água 500ml - R$ 5,00 <br>
                <input type="submit" value="Finalizar Pedido" name="btnpedido">
            </form>
        </section>
    </main>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST["txtnome"];
    $sabor = $_POST["sltsabor"];
    $borda = $_POST["rdborda"];
    $bebidas = $_POST["ckbebidas"];

    $precoPizza = 0;

    if ($sabor == "Mussarela") {
        $precoPizza += 30;
    } else if ($sabor == "Calabresa") {
        $precoPizza += 32;
    } else if ($sabor == "Caipira") {
        $precoPizza += 35;
    } else {
        $precoPizza += 37;
    }

    if ($borda == "Sim") {
        $precoPizza += 5;
    } 
    // else {
    //     $preco;
    // }

    echo "<h4>Resumo do Pedido</h4>";
    echo "<br>Nome: " . $nome;
    echo "<br>Sabor: " . $sabor;
    echo "<br>Borda: " . $borda;
    echo "<br>Bebidas: ";

    $precoBebida = 0;
    $tipoBebida = "";

    foreach ($bebidas as $bebida) {

        if ($bebida == 8) {
            $precoBebida += $bebida;
            $tipoBebida = "Refri";
        } else if ($bebida == 10) {
            $precoBebida += $bebida;
            $tipoBebida = "Suco";
        } else if ($bebida == 5) {
            $precoBebida += $bebida;
            $tipoBebida = "Água";
        } else {
            $precoBebida = 0;
            $tipoBebida = " ";
        }
        echo
        "<ul>
                <li>" . $tipoBebida . " - valor: R$ " . $precoBebida . ",00</li>
            </ul>";
    }

    $total = 0;

    $total = $precoPizza + $precoBebida;

    if (isset($_POST['btnpedido'])) {
        echo "<br>Total a pagar: R$" . ($total);
    }
}
?>