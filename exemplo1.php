<?php
class ContaBancaria{
    private string $Titular;
    private float $Saldo;

    public function __construct($Titular, $Saldo){
        $this->Titular = $Titular;
        $this->Saldo = $Saldo;
    }
    public function exibirTitular(){
        echo "Nome: " . $this->Titular;
    }
    public function alteraTitular($novoNome){
        $this->Titular = $novoNome;
    }
    public function exibirSaldo(){
        echo "<br> Saldo: " . $this->Saldo;
    }
    public function depositarSaldo($valor){
        $this->Saldo += $valor;
    }
    public function sacarSaldo($valor){
        if($valor > $this->Saldo){
            echo "não pode sacar esse valor";
        }else{
            $this->Saldo -= $valor;
        }
    }
}
$conta1 = new ContaBancaria("Samuel", 1000);
// $conta1->Titular = "luiz";
$conta1->exibirTitular();
$conta1->alteraTitular("luiz");
$conta1->exibirTitular();
$conta1->exibirSaldo();
$conta1->depositarSaldo(100);
$conta1->exibirSaldo();
$conta1->sacarSaldo(400);
$conta1->exibirSaldo();
?>
