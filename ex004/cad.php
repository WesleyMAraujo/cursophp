<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>resultado do processamento</h1>
    </header>
    <main>
        <?php 
            /* var_dump($_GET)// $_REQUEST é a junção de $_GET e $_POST */
            $nome = $_GET["nome"] ?? "ESTRANHO";
            $sobrenome =$_GET["sobrenome"] ?? "DESCONHECIDO";
            echo "<p>é um prazer te conhecer, <strong>$nome $sobrenome</strong>! Este é o meu site!</p>"
        ?>
        <p><a href="javascript:history.go(-1)">voltar a página anterior</a></p>
    </main>
</body>
</html>