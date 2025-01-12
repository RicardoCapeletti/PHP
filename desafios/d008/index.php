<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raiz Quadrado e Cubica</title>
</head>

<body>

    <form action="<?= $_SERVER['PHP_SELF'] ?>">
        <label for="num">Número:</label>
        <input type="number" name="num" id="num">

        <input type="submit" value="Calcular">
    </form>

    <section>
        <?php

        $num = $_GET['num'];
        $rQuad = sqrt($num);
        $rCub = $num ** (1 / 3);

        $rQuadForm = number_format($rQuad, 3, ",");
        $rCubForm = number_format($rCub, 3, ",");

        echo "A Raiz Quadrada é <strong>$rQuadForm</strong>  e a Raiz Cubica é <strong>$rCubForm</strong>";

        ?>
    </section>

</body>

</html>