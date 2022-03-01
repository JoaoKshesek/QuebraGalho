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
        <div class="content cadastro">              
            <div class="first-column">
                <h2 class="title title-second">Crie uma Conta</h2>

                <p class="description description-second">Crie sua conta abaixo:</p>
                <form class="form" method="POST" action="">

                    <div class="label-input">
                        <i class="far fa-user icon-modify fa-2x"></i>
                        <input type="text" name="nome_user" id="nome" class="inputUser" maxlength="50" required>
                        <label for="nome" class="labelInput">Nome</label>
                    </div>

                    <div class="label-input">
                        <i class="fas fa-phone icon-modify tel fa-2x"></i>
                        <input type="text" name="telefone_user" id="telefone" class="inputUser" maxlength="15" required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>

                    <div class="label-input gen">
                        <i class="fas fa-venus-mars icon-modify fa-2x"></i>
                        <div class="genero">
                            <input class="radio" name="sexo_user" id="feminino" type="radio" value="feminino" required>
                            <label for="feminino" class="labelGenFem">Feminino</label>
                        </div>  
                        <div class="genero">  
                            <input class="radio" name="sexo_user" id="masculino" type="radio" value="masculino" required>
                            <label for="masculino" class="labelGenMasc">Masculino</label>
                        </div>
                    </div>

                    <div class="label-input">
                        <i class="far fa-envelope icon-modify fa-2x"></i>
                        <input type="email" name="email_user" id="email" class="inputUser" maxlength="50" required>
                        <label for="email" class="labelInput">Email</label>
                    </div>

                    <div class="label-input">
                        <i class="fas fa-lock icon-modify fa-2x"></i>
                        <input type="password" name="senha_user" id="senha" class="inputUser" maxlength="15" required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>

                    <div class="label-input">
                        <i class="fas fa-lock icon-modify fa-2x"></i>
                        <input type="password" name="confSenha_user" id="confSenha" class="inputUser" maxlength="15" required>
                        <label for="confSenha" class="labelInput">Confirmar senha</label>
                    </div>                      
                    <button type="submit" name="submit" class="btn btn-second">registrar</button>        
                </form>
            </div>
            <div class="second-column">
                <div class="header-logo">
                    <h1 class="title-logo">quebra-galho</h1>
                        <a href="index.php">
                    <i class="fas fa-hands-helping fa-7x logo"></i>
                </a>
                </div>  
                <h2 class="title title-primary">Já é um usuário?</h2>
                <p class="description description-primary">Para se conectar à plataforma</p>
                <p class="description description-primary">faça seu login abaixo:</p>
                <a href="login.php">
                <button class="btn btn-primary">Entrar</button>
                </a>
            </div>
        </div>
</body>
</html>