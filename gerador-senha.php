<html>
    <head>
        <meta charset="utf-8">
        <title>Gerador de Senha</title>

        <style>
            .boxSenha{
                border: 1px solid #cccccc;
                display: inline-block;
                padding: 20px;
                width: 50px;
                text-align: center;
                background-color: #fbec5d;
                font-size: 20px;
                color: black;
                font-weight: bold;
                margin: 5px;
            }
        </style>
    </head>
    <body>
        <form action="gerador-senha.php" method="get">
        <label for="qtdeSenha">Quantidade de Senhas</label>
        <h1>Gerador de Senha</h1>
        <br>
        <input name="gtdeSenha" type="number" id="qtdeSenha">
        <br>
        <button type="submit">Gerar</button>
        <a href="gerador-senha.php">Cancelar</a>
    </form>

    <hr>
            
    <?
        if(isset($_GET['qtdeSenha']))
        {
            for($i = 1; $i <= $_GET['qtdeSenha']; $i++)
            {?>
            
            <div class="boxSenha"><? echo $i?></div>
        
        
            <?}
        }?>
        
        <hr>
        <p>
            <strong>Copyright &copy; <? echo date("Y")?> </strong> - Todos os direitos são Reservados
        </p>
    </body>
</html>