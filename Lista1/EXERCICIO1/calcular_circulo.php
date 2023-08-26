<!DOCTYPE html>
<html>
<head>
    <title>Calcular Área do Círculo</title>
    <link rel="stylesheet" type="text/css" href="../../../style.css">
</head>
<body>
    <h1>Calcular Área do Círculo</h1>
    <div class="button-size">
        <div ontouchstart="">
            <div class="button">
                <a class="button-text" href="./exe1.php">voltar</a>
            </div>
        </div>
    </div>
    <form method="post">
        <label for="">Raio:</label>    
        <input type="number" name="raio" step="any" required><br>
        <input class="calculate" type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $raio = $_POST["raio"];
        $area = M_PI * pow($raio, 2);
        echo "Área do círculo: " . $area;
    }
    ?>
</body>
</html>