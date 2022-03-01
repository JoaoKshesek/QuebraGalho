<?php
    include_once('conexao.php');
    //print_r($_SESSION);

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
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="first-column">
                <h1 class="title-logo">quebra-galho</h1>
                <i class="fas fa-hands-helping fa-7x logo"></i>
                <a href="login.php"><button class="btn">login</button></a>
                <a href="cadastrar.php"><button class="btn">cadastrar</button></a>
            </div>
            <div class="second-column">
                    <table class="table">
                        <thead>
                            <tr class="line">
                                <th class="col1">Cód</th>
                                <th class="col2">Item</th>
                                <th class="col3">Data de Empréstimo</th>
                                <th class="col4">Previsão de Entrega</th>
                                <th class="col5">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            while($user_data = mysqli_fetch_assoc($result)) {
                                echo "<tr class='line'>";
                                echo "<td class='col col1'>".$user_data['id_item']."</td>";
                                echo "<td class='col col2'>".$user_data['nome_item']."</td>";
                                echo "<td class='col3'>".$user_data['data_emprestimo']."</td>";
                                echo "<td class='col4'>".$user_data['data_previsao']."</td>";
                                echo "<td class='col5'>".$user_data['data_entrega']."</td>";
                                echo "</tr>";  
                            }
                        ?>  
                        </tbody>    
                    </table>               
            </div>
        </div>
    </div>
</body>
</html>
