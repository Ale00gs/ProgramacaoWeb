<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="../lista2.css">
</head>

<body>

    <body>
        <h1></h1>
        <div class="button-size">
            <div ontouchstart="">
                <div class="button">
                    <a class="button-text" href="../../index.php">voltar</a>
                </div>
            </div>
        </div>
        <div class="result-container">
            <div class="result">
                <?php

                class Calculadora
                {
                    // Propriedades (atributos)
                    private $res;
                    private $mem;

                    //Construtor 
                    public function __construct()
                    {
                        $this->res = 0;
                        $this->mem = 0;
                    }
                    //Métodos
                    public function zerar()
                    {
                        $this->res = 0;
                    }

                    public function desfaz()
                    {
                        $this->res = $this->mem;
                    }

                    public function getRes(): float
                    {
                        return $this->res;
                    }

                    public function somar($valor1 = 0): void
                    {
                        $this->mem = $this->res;
                        $this->res = $valor1 + $this->res;
                    }

                    public function subtrair($valor1 = 0): void
                    {
                        $this->mem = $this->res;
                        $this->res = $this->res - $valor1;
                    }


                    public function multiplicar($valor1 = 1): void
                    {
                        $this->mem = $this->res;
                        $this->res *= $valor1;
                    }


                    public function dividir($valor1 = 1): void
                    {
                        if ($valor1 != 0) {
                            $this->mem = $this->res;
                            $this->res /= $valor1;
                        } else {
                            echo "Divisão por zero não é permitida.";
                        }
                    }

                    public function potencia($expo = 1): void
                    {
                        $this->mem = $this->res;
                        $this->res = pow($this->res, $expo);
                    }

                    public function porcentagem($porc = 0): void
                    {
                        $this->mem = $this->res;
                        $this->res = ($this->res * $porc) / 100;
                    }

                    public function raiz(): void
                    {
                        if ($this->res >= 0) {
                            $this->mem = $this->res;
                            $this->res = sqrt($this->res);
                        } else {
                            echo "Não é possível calcular a raiz quadrada de um número negativo.";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </body>
</body>

</html>