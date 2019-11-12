<?php
session_start();
if (!(isset($_SESSION['logado']))) {
    echo "<script>alert('Sem Permissao')</script>";
    header("Refresh: 0;url = index.php");
}
include 'header.php';

include 'conexao.php';

$crescente = $conn->query("SELECT * FROM produto ORDER BY preço ASC");

$decrescente = $conn->query("SELECT * FROM produto ORDER BY preço DESC");

?>


<title>Painel de Controle</title>
</head>

<body>
    <div class="sidenav">
        <h2>Painel</h2>
        <a href="#">Produto</a>
        <a href="#">Crescente</a>
        <a href="#">Decrescente</a>
        <a href="sair.php">Sair</a>
    </div>
    <div class="main">
        <form action="salvarproduto.php" method="post">
            <h2 id="title">Produto</h2>
            <div class="box">
                <input type="text" name="nome" placeholder="nome">
                <input type="text" name="preço" placeholder="preço">
                <input type="text" name="quantidade" placeholder="quantidade">
                <button>Inserir</button>
            </div>
        </form>
        <h2>Crescente</h2>
        <?php
        if ($crescente) {
            foreach ($crescente as $row) {
                echo $row['nome'] . ' R$ ' . $row['preço'] . '  ' . $row['quant'] . '</br>';
            }
        }

        ?>
        <h2>Decrescente</h2>
        <?php
        if ($decrescente) {
            foreach ($decrescente as $row) {
                echo $row['nome'] . ' R$ ' . $row['preço'] . '  ' . $row['quant'] . '</br>';
            }
        }

        ?>
    </div>
</body>

</html>