<?php 
$idade = 19;
$temDocumento = true;

if($idade > 17 && $temDocumento){
    echo "Pode tirar a carta de motorista";
}else{
    echo "Não pode tirar a carteira de motorista";
}

if($idade > 17 || $temDocumento){
    echo "Pode tirar a carta de motorista";
}else{
    echo "Não pode tirar a carteira de motorista";
}

if(!$idade > 17 || !$temDocumento){
    echo "Pode tirar a carta de motorista";
}else{
    echo "Não pode tirar a carteira de motorista";
}
?>