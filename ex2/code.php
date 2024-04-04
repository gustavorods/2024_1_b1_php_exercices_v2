<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado da Verificação</title>
<style>
  .mensagem-azul {
    color: blue;
  }

  .mensagem-vermelha {
    color: red;
  }
</style>
</head>
<body>

<?php
    // Obtendo o número do formulário
    $numero = $_POST["numero"];

    // Verificando se o número é maior ou igual a 0
    if ($numero >= 0) {
        echo "<p class='mensagem-azul'>Número positivo.</p>";
    } else {
        echo "<p class='mensagem-vermelha'>Número negativo.</p>";
    }
?>

</body>
</html>
