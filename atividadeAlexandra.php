<?php

/// Classe base para Itens
class ItemBiblioteca {
    public $titulo;
    public $autor;
    private $disponivel = true;

    public function __construct($titulo, $autor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function isDisponivel() {
        return $this->disponivel;
    }

    public function emprestar() {
        if ($this->disponivel) {
            $this->disponivel = false;
            return true;
        } else {
            return false;
        }
    }

    public function devolver() {
        $this->disponivel = true;
    }
}

/// Classe Livro, herda de ItemBiblioteca
class Livro extends ItemBiblioteca {
    private $ISBN;
    private $ano_publicacao;
    private $numero_paginas;

    public function __construct($titulo, $autor, $ISBN, $ano_publicacao, $numero_paginas) {
        parent::__construct($titulo, $autor);
        $this->ISBN = $ISBN;
        $this->ano_publicacao = $ano_publicacao;
        $this->numero_paginas = $numero_paginas;
    }
}

/// Classe Aluno
class Aluno {
    private $nome;
    private $livrosEmprestados = [];

    public function __construct($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function emprestarItem(ItemBiblioteca $item) {
        if ($item->emprestar()) {
            $this->livrosEmprestados[] = $item;
            return true;
        } else {
            return false;
        }
    }

    public function devolverItem(ItemBiblioteca $item) {
        $item->devolver();
        $key = array_search($item, $this->livrosEmprestados);
        if ($key !== false) {
            unset($this->livrosEmprestados[$key]);
        }
    }

    public function listarItensEmprestados() {
        $itens = [];
        foreach ($this->livrosEmprestados as $item) {
            $itens[] = $item->getTitulo();
        }
        return $itens;
    }
}

/// Exemplo de uso
$livro1 = new Livro("Programação do zero", "Desenvolvedor Versatíl ", "978-0-00-720354-3", 1954, 1178);
$aluno1 = new Aluno("João");
$aluno1->emprestarItem($livro1);
$livro2 = new Livro("Harry Potter e a Pedra Filosofal", "Mortal Kombat O filme", "978-85-325-1564-6", 1997, 223);
$aluno1->emprestarItem($livro2);
echo "Itens emprestados por " . $aluno1->getNome() . ": " . implode(", ", $aluno1->listarItensEmprestados());

?>
<table border="1">
    <tr>
        <td>Nome</td>
        <td>Livro Emprestados</td>
    </tr>
    <tr>
        <td>Daum</td>
        <td><?$teste;?></td>

    </tr>
    <tr>
        <td>Max</td>
        <td>Aulas de T.I.</td>
    </tr>
</table>