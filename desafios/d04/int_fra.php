<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>analizador de numero real</h1>
    <?php 
        $num = $_REQUEST["numero"];

        echo "Analizando o numero " . number_format($num, 3, ",", ".") . " informado pelo usuario:";

        $int = (int) $num;
        $fra = $num - $int;

        echo "<ul><li>a parte inteira do numero é <strong>" . number_format($int, 0, ",", ".") . "</strong>";

        echo "<li>a parte fracionada do numero é <strong>" . number_format($fra, 3, ",", ".") . "</strong>";
    ?>
</body>
</html>