<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Números Pares e Soma na Faixa de 1 a 10</title>
</head>
<body>

<h2>Números Pares e Soma na Faixa de 1 a 10</h2>

<?php
$soma = 0; // Inicializa a variável de soma

echo "<p>Números pares:</p>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo "<p>número par: $i</p>";
        $soma += $i; // Adiciona o número par à soma
    }
}

echo "<p>Soma dos números pares: $soma</p>";
?>

</body>
</html>
