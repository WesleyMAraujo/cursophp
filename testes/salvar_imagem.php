<?php 

    $imagem_temporaria = $_FILES["imagem"]["tmp_name"]; // Caminho temporário do arquivo enviado
    $nome_imagem = $_FILES["imagem"]["name"]; // Nome original do arquivo enviado
    $caminho_imagem = "imagens/" . 'user.jpg'; // Caminho de destino para a imagem
    
    if(move_uploaded_file($imagem_temporaria, $caminho_imagem)) { // Move o arquivo temporário para o caminho de destino
        echo "Imagem salva com sucesso em $caminho_imagem"; // Exibe mensagem de sucesso
    } else {
        echo "Erro ao salvar a imagem"; // Exibe mensagem de erro
    }
