<?php
   
   if(isset($_POST['nome']) && !empty($_POST['nome'])){

       $nome = $_POST['nome'];
       $livro = $_POST['livro'];
      // $nome = json_decode($resultado, true);

       //var_dump($dadosEndereco);

   }else{
       header("location:alugado.php");
       exit;
   }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Livros disponiveis</title>
    </head>
    <body>

    <h1>Aluguel de Livro</h1>
    <hr>
    <h2><?= $nome ?></h2>
    <form action="alugado.php" method="post">
        <fieldset>
            <legend>Digite o Numero do Livro:</legend>

            <input name="id" type="text" placeholder="">

            <button type="submit">Buscar</button>
        </fieldset>
    </form>

    <table border="2">
        <tr>
            <td>ID</td>
            <td>Livro</td>
            <td>Autor</td>
            
        </tr>
        <tr>
            <td>1</td>
            <td>Senhor dos Aneis</td>
            <td>J. K. Rowling</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Poseidon</td>
            <td>C. S. Lewis</td>
        </tr>
        <tr>
            <td>3</td>
            <td>viagem ao centro da terra</td>
            <td>Júlio Verne</td>
        </tr>
    </table>
    <h1>O aluno <?php echo $nome  ?></h1>
    <h1>O livro <?php echo $livro ?></h1>
    </body>
</html>