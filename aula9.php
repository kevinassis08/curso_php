<?php

function imprimir() {
    $abc = 20;

    return $abc;
}

$resultado = imprimir();

echo $resultado;

function tabuada($tabuada) {

    for($tabuada=1; $tabuada <= 10; $tabuada++) {
        echo "<br> Tabuada do $tabuada <br>";
     // Inicia o laço interno para multiplicar a tabuada por 0-10   
    for($n=0; $n <=10; $n++){
        echo "$tabuada x $n = " . $tabuada*$n . "<br>";
        }
    
    }  


}

echo tabuada ($tabuada);

/*
 * Criar uma calculadora utilizando funçoes, recebendo 2 numeros como parametro.
 * 
 * Operaçoes: + - * /
 * 
 * retornar o valor para o usuario, salvar em uma outra variavel e exibir este valor
 */

/*echo "<br>";
 $numero1 = 6;
 $numero2 = 6;

function adiçao($numero1 , $numero2){
    return $numero1 + $numero2;
}

$resultado = adiçao($numero1 , $numero2);
echo"adiçao ".$resultado;

echo "<br>";

function subtraçao($numero1 , $numero2){
   return $numero1 - $numero2;
}

$resultado = subtraçao($numero1 , $numero2);
echo "subtraçao " .$resultado;

echo "<br>";

function multiplicaçao($numero1 , $numero2){
   return $numero1 * $numero2;
}

$resultado = multiplicaçao($numero1 , $numero2);
echo  "multiplicaçao ".$resultado;

echo "<br>";

function divisao($numero1 , $numero2){
    return $numero1 / $numero2;
 }
 
 $resultado = divisao($numero1 , $numero2);
 echo  "divisao ".$resultado;

echo "<br>";

$total = 100;
$parcial = 10;

function porcentual( $parcial , $total ){
    return ($parcial * 100) / $total;   

}

$resultado = porcentual($total, $parcial);
echo $resultado;
*/
echo "<br>";

function calculadora($valor1, $operador, $valor2){
$resultado = 0;
    if ($operador == "%"){
    $resultado = $valor1 *$valor2 /100;
}
    return $resultado;
}

$valor1 = 100;
$operador = "%";
$valor2 = 10;

echo "O resultado de: $valor1 $operador $valor2 = $resultado";


/**
 * UTILIZAR FUNCOES
 * Crie um sistema bancario contendo as seguintes operacoes:
 * 
 * Deposito, Saque, Extrato(saldo)
 * 
 */


function banco($operacao, $saldoAtual){

    $saldo = $saldoAtual;

    if($operacao == "extrato") {

    }
    return $saldo;
}

$saldoAtual = 50;
$valor = 100;
$operacao = "deposito";

$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "Extrato: $valor $operacao = $saldoAtual<br>";

