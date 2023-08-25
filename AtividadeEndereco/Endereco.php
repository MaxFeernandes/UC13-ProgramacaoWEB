<?php

class Endereco {

public $cep;
public $logradouro;
public $bairro;
public $localidade;
public $uf;

public function buscarEndereco($cep){
    $this->cep = $cep;
    $resultado = file_get_contents("http://viacep.com.br/ws/$cep/json/");
    
    if ($resultado) {
        $dadosEndereco = json_decode($resultado, true);

        $this->logradouro = $dadosEndereco['logradouro'];
        $this->bairro = $dadosEndereco['bairro'];
        $this->localidade = $dadosEndereco['localidade'];
        $this->uf = $dadosEndereco['uf'];
    } else {
        // Tratar erro de busca
        echo "Erro ao buscar o endereço.";
    }
}

public function imprimirEndereco(){
    echo "CEP: " . $this->cep . "<br>";
    echo "Endereço: " . $this->logradouro . "<br>";
    echo "Bairro: " . $this->bairro . "<br>";
    echo "Cidade: " . $this->localidade . "<br>";
    echo "Capital: " . $this->uf . "<br>";
}
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cep'])) {
$cep = $_POST['cep'];

$endereco = new Endereco();
$endereco->buscarEndereco($cep);

$endereco->imprimirEndereco();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Consulta de Endereço</title>
</head>
<body>
<form method="post" action="">
    <label for="cep">CEP: </label>
    <input type="text" name="cep" id="cep" maxlength="9">
    <input type="submit" value="Buscar">
</form>
</body>
</html>
