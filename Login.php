<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href="estilo/logis.css">
    <title>Insert</title>
</head>
<body>
    <header>
        <div class="box">
            <span class="borderLine"></span>
            <form method="POST" action="Valida.php">
                <h2 class="login"> Login </h2>
                <div class="inputBox">
                    <input type="text" name="user" required="required">
                    <span>Usuário</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="pass" required="required">
                    <span>Senha</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="Usuario.php">Esqueci Minha Senha</a>
                    <a href="Cadastro.php">Cadastre-se</a>
                </div>
               <input type="submit" value="Login">
            </form>
        </div>
    </header>
</body>
</html>