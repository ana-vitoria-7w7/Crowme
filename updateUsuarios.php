<?php
include('valida.php');
include('conexao.php');
$sql = 'SELECT * FROM USUARIOS';

$resultado = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/updateUsuarios.css">
    <title>Alterar Usuário</title>
    <script src="js/update.js" defer></script>
</head>

<body style="margin: 0px; padding: 0px;">
    <div>
        <div class="cabecalho">
            <div>
                <span class="textoCabecalho">Alterar dados</span>
            </div>

            <div class="voltar"><a class="link" href="principal.php">Voltar</a></div>
        </div>

        <!-- AQUI SÃO AS DIVS DO MENU E CONTEÚDO DA PÁGINA-->

        <div id="menu" class="menu">
            <h3 class="textoTituloMenu">Menu</h3>
            <p class="bordasMenu"><a class="link" href="cadastroUsuarios.php">Cadastro</a></p>
            <p class="bordasMenu"><a class="link" href="listaCadastros.php">Consultar dados</a></p>
            <p class="bordasMenu"><a class="link" href="updateUsuarios.php">Alterar dados</a></p>
            <p class="bordasMenu"><a class="link" href="cadastroFilmes.php">Cadastrar Filmes</a></p>
        </div>

        <div class="conteudo">
            <div class="lista">
                <table>
                    <thead>
                        <tr>
                            <th style="border-radius: 10px 0 0 0;">Nome</th>
                            <th>CPF</th>
                            <th>Senha</th>
                            <th style="border-radius: 0 10px 0 0;">Ação</th>
                        </tr>
                    </thead>
                    <?php
                    while ($row = $resultado->fetch_assoc()) {
                    ?>
                        <tr>
                            <form method="post" action="update.php" name="updateForm" >
                                <td><input class="camposTabela" type="text" name="nome" value="<?= $row['nome']; ?>"></td>
                                <td><input class="camposTabela" type="text" name="cpf" value="<?= $row['cpf']; ?>"></td>
                                <td><input class="camposTabela" type="text" name="senha" value="<?= $row['senha']; ?>"></td>
                                <input type="hidden" name="cpfANTIGO" value="<?= $row['cpf']; ?>">
                                <td><input class="botaoAlterar" type="submit" value="Alterar"></td>
                            </form>
                            <form method="post" action="apagarUsuario.php" name="apagarForm" >
                                <input type="hidden" name="cpf" value="<?= $row['cpf']; ?>">
                                <td><input class="botaoAlterar" type="submit" value="Apagar"></td>
                            </form>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

</html>