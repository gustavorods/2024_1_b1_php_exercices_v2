<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Resultado da Autenticação</title>
</head>
<body>

<?php
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    if ($usuario === "ETE" && $senha === "ETE") {
        echo "<p>Bem vindo ao Sistema.</p>";
    } else {
        echo "<p>Usuário ou senha inválidos!!, tente novamente!!!</p>";
    }
?>

</body>
</html>
