<?php

/* utilizar o laço de repetiçao FOR
para cria a tabuada do numero informado pelo usuario.
Ex: usuario informou o numero 4, fazer a tabuada do 4,
usuario informou o 9, fazer tabuada do 9 e assim por diante.
*/

$numero = 9; // numero informdo pelo usuario

for ($i = 1; $i <= 9 ; $i++) {
    echo "$numero x $i =" . $numero * $i . "<br>";
}

?>
