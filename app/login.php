<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <main>
            <form action="login_handler.php" method="post" class="">
                <div class="casa">
                    <img src="img/casa.png">
                </div>
                <div class="title">
                    <h1>Casa <br> Bom Jesus</h1>
                </div>
                <div class="input-box">
                    <input type="text" id="user" name="user" placeholder="Usuário" required>
                </div>
                <div class="input-box">
                    <input type="password" id="senha" name="senha" placeholder="Senha" required>
                </div>
                <div class="forgot">
                    <a href="#">Esqueceu a senha?</a>
                </div>
                <button type="submit" class="btn"><strong> LOGIN</strong></button>
            </form>
        </main>
    </div>
</body>
</html>
