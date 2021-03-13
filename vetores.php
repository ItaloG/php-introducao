<?php

// declarando um vetor
    $vetorDeInteiros = [1,10,2,5,50,9,100];

    $vetorDeStrings = ["Fulano","Ciclano","Beutrano","Jucicleison"];

// a função print_r é voltada a exebir vetors

    print_r($vetorDeInteiros);

    echo "<br> <br>";

    print_r($vetorDeStrings);
    
    echo "<br> <br>";
    
    var_dump($vetorDeStrings[1]);
    
    echo "<br> <br>";
    
    // a função var_dump exibe as infomrções de uma variável
    var_dump($vetorDeInteiros);
    
    echo "<br> <br>";
    
    echo $vetorDeStrings[3] . " , " . $vetorDeStrings[0];


    $vetorComChavesDefinidas = [
        "nome" => "Fulano",
        "idade" => 32,
        "sexo" => "M",
        "renda" => 2550.50,
        "estaTrabalhando" => true,
        10 => "alguma coisa",
        "endereco" => [
            "rua" => "Av. Tal",
            "bairro" => "Centro",
            "numero"=> 5001
            ]
    ];


    echo "<br> <br>";

    print_r($vetorComChavesDefinidas);

    echo "<br> <br>";

    echo "Onome do usúario é: " . $vetorComChavesDefinidas["nome"];
    echo ", e a idade dele é: " . $vetorComChavesDefinidas["idade"];
    echo ", e ele more na rua: " . $vetorComChavesDefinidas["endereco"]["rua"];

    echo "<br> <br>";

    var_dump($vetorComChavesDefinidas["endereco"]);

    echo "<br> <br>";

// verifica se o  fulano mora na Av e numero 5001
    if($vetorComChavesDefinidas["endereco"]["rua"] == "Av. Tal" && 
        $vetorComChavesDefinidas["endereco"]["numero"] == 5001){
            echo "Sim";
        }

        echo "<br> <br>";

        echo count($vetorComChavesDefinidas);

        echo "<br> <br>";

        /** 
         *  Percorrer vetores
         *  Utilizando lçoes de repetição while, for, foreach
        */

// Somar os valores do vetro de inteiros
        $soma = 0;
        for($i = 0; $i < count($vetorDeInteiros); $i++){
            $soma = $soma + $vetorDeInteiros[$i];
        }
        
        echo $soma;

        echo "<br> <br>";

        $soma = 0;
        $i = 0;
        while($i < count($vetorDeInteiros)){
            $soma = $soma + $vetorDeInteiros[$i];
            $i++;
        }

        echo $soma;

        echo "<br> <br>";

// estrutura foreach
//encontrar um nome dentro do vetor
        foreach($vetorDeStrings as $nome){
            if($nome == "Ciclano") echo "Encontrado";
        }