<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos primitivos em php</title>
</head>

<body>
    <h1>Teste de tipos primitivos</h1>

    <?php

    // $num = 300;
    // echo "O valor da variavel é $num";

    //    $v = "Ricardo";
    //    var_dump($v);

    //    $num = (int)3e2;
    //    var_dump($num);

    //    $num = (float)"950";
    //    var_dump($num);

    // $casado = false;
    // var_dump($casado);

    // $vet = [6, "Maria", 9, false, 5];
    // var_dump($vet);

    class pessoa {
        private string $nome;
    }

    $p = new pessoa;
    var_dump($p);

    ?>

</body>

</html>