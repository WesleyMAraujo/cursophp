<?php 
    $atual = $_GET["atual"];
    $sucessor = $atual + 1;
    $antecessor = $atual - 1;
    echo "O numero atual é:$atual <br> O sucessor é:$sucessor <br> O antecessor é:$antecessor";
?>