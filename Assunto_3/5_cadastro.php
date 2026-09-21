<?php
// Processamento do formulário no TOPO do arquivo (antes de qualquer HTML)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe e limpa os valores
    $nome = trim($_POST["nome"] ?? '');
    $senha = trim($_POST["senha"] ?? '');

    if (!empty($nome) && !empty($senha)) {
        // Abre o arquivo para acrescentar dados ("a")
        $arquivo = fopen("usuario.txt", "a");

        // Cria a linha com nome e senha separados por ;
        $linha = $nome . ";" . $senha . "\n";

        // Escreve no arquivo e fecha
        fwrite($arquivo, $linha);
        fclose($arquivo);

        // Redireciona para evitar reenvio do formulário ao atualizar a página
        header('Location: ' . $_SERVER['PHP_SELF'] . '?sucesso=1');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>

<body>
    <!-- Mensagem de sucesso (Feedback visual) -->
    <?php if (isset($_GET['sucesso'])): ?>
        <p style="color: green; font-weight: bold;">Usuário cadastrado com sucesso!</p>
        <?php header('Refresh: 5; url=' . $_SERVER['PHP_SELF']); ?>
    <?php endif; ?>

    <form method="post" action="">
        <!-- Campo Nome -->
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <br><br>

        <!-- Campo Senha -->
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>

        <br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>