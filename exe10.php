<?php

class Carro {

    private $modelo;
    private $consumo;
    private $tanque;

    public function __construct($modelo, $consumo = 10, $tanqueInicial = 0) {
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicial;
    }

    public function abastecer($litros) {

        if ($litros > 0) {
            $this->tanque += $litros;

            echo "Foram abastecidos $litros litros de combustível!<br>";
        } else {
            echo "Erro: informe uma quantidade positiva de litros!<br>";
        }
    }

    public function dirigir($km) {

        if ($km <= 0) {
            echo "Erro: informe uma distância válida!<br>";
            return;
        }

        $combustivelNecessario = $km / $this->consumo;

        if ($combustivelNecessario <= $this->tanque) {

            $this->tanque -= $combustivelNecessario;

            echo "Viagem realizada com sucesso!" . "<br>";
            echo "Distância percorrida: $km km" . "<br>";

        } else {

            echo "Não há combustível suficiente para percorrer $km km!<br>";
        }
    }

    public function exibirInfo() {

        echo "Modelo: " . $this->modelo . "<br>";
        echo "Consumo: " . $this->consumo . " km/L<br>";
        echo "Combustível no tanque: " . $this->tanque;
    }
}

$carro= new Carro('Honda Civic', 12,20);
$carro->exibirInfo();
$carro->dirigir(60);
$carro->abastecer(10);
$carro->exibirInfo();
