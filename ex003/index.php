<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos PHP</title>
</head>

<body>
    <?php
    /* $num = 0x1A;
        echo "o valor da variavel é:$num" */
    const constante = 20;
    var_dump(constante);
    echo "<br>";
    $inteiro = 10;
    var_dump($inteiro);
    echo "<br>";
    $flutuante = 10.30;
    var_dump($flutuante);
    echo "<br>";
    $string = "hello";
    var_dump($string);
    echo "<br>";
    $buleano = false;
    var_dump($buleano);
    echo "<br>";
    $vetor = [6, 2, 5, 50.5]; var_dump($vetor);
    echo "<br>";

    class Pessoa {
        private string $nome;
    }

    $p = new Pessoa; var_dump($p);

    ?>
</body>

</html>