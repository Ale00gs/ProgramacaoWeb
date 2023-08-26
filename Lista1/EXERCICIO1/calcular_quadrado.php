<!DOCTYPE html>
<html>
<head>
    <title>Calcular Área do Quadrado</title>
    <link rel="stylesheet" type="text/css" href="../../../style.css">
</head>
<body>
    <h1>Calcular Área do Quadrado</h1>
    <div class="button-size">
        <div ontouchstart="">
            <div class="button">
                <a class="button-text" href="./exe1.php">voltar</a>
            </div>
        </div>
    </div>
    <form method="post">
        <label for="">Lado: </label>
        <input type="number" name="lado" required><br>
        <input class="calculate" type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $lado = $_POST["lado"];
        $area = pow($lado, 2);
        echo "Área do quadrado: " . $area;
    }
    ?>
</body>
</html>
