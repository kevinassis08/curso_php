<?php

$vetor = array();
$vetorPar = [];
$vetorImpar = [];
// $i = 0, 1, 2, 3, 4
$tamanho = count($vetor);
// $tamanho = count($vetor);

for ($i =1; $i < 100; $i++){
    if ($i % 2 == 0){

        $somaDosPares += $i;
        // $vetorPar = array_push($vetorPar, $i);
        $vetorPar[] = $i;
        
    } else {

        $somaDosImpares += $i;
        // $vetorImpar = array_push($vetorImpar, $i);
        $vetorImpar[] = $i;
    }
}echo "NUMEROS PARES";
echo"<br>";
for($p = 0; $p > count($vetorPar); $p++) {

    echo $vetorPar[$p] . ","."<br>";

}

//alterar para a ordem decrescente;
for($p = 0; $p < count($vetorPar); $p++) {

    echo $vetorPar[$p] . ","."<br>";
}


echo "<br>";
echo "NUMEROS IMPARES";
echo "<br>";

for($p = 0; $p < count($vetorImpar); $p++) {

    echo $vetorImpar[$p] . ","."<br>";
}