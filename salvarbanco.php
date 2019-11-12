<?php
if (isset($_POST['nome']) && ($_POST['senha']) && ($_POST['email'])) {
    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);
    $email = $_POST['email'];

    include 'conexao.php';

    $query = $conn->query("SELECT nome FROM usuario");
    $user = 0;
    if ($result) {
        foreach ($result as $row) {
            if ($nome == $row['nome'])
                $user = 1;
            break;
        }
    }

    if (!$user) {
        $conn->exec("INSERT INTO usuario (nome, senha, email) VALUES ('$nome', '$senha', '$email')");
        header('location:index.php');
    } else {
        echo "<script>alert('Usuario já existe')</script>";
        header("Refresh: 0;url = cadastro.php");
    }
}
?>