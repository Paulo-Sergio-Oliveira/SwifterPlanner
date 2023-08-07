<?php
session_start();
$id = $_SESSION['id'];
$senha = $_POST['pass'];
$consenha = $_POST['conpass'];
if ($senha == $consenha) {
    $usuario = password_hash($_POST['user'], PASSWORD_DEFAULT);
    $senha = password_hash($senha, PASSWORD_DEFAULT);
    include_once('Connect.php');
    include_once('Crud.php');

    $obj = new Crud($conn);
    $obj->updateLogin($id, $usuario, $senha);
}else{
    header('Location: FormUpLog.php');
    die();
}