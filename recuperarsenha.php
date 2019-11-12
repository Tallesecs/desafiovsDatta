<?php

session_start();
if ((isset($_SESSION['login'])) && (isset($_SESSION['senha']))) {
    $usuario = $_SESSION['login'];
    $senha = $_SESSION['senha'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Recuperar Senha</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

    <form method="POST" action="index.php" id="idDoForm">

    </form>
    < <script>
        function validarSenha() {
        if ((document.getElementById('senha2').value) != (document.getElementById('senha1').value)) {
        alert('Senhas diferentes por favor corrija!')
        formulario = document.getElementById("idDoForm")
        formulario.onsubmit = function() {
        return false;
        }
        } else {
        formulario = document.getElementById("idDoForm")
        formulario.onsubmit = function() {
        return true;
        }
        alert('Dados atualizados com sucesso!')
        }
        }
        </script>
</body>

</html>