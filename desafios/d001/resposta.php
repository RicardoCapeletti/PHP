<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resposta</title>
</head>
<body>
    
    <h1>
        <?php
        
        $numero = $_GET["numero"];
        $antecessor = $numero -1;
        $sucessor = $numero +1;
        
        echo "O numero é $numero <br>";
        echo "Seu antecessor é $antecessor <br>";
        echo "Seu sucessor é $sucessor";
        
        ?>
    </h1>
    
    
    <button onclick="javascript:history.go(-1)">Voltar</button>

</body>
</html>