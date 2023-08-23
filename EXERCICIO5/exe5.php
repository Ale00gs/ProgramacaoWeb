<!DOCTYPE html>
<html>
<head>
    <title>Sistema PRICE de Amortização</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <h1>Sistema PRICE de Amortização</h1>
    <div class="button-size">
        <div ontouchstart="">
            <div class="button">
                <a class="button-text" href="../index.php">voltar</a>
            </div>
        </div>
    </div>
    <form action="" method="post">
        <div class="line">
        <label  for="loan_amount">Valor do Empréstimo:</label>
        <input  type="number" name="loan_amount" id="loan_amount" required>
        </div>
        
        <div class="line">
        <label  for="interest_rate">Taxa de Juros (mensal): </label>
        <input  type="number" name="interest_rate" id="interest_rate" step="0.01" required>
        </div>
        
        <div class="line">
        <label for="loan_period">Período do Empréstimo (meses): </label>
        <input type="number" name="loan_period" id="loan_period" required>
        <input class="calculate-value" type="submit" value="Calcular">
        </div>        
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $loan_amount = $_POST["loan_amount"];
        $interest_rate = $_POST["interest_rate"] / 100;
        $loan_period = $_POST["loan_period"];
        $monthly_interest = $interest_rate;
        $denominator = 1 - pow(1 + $monthly_interest, -$loan_period);
        $monthly_payment = $loan_amount * ($monthly_interest / $denominator);
        
        echo "<p>O valor da prestação mensal é: R$ " . number_format($monthly_payment, 2) . "</p>";
    }
    ?>
</body>
</html>