<?php


/**
 * criar por meio de objetos as operaçoes matematicas + - * /
 */


 Class Calculadora {

    public $resultado = 0;

    public function somar($valor1, $valor2){
        $this->resultado = $valor1 + $valor2;
    }
    
    public function subtrair($valor1, $valor2){
        $this->resultado = $valor1 - $valor2;
    }

    public function multiplicar($valor1, $valor2){
        $this->resultado = $valor1 * $valor2;
    }

    public function dividir($valor1, $valor2){
        $this->resultado = $valor1 / $valor2;
    }
    public function __toString()
    {
        return $this->resultado;
    }
 }
 
 $calculadora = new Calculadora();

 $calculadora->somar(10, 10);
 echo $calculadora->$resultado;

 echo "<br>";

// $calculadora->dividir(10, 10);
// echo $calculadora->resultado;

echo $calculadora;



/**
 * Criar uma classe/Objeto que representa um banco
 * esta classe devera ter as operacoes basicas, como:
 * Saque, Deposito, Extrato e transferencia
 * 
 * Tambem devera, fazer as devidas validaçoes para cada operaçao
 */

class Banco{

    public $saldo = 100;
    private $extrato;

    function saque($valor, $saldoAtual) {
    
        if( $valor <=0 || $valor == ""){
            return "<br>O valor do saque é maior que o seu saldo atual <br>";
        }
    
        if($valor > $saldoAtual){
            return "<br>O valor do saque é maior que o seu saldo atual <br>";
        }
    
        $this->saldo -= $valor;
    }

    function deposito($valor, $saldoAtual){

    $valor = preg_replace('/[^0-9]/', '', $valor);

    if (($valor <=0 || $valor == "") ) {
        return "<br>O valor do deposito deve ser positivo<br>";    
    }

    $this->saldo += $valor;
}
function extrato($valor, $saldoAtual){

    if($valor == $saldoAtual){
        return $saldoAtual;
    }
}

}
