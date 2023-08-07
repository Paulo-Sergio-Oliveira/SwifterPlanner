<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='estilo/RecSenha.css'>
    <title>Recuperar Senha</title>
</head>
<body>
    <header>
        <div class="box">
            <form method="POST" action="NewPass.php">
            <h2 class="login">Confirmar Usuário</h2>
                <div class="inputBox">      
                    <input type="text" name="user" required="required">
                    <span>Usuario</span>
                    <i></i>
                </div>
                <div class="links">
                    <a href="Cadastro.php">Cadastre-se</a>
                    <a href="Login.php">Voltar</a>
                </div>
                <input type="submit" value="Recuperar">
                <!-- <button type="submit" >Prosseguir</button>
                <a href="Login.php"><button type="button" >Voltar</button> </a> -->
            </form>
        </div>
    </header>
</body>
</html>