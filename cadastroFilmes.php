<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" type="text/css" href="css/cadastroFilmes.css">
    <script src="js/cadastro.js" defer></script>
</head>

<body style="margin: 0px; padding: 0px;">
    <div>
        <div class="cabecalho">
            <div>
                <span class="textoCabecalho">Cadastro - Filmes</span>
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
            <div class="divCadastro">
                <form method="post" action="gravarUsuario.php" name="cadastroForm">
                    <br>
                    <h2 class="textoTitulo">Novo filme!</h2><br>
                    Nome : <input class="campoTexto" type="text" name="cpf"><br><br><br><br>
                    Ano : <input class="campoTexto" type="text" name="nome"><br><br><br><br>
                    Gênero : <select class="campoTexto" name="genero" id="genero">
                                <option class="campoTexto" value="" disabled selected></option>
                                <option class="campoTexto" value="Comedia">Comédia</option>
                                <option class="campoTexto" value="Terror">Terror</option>
                                <option class="campoTexto" value="Ação">Ação</option>
                            </select><br><br><br><br>
                    <input class="botao" type="submit" value="Cadastrar"><br><br><br>
                </form>

            </div>
        </div>
    </div>
</body>

</html>