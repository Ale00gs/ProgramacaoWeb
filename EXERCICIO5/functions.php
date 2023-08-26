<?php
session_start(); // Iniciando a sessão
// Função

function get_loan_informations($loan_amount, $interest_rate, $loan_period)
{
    $interest_rate_converted = $interest_rate / 100;

    $installment_value = calculate_installment($loan_amount, $interest_rate, $loan_period);

    $loanInformations = array();

    $total_interest = 0;
    $debt_value = $loan_amount;

    for ($i = 1; $i <= $loan_period; $i++) {
        $monthly_interest = calculate_monthly_interest($debt_value, $interest_rate_converted);
        $amortization = calculate_amortization($installment_value, $monthly_interest);

        $debt_value -= $amortization;
        $total_interest += $monthly_interest;

        $loanInformations[] = array(
            'installment' => $i,
            'installment_value' => number_format($installment_value, 2, ',', '.'),
            'amortization' => number_format($amortization, 2, ',', '.'),
            'fee' => number_format($monthly_interest, 2, ',', '.'),
            'debt_value' => number_format($debt_value, 2, ',', '.')
        );
    }

    $loanInformations['total_interest'] = number_format($total_interest, 2, ',', '.');
    $loanInformations['loan_amount'] = $loan_amount;
    $loanInformations['interest_rate'] = $interest_rate;
    $loanInformations['loan_period'] = $loan_period;

    return $loanInformations;
}

function calculate_installment($loan_amount, $interest_rate, $loan_period)
{
    return $loan_amount * ($interest_rate / 100 * (1 + $interest_rate / 100) ** $loan_period / ((1 + $interest_rate / 100) ** $loan_period - 1));
}

function calculate_monthly_interest($debt_value, $interest_rate)
{
    return $debt_value * $interest_rate;
}

function calculate_amortization($installment_value, $monthly_interest)
{
    return $installment_value - $monthly_interest;
}

if (isset($_POST['loan_amount']) && isset($_POST['interest_rate']) && isset($_POST['loan_period'])) {

    $loan_amount = floatval($_POST['loan_amount']);

    $interest_rate = floatval($_POST['interest_rate']);

    $loan_period = intval($_POST['loan_period']);

    // Armazena os resultados na sessão
    $_SESSION['loanInformations'] = get_loan_informations($loan_amount, $interest_rate, $loan_period);

    // Redireciona para a página que exibe o resultado

    header('location: ../EXERCICIO5/exe5.php');

    die();
}

?>