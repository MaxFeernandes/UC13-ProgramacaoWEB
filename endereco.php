<?php

class Aluno {
    // ... (same as before)
}

class Livro {
    // ... (same as before)
}

class Emprestimo {
    // ... (same as before)
}

class Usuario {
    // ... (same as before)
}

class Biblioteca {
    // ... (same as before)
}

// Process form data
$alunoData = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract and sanitize form data
    $alunoData = htmlspecialchars($_POST['aluno']);
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sistema de biblioteca</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <h1>Sistema de Biblioteca</h1>
    <form method="post">
        <h3>Digite seu nome:</h3>
        <input name="aluno" type="text" id="aluno">
        <br>
        <!-- Add other form fields here -->
        <button type="submit">Enviar</button>
    </form>

    <?php
    // Display submitted data
    if (!empty($alunoData)) {
        echo "<p>Nome do aluno: $alunoData</p>";
        // Display other form fields similarly
    }
    ?>

    <p>
        Copyright &copy; <?= date("d/m/Y H:i:s") ?> - Todos os direitos são reservados
    </p>
</body>
</html>
