<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Upload de Imagem</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="">
        <label for="imagem">Selecione uma imagem</label>
        <input type="file" name="imagem" id="imagem" accept="image/*" required>
        <button type="submit">Upload</button>
    </form>
    <?php
    // Verifica se foi enviado
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        // caminho onde as imagens serão salvas
        $diretorio_destino = 'uploads/';
        
        if(!is_dir($diretorio_destino)){
            // Criar a pasta com permissões
            // de acesso total (código 0777) e possibilidade
            // de subdiretórios (opção true)
            mkdir($diretorio_destino, 0777, true);
        }
        // armazena o nome base do arquivo
        $nome_arquivo = basename($_FILES['imagem']['name']);
        // Constroi o caminho completo(Ex: uploads/foto.jpg)
        $caminho_completo = $diretorio_destino . $nome_arquivo;

        // move o arquivo enviado para o diretório destino
        if(move_uploaded_file($_FILES['imagem']['tmp_name'], $caminho_completo)){
            echo "<p>Upload realizado com sucesso!</p>";
            echo "<img src='$caminho_completo' alt='imagem enviada' style='max-width: 300px'>";
        }else{
            echo "<p>Erro ao fazer upload do arquivo</p>";
        }
    }
    ?>
</body>
</html>