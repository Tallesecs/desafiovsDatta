<?php
session_start();
if (isset($_POST['nome']) && ($_POST['senha'])) {
    $nome = $_POST['nome'];
    $senha = md5($_POST['senha']);

    include 'conexao.php';

    $result = $conn->query("SELECT nome, senha FROM usuario");
    $count = 0;
    if ($result) {
        foreach ($result as $row) {
            if (($nome == $row['nome']) && ($senha == $row['senha'])) {
                $count = 1;
                break;
            }
        }
    }
    if ($count) {
        $_SESSION['logado'] = 1;
        header('location:paineldecontrole.php');
    } else {
        header('location:index.php');
    }
}
?>

