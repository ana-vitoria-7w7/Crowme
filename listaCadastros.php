<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
    <link rel="stylesheet" type="text/css" href="css/listaCadastros.css">
</head>

<body style="margin: 0px; padding: 0px;">
    <div>
        <div class="cabecalho">
            <div>
                <span class="textoCabecalho">Usuários cadastrados</span>
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
            <div>
                <div class="lista">
                    <?php
                    include('conexao.php');

                    $sql = 'SELECT * FROM usuarios';

                    if (!$resultado = $conn->query($sql)) {
                        die("erro");
                    }

                    while ($row = $resultado->fetch_assoc()) {


                        echo '<br>CPF: ' . $row['cpf'] . '<br>Usuário: ' . $row['nome'] . '<br>Senha: ' . $row['senha'];
                        echo "<hr>";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>