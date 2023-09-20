<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
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
    class Carro {
        private $consumo; 
        private $combustivel; 
    
        public function __construct($consumo) {
            $this->consumo = $consumo;
            $this->combustivel = 0;
        }
    
        public function andar($distancia) {
            $combustivelConsumido = $distancia / $this->consumo;
    
            if ($combustivelConsumido <= $this->combustivel) {
                $this->combustivel -= $combustivelConsumido;
                echo "<br>Você dirigiu $distancia km. <br>Nível de combustível restante: {$this->combustivel} litros <br>";
            } else {
                echo "<br>Não há combustível suficiente para essa viagem.";
            }
        }
    
        public function getCombustivel() {
            return $this->combustivel;
        }
    
        public function setCombustivel($quantidade) {
            $this->combustivel += $quantidade;
        }
    }
    
    $meuCarro = new Carro(10);
    echo "<br>Nível de combustível inicial: {$meuCarro->getCombustivel()} litros";
    
    $meuCarro->setCombustivel(50); 
    echo "<br>Nível de combustível após abastecer: {$meuCarro->getCombustivel()} litros<br>";
    
    $meuCarro->andar(200); 
    $meuCarro->andar(100); 
      
    ?>
</div>
</div>
</body>
</body>
</html>