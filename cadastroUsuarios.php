<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <script src="js/cadastro.js" defer></script>
</head>

<body style="margin: 0px; padding: 0px;">
    <div>
        <div class="cabecalho">
            <div>
                <span class="textoCabecalho">Cadastre-se</span>
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
            <img class="fotoCorvo-1" src="fotos/corvo.png" alt="imagem de um corvo">
            <img class="fotoCorvo-2" src="fotos/corvo2.png" alt="imagem de um corvo">
            <div class="divCadastro">
                <form method="post" action="gravarUsuario.php" name="cadastroForm">
                    <br>
                    <h2 class="textoTitulo">Cadastro</h2><br>
                    CPF : <input class="campoTexto" type="text" name="cpf"><br><br><br><br>
                    Nome : <input class="campoTexto" type="text" name="nome"><br><br><br><br>
                    Senha : <input class="campoTexto" type="password" name="senha"><br><br><br><br>
                    <input class="botao" type="submit" value="Cadastrar"><br><br><br>
                </form>

            </div>
        </div>
    </div>
</body>

</html>