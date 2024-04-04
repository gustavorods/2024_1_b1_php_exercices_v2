<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Soma do Intervalo de Números de 3 a 8</title>
</head>
<body>

<h2>Soma do Intervalo de Números de 3 a 8</h2>

<?php
$soma = 0; // Inicializa a variável de soma

echo "<p>Números no intervalo:</p>";
for ($i = 3; $i <= 8; $i++) {
    echo "<p>$i</p>";
    $soma += $i; // Adiciona o número à soma
}

echo "<p>Soma do intervalo: $soma</p>";
?>

</body>
</html>
