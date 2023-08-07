<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$id = $_GET['id'];
$data = $_POST['data'];

include_once('Connect.php');
include_once('Crud.php');
session_start();

if (empty($nome) or empty($email) or empty($data)) {
    header('Location: FormUpCad.php');
    exit();
} else {
    $obj = new Crud($conn);
    $obj->updateCad($id,$nome,$email,$data);
    $dados = $obj->getCad();
    foreach($dados as $cad => $values){
        if ($_SESSION['id'] == $values->id) {
            $_SESSION['nome'] = $values->nome;
            $_SESSION['email'] = $values->email;
            $_SESSION['data_nasc'] = $values->data_nasc;
        }
    }
    header('Location:ProtectedPage.php');
    exit();
}