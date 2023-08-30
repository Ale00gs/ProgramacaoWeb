<!DOCTYPE html>
<html>
<head>
    <title>Cálculo de Preço de Custo</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
    <h1>Cálculo de Preço de Custo</h1>
    <div class="button-size">
        <div ontouchstart="">
            <div class="button">
                <a class="button-text" href="../../index.php">voltar</a>
            </div>
        </div>
    </div>
    <form action="" method="post">
        <label for="selling_price">Preço de Venda:</label>
        <input type="number" name="selling_price" id="selling_price" required>
        <label for="profit_percentage">Porcentagem de Lucro:</label>
        <input type="number" name="profit_percentage" id="profit_percentage" required>
        <input class="calculate" type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $selling_price = $_POST["selling_price"];
        $profit_percentage = $_POST["profit_percentage"];
        $cost_price = $selling_price / (1 + ($profit_percentage / 100));
        echo "<p>O preço de custo é: $cost_price</p>";
    }
    ?>
</body>
</html>