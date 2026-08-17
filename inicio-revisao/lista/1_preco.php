<?php

$produto = readline("Digite o valor do produto: ");
if($produto >= 200){
    $desconto = $produto*0.1;
    $valorTotal = $produto - $desconto;
    echo "O valor total a ser pago será $valorTotal reais, com $desconto reais de desconto.";
}
else{
    echo "O valor total a ser pago é $produto";
}

?>