<?php

include 'conexao.php';

if (isset($_POST['nome']) && ($_POST['preço']) && ($_POST['quantidade'])) {
    $nome = $_POST['nome'];
    $preço = $_POST['preço'];
    $quant = $_POST['quantidade'];
    $conn->exec("INSERT INTO produto (nome, preço, quant) VALUES ('$nome', '$preço', '$quant')");
    header('location:paineldecontrole.php');
}


?>