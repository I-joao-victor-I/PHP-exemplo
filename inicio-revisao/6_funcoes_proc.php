<?php
//exemplo de função
function somar(float $a, float $b): float
{
    return $a + $b;
}

echo somar(4.5, 5.9);
echo "\n";

//exemplo de procedimento
function saudacao(string $nome){
    echo"Olá $nome! bem vindo(a)!";
}
saudacao("Maria");