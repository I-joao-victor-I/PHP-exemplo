<?php
$frutas = ["Maçã", "Banana", "Uva"];

foreach ($frutas as $indice => $frutas) {
    echo "posição $indice: $frutas\n";
}

$matriz = [
    ["Balu", "Daniel Hartman", "Arthur Cervero"],
    ["Cesar Cohen", "Dante", "Arnaldo Fritz"],
    ["Verissimo", "Lupi", "Mia"]
];

echo "Melhores personagens de Ordem:\n";

foreach ($matriz as $linha) {
    foreach ($linha as $agente) {
        echo $agente . "|";
    }
    echo '\n';
}
