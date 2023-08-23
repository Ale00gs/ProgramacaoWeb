<!DOCTYPE html>
<html>
<head>
    <title>Calcular Área do Triângulo</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h1>Calcular Área do Triângulo</h1>
    <div class="button-size">
        <div ontouchstart="">
            <div class="button">
                <a class="button-text" href="./exe1.php">voltar</a>
            </div>
        </div>
    </div>
    <form method="post">
        <label for="">Base:</label>
        <input type="number" name="base" required>
        <label for="">Altura:</label>
        <input type="number" name="altura" required><br>
        <input class="calculate" type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $base = $_POST["base"];
        $altura = $_POST["altura"];
        $area = ($base * $altura) / 2;
        echo "Área do triângulo: " . $area;
    }
    ?>
</body>
</html>
