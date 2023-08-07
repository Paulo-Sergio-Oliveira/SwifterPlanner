<?php
include_once('Connect.php');
include_once('Crud.php');


if(isset($_POST['user'])){
    $usuario = $_POST['user'];
}else{
    $usuario = $_GET['user'];
}
if (empty($usuario)) {
    header('Location: Usuario.php');
    exit();
}
$obj = new Crud($conn);
$dado = $obj->getLogin();
foreach ($dado as $key => $valor) {
    if (password_verify($usuario,$valor->usuario)) {
        $id = $valor->id;
    }
}
if (!isset($id)) {
    header('Location: Usuario.php');
    exit();
}
?>
<title>Recuperar Senha</title>
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
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
    <header> <h2>Nova Senha</h2> </header>
        <form method="POST" action="UpPass.php?id=<?=$id;?>&user=<?=$usuario;?>">
            <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">Senha</span>
                <input autofocus type="password" name="pass" class="form-control" placeholder="Insira sua nova senha aqui" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">Confirme a senha</span>
                <input  type="password" name="conpass" class="form-control" placeholder="Insira novamente sua nova senha aqui" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <button type="submit" class="btn btn-primary btn-dark">Alterar Senha</button>
            <a href="Usuario.php"><button type="button" class="btn btn-primary btn-dark">Voltar</button> </a>
        </form>
</div>