
<?php
    // isset -> serve para saber se uma variável está definida
    include_once('conexao.php');
    if(isset($_POST['update']))
    {
        $nome_item = $user_data['nome_item'];
        $data_emprestimo = $user_data['data_emprestimo'];
        $data_previsao = $user_data['data_previsao'];
        
        $sqlInsert = "UPDATE itens 
        SET nome_item='$nome_item',data_emprestimo='$data_emprestimo',data_previsao='$data_previsao'
        WHERE id_item=$id_item";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>