<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com validação</title>
</head>

<body>
    <form method="post" action="">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome" required> <br>

        <label for="email">email:</label><br>
        <input type="email" name="email" required> <br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea name="mensagem"></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    if (!empty($nome) && !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($mensagem)) {
        echo "<p style='color: Darkgreen'>Feedback enviado com sucesso!</p>";
    } else{
        echo "<p style = 'color: red'>Preencha todos os campos corretamente</p>";
    }
}
 ?>
</html>