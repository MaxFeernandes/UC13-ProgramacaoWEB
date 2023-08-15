<html>

    <head>
        <title>Aula de PHP</title>
    </head>
    <body>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, quos laudantium? Est officia, mollitia dolore, repellendus dolorum molestias, sequi earum laboriosam in alias quos eius autem placeat fugiat voluptatum porro.</p>

        <?php 

            echo "Edson Rodrigues";
        ?>
         
        <br>

        <?php 

            print "Senac Marília";
        ?>
        
        <br>

            <!-- Comentário em HTML -->

        <?php

             //  Comentário em PHP

            /*
               Varias
               linhas
            */

           $nomeCompleto = "Max Felipe";
           $idade = 26;
           $status = true;
           $salario = 1320.50;
            
           echo $nomeCompleto." ".$idade;
           echo "<br>";
           echo "$nomeCompleto $idade anos";
           echo '<br>';
           echo '$nomeCompleto $idade anos';
           echo "<br>";

           $logoSenac = "https://www.sp.senac.br/o/senac-theme/images/logo_senac_default.png";


        ?>

        <img src=" <?=$logoSenac ?> " alt="Senac Marília">

    </body>

</html>