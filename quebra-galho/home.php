<?php
    session_start();
    include_once('conexao.php');
    //print_r($_SESSION);
    if((!isset($_SESSION['email_user']) == true) and (!isset($_SESSION['senha_user']) == true))
    {
        unset($_SESSION['email_user']);
        unset($_SESSION['senha_user']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email_user'];
    $sql = "SELECT * FROM itens ORDER BY id_item";
    $result = $conexao->query($sql);
    // print_r($result);
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
                            <a href="sobrenos.php">
                                <li>sobre nós</li>
                            </a>
                            <a href="faleconosco.php">
                                <li>fale conosco</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="corpo-tabela">
                    <table class="table">
                        <thead>
                            <tr class="line">
                                <th class="col col1">Cód</th>
                                <th class="col col2">Item</th>
                                <th class="col col3">Data de Empréstimo</th>
                                <th class="col col4">Previsão de Entrega</th>
                                <th class="col col5">Data de Entrega</th>
                                <th class="col col6">Status</th>
                                <th class="col col7">Responsável</th>
                                <th class="col col8">Contato</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result)) {
                                echo "<tr class='line'>";
                                echo "<td class='col col1'>".$user_data['id_item']."</td>";
                                echo "<td class='col col2'>".$user_data['nome_item']."</td>";
                                echo "<td class='col col3'>".$user_data['data_emprestimo']."</td>";
                                echo "<td class='col col4'>".$user_data['data_previsao']."</td>";
                                echo "<td class='col col5'>".$user_data['data_entrega']."</td>";
                                echo "<td class='col col6'>".$user_data['data_entrega']."</td>";
                                echo "<td class='col col7'>".$user_data['responsavel']."</td>";
                                echo "<td class='col col8'>".$user_data['contato']."</td>";
                                echo "</tr>";  
                            }
                        ?>                         
                        </tbody>    
                    </table>
                </div>
            </main>
            <footer class="footer">
                <h2>todos os direitos reservados</h2>
            </footer>
    </body>
    </html>
