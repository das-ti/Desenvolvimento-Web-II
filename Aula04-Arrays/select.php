<?php
$usuarios = [
    "0" => "Alunos",
    "1" => "Professor"
];
$cursos = ["ADS", "DSM", "COMEX", "QP"];

$periodos = ["MATUTINO", "VERSPERTINO", "NOTURNO"];

$fotos = array("https://www.fatecsp.br/img/logofatec.png", "https://www.fatecsp.br/img/cps.png", "https://www.fatecsp.br/img/brasao_sp.jpg");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="#" method="post">
        <?php
        foreach($fotos as $f){
            echo "<img src='$f' width='10%'>";
        }
        ?>
        <br><br>
        <label for="">Usuários</label>
        <?php
        foreach ($usuarios as $usuario) {
            echo "<input type='radio' name='usuario' value='$usuario'>$usuario";
        }
        ?>
        <br><br>
        <label for="">Cursos</label>
        <?php
        $cursos = ["ADS", "DSM", "COMEX", "QP"];
        ?>
        <select name="sltcurso" id="">
            <?php
            foreach ($cursos as $curso) {
                echo "<option>$curso</option>";
            }
            ?>
        </select>
        <br><br>
        <?php
        foreach ($periodos as $periodo) {
            echo "<input type='checkbox' name='periodos[]' value='$periodo'>$periodo";
        }
        ?>
        <br><br>
        
        <input type="submit" value="enviar">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario = $_POST['usuario'];
        $curso = $_POST['sltcurso'];
        $periodo = $_POST['periodos'];
        echo "<br>$usuario matriculado em $curso, no período";
        echo "<h1>Período: </h1>";
        echo "<ul>";
        foreach($periodo as $p){
            echo"<li>$p";
        }
        echo "<?ul>";
    }
    ?>
</body>

</html>