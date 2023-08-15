<?php

$nome  = "Max Felipe Fernandes";
$email = "feexemple7@gmail.com";
$senha = "12345678";
$idade = 26;

echo "<h1>Estrutura Condicional</h1>";
echo "<hr>";

echo "<h5>Exemplo de if ()</h5>";

if($idade >= 18){
    echo "O usuário $nome é maior de idade";
}


/////////////////////////////////////////////
echo"<hr>";
echo"<h5> Exemplo de if e Else </h5>";

if($senha == "12345678"){
    echo "A senha é Valida";
}else{
    echo "Senha inválida";
}

/////////////////////////////////////////////
echo"<hr>";
echo"<h5> Exemplo de if e ElseIf else </h5>";

if($idade <= 18){
    echo "Jovem";
}else if($idade <= 21){
    echo "Adulto";
}else{
    echo "Velho";
}

/////////////////////////////////////////////
echo"<hr>";
echo"<h5> Exemplo de if Ternario </h5>";

echo ($idade >=18) ? "Maior de Idade" : "Menor de idade";


/////////////////////////////////////////////
echo"<hr>";
echo"<h5> Exemplo de condição para formulario de login </h5>";

if($email == "max@teste.com" && $senha == "12345678"){
    echo"Usuario autenticado";
}else{
    echo "usuario ou senha invalida";
}


/////////////////////////////////////////////
echo"<hr>";
echo"<h5> Verificar se o numero é par ou ímpar </h5>";

$numero = 10;

// O número 10 é par

if($numero % 2 ==0){
    echo "Numero par";
}else{
    echo "Numero ímpar";
}


/////////////////////////////////////////////
echo"<hr>";
echo"<h5> Mostre o dia da Semana </h5>";

echo date('w');

$diaSemana = date ('w');
 echo"<hr>";
if($diaSemana == 0){
    echo "Domingo";
}else if($diaSemana == 1){
    echo "Segunda-Feira";
}if($diaSemana == 2){
    echo "Terça-Feira";
}else if($diaSemana == 3){
    echo "Quarta-Feira";
}
if($diaSemana == 4){
    echo "Quinta-Feira";
}else if($diaSemana == 5){
    echo "Sexta-Feira";
}
if($diaSemana == 6){
    echo "Sabado";
}