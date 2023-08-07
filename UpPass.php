<?php
$id = $_GET['id'];
$usuario = $_GET['user'];
$senha = $_POST['pass'];
$consenha = $_POST['conpass'];
if ($senha == $consenha) {
    $senha = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    include_once('Connect.php');
    include_once('Crud.php');

    $obj = new Crud($conn);
    $obj->updateSenha($id, $senha);
}else{
    header('Location: NewPass.php?user='.$usuario.'');
    die();
}

