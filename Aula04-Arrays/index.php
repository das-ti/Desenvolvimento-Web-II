<?php
//primeiro tipo de array
$nomes = ["Douglas", "Toni", "Lana","Tarcísio"]; //com conchetes
$nomes[] = "Douglas4"; //add novo elemento
$nomes[0] = "Douglas42"; //
// sort($nomes); //ordem crescente
rsort($nomes); // ordem decrescente

echo "segundo nome: " . $nomes[0];

for ($c = 0; $c < count($nomes); $c++) {
    echo "<br>Nomes $c: $nomes[$c]";
}

//segundo tipo de array
$idades = array(16, 19, 19, "dez"); //com array

echo "<br>Ultima idade: " . $idades[0];
echo "<br>total de idade: " . count($idades); //count: total de elementos



//terceiro tipo de array associativo, Nós quem definimos a chave
$aluno = [
    "matricula" => 123,
    "nome" => "Julio",
    "curso" => "DSM"
];

echo "<br>Nome: " . $aluno["nome"];
$aluno["periodo"] = "Vespertino";

unset($aluno['Matricula']); //exclui o item

foreach ($aluno as $chave => $a) {
    echo "<br>$chave : $a";
}


// tambem é possivel criar uma chave numerica
$unidades = [
    0 => "PG",
    1 => "SV"
];

foreach ($unidades as $chave => $valor) {
    echo "<br>$chave : $valor";
}
