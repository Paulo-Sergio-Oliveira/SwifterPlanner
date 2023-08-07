<?php
include_once('Connect.php');
include_once('Crud.php');
$obj = new Crud($conn);
$vetor = $obj->getLogin();
    $usuario = $_POST['user'];
    foreach ($vetor as $key => $valores) {
        if (password_verify($usuario,$valores->usuario)) {
          echo 'Esse usuário já existe';
        } else{
          echo 'Esse usuário não existe';
        }
    }