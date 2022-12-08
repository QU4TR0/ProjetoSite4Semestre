<?php
//include('telasPHP/config.php');
//include('telasPHP/classes/mysql.php');
include('telasPHP/conexao.php');
?>
<html>

<head lang="pt-BR">
    <title>Facility Stock - Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <header>
        <div class="titulo">
            <a href="index.php">
                <h1>Facility Stock</h1>
            </a>
        </div>
        <!--
        <nav class="menu">
            <a href="../index.php">Home</a>
            <a href="../telas/quemSomos.php">Quem somos</a>
            <a href="../telas/contato.php">Contato</a>
            <a href="../telas/telaCadastrar.php">Cadastra-se</a>
        </nav>-->
    </header>
    <section>
        <div class="img">
            <img src="img/img-new/cadastrar.png" alt="">
        </div>
        <form method="POST" action=" " class="conteudos">
            <h1>LOGIN AT FACILITY STOCK</h1>
            <div>
                <p>
                    <label> E-MAIL </label><br>
                    <center>
                        <input type="email" name="email" id="email" required class="input" data-validate="Valid e-mail is required: ex@abx.xyz">
                    </center>
                </p>
                <p>
                    <label for="senha"> SENHA </label><br>
                    <center>
                        <input type="password" name="senha" l size="50" maxlength="70" id="senha" required class="input" data-validate="Password is required">
                    </center>
                </p>
                </center>

                <!--<div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="lembrarSenha" for="ckb1">
                        Remember me
                    </label>
                </div>-->

                <center>
                    <p>Não tem conta? <a href="telasPHP/telaCadastrar.php" target="_self" class="cadastre">Cadastra-se</a>
                    </p>
                </center>

                <?php
                if (isset($_POST['email']) || isset($_POST['senha'])) {

                    if (strlen($_POST['email']) == 0) {
                        echo 'O Email ficou vazio!';
                    } else if (strlen($_POST['senha']) == 0) {
                        echo 'A Senha ficou vazia!';
                    } else {
                        $email = $mysqli->real_escape_string($_POST['email']);
                        $senha = $mysqli->real_escape_string($_POST['senha']);

                        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
                        $sql_query = $mysqli->query($sql_code) or die("Falha no código SQL: " . $mysqli->error);

                        $qtd = $sql_query->num_rows;

                        if ($qtd == 1
                        ) {
                            $usuario = $sql_query->fetch_assoc();

                            if (!isset($_SESSION)) {
                                session_start();
                            }

                            $_SESSION['user'] = $usuarios['email'];

                            header("Location: telasPHP/inicio.php");
                        } else {
                            echo "Falha ao logar! E-mail ou senha incorretos";
                        }
                    }
                }
                ?>

                <p>
                    <button type="submit" name="entrar" class="botao">Entrar</button>
                </p>
            </div>
        </form>
    </section>
    <!--<div class="imgRodape">
        <img src="../img/img-new/face.png">
        <img src="../img/img-new/instagram.png">
        <img src="../img/img-new/youtube.png">
        <img src="../img/img-new/linkedin (1).png">
    </div>-->
    <footer class="rodape">
        <p>&copy;Createc 2022</p>
    </footer>
</body>

</html>