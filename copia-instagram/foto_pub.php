<?php
$imagem_temporaria = $_FILES["fotoPub"]["tmp_name"]; 

if (move_uploaded_file($imagem_temporaria, "imagens/user-pubs/" . 'img1.jpg')) { 
    header("Location: perfil.html");
    exit();
} else {
    echo "Erro ao salvar a imagem";
}
?>