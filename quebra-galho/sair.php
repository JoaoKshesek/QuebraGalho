<?php
    session_start();
    unset($_SESSION['email_user']);
    unset($_SESSION['senha_user']);
    session_destroy();
    header('Location: index.php');
?>