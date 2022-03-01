<?php
    include_once('conexao.php');

    if(isset($_POST['submit']))
    {
    $nome = addslashes($_POST['nome_user']);       
    $telefone = addslashes($_POST['telefone_user']);    
    $sexo = addslashes($_POST['sexo_user']);     
    $email = addslashes($_POST['email_user']);      
    $senha = addslashes($_POST['senha_user']);
    $confSenha = addslashes($_POST['confSenha_user']);
    
    //CONSULTA AO BANDO DE DADOS
    $verificar = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email_user = '{$email}'");
        //VERIFICA SE TODOS OS CAMPOS FORAM PREENCHIDOS
        if(!empty($nome) && !empty($telefone) && !empty($sexo) && !empty($email) && !empty($senha) &&!empty($confSenha)){
            //VERIFICA SE SENHA E CONFIRMAR SENHA SÃO IGUAIS
            if ($senha == $confSenha){
                //VERIFICA SE JÁ EXISTE UM USUÁRIO CADASTRADO COM ESSE EMAIL NO BANCO DE DADOS
                if (mysqli_num_rows($verificar)<1){
                    echo "Usuário cadastrado com sucesso!";
                    echo "Faça seu login ao lado.";
                    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome_user,telefone_user,sexo_user,email_user,senha_user) VALUES ('$nome','$telefone','$sexo','$email','$senha')");
                }else{
                    echo "Já existe um usuário com esse email";
                    unset($_POST['nome_user']);
                    unset($_POST['telefone_user']);
                    unset($_POST['sexo_user']);
                    unset($_POST['email_user']);
                    unset($_POST['senha_user']);
                    unset($_POST['confSenha_user']);
                }
            }else {
                echo "As senhas não coincidem!";
                unset($_POST['nome_user']);
                unset($_POST['telefone_user']);
                unset($_POST['sexo_user']);
                unset($_POST['email_user']);
                unset($_POST['senha_user']);
                unset($_POST['confSenha_user']);
            }
        }else {
            echo "Preencha todos os campos!";
            unset($_POST['nome_user']);
            unset($_POST['telefone_user']);
            unset($_POST['sexo_user']);
            unset($_POST['email_user']);
            unset($_POST['senha_user']);
            unset($_POST['confSenha_user']);
            header('Location: cadastrar.php');
        }
    }
?>