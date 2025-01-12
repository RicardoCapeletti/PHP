<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerar Número Aleatório</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f0f8ff;
            margin: 0;
        }

        button {
            padding: 10px 20px;
            font-size: 1.2rem;
            color: white;
            background-color: #4a90e2;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #357ab8;
        }

        .numero {
            margin-top: 3px;
            font-size: 1.4rem;
            color: #333;
            background-color: rgb(225, 229, 231);
            align-items: center;
            justify-content: center;
            padding: 3px 15px;
            border: 2px solid rgb(206, 214, 221);
        }
    </style>
</head>

<body>
    <form>
        <button>Gerar Número Aleatório</button>
        <?php

        $numeroAleatorio = mt_rand(1, 1000);
        echo "<div class='numero'>Número gerado: $numeroAleatorio</div>";

        ?>
    </form>

</body>

</html>