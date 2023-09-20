<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
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
                class Data
                {
                    private $dia;
                    private $mes;
                    private $ano;

                    public function __construct($dia = 0, $mes = 0, $ano = 0)
                    {
                        $this->dia = $dia;
                        $this->mes = $mes;
                        $this->ano = $ano;
                    }

                    public function getDia()
                    {
                        return $this->dia;
                    }

                    public function setDia($dia)
                    {
                        $this->dia = $dia;
                    }

                    public function getMes()
                    {
                        return $this->mes;
                    }

                    public function setMes($mes)
                    {
                        $this->mes = $mes;
                    }

                    public function getAno()
                    {
                        return $this->ano;
                    }

                    public function setAno($ano)
                    {
                        $this->ano = $ano;
                    }
                    
                    public function incrementarDia()
                    {
                        $diasNoMes = $this->diasNoMes();

                        if ($this->dia < $diasNoMes) {
                            $this->dia++;
                        } else {
                            $this->dia = 1;
                            if ($this->mes < 12) {
                                $this->mes++;
                            } else {
                                $this->mes = 1;
                                $this->ano++;
                            }
                        }
                    }

                    public function decrementarDia()
                    {
                        if ($this->dia > 1) {
                            $this->dia--;
                        } else {
                            if ($this->mes > 1) {
                                $this->mes--;
                                $this->dia = $this->diasNoMes();
                            } else {
                                $this->mes = 12;
                                $this->ano--;
                                $this->dia = $this->diasNoMes();
                            }
                        }
                    }

                    private function diasNoMes()
                    {
                        return date('t', strtotime("{$this->ano}-{$this->mes}-01"));
                    }

                    public function dataComoString()
                    {
                        return sprintf('%02d/%02d/%04d', $this->dia, $this->mes, $this->ano);
                    }

                    public function ehAnoBissexto()
                    {
                        return (($this->ano % 4 == 0 && $this->ano % 100 != 0) || $this->ano % 400 == 0);
                    }

                    public function subtrairData(Data $outraData)
                    {
                        $data1 = gregoriantojd($this->mes, $this->dia, $this->ano);
                        $data2 = gregoriantojd($outraData->getMes(), $outraData->getDia(), $outraData->getAno());
                        return abs($data1 - $data2);
                    }

                    public function compararData(Data $outraData)
                    {
                        if ($this->ano == $outraData->getAno()) {
                            if ($this->mes == $outraData->getMes()) {
                                if ($this->dia == $outraData->getDia()) {
                                    return 0; // se as datas são iguais
                                } elseif ($this->dia > $outraData->getDia()) {
                                    return 1; // se a data corrente é maior que a data do parâmetro
                                }
                            } elseif ($this->mes > $outraData->getMes()) {
                                return 1; // se a data corrente é maior que a data do parâmetro
                            }
                        } elseif ($this->ano > $outraData->getAno()) {
                            return 1; // se a data corrente é maior que a data do parâmetro
                        }

                        return -1; // se a data do parâmetro é maior que a data corrente
                    }

                }

                $data1 = new Data(10, 9, 2024);
                $data2 = new Data(15, 9, 2023);
            
                echo "<br><br>";
                echo "<br><br>";

                echo "Data 1: " . $data1->dataComoString() . "<br>";
                echo "Data 2: " . $data2->dataComoString() . "<br>";

                echo "<br>Diferença em dias entre Data 1 e Data 2: " . $data1->subtrairData($data2) . " dias<br>";
                echo "Comparação entre Data 1 e Data 2: " . $data1->compararData($data2) . "<br>";

                $data1->incrementarDia();
                echo "<br>Data 1 após incrementar um dia: " . $data1->dataComoString() . "<br>";
                $data1->decrementarDia();
                echo "Data 1 após decrementar um dia: " . $data1->dataComoString() . "<br>";
                $data1->decrementarDia();
                echo "Data 1 após decrementar um dia: " . $data1->dataComoString() . "<br>";

                $data2->incrementarDia();
                echo "<br>Data 2 após incrementar um dia: " . $data2->dataComoString() . "<br>";
                $data2->decrementarDia();
                echo "Data 2 após decrementar um dia: " . $data2->dataComoString() . "<br>";
                $data2->decrementarDia();
                echo "Data 2 após decrementar um dia: " . $data2->dataComoString() . "<br>";

                if ($data1->ehAnoBissexto()) {
                    echo "<br>A data 1 representa um ano bissexto.<br>";
                } else {
                    echo "<br>A data 1 não representa um ano bissexto.<br>";
                }

                if ($data2->ehAnoBissexto()) {
                    echo "A data 2 representa um ano bissexto.<br>";
                } else {
                    echo "A data 2 não representa um ano bissexto.<br>";
                }
                ?>
            </div>
        </div>
    </body>
</body>

</html>