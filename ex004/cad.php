<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servidor</title>
</head>
<body>

    <?php 
    
    $nome = $_GET["nome"];
    $sobrenome = $_GET["sobrenome"];

    echo "<p>Bem vindo ao sevidor $nome $sobrenome</p>"

    ?>    

</body>
</html>