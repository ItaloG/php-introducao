<?php

    $numero1 = isset($_POST['numero1']) ? $_POST['numero1'] : NULL;
    $numero2 = isset($_POST['numero2']) ? $_POST['numero2'] : NULL;
    $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : NULL;

    switch($operacao){
        case "soma":
            $resultado = $numero1 + $numero2;
            break;

        case "subtracao":
            $resultado = $numero1 - $numero2;
            break;

        case "multiplicacao":
            $resultado = $numero1 * $numero2;
            break;

        case "divisao":
            $resultado = $numero1 / $numero2;
            break;

        default:
            $resultado = null;
            break;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-global.css" />
    <title>Calculadora</title>
</head>
<body>
    <form method="POST" action="index.php">
        <h1>Calculadora</h1>

            <div class = "input-group">
        <label for="resultado">Resultado </label>
        <input type="text" id="resultado" readonly value="<?= $resultado?>"/> 

      
            <label for="numero1">Número_1</label>
            <input type="number" id="numero1" name="numero1" />
           
       
         
            <label for="numero2">Número_2</label>
            <input type="number" id="numero2" name="numero2" />
            </div>
       
            <div>
            <input type="radio" id="soma" name="operacao" value="soma"/>
            <label for="soma">Adição</label>
            </div>
       
            <div>
            <input type="radio" id="subtracao" name="operacao" value="subtracao"/>
            <label for="subtracao">Subtração</label>
            </div>
       
            <div>
            <input type="radio" id="multiplicacao" name="operacao" value="multiplicacao"/>
            <label for="multiplicacao">Multiplicação</label>
            </div>
       
            <div>
            <input type="radio" id="divisao" name="operacao" value="divisao"/>
            <label for="divisao">Divisão</label>
            </div>
          
        <button> Calcular </button>
        <button type="reset">limpar</button>
    </form>
</body>
</html>
