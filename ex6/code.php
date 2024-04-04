<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado do Cálculo do Peso Ideal</title>
<style>
  .mensagem-vermelha {
    color: red;
  }

  .mensagem-amarela {
    color: yellow;
  }

  .mensagem-azul {
    color: blue;
  }
</style>
</head>
<body>

<?php
    // Obtendo os dados do formulário
    $nome = $_POST["nome"];
    $peso = $_POST["peso"];
    $sexo = $_POST["sexo"];
    $altura = $_POST["altura"];

    // Calculando o peso ideal
    if ($sexo === "masculino") {
        $pesoIdeal = $altura * $altura * 23;
    } elseif ($sexo === "feminino") {
        $pesoIdeal = $altura * $altura * 22;
    }

    // Arredondando as casas decimais
    $pesoIdeal = round($pesoIdeal, 0); 

    // Determinando a situação do peso
    if ($peso > $pesoIdeal) {
        echo "<p class='mensagem-vermelha'>Acima do peso ideal.</p>";
    } elseif ($peso < $pesoIdeal) {
        echo "<p class='mensagem-amarela'>Abaixo do peso ideal.</p>";
    } else {
        echo "<p class='mensagem-azul'>Dentro do peso ideal.</p>";
    }

    // Exibindo o peso ideal calculado
    echo "<p>Peso ideal calculado para $nome: $pesoIdeal kg.</p>";
?>

</body>
</html>
