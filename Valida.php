<?php 
include_once('Connect.php');
include_once('Crud.php');
session_start();
$usuario = $_POST['user'];
$senha = $_POST['pass']; 

$obj = new Crud($conn);

$dados = $obj->getLogin();
$dados2 = $obj->getCad();
foreach($dados as $login => $valores){
    if (password_verify($usuario,$valores->usuario) && password_verify($senha,$valores->senha)) {
        $_SESSION['user'] = $usuario;
        $_SESSION['pass'] = $senha;
        $_SESSION['id'] = $valores->id;
        foreach($dados2 as $cad => $values){
            if ($valores->id == $values->id) {
                $_SESSION['nome'] = $values->nome;
                $_SESSION['email'] = $values->email;
                $_SESSION['data_nasc'] = $values->data_nasc;
            }
        }
        echo "<script>document.location='ProtectedPage.php'</script>";
        exit();
    }else{
    }
}
echo 'Usuário Incorreto ou Senha Incorretos.';