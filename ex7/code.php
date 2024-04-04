<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado da Consulta</title>
</head>
<body>

<?php    
// Obtendo o código do cargo do formulário
    $codigo = $_POST["codigo"];

    // Determinando o cargo com base no código
    switch ($codigo) {
        case 1:
            echo "<p>Secretária</p>";
            break;
        case 2:
            echo "<p>Gerente</p>";
            break;
        case 3:
            echo "<p>Operário</p>";
            break;
        case 4:
            echo "<p>Analista</p>";
            break;
        case 5:
            echo "<p>Faxineiro</p>";
            break;
        default:
            echo "<p>Código inválido.</p>";
            break;
    }
?>

</body>
</html>
