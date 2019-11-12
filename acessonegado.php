<?php
header("Refresh: 4;url= index.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Acesso negado</title>
</head>

<body>
    <div class="container-login100">
        <div class="wrap-login100 p-l-55 p-r-55 p-t-80 p-b-30">
        <span class="login100-form-title p-b-37">
            Sem Permissão
        </span>
        <span> 
            <p>Você não tem permissao para acesssar esta pagina! Redirecionando a pagina inicial <span class="timeout">4</span></p>
            
        </span>
        </div>
    </div>
    <script>
        var cont = 3;
        setInterval(function exibirTempo() { 
            document.querySelector(".timeout").textContent = cont;
            cont--;
        }, 1000);
    </script>
</body>

</html>