<?php session_start(); ?>
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
<title>Atualização</title>
<style> 
body{
    background: #2f2e6a;
}

h2{
    color: white;
}

.input-group-text{
    background-color: black;
    border: none;
    margin-bottom: 5px;
    color: #fff;
}
</style>
<div class="container" style="margin-top: 20px;">
    <header> <h2>Alterar Login</h2> </header>
        <form method="POST" action="UpLog.php?id=<?=$_SESSION['id'];?>">
            <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">Usuário</span>
                <input autofocus type="text" value="<?=$_SESSION['user'];?>" name="user" class="form-control" placeholder="Insira seu novo usuário aqui" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">Senha</span>
                <input  type="password" value="<?=$_SESSION['pass'];?>" name="pass" class="form-control" placeholder="Insira sua nova senha aqui" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">Confirme a senha</span>
                <input  type="password" name="conpass" class="form-control" placeholder="Insira novamente sua nova senha aqui" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <button type="submit" class="btn btn-primary btn-dark">Alterar Login</button>
            <a href="ProtectedPage.php"><button type="button" class="btn btn-primary btn-dark">Voltar</button> </a>
        </form>
</div>