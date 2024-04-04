<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quadrados de Números Inteiros</title>
</head>
<body>

<h2>Quadrados de Números Inteiros de 5 a 10</h2>

<?php
// Loop para calcular e exibir os quadrados dos números inteiros de 5 a 10
for ($i = 5; $i <= 10; $i++) {
    $quadrado = $i * $i;
    echo "<p>O quadrado de $i é $quadrado</p>";
}
?>

</body>
</html>
