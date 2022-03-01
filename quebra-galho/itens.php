<?php
    session_start();
    include_once('conexao.php');
    //print_r($_SESSION);

    $email_user = $_SESSION['email_user'];
    //print_r($email_user);

    $sqlSelect = "SELECT * FROM usuarios WHERE email_user = '$email_user'";
    $resultSql = $conexao->query($sqlSelect);

    //print_r($resultSql);


    while($user_data = mysqli_fetch_assoc($resultSql))
    {

    $responsavel = $user_data['nome_user'];
    $contato = $user_data['telefone_user'];
    }

    if(isset($_POST['submit']))
    {
    $nome_item = addslashes($_POST['nome_item']);       
    $data_emprestimo = addslashes($_POST['data_emprestimo']);    
    $data_previsao = addslashes($_POST['data_previsao']);    
    //print_r('nome: ' . $nome_item);
    //print_r('<br>');
    //print_r('data emprestimo: ' . $data_emprestimo);
    //print_r('<br>');
    //print_r('data previsao: ' . $data_previsao);
    //print_r('<br>');
    //print_r('responsavel: ' . $responsavel);
    //print_r('<br>');
    //print_r('contato: ' . $contato);

    if(!empty($nome_item) && !empty($data_emprestimo) && !empty($data_previsao)){
            $result = mysqli_query($conexao, "INSERT INTO itens (nome_item,data_emprestimo,data_previsao,responsavel,contato) VALUES ('$nome_item','$data_emprestimo','$data_previsao','$responsavel','$contato')");
            //print_r($result);
            echo "Item cadastrado com sucesso!";
            }
        }else {
            unset($_POST['nome_item']);
            unset($_POST['data_emprestimo']);
            unset($_POST['data_previsao']);

        }

?>