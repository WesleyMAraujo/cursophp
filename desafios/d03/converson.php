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
            $real = $_GET["real"];
            $dolar = 4.92;
            $r = $real/$dolar;
            echo "<h1>Conversor de moeda 1.0</h1> <br>";
            //number_format($real, 2, ",", ".")
            echo "Seus R$ " . number_format($real, 2, ",", ".") . " equivalem a " . "<strong>US$ " . number_format($dolar, 2, ",", ".") . "</strong>";
            echo "<br> <br>";

            //

            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");
            
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'' . $inicio .'\'&@dataFinalCotacao=\'' . $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
        
            $dados = json_decode(file_get_contents($url), true);
            /* var_dump($dados); */

            $cotacao = $dados["value"][0]["cotacaoCompra"];
            /* echo "A cotação foi $cotacao"; */
            $r2 = $real/$cotacao;
            echo "<h1>Conversor de moeda 2.0</h1> <br>";
            //number_format($real, 2, ",", ".")
            echo "Seus R$ " . number_format($real, 2, ",", ".") . " equivalem a " . "<strong>US$ " . number_format($cotacao, 2, ",", ".") . "</strong>";
            echo "<br> <br>";
            

           
        ?>
  
</body>
</html>