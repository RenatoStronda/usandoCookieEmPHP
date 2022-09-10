<?php
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    if (isset($email) && !empty($email) && isset($senha) && !empty($senha))
    {
        if (isset($_COOKIE['email']) && isset($_COOKIE['senha'])){
            setcookie('email', $email, time() + 3600);
            setcookie('senha', $senha, time() + 3600);
        }
        session_start();
        $_SESSION["user"] = $email;
        header("location:main.php");
    }
    else
    {
        header("location:index.php");
    }
?> 