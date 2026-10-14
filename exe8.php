<?php

class Funcionario{
    private string $nome;
    private float $salario;

    public function __construct($nome,$salario= 1000){
        $this->nome= $nome;
        $this->salario= $salario;

    }

    public function aumentarSalario($percentual){
        if ($percentual > 0 && $percentual <= 10){
            $this->salario += $this->salario * ($percentual / 100);

            echo 'Salário aumentado!' . "<br>";
        }else{
            echo 'Erro: p percentual deve sewr maior que zero'. "<br>";
        }
    }
    
    public function exibirSalario(){
        echo 'Nome: ' . $this->nome . "<br>";
        echo 'Salario: ' . $this->salario;
    }
}

$funcionario= new Funcionario('Eloá', 3000);
$funcionario->aumentarSalario(10);
$funcionario->exibirSalario();