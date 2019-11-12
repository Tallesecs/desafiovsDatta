<?php
session_start();
include 'conexao.php';
include 'header.php';
?>

<title>Login</title>
</header>

<body>

    <body>

        <div id="app">
            {{ message }}
        </div>

        <div class="loginbox">
            <h1>Entre na sua conta</h1>
            <form action="verificar.php" method="POST" id="idDoForm">
                <input type="text" name="nome" placeholder="Usuario">
                <input type="password" id="senha" name="senha" placeholder="Senha">
                <input type="SUBMIT" value="Login">
                <a href="cadastro.php">Criar Conta</a>
            </form>
        </div>

    </body>

    <script src="vue-app.js"></script>

    </html>