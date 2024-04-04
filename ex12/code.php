<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Quadrados dos Números Inteiros de 1 a 10</title>
</head>
<body>

<h2>Quadrados dos Números Inteiros de 1 a 10</h2>

<?php
echo "<p>Quadrados dos números inteiros de 1 a 10:</p>";
for ($i = 1; $i <= 10; $i++) {
    $quadrado = $i * $i;
    echo "<p>O quadrado de $i é $quadrado</p>";
}
?>

</body>
</html>
