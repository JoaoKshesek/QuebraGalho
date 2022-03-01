<?php
    include_once('itens.php');

?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
            integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    </head>
    <body>
            <header class="header">
                <main class="main-header">
                    <div class="header-logo">
                        <a href="index.php">
                            <i class="fas fa-hands-helping fa-3x header-logo"></i>
                        </a>
                    </div>
                    <div class="header-titulo">
                        <a href="index.php">
                        <h1>quebra-galho</h1>
                        </a>
                    </div>
                    <div class="header-perfil">
                        <ul>
                            <a href="construcao.php">
                                <li class="header-icone">
                                    <i class="fab fa-facebook fa-2x"></i>
                                </li>
                            </a>
                            <a href="construcao.php">
                                <li class="header-icone">
                                    <i class="fab fa-instagram fa-2x"></i>
                                </li>
                            </a>
                            <a href="construcao.php">
                                <li class="header-icone">
                                    <i class="fab fa-twitter fa-2x"></i>
                                </li>
                            </a>
                            <li role="separator" class="separador"></li>
                            <a href="construcao.php">
                                <li class="header-icone">
                                    <i class="fas fa-user-circle fa-2x"></i>
                                </li>
                            </a>
                            <a href="sair.php">
                                <li class="header-icone">
                                    <i class="fas fa-sign-out-alt fa-2x"></i>
                                </li>
                            </a>
                        </ul>
                    </div>
                </main>
            </header>
            <main class="main-corpo">
                <div class="corpo-header">
                    <div class="corpo-menu">
                        <ul>
                            <a href="home.php">
                                <li>home</li>
                            </a>
                                <li>empréstimos
                                    <ul>                                
                                        <a href="novoemprestimo.php"><li>novo empréstimo</li></a>
                                        <a href="meusemprestimos.php"><li>meus empréstimos</li></a>
                                    </ul>    
                                </li>
                            <a href="construcao.php">
                                <li>sobre nós</li>
                            </a>
                            <a href="construcao.php">
                                <li>fale conosco</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="corpo-form">
                    <form class="form" method="POST" action="">
                        <h1>Cadastrar novo empréstimo</h1>
                        <div class="label-input">
                            <i class="fas fa-box icon-modify fa-2x"></i>
                            <input type="text" name="nome_item" id="nome" class="inputUser" maxlength="50" required>
                            <label for="nome" class="labelInput">Item</label>
                        </div>
    
                        <div class="label-input">
                            <i class="far fa-calendar-alt icon-modify tel fa-2x"></i>Data do empréstimo
                            <input type="date" name="data_emprestimo" id="data_emprestimo" class="iputUser" required>
                            <label for="data_emprestimo"></label>
                        </div>
        
                        <div class="label-input">
                            <i class="far fa-calendar-alt icon-modify fa-2x"></i>Previsão de entrega
                            <input type="date" name="data_previsao" id="data_previsao" class="inptUser" required>
                            <label for="data_previsao"></label>
                        </div>


                                    
                        <button type="submit" name="submit" class="btn btn-second">cadastrar</button>        
                    </form>
                </div>
            </main>
            <footer class="footer">
                <h2>todos os direitos reservados</h2>
            </footer>
    </body>
    </html>
