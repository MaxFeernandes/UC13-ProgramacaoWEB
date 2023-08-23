<?php

$listaFuncionarios = [
    1 => ["ID" => 1, "nome" => "Joao", "email" => "joao@daum.com", "telefone" => "(14)99798-6541"],
    2 => ["ID" => 2, "nome" => "mauricio", "email" => "mauricio@univem.com", "telefone" => "(14)99798-0000"],
];

$listaFuncionarios[3]["id"] = 3;
$listaFuncionarios[3]["nome"] = "joao2";
$listaFuncionarios[3]["email"] = "joao@teste.com";
$listaFuncionarios[3]["telefone"] = "(14) 7777-7777";
var_dump($listaFuncionarios);








//aqui

$listaFuncionarios = [
    ["ID" => 1, "nome" => "Joao", "email" => "joao@daum.com", "telefone" => "(14)99798-6541"],
    ["ID" => 2, "nome" => "mauricio", "email" => "mauricio@univem.com", "telefone" => "(14)99798-2222"],
    ["ID" => 3, "nome" => "luiz", "email" => "luiz@univem.com", "telefone" => "(14)99798-1111"],
    ["ID" => 4, "nome" => "carlos", "email" => "carlos@univem.com", "telefone" => "(14)99798-0000"],
];

$qtdFuncionario = count($listaFuncionarios);

$listaFuncionarios[$qtdFuncionario]["id"] = 5;
$listaFuncionarios[$qtdFuncionario]["nome"] = "joao2";
$listaFuncionarios[$qtdFuncionario]["email"] = "joao@teste.com";
$listaFuncionarios[$qtdFuncionario]["telefone"] = "(14) 7777-7777";
$qtdFuncionario+=1;
//var_dump($listaFuncionarios);
echo "array com: ";
echo count($listaFuncionarios);