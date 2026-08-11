<?php
$frutas = ["Maçã", "Banana", "Uva"];

foreach ($frutas as $indice => $frutas) {
    echo "posição $indice: $frutas\n";
}

$matriz = [
    "Jorje ALencar",
    "Daniel Hartman",
    "Arthur Cervero",
    "Cesar Cohen",
    "Dante",
    "Arnaldo Fritz",
    "Verissimo",
    "Lupi",
    "Mia"
];
echo "</br>";
echo "Melhores personagens de ordem";

foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo $piloto . "|";
    }
    echo "</br>";
}
