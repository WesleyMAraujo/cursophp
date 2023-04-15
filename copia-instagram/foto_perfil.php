<?php
$imagem_temporaria = $_FILES["perfil"]["tmp_name"];
$caminho_imagem = "imagens/user/" . 'user.jpg'; 

if (move_uploaded_file($imagem_temporaria, "imagens/user/" . 'user.jpg')) { 
    header("Location: perfil.html");// pra voltar pra pagina perfil.html
    exit();
} else {
    echo "Erro ao salvar a imagem"; // Caso apresente erro
}
?>

