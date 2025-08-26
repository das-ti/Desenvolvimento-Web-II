<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>
    <form action="#" method="post">
        <label for="nome">Aluno: </label>
        <input type="text" name="txtaluno" id="nome" placeholder="nome do aluno">
        <label>Curso:</label><br>
        <input type="radio" value="ADS" name="rdcurso">ADS
        <input type="radio" value="DSM" name="rdcurso">DSM
        <br><br>
        <label>Período:</label>
        <select name="sltperiodo">
            <option value="Vespertino">Vespertino</option>
            <option value="Noturno">Noturno</option>
        </select>
        <br><br>
        <label>Ciclos Concluídos</label><br>
        <input type="checkbox" value="1" name="ciclos[]">1º
        <input type="checkbox" value="2" name="ciclos[]">2º
        <input type="checkbox" value="3" name="ciclos[]">3º
        <input type="checkbox" value="4" name="ciclos[]">4º
        <input type="checkbox" value="5" name="ciclos[]">5º
        <input type="checkbox" value="6" name="ciclos[]">6º
        <br><br>
        <input type="submit" value="ENVIAR">
    </form>
</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $aluno = $_POST["txtaluno"];
    $curso = $_POST["rdcurso"];
    $periodo = $_POST["sltperiodo"];
    $ciclos = $_POST["ciclos"];

    echo "<br>Aluno: " . $aluno;
    echo "<br>Curso: " . $curso;
    echo "<br>Período: " . $periodo;
    echo "<br>Cíclos Concluídos: ";

    foreach($ciclos as $ciclo) {
        echo $ciclo . ", ";
    }
}

?>