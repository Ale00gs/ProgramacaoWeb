<!DOCTYPE html>
<html>
<head>
    <title>Cálculo de Multa para Pescador</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h1>Cálculo de Multa para Pescador</h1>
    <div class="button-size">
        <div ontouchstart="">
            <div class="button">
                <a class="button-text" href="../index.php">voltar</a>
            </div>
        </div>
    </div>
    <form action="" method="post">
        <label for="fish_weight">Peso do Peixe (kg):</label>
        <input type="number" name="fish_weight" id="fish_weight" step="0.01" required>
        <input class="calculate" type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fish_weight = $_POST["fish_weight"];
        $allowed_weight = 50;
        $excess_weight = max($fish_weight - $allowed_weight, 0);
        $multa = 0;
        if ($excess_weight > 0) {
            $multa = ceil($excess_weight / 5) * 4;
        }
        echo "<p>O valor da multa é: R$ $multa</p>";
    }
    ?>
</body>
</html>