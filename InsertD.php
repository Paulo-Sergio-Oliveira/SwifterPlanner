<?php
session_start();
$id = $_SESSION['id'];
include_once('Connect.php');
include_once('Crud.php');

$titulo = $_POST["titulo"];
$conteudo = $_POST["conteudo"];
$data = date("Y-m-d");
if (empty($titulo) or empty($conteudo)) {
    header('Location: NewDiario.php');
    exit();
} else {
    $obj = new Crud($conn);
    $obj->setDadosDiario($titulo, $conteudo, $data, $id);
    $obj->newDiario();
}
?>