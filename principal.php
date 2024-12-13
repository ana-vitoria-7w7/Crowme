<?php
include "valida.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Principal</title>
    <link rel="stylesheet" type="text/css" href="css/principal.css">
</head>

<body style="margin: 0px; padding: 0px;">
    <div>
        <div class="cabecalho">
            <div>
                <span class="textoCabecalho">Olá <?php echo $_SESSION['nome']; ?> !</span>
            </div>

            <div class="sair"><a class="link" href="sair.php">Sair</a></div>
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
            <h3>Conteúdo</h3>
            <p>Aqui vai o conteúdo principal</p>
        </div>
    </div>
</body>

</html>