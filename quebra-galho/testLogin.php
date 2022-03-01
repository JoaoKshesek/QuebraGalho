<?php
    session_start();
    // print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email_user']) && !empty($_POST['senha_user']))
    {
        // Acessa
        include_once('conexao.php');
        $email = $_POST['email_user'];
        $senha = $_POST['senha_user'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM usuarios WHERE email_user = '$email' and senha_user = '$senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email_user']);
            unset($_SESSION['senha_user']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['email_user'] = $email;
            $_SESSION['senha_user'] = $senha;
            header('Location: home.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: login.php');
    }
?>