<?php

$imagem_temporaria = $_FILES["perfil"]["tmp_name"]; // Caminho temporário do arquivo enviado

$caminho_imagem = "imagens/user/" . 'user.jpg'; // Caminho de destino para a imagem



if (move_uploaded_file($imagem_temporaria, $caminho_imagem)) { // Move o arquivo temporário para o caminho de destino
    header("Location: perfil.html");
    exit();
} else {
    echo "Erro ao salvar a imagem"; // Exibe mensagem de erro
}
