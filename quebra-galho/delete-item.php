
<?php

if(!empty($_GET['id_item']))
{
    include_once('conexao.php');

    $id = $_GET['id_item'];

    $sqlSelect = "SELECT *  FROM itens WHERE id_item=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        $sqlDelete = "DELETE FROM itens WHERE id_item=$id";
        $resultDelete = $conexao->query($sqlDelete);
    }
}
header('Location: meusemprestimos.php');

?>