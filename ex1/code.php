<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado da Verificação</title>
</head>
<body>

<?php
    // Obtendo o valor da compra do formulário
    $valorCompra = $_POST["valorCompra"];

    // Verificando se o valor da compra é maior ou igual a 100
    if ($valorCompra >= 100) {
        echo "<p>Compra maior ou igual a cem.</p>";
    } else {
        echo "<p>Compra menor que cem.</p>";
    }
?>

</body>
</html>
