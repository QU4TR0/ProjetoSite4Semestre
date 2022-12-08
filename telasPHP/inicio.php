
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/dropdown.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Facility Stock</title>
</head>

<body>
    <header>
        <a href="inicio.php">
            <h2>Facility Stock</h2>
        </a>

        <nav>
            <!--
            <div class="dropdown">
                <button class="dropbtn">
                    <h4>Funcionarios</h4>
                </button>
                <div class="dropdown-content">
                    <a href="telaCadastrarFuncionarios.php" target="central">Cadastrar</a>
                    <a href="telaConsultarFuncionario.php" target="central">Consultar</a>
                    <a href="telaAlterarFuncionario.php" target="central">Alterar</a>
                    <a href="telaExcluirFuncionario.php" target="central">Excluir</a>
                </div>

            </div>-->
                <div class="dropdown">
                    <button class="dropbtn">
                        <h4>Produtos</h4>
                    </button>
                    <div class="dropdown-content">
                        <a href="telaCadastroProduto.php" target="central">Cadastrar</a>
                        <a href="telaConsultaProduto.php" target="central">Consultar</a>
                        <a href="telaAlterarProduto.php" target="central">Alterar</a>
                        <a href="telaExcluirProduto.php" target="central">Excluir</a>
                    </div>

                </div>
            </nav>
            <div>
                <a href="../index.php" class="logoff"><img src="../img/logoff.png">
                    <h4>Log Off</h4>
                </a>
            </div>
    </header>
    <section>
        <iframe name="central">
        </iframe>
    </section>
    <footer>
        &copy;Createc 2022
    </footer>
</body>

</html>