<?php
require 'functions.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema PRICE de Amortização</title>
    <link rel="stylesheet" type="text/css" href="../../style.css">
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

    <form method="post" action="functions.php">
        <div class="line">
            <label for="loan_amount">Valor do Empréstimo:</label>
            <input type="number" name="loan_amount" id="loan_amount" required>
        </div>

        <div class="line">
            <label for="interest_rate">Taxa de Juros (%): </label>
            <input type="number" name="interest_rate" id="interest_rate" step="0.01" required>
        </div>

        <div class="line">
            <label for="loan_period">Número de Parcelas (meses): </label>
            <input type="number" name="loan_period" id="loan_period" required>
        </div>

        <input class="calculate-value-last" type="submit" value="Calcular">
    </form>

    <h1 id="loanInformations">

        <?php
        // var_dump($_SESSION);
        
        if (isset($_SESSION['loanInformations'])) {

            $loanInformations = $_SESSION['loanInformations'];

            echo "<pre>";

            echo "------------------------------------------------------------\n";
            echo "Sistema francês de amortização (tabela price)\n";
            echo "------------------------------------------------------------\n";

            echo "Montante Financiado : R$" . number_format($loanInformations['loan_amount'], 2, ',', '.') . "\n";
            echo "Juros Financiamento : " . ($loanInformations['interest_rate'] * 100)/100 . " %\n";
            echo "Nº de Parcelas : " . $loanInformations['loan_period'] . "\n";

            echo "------------------------------------------------------------\n";
            echo "parcela\t\tVlr Parcela\tAmortização\t\tJuros\t\tSdo Devedor\n";

            foreach ($loanInformations as $row) {
                if (is_array($row)) {
                    echo "Nº " . str_pad($row['installment'], 2, ' ', STR_PAD_LEFT) . "\t\t";
                    echo str_pad($row['installment_value'], 12, ' ', STR_PAD_LEFT) . "\t";
                    echo str_pad($row['amortization'], 16, ' ', STR_PAD_LEFT) . "\t";
                    echo str_pad($row['fee'], 8, ' ', STR_PAD_LEFT) . "\t";
                    echo str_pad($row['debt_value'], 10, ' ', STR_PAD_LEFT) . "\n";
                }
            }

            echo "\nTotal de juros pago: R$ " . $loanInformations['total_interest'] . "\n";
            echo "------------------------------------------------------------\n";

            echo "</pre>";
            unset($_SESSION['loanInformations']);
        }
        ?>
    </h1>
</body>

</html>