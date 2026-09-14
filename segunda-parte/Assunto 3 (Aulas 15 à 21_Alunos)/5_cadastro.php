<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>
<body>
    <form method="post" action="">
        <!-- Campo Nome -->
        <label for ="nome">Nome:</label>
        <input type=" name="nome" require>
        
        <!-- Campo senha -->
        <label for ="nome">Senha:</label>
        <input type="password="senha" require>
        
        <button type="submit">Cadastrar</button>
    </form>   

    <!-- Lógica de cadastro (PHP) -->
     <?php
    if ($_SERVER['REQUEST_METHOD']== 'POST') {
        //Recebo valores
       $nome = $_POST["nome"];
       $senha = $_POST["senha"]; 

       //Gravando a informção recebida em um arquivo de texto
       // O "Fopen" significa (File open ou abrir arquivo) e o "a" appende que significa acresentar
       $arquivo = fopen("usuario.txt", "a");

       //Cria um a linha com o nome e senha separado por;
       $linha = $nome . ";" . $senha . "\n";

       // Escreva a linha do arquivo (insere de fato)
       fwrite($arquivo, $linha);

       //Fecha o arquivo
       fclose($arquivo);

       //mensagem de sucesso (Feedback visual para o usuário)
       echo"<p>Usuário cadastrado com sucesso!</p>";
    } 
    
    ?>
</body>
</html>