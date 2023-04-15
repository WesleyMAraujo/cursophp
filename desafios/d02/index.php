<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $num = mt_rand(0, 100);
    echo "<h1>Numeros aleatorios</h1>";
    echo "<p>Gerando um numero aleatorio entre 0 e 100..</p>";
    echo "<p>O valor gerado foi <strong>$num</strong></p>";
    
    ?>
    <button onclick="javascript:document.location.reload()">Gerar</button>
    
</body>
</html>