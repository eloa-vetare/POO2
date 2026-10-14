<?php

class Produto{
    private string $nome;
    private float $preco;
    private int $estoque;

    public function __construct($valor1,$valor2,$valor3){
        $this->nome= $valor1;
        $this->preco= $valor2;
        $this->estoque= $valor3;
    }

    public function vender($quantidade){
        if($quantidade > 0 && $quantidade <= $this->estoque){
            $this->estoque -= $quantidade;
            echo "Sucesso!" . "<br>";
        }else{
            echo "Estoque insuficiente" . "<br>";
        }
    }

    public function reajustarPreco($percentual){

        $this->preco += $this->preco * ($percentual / 100);

        echo "Reajustado com sucesso!" . "<br>";
    }

    public function exibirInfo(){
        echo "Nome: " . $this->nome . "<br>";
        echo "Preco: " . $this->preco . "<br>";
        echo "Estoque: " . $this->estoque . "<br>";
    }
}

$produto = new Produto("Caderno", 20.00, 10);

$produto->vender(3);

$produto->reajustarPreco(10);

$produto->exibirInfo();
