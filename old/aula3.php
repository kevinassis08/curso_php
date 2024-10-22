<?php
$nome = "roberto";
$sobrenome = "carlos";
echo "Olá ".$nome." ".$sobrenome."<br>";

echo strlen($nome);
echo "<br>";
echo strlen($sobrenome);
echo "<br>";
echo strlen($nome." ".$sobrenome);
echo "<br>";

echo strtoupper($nome);
echo "<br>";
echo strtoupper($sobrenome);
echo "<br>";

echo strtolower("TEXTO CAIXA ALTA");
echo "<br>";
echo strrev("amor");
echo "<br>";

echo "tudo sobre a data atual<br>";
echo date("d/m/Y");
echo "<br>";
echo date("H:i:s");
echo "<br>";
echo date("d/m/Y H:i:s A");
echo "<br>";
echo date("w");//0 Domingo - 6 sábado
// Crie uma variavel para armazenar o valor da função date(w)
// Utilize IF para validar qual é o dia da semana e exibir para o usuario
// O usuario, sendo que 0 é domingo, e 6 é sabado


$Diadasemana = date("w");
echo "<br>";

if($Diadasemana == 0){
    echo "hoje é domingo";
}
elseif($Diadasemana == 1){
    echo "hoje é segunda";
}
elseif($Diadasemana == 2){
    echo "hoje é terça feira";
}
elseif($Diadasemana == 3){
    echo "hoje é quarta feira";
}
elseif($Diadasemana == 4){
    echo "hoje é quinta feira";
}
elseif($Diadasemana == 5){
    echo "hoje é sexta feira";
}
elseif($Diadasemana == 6){
    echo "hoje é sexta feira";
}
echo "<br>";

switch ($Diadasemana) {
    case 0:
        echo "é domingo;";
        break;
    case 1:
        echo "é segunda";
        break;
    case 2:
        echo "é terça";
        break;
    case 3:
        echo "é quarta";
        break;
    case 4:
        echo "é quinta";
        break;
    case 5:
        echo "é sexta";
        break;
    case 6:
        echo "é sabado";
        break;
    default:
    // Se chegou aqui foi porque nao 'casou' com nenhum valor
        break;
        
}

echo "<br>laços<br>";
for ($i=0; $i < 10 ; $i++) {
    echo $i. "<br>";
}

?>