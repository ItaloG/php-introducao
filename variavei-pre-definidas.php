<?php

// var_dump exobe informações sobre a variável, como o tipo, o valor e etc
//var_dump($_GET);

$nome = $_GET["nome"];

$idade = $_GET["idade"];

$anoNascimento = 2021 - $idade;


//isset() retorna true se a variável foi declarada se o valor é diferente de nulo
if(isset ($_GET["fez-aniversario"])){
    $anoNascimento = $anoNascimento - 1;
}

echo "<h1>Óla, $nome, você nasceu em $anoNascimento</h1>";

//$_GET é um array que recebe os parametro passadps pela requisição
