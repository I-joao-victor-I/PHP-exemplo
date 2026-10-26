<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuários</title>
</head>

<body>
    <form method="post" action="">
        <label for="usuario">Usuário:</label>
        <input type="text" name="usuario" id="usuario" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" required><br>

        <button type="submit">Cadastrar</button>
    </form>
    
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // baguio pra conectar
        $servername = "localhost";
        $username = "root";
        $password = "Senai@118";
        $dbname = "exercicio";

        // conecta ao mysql
        $conn = new mysqli($servername, $username, $password);

        // verifica a conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }
        // cria o banco
        $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
        $conn->query($sql);
        // seleciona o banco de dados
        $conn->select_db($dbname);

        // cria a tabela
        $sql = "CREATE TABLE IF NOT EXISTS usuarios (
        id INT AUTO_INCREMENT PRIMARY KEY,
        usuario VARCHAR(100) NOT NULL,
        senha VARCHAR(100) NOT NULL
        );";
        $conn->query($sql);

        // insere o registro
        $sql = "INSERT INTO usuarios (usuario, senha) VALUES('$usuario', '$senha')";

        if($conn->query($sql) === TRUE){
            echo "<p style='color: Darkgreen;'>Usuário cadastrado com sucesso!</p>";
        } else {
            echo "<p style='color: red;'>Erro ao cadastrar</p>";
        }
        // Fecha a conexão
        $conn->close();
    }
    ?>
</body>

</html>