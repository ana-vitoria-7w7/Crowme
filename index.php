<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="js/index.js" defer></script>
</head>

<body background="fotos/corvo_login.png">
    <div>
    </div>
    <div class="divLogin">
        <form name="loginForm" method="post" action="login.php" onsubmit="return validarFormulario(event);">
            <h2 class="login">Login</h2>
            CPF : <br><br><input class="camposLogin" type="text" name="cpf"><br><br>
            Senha : <br><br><input class="camposLogin" type="password" name="senha"><br><br><br><br>
            <input class="botaoLogin" type="submit" value="Entrar">
        </form>
    </div>
</body>

</html>