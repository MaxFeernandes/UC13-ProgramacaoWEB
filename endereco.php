<?php
    if(isset($_POST['cep']) && !empty($_POST['cep'])){

        $cep = $_POST['cep'];
        $resultado = file_get_contents("http://viacep.com.br/ws/$cep/json/");

        $dadosEndereco = json_decode($resultado, true);

        //var_dump($dadosEndereco);

    }else{
        header("location:buscar-endereco.php");
        exit;
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dados do CEP</title>
    </head>
    <body>

    <h1>Endereço</h1>
    <hr>
    <p>CEP: <?php echo $dadosEndereco['cep'] ?></p>
    <p>Rua: <?php echo $dadosEndereco['logradouro'] ?></p>
    <p>Bairro: <?php echo $dadosEndereco['bairro'] ?></p>
    <p>Cidade: <?php echo $dadosEndereco['localidade'] ?></p>
    <p>Estado: <?php echo $dadosEndereco['uf'] ?></p>
    

    <table border="2">
        <tr>
            <td>CEP</td>
            <td>Rua</td>
            <td>Bairro</td>
            <td>Cidade</td>
            <td>Estado</td>
        </tr>
        <tr>
            <td><?php echo $dadosEndereco['cep'] ?></td>
            <td><?php echo $dadosEndereco['logradouro'] ?></td>
            <td><?php echo $dadosEndereco['bairro'] ?></td>
            <td><?php echo $dadosEndereco['localidade'] ?></td>
            <td><?php echo $dadosEndereco['uf'] ?></td>
        </tr>
    </table>
    </body>
</html>