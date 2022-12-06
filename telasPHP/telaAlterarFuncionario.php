<?php
include('config.php');
include('classes/mysql.php');
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/consulta.css">
    <title>Facility Stock - Alterar Funcionário</title>
</head>

<body>
    <img src="../img/TelaCadastro.png">
    <form method="get" action="#" class="cadastro">
        <div class="conteudos">
            <h3>Alterar Funcionário</h3>
            <p>
                <label for="id">Id do Funcionário:</label>
                <input type="number" name="id" id="id" placeholder="Código do Funcionário" class="inputId">
                <input type="submit" name="acao" value="Buscar" class="botaoId">
                <?php
                if ($resultado = isset($_GET['id'])) {
                    $id = addslashes($_GET['id']);

                    if ($id == '') {
                        formBuscar::alert('erro', 'O ID ficou vazio!');
                    } else {
                        formBuscar::buscar($id);
                        formBuscar::alert('sucesso', 'Funcionário ' . $id . ' encontrado com sucesso!');
                ?>
            </p>
    </form>
    <form method="post" action="#">
        <p>
            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
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
        <p class="botaoposition">
            <input type="submit" name="acao" value="Alterar" class="botao">
        </p>
        <?php
                        if (isset(($_POST['id']))) {
                            $id = addslashes($_POST['id']);
                            $qtd = addslashes($_POST['qtd']);
                            $nome = addslashes($_POST['nome']);
                            $descricao = addslashes($_POST['descricao']);
                            $valor = addslashes($_POST['valor']);

                            if ($nome == '') {
                                formAlterar::alert('erro', 'O Nome ficou vazio!');
                            } else {
                                formAlterar::alterar($nome, $descricao, $valor, $qtd, $id);
                                formAlterar::alert('sucesso', 'Funcionário ' . $nome . ' alterado com sucesso!');
                            }
                        }
        ?>
    </form>
    </div>
<?php
                    }
                }
?>
</body>

</html>