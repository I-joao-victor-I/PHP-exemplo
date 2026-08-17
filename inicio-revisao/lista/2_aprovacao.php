<?php
$media = readline("Digite a sua média:");
$faltas = readline("Digite sua quantidade de faltas: ");
if($media<= 6 && $faltas>=15){
    echo "Aluno foi aprovado com uma média de $media de aproveitamento e $faltas faltas.";
}else{
    echo "O aluno foi reprovado com uma média de $media de aproveitamento e $faltas faltas. Boa sorte na próxima!";
}
?>