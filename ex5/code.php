<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado da Média do Aluno</title>
</head>
<body>

<?php
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];

    $media = ($nota1 + $nota2) / 2;

    if ($media >= 8) {
        echo "<p>Média: " . number_format($media, 2) . ". Situação: Aprovado.</p>";
    } elseif ($media <= 3) {
        echo "<p>Média: " . number_format($media, 2) . ". Situação: Reprovado.</p>";
    } else {
        echo "<p>Média: " . number_format($media, 2) . ". Situação: Em recuperação.</p>";
    }
?>

</body>
</html>
