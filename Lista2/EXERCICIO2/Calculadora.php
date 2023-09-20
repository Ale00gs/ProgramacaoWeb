<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="../lista2.css">
</head>

<body>
    <h1></h1>
    <div class="button-size">
        <div ontouchstart="">
            <div class="button">
                <a class="button-text" href="../../index.php">voltar</a>
            </div>
        </div>
    </div>
    <!-- <form method="post">
        <label for="valor1">Digite o valor:</label>
        <input type="text" id="valor1" name="valor1" required>

        <label for="operacao">Escolha a operação:</label>
        <select id="operacao" name="operacao">
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
            <option value="potencia">Potência</option>
            <option value="porcentagem">Porcentagem</option>
            <option value="raiz">Raiz Quadrada</option>
        </select>

        <input type="submit" value="Calcular">
    </form> -->

    <div class="result-container">
        <div class="result">
            <?php

            class Calculadora
            {
                // Atributos
                private $Res;
                private $Mem;

                // Construtor
                public function __construct()
                {
                    $this->Res = 0;
                    $this->Mem = 0;
                }

                // Métodos
                public function zerar()
                {
                    $this->Res = 0;
                }

                public function desfazer()
                {
                    $this->Res = $this->Mem;
                }

                public function getRes()
                {
                    return $this->Res;
                }

                public function soma($valor)
                {
                    $this->Mem = $this->Res;
                    $this->Res += $valor;
                }

                public function subtrai($valor)
                {
                    $this->Mem = $this->Res;
                    $this->Res -= $valor;
                }

                public function multiplica($valor)
                {
                    $this->Mem = $this->Res;
                    $this->Res *= $valor;
                }

                public function divide($valor)
                {
                    if ($valor != 0) {
                        $this->Mem = $this->Res;
                        $this->Res /= $valor;
                    } else {
                        echo "Erro: Divisão por zero.";
                    }
                }

                public function potencia($exp)
                {
                    $this->Mem = $this->Res;
                    $this->Res = pow($this->Res, $exp);
                }

                public function porcentagem($porc)
                {
                    $this->Mem = $this->Res;
                    $this->Res *= ($porc / 100);
                }
            }


            $calc = new Calculadora();
            $calc->soma(5);
            $calc->multiplica(3);
            echo "<br>Resultado: " . $calc->getRes(); 
            
            $calc->zerar();
            $calc->soma(10);
            $calc->subtrai(2);
            $calc->porcentagem(20);
            echo "<br>Resultado: " . $calc->getRes(); 
            
            $calc->zerar();
            $calc->soma(10);
            $calc->soma(10);
            echo "<br>Resultado: " . $calc->getRes(); 
            ?>
        </div>
    </div>
</body>

</html>