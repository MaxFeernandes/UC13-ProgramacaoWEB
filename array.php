<?php

$listaCompra = ["Arroz", "Feijao", "Ovo", "Picanha"];



print_r($listaCompra);

var_dump($listaCompra);

echo "<hr>";

echo $listaCompra[2];

echo "<hr>";

foreach($listaCompra as $item){
    echo $item. "-";
}

echo "<hr>";

$listaCompra[] = "Oleo";

foreach($listaCompra as $indice => $item){
    echo $indice. "-" .$item. ",";
}