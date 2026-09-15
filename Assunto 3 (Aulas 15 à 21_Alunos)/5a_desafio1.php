<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro +18</title>
</head>

<body>
    <form method="POST" action="">
        <label for="nome">Insira seu nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="data">Insira seu ano de nascimento:</label>
        <input type="number" id="data" name="data" min="1900" max="<?= date('Y') ?>" required>

        <button type="submit">Cadastrar</button>
    </form>
</body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = htmlspecialchars($_POST["nome"]);
    $data = (int)$_POST["data"];
    $anoAtual = (int)date('Y');
    $idade = $anoAtual - $data;

    if ($idade >= 18) {
        echo "<h2>Acesso permitido, $nome! Idade atual: $idade anos.</h2>";
        
        $arquivo = fopen("log_acessos.txt", "a");
        $registro = $nome . ";" . $idade . "\n";
        fwrite($arquivo, $registro);
        fclose($arquivo);
    } else {
        echo "<h2>Acesso negado, $nome. Sua idade atual é: $idade anos. Retorne quando tiver 18 anos ou mais.</h2>";
    }

    echo '<meta http-equiv="refresh" content="5;url=' . $_SERVER['PHP_SELF'] . '">';
}
?>

</html>