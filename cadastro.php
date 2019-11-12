<?php
include 'conexao.php';
include 'header.php';
?>


    <title>Cadastro</title>


<body>
    <div class="loginbox">
        <h1>C a d a s t r o</h1>
        <form action="salvarbanco.php" method="POST" id="idDoForm">
            <input type="text" name="nome" placeholder="Usuario">
            <input type="text" name="email" placeholder="Email">
            <input type="password" id="senha" name="senha" placeholder="Senha">
            <input type="password" id="senha1" name="senha1" placeholder="Confirme sua senha">
            <input type="SUBMIT" value="Cadastrar" onclick="validarSenha()">
            <a href="index.php">Possui conta?</a>
        </form>
    </div>
    <script>
        function validarSenha() {
            formulario = document.getElementById("idDoForm")
            if ((document.getElementById('senha').value) != (document.getElementById('senha1').value)) {
                alert('Senhas diferentes por favor corrija!');
                formulario.onsubmit = function() {
                    return false;
                }
            } else {
                formulario.onsubmit = function() {
                    return true;
                }
            }
        }
    </script>
</body>

</html>