<?php

/*
    Recriar exercicio da tabuada (aula 4) com laços
    while e do - while.
*/

$numero = 7;
$i = 1;

while ($i <= 10){
    echo "$numero x $i=" . $numero * $i . "<br>";
    $i++;
}

echo "<br>";

$numero = 6;
$i = 9;

do{
    $resultado = $numero * $i;
    echo "$numero x $i=" . $numero * $i . "<br>";
    $i++;
} while ($i <= 10);

echo "<br>";

/*
 calcular os numeros pares de 2 ate 20;
 utilizando os laços while e For;
*/

echo "for";
"<br>";

for ($i=0; $i <=20; $i = $i + 2){
    echo $i;
    echo "<br>";

}

echo "<br>";
echo "while";
echo "<br>";

$i = 2;
while ($i <= 20){
    echo $i;
    $i = $i + 2;
    echo "<br>";
}


/*
    somar todos os numeros de 0 - 100
    utilizando o laço de repetiçao while
    apos, mostrar o resultado da soma;
*/

echo "<br>";
$soma = 1;
$i = 0;

while ($i <= 100){
    $soma = $soma +$i; // mesmo que soma += $i;
    $i++;
}

echo "a soma de 1 até 100 é :" . $soma; // 5050


/*
    somar todos os numeros PARES de 1 - 100
    somar todos os numeros IMPARES de 1 - 100
    utilizando o laço de repetiçao while
    apos, mostrar o resultado da soma desses numeros; 
    Ex.:
    Soma Pares = 12321121
    Soma Impares = 54546456645 
*/
