<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajuste de Valores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
            text-align: center;
        }
        th, td {
            padding: 10px;
        }
        .slider-container {
            margin: 20px 0;
        }
    </style>
</head>
<body>
    <h1>Reajuste de Valores dos Produtos</h1>

    <?php
    // Lista de produtos com preços originais
    $produtos = [
        ["nome" => "Produto A", "preco" => 100.00],
        ["nome" => "Produto B", "preco" => 200.00],
        ["nome" => "Produto C", "preco" => 300.00],
    ];

    // Percentual de reajuste inicial (default 0%)
    $percentualReajuste = isset($_POST['percentual']) ? (float)$_POST['percentual'] : 0;
    ?>

    <form method="POST">
        <div class="slider-container">
            <label for="percentual">Percentual de Reajuste (%):</label><br>
            <input type="range" id="percentual" name="percentual" min="-50" max="50" step="1" 
                   value="<?php echo $percentualReajuste; ?>" oninput="updateSliderValue(this.value)">
            <span id="sliderValue"><?php echo $percentualReajuste; ?></span>%
        </div>
        <button type="submit">Aplicar Reajuste</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço Original (R$)</th>
                <th>Preço Reajustado (R$)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($produtos as $produto) {
                $precoOriginal = $produto['preco'];
                $precoReajustado = $precoOriginal * (1 + $percentualReajuste / 100);
                echo "<tr>";
                echo "<td>{$produto['nome']}</td>";
                echo "<td>" . number_format($precoOriginal, 2, ',', '.') . "</td>";
                echo "<td>" . number_format($precoReajustado, 2, ',', '.') . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <script>
        // Atualiza o valor do slider em tempo real
        function updateSliderValue(value) {
            document.getElementById('sliderValue').innerText = value;
        }
    </script>
</body>
</html>
