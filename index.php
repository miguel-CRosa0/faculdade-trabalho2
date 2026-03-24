<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./dash.css">
</head>

<body>
    <form action="dashboard.php" method="POST" class="tela-login">
        <h2>LOGIN</h2>
        <label for="email">E-MAIL</label>
        <input type="email" id="email" name="email" placeholder="nome@email.com" required>
        <label for="senha">SENHA</label>
        <input type="password" id="senha" name="senha" placeholder="****" required>
        <input type="submit" value="ENTRAR">
    </form>
</body>

</html>