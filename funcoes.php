<?php
    //As funções são blocos de código contendo lógicas reutilizáveis

    //declarando funções em PHP
    function exibirMensagem(){
        $mensagem = "Olá mundo das Finções!";
    
        echo $mensagem; 
    }

    exibirMensagem();
    
    exibirMensagem();

    echo "<br/> <br/>";
    
    //passando argumentos para a função
    function somar($a, $b){
        $soma = $a + $b;
        
        echo $soma;
    }
    
    somar(10, 5);
    
    echo "<br/> <br/>";

    somar(100, 55);

    echo "<br/> <br/>";


    //retornar valores de uma função
    function formatarNome($primeiroNome, $ultimonome){
        $nomeFomatado = $primeiroNome . "  " . $ultimonome;

        return $nomeFomatado;
    }

    $nome = formatarNome("Fulano", "de Tal");

    echo $nome;

    echo "<br/> <br/>";

    echo formatarNome("Italo", "Gabriel");

    //argumentos opcionais
    function formatarData(int $dia, int $mes, int $ano = 2021){
        //10/12/2021

        $dataFormatada = $dia . "/" . $mes . "/" . $ano;

        return $dataFormatada;
    }

    echo "<br/> <br/>";
    
    echo formatarData(12, 03, 2012);

    echo "<br/> <br/>";

    //passando vetores como argumentos
    function exibirNomes(array $nomes){
        foreach($nomes as $nome){
            echo $nome;
        }
    }

    exibirNomes(["Italo", "Guilherme", "Emerson"] );