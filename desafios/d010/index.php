<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <form action="<?=$_SERVER['PHP_SELF']?>">

    <label for="ano">Em que ano nasceu?</label>
    <input type="number" name="ano" id="ano">

    <label for="idade">Qual sua idade no ano...</label>
    <input type="number" name="idade" id="idade">

    <input type="submit" value="Calcular">
</form>

<section>
<?php 
    
    $ano = $_GET['ano'];
    $idade = $_GET['idade'];

    $resultado = $ano - $idade;
    $resultadoForm = abs($resultado);

    echo "Sua idade neste ano sera <strong>$resultadoForm</strong>";
    
    ?>
</section>

</body>
</html>