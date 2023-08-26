<!DOCTYPE html>
<html>
<head>
    <title>Soma de Dígitos</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
</head>
<body>
    <h1>Soma de Dígitos</h1>
    <div class="button-size">
        <div ontouchstart="">
            <div class="button">
                <a class="button-text" href="../index.php">voltar</a>
            </div>
        </div>
    </div>
    <form action="" method="post">
        <label for="number">Digite um número inteiro:</label>
        <input type="number" name="number" required>
        <input class="calculate" type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST["number"];
        $sum = 0;

        // Iterando sobre os dígitos e somando-os
        while ($number > 0) {
            $digit = $number % 10;
            $sum += $digit;
            $number = (int) ($number / 10);
        }
        
        echo "<p>A soma dos dígitos é: $sum</p>";
    }
    ?>
</body>
</html>
