<?php
include('config.php');
include('classes/mysql.php');
?>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/cadastrar.css">
    <title>Facility Stock - Cadastra-se</title>
</head>

<body>
    <header>
        <div class="titulo">
            <a href="../index.php">
                <h1>Facility Stock</h1>
            </a>
        </div>
        <nav class="menu">
            <a href="../index.php">
                <li>Login</li>
            </a>
    </header>
    <!--CABEÇALHO-->

    <section class="section">
        <div>
            <img src="../img/cadastrar.png" alt="">
        </div>
        <div class="dados">
            <div class="texto">
                <h1>Criar Conta</h1>
            </div>
            <form method="post" action=" ">
                <input type="text" id="nome" placeholder="Nome" name="nome">
                <input type="text" id="sobrenome" placeholder="Sobrenome" name="sobrenome">
                <input type="text" id="email" placeholder="E-mail" name="email">
                <input type="password" id="senha" placeholder="Senha" name="senha">
                <p>Data de Nascimento</p>
                <input type="date" id="data" name="data"><br>
                <?php
                if (isset(($_POST['email']))) {
                    $email = addslashes($_POST['email']);
                    $nome = addslashes($_POST['nome']);
                    $sobrenome = addslashes($_POST['sobrenome']);
                    $senha = addslashes($_POST['senha']);
                    $data = addslashes($_POST['data']);

                    if ($email == '') {
                        formCadastrar::alert('erro', 'O Email ficou vazio!');
                    } else if ($nome == '') {
                        formCadastrar::alert('erro', 'O Nome ficou vazio!');
                    } else {
                        formCadastrar::cadastrar($email, $nome, $sobrenome, $senha, $data);
                        formCadastrar::alert('sucesso', 'Usuário ' . $nome . ' cadastrado com sucesso!');
                    }
                }
                ?>
                <button class="btn">Cadastre-se</button>
                <a href="../index.php">Já tem uma conta?</a>
            </form>
        </div>
        </div>
    </section>

    <div class="footer">
        <footer>&copy;Createc 2022</footer>
    </div>
    <!--RODAPÉ-->
</body>

</html>