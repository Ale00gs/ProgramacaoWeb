<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
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
    class Data {
        public $dia;
        public $mes;
        public $ano;
    
        public function __construct($dia, $mes, $ano) {
            $this->dia = $dia;
            $this->mes = $mes;
            $this->ano = $ano;
        }
    }
    
    class Voo {
        private $numero_voo;
        private $data;
        private $assentos_ocupados;
    
        public function __construct($numero_voo, $data) {
            $this->numero_voo = $numero_voo;
            $this->data = $data;
            $this->assentos_ocupados = array();
        }
    
        public function getProximoAssento() {
            for ($assento = 1; $assento <= 100; $assento++) {
                if (!in_array($assento, $this->assentos_ocupados)) {
                    return $assento;
                }
            }
            return null;  // Se todos os assentos estão ocupados
        }
    
        public function verificaAssento($assento) {
            return in_array($assento, $this->assentos_ocupados);
        }
    
        public function ocupa($assento) {
            if (!in_array($assento, $this->assentos_ocupados)) {
                $this->assentos_ocupados[] = $assento;
                return true;  // Se o assento ocupado com sucesso
            } else {
                return false;  // Se o assento já está ocupado
            }
        }
    
        public function getVagas() {
            return 100 - count($this->assentos_ocupados);
        }
    
        public function getVoo() {
            return $this->numero_voo;
        }
    
        public function getDataVoo() {
            return $this->data;
        }
    }
   
    echo "<br><br>";
    echo "<br><br>";
    $data_voo = new Data(19, 9, 2023);
    $voo1 = new Voo("ABC123", $data_voo);
    
    echo "Número do voo: " . $voo1->getVoo() . "<br>";
    echo "Data do voo: " . $voo1->getDataVoo()->dia . "/" . $voo1->getDataVoo()->mes . "/" . $voo1->getDataVoo()->ano . "\n";
    
    $assento1 = $voo1->getProximoAssento();
    if ($assento1 !== null) {
        echo "<br>Próximo assento livre: " . $assento1 . "\n";
    } else {
        echo "<br>Todos os assentos estão ocupados\n";
    }
    
    echo "<br>Vagas disponíveis: " . $voo1->getVagas() . "\n";
    
    if ($voo1->ocupa(10)) {
        echo "<br>Assento 10 ocupado com sucesso!\n";
    } else {
        echo "<br>Assento 10 já está ocupado\n";
    }
    
    if ($voo1->verificaAssento(10)) {
        echo "<br>Assento 10 está ocupado\n";
    } else {
        echo "<br>Assento 10 está livre\n";
    }
    
    echo "<br>Vagas disponíveis: " . $voo1->getVagas() . "\n";
     
    ?>
</div>
</div>
</body>
</body>
</html>