<?php
    include_once('usuarios.php');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content login">
            <div class="first-column">
                <div class="header-logo">          
                <h1 class="title-logo">quebra-galho</h1>
                <a href="index.php">
                <i class="fas fa-hands-helping fa-7x logo"></i>
                </a>
                </div>  
                <h2 class="title title-primary">é novo aqui?</h2>
                <p class="description description-primary">Faça seu cadastro e</p>
                <p class="description description-primary">comece a emprestar coisas.</p>
                <a href="cadastrar.php">
                <button class="btn btn-primary">registrar</button>
                </a>
            </div>
            <div class="second-column">
                <h2 class="title title-second">bem-vindo de volta!</h2>
                <p class="description description-second">Faça seu login abaixo:</p>
                
                <form class="form" action="testLogin.php" method="POST">
                
                    <div class="label-input">
                        <i class="far fa-envelope icon-modify fa-2x"></i>
                        <input type="email" name="email_user" class="inputUser" maxlength="50" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>

                    <div class="label-input">
                        <i class="fas fa-lock icon-modify fa-2x"></i>
                        <input type="password" name="senha_user" class="inputUser" maxlength="15" required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>
                
                    <a class="password" href="#">esqueceu sua senha?</a>                   
                    <button type="submit" name="submit" class="btn btn-second">entrar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>