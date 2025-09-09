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
            <section id="novo-pedido">
                <h1>TopPizzaria</h1>
                <h2>Novo Pedido</h2>
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
                    <label for="ckbebidas">Bebidas (você pode escolher mais de uma):</label><br>
                    <input type="checkbox" value="8" name="ckbebidas[]" id="ckbebidas">Refri de lata - R$ 8,00 <br>
                    <input type="checkbox" value="10" name="ckbebidas[]" id="ckbebidas">Suco 500ml - R$ 10,00 <br>
                    <input type="checkbox" value="5" name="ckbebidas[]" id="ckbebidas">Água 500ml - R$ 5,00 <br>
                    <input type="submit" value="Finalizar Pedido" name="btnpedido">
                </form>
            </section>
            <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $nome = $_POST["txtnome"];
            $sabor = $_POST["sltsabor"];
            $borda = $_POST["rdborda"];
            
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
            
            $precoBorda = 5;
            if ($borda == "Sim") {
                $precoPizza += $precoBorda;
            } else {
                $precoBorda = 0;
                $precoPizza += $precoBorda;
            }
            echo
            "<section id='resumo-pedido' style='display: block'>
            <p id='mensagem-pedido'><strong>" . $nome . ", </strong><b>aqui está o resumo do seu pedido: </b></p>
                        <ul id='lista-pedido'>
                        <li><b>Pizza sabor:</b> " . $sabor . " - R$ " . $precoPizza . ",00</li>
                        <li><b>Borda recheada:</b> " . $borda . " - R$ " . $precoBorda . ",00</li>
                        <li><b>Bebidas:</b> </li>
                        ";

            $precoBebida = 0;

            if (isset($_POST['ckbebidas'])) {

                $bebidas = $_POST["ckbebidas"];
                $tipoBebida = "";

                foreach ($bebidas as $bebida) {

                    if ($bebida == 8) {
                        $precoBebida += $bebida;
                        $tipoBebida = "Refri de lata - R$ 8,00";
                    } else if ($bebida == 10) {
                        $precoBebida += $bebida;
                        $tipoBebida = "Suco 500ml - R$ 10,00";
                    } else if ($bebida == 5) {
                        $precoBebida += $bebida;
                        $tipoBebida = "Água 500ml - R$ 5,00";
                    }
                    echo
                    "<ul id='lista-bebidas'>
                        <li>" . $tipoBebida . "</li>
                    </ul>";
                }
            } else {
                echo
                "<ul id='lista-bebidas'>
                            <li>Sem bebidas R$ " . $precoBebida . ",00</li>
                    </ul>
                </ul>";
            }
            $total = 0;

            $total = $precoPizza + $precoBebida;

            if (isset($_POST['btnpedido'])) {
                echo "<p id='total-pedido'><b>Total a pagar: </b>R$" . ($total) . ",00</p>";
            }

            echo "<br><br><a href='index.php'>Fazer novo pedido</a>";

            "</section>
            <?php endif;?>";
        }
        ?>
    </main>

</html>