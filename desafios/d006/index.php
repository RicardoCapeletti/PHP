<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Divisão</title>
</head>

<body>
    
        <section>
            <h2>Anatomia de uma Divisão</h2>
        </section>
    

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

        <label for="n1">Dividendo</label>
        <input type="number" name="n1" id="n1">

        <label for="n2">Divisor</label>
        <input type="number" name="n2" id="n2">

        <input type="submit" value="Calcular">
    </form>

    <?php
    $dividendo = $_GET["n1"];
    $divisor = $_GET["n2"];
    $divisao = $dividendo / $divisor;
    $resdiv = $dividendo % $divisor;
    $divint = (int)$divisao
    ?>

    <section>
        <?php
        echo "<h3>Estrutura da Divisão</h3>
        <table>
            <tr>
                <th>$dividendo</th>
                <th>$divisor</th>
            </tr>
            <tr>
                <th>$resdiv</th>
                <th>$divint</th>
            </tr>
        </table>";
        ?>
    </section>

</body>

</html>