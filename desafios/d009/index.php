<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média Aritimetica e Ponderada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h2>Média e Média Ponderada</h2>
    </section>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">

    <label for="n1">Nota 1</label>
    <input type="number" name="n1" id="n1">
    <label for="p1">Peso 1</label>
    <input type="number" name="p1" id="p1">
    
    <label for="n2">Nota 2</label>
    <input type="number" name="n2" id="n2">
    <label for="p2">Peso 2</label>
    <input type="number" name="p2" id="p2">

    <input type="submit" value="Calcular">
    </form>

    <section>
    <?php 
    
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];

    $p1 = $_GET['p1'];
    $p2 = $_GET['p2'];

    $media = ($n1 + $n2) / 2;
    $mediaP = ($n1*$p1 + $n2*$p2)/($p1+$p2);

    $mediaForm = number_format($media, 2, ",");
    $mediaPForm = number_format($mediaP, 2, ",");

    echo "A média é <strong>$mediaForm</strong> e a média ponderada é <strong>$mediaPForm</strong>";
    
    ?>
    </section>
    
</body>
</html>