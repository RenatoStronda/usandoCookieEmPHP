<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="js/script.js"> </script>
    <title> Bem Vindo </title>
</head>
<body>
<?php 
    session_start();
    session_unset();
    session_destroy();
?>
<form method="POST" action="valida.php" onsubmit="return validaForm(this)">
        <h3> Entre Na Sua Conta </h3>
        <p> Digite Seu Email: <input type="text" name="email"> </p>
        <p> Digite Sua Senha: <input type="text" name="senha"> </p>
        <input type="submit" value="Entrar">
</form>
</body>
</html>