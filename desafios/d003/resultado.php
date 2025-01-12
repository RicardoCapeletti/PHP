<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Valor em Dolar</title>
</head>
<body>

        <div>
            <h1>Valor em Dólar:</h1>
            
                <?php
        
                $valor = $_GET["valor"];
                $valordolar = $valor / 5.22;
                $valordolar = number_format($valordolar, 2, ",",".");
                echo "US$ $valordolar";
                ?>
            
            <button onclick="javascript:history.go(-1)">Voltar</button></div>
        
   
    
</body>
</html>