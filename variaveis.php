<?php

$nomeCompleto = 'Max Felipe Fernandes';
$idade = 26;
$status = true;
$salario = 1500.00;

echo $nomeCompleto;
echo "<hr>";
//Converte em maiusculo
echo strtoupper($nomeCompleto);

echo"<hr>";

//COnverte em minusculo
echo strtolower($nomeCompleto);

echo "<hr>";

//Converter para maiusculas o primeiro caractere de cada palavra
echo ucwords($nomeCompleto);

echo "<hr>";

echo str_replace("Max", "Felipe", $nomeCompleto);

echo "<hr>";

echo str_repeat("Max ",7);

echo "<hr>";

echo isset($nome) ? 'True':'False';

echo "<hr>";

echo empty($nomeCompleto) ?
'True':'False';

