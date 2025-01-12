<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salario</title>
</head>

<body>

    <section>
        <h2>Informe seu salário</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">

            <label for="n1">Valor</label>
            <input type="number" name="n1" id="n1">
            <input type="submit" value="Calcular">
        </form>
        <?php 
    
        $valor = $_GET['n1'];
        $n2 = 1518;

        $calculo = (int)($valor / $n2);
        $calculorest = $valor % $n2;
        $resultado = number_format($calculorest, 2, ",", ".");
        

        echo "O valor é equivalente a <Strong>$calculo salarios minimos</Strong> + <strong>R$$resultado</strong>";
    
    ?>
    </section>

  

</body>

</html>