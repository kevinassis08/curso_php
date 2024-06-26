<?php

$nome = "kevin";
$idade = 18;
$cidade = "Bento Gonçalves";
echo "Seja bem vindo $nome à sua cidade $cidade";

echo "<br>";

if ($idade >= 18){
    echo "o $nome é maior de idade!";
}else{
    echo "O $nome, não pode dirigir carros!";
}

echo "<br>";
echo "super calculadora avançada da NASA 4.0";
echo "<br>";
$valorA = 40;
$valorB = 2;
$operacao = "divisao";
$resultado="";

if($operacao == "soma" || $operacao == "adicao" || $operacao == "mais" ){
    $resultado = $valorA + $valorB;
}elseif($operacao == "subtrair" || $operacao == "menos"){
    $resultado = $valorA - $valorB;
}elseif($operacao == "multiplicar" || $operacao == "vezes"){
    $resultado = $valorA * $valorB;
}elseif($operacao == "dividir" || $operacao == "divisao"){
    $resultado = $valorA / $valorB;
}else{
    echo "somente são aceitos os seguintes parametros<br>
    soma<br>
    subtrair<br>
    multiplicar<br>
    divir<br>";
}

if($resultado != ""){
echo "A operacao escolhida foi $operacao com os valores $valorA e $valorB e o resultado obtido é $resultado.";
}


echo "<br>";

// Testa se a pessoa pode fazer a carteira de motorista
// Precisa ser maior de 18 anos, e ter mais de R$ 1.000,00 na carteira
$idadePessoa=17;
$dinheiroNaCarteira=1000;


if($idadePessoa >= 18 && $dinheiroNaCarteira >= 1000){
    echo "parabéns, você pode fazer a carteira de motorista";
}
elseif($idadePessoa <= 17 && $dinheiroNaCarteira <= 1000){
    echo "voce nao pode fazer";
}
elseif($idadePessoa >= 18 && $dinheiroNaCarteira <= 900){
    echo "voce nao tem dinheiro suficiente na carteira";
}

//falta fazer a validação da idade e do dinheiro
//se não tiver idade informar que precisa ser maior de 18
//se não tiver dinheiro precisa informar o valor de 1k
//se não tiver idade e nem dinheiro informar.


?>