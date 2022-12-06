<?php
    include ('config.php');
    include('classes/mysql.php');
?>
<html>

<head lang="pt-BR">
    <title>Cadastro de Funcionários</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/cadastro.css">
</head>

<body>
    <img src="../img/TelaCadastro.png">
    <form method="post" action="#" class="cadastro">
        <div class="conteudos">
            <h3>Cadastrar Funcionários</h3>
            <p>
                <label for="id"> ID do Funcionário*: </label><br>
                <input type="number" name="id" id="id" placeholder="Código do Funcionário" required class="input">
            </p>
            <p>
                <label for="nome"> Nome do Funcionário*: </label><br>
                <input type="text" name="nome" placeholder="Nome do Funcionário" size="50" maxlength="70" id="nome"
                    required class="input">
            </p>
            <p>
                <label for="descricao" class="sr-only"> Data de Nascimento do Funcionário*: </label><br>
                <div class = "input-group datepicker">
                <input type="date" class = "form-control date-mask"  placeholder="dd/mm/aaaa" size="30" maxlength="70" id="descricao" class="input">
                </div>
            </p>
            <p>
                <label for="email"> E-mail do Funcionário*: </label><br>
                <input type="email" id="email" name="email" multiple>
                <input type="submit">
            </p>

            <p>
                <label for="telefone"> Telefone do Funcionário*: </label><br>
                <input type="tel" name="tel" id="tel" placeholder="(xx) xxxxx-xxxx" pattern="([0-9]{2}) [0-9]{5}-[0-9]{4}" class="input">
            </p>
            <p>
                <input type="submit" name="acao" value="Cadastrar Funcionário" class="botao">
            </p>
            <input type="hidden" name="form" value="f_form">
            <?php
                if(isset(($_POST['id']))){
                    $id = addslashes($_POST['id']);
                    $qtd = addslashes($_POST['qtd']);
                    $nome = addslashes($_POST['nome']); 
                    $descricao = addslashes($_POST['descricao']);
                    $valor = addslashes($_POST['valor']);

                    if($id == ''){
                    form::alert('erro','O ID ficou vazio!');
                    }else if ($nome == ''){
                    form::alert('erro','O Nome ficou vazio!'); 
                    }else{
                        form::cadastrar($id, $nome, $descricao, $valor, $qtd);
                        form::alert('erro','Produto ' .$nome. ' cadastrado com sucesso!');
                    }
                }
            ?>
        </div>
    </form>
</body>

</html>