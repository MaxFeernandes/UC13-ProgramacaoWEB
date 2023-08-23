<?
 include "funcionario.php";
?>
<html>
    <head>
        <title>Lista de Funcionarios</title>
    </head>
    <body>
        <h1>Lista de Funcionarios</h1>

        <table border="1">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Acao</th>
            </tr>
            </thead>  

            <tr>
            <tbody>
                    <?
                foreach($listaFuncionarios as $funcionario):
                    ?>
                    <th><?=$funcionario["id"]?></th>
                    <td><?=$funcionario["nome"]?></td>
                    <td><?=$funcionario["email"]?></td>
                    <td><?=$funcionario["telefone"]?></td>
                    <td>Editar Visualizar Excluir</td>
            </tr>
                <? endforeach; ?>
            </tbody>

            <tfoot>
            <tr>
                <td colspan="5">Foi encontrado 5 funcionarios</td>
            </tr>
            </tfoot>

        </table>
    </body>
</html>