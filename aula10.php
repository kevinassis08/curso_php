<?php

function banco($valor, $operacao, $saldoAtual) {

    $saldo = $saldoAtual;

    if ($operacao == "extrato") {
        return $saldo;
    }

    if( $operacao == "saque" && ($valor <=0 || $valor == "")){
        return "<br>O valor do saque é maior que o seu saldo atual <br>";
    }

    if( $operacao == "saque" && $valor > $saldoAtual){
        return "<br>O valor do saque é maior que o seu saldo atual <br>";
    }

    if ($operacao == "saque") {
        // $saldo = $saldo - $valor;
        $saldo -= $valor;
    }


    if($operacao == "deposito" && ($valor <=0 || $valor == "") ){
        return "<br>O valor do deposito deve ser positivo<br> ";    
    }

    if ($operacao == "deposito") {
        // $saldo = $saldo + $valor;
        $saldo += $valor;
    }

    return $saldo;
}

//saldo
$saldoAtual = 500; // tem um valor inicial de 500.
echo "Valor inicial: $saldoAtual<br>";

//deposito
$valor = 300; // 0 || ''
$operacao = "deposito";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>";

//saque
$valor = 200;
$operacao = "saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual); // 400, saque, 300
echo "$operacao = $valor, Extrato: $saldoAtual<br>"; // 400

/*$valor = 600;
$operacao = "saque";
$saldoAtual = banco($valor, $operacao, $saldoAtual);
echo "$operacao = $valor, Extrato: $saldoAtual<br>";*/

// validar para não ter deposito vazio.
// não pode sacar mais que tem na conta.



/**
 * Criar duas funcoes onde cada uma recebe um parametro
 * e retorna um valor boolean (true || false, 0 || 1)
 * Objetivo: Validar CPF, CNPJ
 *
 * Sugestao/dica para o nome da funcao: isValidCPF, isValidCNPJ.
 *  
 */

 function isValidCPF($CPF) {

    //CODIGO AQUI

    return true;
 }

 function isValidCNPJ($Cnpj) {

    //CODIGO AQUI

    return true;
 }

 $cpfValido = isValidCPF($cpf); // true = 1, false =

 if ($cpfValido) {
    echo "O CPF: $cpf é Valido";
 }else{
    echo "O CPF: $CPF É invalido";
 }