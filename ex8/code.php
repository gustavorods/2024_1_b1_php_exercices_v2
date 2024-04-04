<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado da Operação</title>
</head>
<body>

<?php
    // Obtendo os valores e o código da operação do formulário
    $v1 = $_POST["v1"];
    $v2 = $_POST["v2"];
    $codigo = $_POST["codigo"];
    
    // Realizando a operação selecionada
    switch ($codigo) {
        case 1:
            $resultado = $v1 + $v2;
            echo "<p>Resultado da Soma: $resultado</p>";
            break;
        case 2:
            $resultado = $v1 - $v2;
            echo "<p>Resultado da Subtração: $resultado</p>";
            break;
        case 3:
            if ($v2 != 0) {
                $resultado = $v1 / $v2;
                echo "<p>Resultado da Divisão: $resultado</p>";
            } else {
                echo "<p>Erro: Divisão por zero!</p>";
            }
            break;
        case 4:
            $resultado = $v1 * $v2;
            echo "<p>Resultado da Multiplicação: $resultado</p>";
            break;
        default:
            echo "<p>Código de operação inválido!</p>";
            break;
    }
?>

</body>
</html>
