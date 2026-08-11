<?php
//http:\\localhost/php-exemplos-basico/2_opera_variaveis.php?numero1=10&numero2=5

//recebe os valores
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

//verifica se os valores foram passados corretamente = a fução do php isset faz isso
if (isset($numero) && isset($numero2)) {
    $numero1 = (int)$numero1;
    $numero2 = (int)$numero2;

    $soma = $numero1 + $numero2;
    $subtracao = $numero1 - $numero2;
    $multiplicacao = $numero1 * $numero2;
    $divisao = $numero1 / $numero2;

    echo "Soma: $soma";
    echo "Subtração: $subtracao";
    echo "Multiplicação: $multiplicacao";
    echo "Divisão: $divisao";
}else{
    echo "Por favor, forneça os valores de numero1 e numero2 pela URL.";
}