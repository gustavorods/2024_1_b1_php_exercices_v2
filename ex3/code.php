<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado da Verificação</title>
</head>
<body>

<?php
    $numero = $_POST["numero"];

    if ($numero % 2 == 0) {
        echo "<p>O número $numero é par.</p>";
    } else {
        echo "<p>O número $numero é ímpar.</p>";
    }
?>

</body>
</html>
