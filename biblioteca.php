<?php

class Aluno {
    private $nome;
    private $email;
    private $telefone;
    private $cpf;
    private $celular;
    private $dataNascimento;

    public function __construct($nome, $email, $telefone, $cpf, $celular, $dataNascimento) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->cpf = $cpf;
        $this->celular = $celular;
        $this->dataNascimento = $dataNascimento;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getCPF() {
        return $this->cpf;
    }

    public function getCelular() {
        return $this->celular;
    }

    public function getDataNascimento() {
        return $this->dataNascimento;
    }
}

$aluno = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['cpf']) && isset($_POST['celular']) && isset($_POST['dataNascimento'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $cpf = $_POST['cpf'];
        $celular = $_POST['celular'];
        $dataNascimento = $_POST['dataNascimento'];

        $aluno = new Aluno($nome, $email, $telefone, $cpf, $celular, $dataNascimento);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cadastro de Aluno</title>
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
        <h1>Sistema de Biblioteca</h1>
        <h1>Cadastro de Aluno:</h1>
        <form method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Example@example.com" required><br>
            
            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" placeholder="0000-0000" required><br>
            
            <label for="cpf">CPF:</label>
            <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00" required><br>
            
            <label for="celular">Celular:</label>
            <input type="tel" id="celular" name="celular" placeholder="(00)00000-0000" required><br>
            
            <label for="dataNascimento">Data de Nascimento:</label>
            <input type="date" id="dataNascimento" name="dataNascimento"  ="00/00/0000" required><br>
            
            <button type="submit">Cadastrar</button>
        </form>
    </div>


    <?php if($aluno): ?>
    <div class="form-container">
          <!-- Conteúdo do formulário aqui -->
        <h2>Dados do Aluno Cadastrado:</h2>
        <p><strong>Nome:</strong> <?= $aluno->getNome() ?></p>
        <p><strong>Email:</strong> <?= $aluno->getEmail() ?></p>
        <p><strong>Telefone:</strong> <?= $aluno->getTelefone() ?></p>
        <p><strong>CPF:</strong> <?= $aluno->getCPF() ?></p>
        <p><strong>Celular:</strong> <?= $aluno->getCelular() ?></p>
        <p><strong>Data de Nascimento:</strong> <?= $aluno->getDataNascimento() ?></p>
    </div>
    <?php endif; ?>
</body>
</html>
