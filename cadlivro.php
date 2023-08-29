<?php

class Livro {
    private $autor;
    private $isbn;
    private $numero_pagina;
    private $ano_publicado;
    private $titulo;
    private $valor;

    public function __construct($autor, $isbn, $numero_pagina, $ano_publicado, $titulo, $valor) {
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->numero_pagina = $numero_pagina;
        $this->ano_publicado = $ano_publicado;
        $this->titulo = $titulo;
        $this->valor = $valor;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function getNumero_pagina() {
        return $this->numero_pagina;
    }

    public function getAno_publicado() {
        return $this->ano_publicado;
    }

    public function getTitulo() {
        return $this->titulo;
    } 

    public function getValor() {
        return $this->valor;        
    }
}

$livro = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['autor']) && isset($_POST['isbn']) && isset($_POST['numero_pagina']) && isset($_POST['ano_publicado']) && isset($_POST['titulo']) && isset($_POST['valor'])) {
        $autor = $_POST['autor'];
        $isbn = $_POST['isbn'];
        $numero_pagina = $_POST['numero_pagina'];
        $ano_publicado = $_POST['ano_publicado'];
        $titulo = $_POST['titulo'];
        $valor = $_POST['valor'];


        $livro = new Livro($autor, $isbn, $numero_pagina, $ano_publicado, $titulo, $valor);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de livro</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 5px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .form-container {
            max-width: 200px;
            margin: auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>


<body>
    <div class="form-container">
             <!-- Campos para preencher o formulário -->
       
        <h1>Cadastro de Livro:</h1>
        <form method="post">
            <label for="titulo">Titulo:</label>
            <input type="text" id="titulo" name="titulo" required><br>
            
            <label for="autor">Autor:</label>
            <input type="" id="autor" name="autor" required><br>
            
            <label for="numero_pagina">Numero de paginas:</label>
            <input type="tel" id="numero_pagina" name="numero_pagina" required><br>
            
            <label for="ano_publicado">Ano Publicado:</label>
            <input type="text" id="ano_publicado" name="ano_publicado" required><br>
            
            <label for="isbn">ISBN:</label>
            <input type="tel" id="isbn" name="isbn" required><br>
            
            <label for="valor">Preço:</label>
            <input type="text" inputmode="decimal" step="1" id="valor" name="valor" required><br>
            
            <button type="submit">Cadastrar</button>
        </form>
    </div>


    <?php if($livro): ?>
    <div class="form-container">
          <!-- Conteúdo do formulário aqui -->
        <h2>Dados do Livro Cadastrado:</h2>
        <p><strong>Titulo:</strong> <?= $livro->getTitulo() ?></p>
        <p><strong>Autor:</strong> <?= $livro->getAutor() ?></p>
        <p><strong>Numero de Paginas:</strong> <?= $livro->getNumero_pagina() ?></p>
        <p><strong>Ano Publicado:</strong> <?= $livro->getAno_publicado() ?></p>
        <p><strong>ISBN:</strong> <?= $livro->getIsbn() ?></p>
        <p><strong>Valor:</strong> <?= $livro->getValor() ?></p>
    </div>
    <?php endif; ?>
</body>
</html>
