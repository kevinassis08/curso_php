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

function addMaskCPF($cpf){
    $cpfMascarado = "";
    $maskCPF = "###.###.###-##";

    $a=0;
    
    for ($i=0; $i <= strlen($maskCPF); $i++){
            
        if($maskCPF[$i] == '#'){    
            $cpfMascarado .= $cpf[$a]; // 056.552.020-26
            $a++;
        } else {
            $cpfMascarado .= $maskCPF[$i]; // 056.552.020-
        }
    
    }

    return $cpfMascarado;
}

$cpfMascarado = addMaskCPF($cpf);
echo $cpfMascarado;

$cpf = "05655202026";

$cpfvalido = validcpf($cpf);
$cpf = preg_replace('/[^0-9]/', '', $cpf);


if($cpfvalido){
    echo "O CPF: $cpf é valido.";
}else {
    echo "O CPF: $cpf é invalido.";
}
 


                               //CNPJ

function validCnpj($cnpj) {
    // Remove caracteres não numéricos
    $cnpj = preg_replace('/[^0-9]/', '', $cnpj);

    // Verifica se o CNPJ tem 14 dígitos
    if (strlen($cnpj) != 14) {
        return false;
    }

    // Verifica se todos os dígitos são iguais
    if (preg_match('/(\d)\1{13}/', $cnpj)) {
        return false;
    }

    // Calcula o primeiro dígito verificador
    $soma = 0;
    $multiplicador = [5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
    for ($i = 0; $i < 12; $i++) {
        $soma += $cnpj[$i] * $multiplicador[$i];
    }
    $resto = $soma % 11;
    $digito1 = ($resto < 2) ? 0 : 11 - $resto;

    if ($cnpj[12] != $digito1) {
        return false;
    }

function addMaskCNPJ($cnpj){
    $cnpjMascarado= "";
    $maskCPNJ = "##.###.###/####-##";
    $c = 0;
    
    for ($i=0; $i <= strlen($maskCPNJ); $i++){
            
        if($maskCPNJ[$i] == '#'){    
            $cnpjMascarado .= $cnpj[$c];
            $c++;
        } else {
            $cnpjMascarado .= $maskCPNJ[$i]; 
        }
    
    }

    return $cnpjMascarado;
}



    // Calcula o segundo dígito verificador
    $soma = 0;
    $multiplicador = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];
    for ($i = 0; $i < 13; $i++) {
        $soma += $cnpj[$i] * $multiplicador[$i];
    }
    $resto = $soma % 11;
    $digito2 = ($resto < 2) ? 0 : 11 - $resto;

    return $cnpj[13] == $digito2;
}

$maskCPNJ = "##.###.###/####-##";
$cnpj = '11.444.777/0001-61'; //'11.444.777/0001-61'
$cnpj = preg_replace('/[^0-9]/', '', $cnpj);

$cnpjvalido = validcnpj($cnpj);



if($cnpjvalido) {
    echo "<br>O CNPJ: $cnpj é valido.";
} else {
    echo "<br>O CNPJ: $cnpj é inválido";
}
 if ($cpfValido) {
    echo "O CPF: $cpf é Valido";
 }else{
    echo "O CPF: $CPF É invalido";
 }
