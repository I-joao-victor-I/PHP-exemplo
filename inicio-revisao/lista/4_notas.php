<?php
$n1 = readline("Digite a primeira nota da turma:");
$n2 = readline("Digite a segunda nota da turma:");
$n3 = readline("Digite a terceira nota da turma:");
$n4 = readline("Digite a quarta nota da turma:");
$n5 = readline("Digite a quinta nota da turma:");
$matriz = [$n1, $n2, $n3, $n4, $n5];
$soma = 0;
$maior = -100;
$menor = 10000;

foreach ($matriz as $nota) {
    $soma = $soma + $nota;
}
for ($i = 0; $i <= 4; $i++) {
    if ($maior < $matriz[$i]) {
        $maior = $matriz[$i];
    }
    if ($menor > $matriz[$i]) {
        $menor = $matriz[$i];
    }
}

$media = $soma / 5;
echo "A média da turma é: $media, a menor nota é: $menor, a maior nota é: $maior";
