<?php
include_once('Connect.php');
include_once('Crud.php');
$obj = new Crud($conn);
$vetor = $obj->getLogin();
$senha = $_POST['pass'];
$consenha = $_POST['conpass'];
if ($senha == $consenha) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data = $_POST['data'];
    $usuario = $_POST['user'];
    foreach ($vetor as $key => $valores) {
        if (password_verify($usuario,$valores->usuario)) {
            header('Location: Cadastro.php');
            exit();
        }
    }
    $usuario = password_hash($_POST['user'], PASSWORD_DEFAULT);
    $senha = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    if (empty($nome) or empty($email) or empty($data)or empty($usuario) or empty($senha)) {
        header('Location: Cadastro.php');
        exit();
    } else {
        $obj->setDadosCad($nome, $email, $data);
        $obj->insertCad();
        $obj->setDadosLogin($usuario, $senha);
        $obj->insertLog();
    }
}else{
    header('Location: Cadastro.php');
    die();
}