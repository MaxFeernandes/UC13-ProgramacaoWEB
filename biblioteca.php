<?php
//classe usuario

use usuario as GlobalUsuario;                                                                         

class usuario{ 
public $nome;
public $senha;
public $email;


public function usuario(){
   new Usuario();
    $Usuario -> nome = "bruh";
    $Usuario -> senha = "13112005";
    $Usuario ->email = "bruh@gmail.com";
    
}

}
class aluno{

public $nome;
public $cpf;
public $email;
public $telefone;
public $celular;
public $data_nascimento;

public function Novoaluno(){
    new Aluno();
    $aluno = $nome = "bruh";
    $aluno = $cpf = "50760652805";
    $aluno = $email =  "bruh@gmail.com";
    $aluno = $telefone = "998715962";
    $aluno = $celular = "21325686884666";
    $aluno = $data_nascimento = "16/08/2023";
    
}
}

class livro {
    public $autor, $titulo, $IBSN, $data_emprestimo, $ano_publicacao, $preco, $numero_paginas;

    public function novoLivro(){
      new Livro ();
        $livro = $autor = "Antoine de Saint-Exupéry";
        $livro = $titulo = "O pequeno príncipe";
        $livro = $IBSN = "1234794749847979";
        $livro = $data_emprestimo ="23/08/2023";
        $livro = $ano_publicacao ="07/08/2014";
        $livro = $preco = 23.00;
        $livro = $numero_paginas = 19;


        
      
    }
}


class emprestimo{
    public $nomeAluno;
    public $titulo_livro;
    public $data_emprestimo;
    public $data_devolucacao;

    public function emprestimo(){
        new Empretimo ();
        $emprestimo = $nomeAluno = "bruh";
        $emprestimo = $titulo = "O pequeno principe";
        $emprestimo = $data_emprestimo = "16/08/2023";
        $emprestimo = $data_devolucacao= "28/08/2023";
    }
    
}

//daum aqui
class usuario1{ 
    public $nome1 = "daum";
    protected $senha1 = "123";
    public $email = 'senac@senac.com';
    
    }
?>
