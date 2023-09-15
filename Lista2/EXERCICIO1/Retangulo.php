<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
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
    <div class="result-container">
        <div class="result">
            <?php
            class Retangulo
            {
                //atributos
                private $altura;
                private $largura;

                //construtor
                public function __construct($altura = 1, $largura = 1)
                {
                    $this->altura = $altura;
                    $this->largura = $largura;
                }

                //métodos
                public function getAltura()
                {
                    return $this->altura;
                }

                public function setAltura($altura)
                {
                    $this->altura = $altura;
                }

                public function getLargura()
                {
                    return $this->largura;
                }

                public function setLargura($largura)
                {
                    $this->largura = $largura;
                }

                public function calcPerimetro()
                {
                    return 2 * $this->altura + 2 * $this->largura;
                }

                public function calcArea()
                {
                    return $this->largura * $this->altura;
                }

                public function ehQuadrado()
                {
                    return $this->altura == $this->largura;
                }
            }

            $meuRetangulo = new Retangulo();
            echo "Área do Retangulo: " . $meuRetangulo->calcArea();
            echo "<br>";
            if ($meuRetangulo->ehQuadrado()) {
                echo "O retângulo é um quadrado!!!";
            } else {
                echo "O Retângulo não é um quadrado!!!";
            }
            ?>
        </div>
    </div>
</body>

</html>