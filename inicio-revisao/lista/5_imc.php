<?php
$peso = readline("Digite o seu peso:");
$altura = readline("Digite sua altura:");
$imc = $peso / $altura^2;

if ($imc < 18.5) {
    echo "O seu IMC é de: magreza estrema, sendo $imc";
} if ($imc > 18.5 && $imc < 24.9) {
    echo "O seu IMC é de: peso normal, sendo $imc";
} if ($imc > 25 && $imc <29.9){
    echo "O seu IMC é de: pré-obesidade, sendo $imc";
} if ($imc > 30 && $imc <34.9){
    echo "O seu IMC é de: obesidade grau I, sendo $imc";
} if($imc > 35 && $imc < 39.9){
    echo "Seu IMC é de: obesidade grau II, sendo $imc";
} if($imc > 40){
    echo "Seu IMC é de: obesidade grau III (obesidade grave ou mórbida), sendo $imc";
}
?>