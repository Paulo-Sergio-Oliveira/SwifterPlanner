<?php
$data = $_POST['data'];
$titulo = $_POST['titulo'];
$id = $_GET['id'];
$id_tit = $_GET['id_tit'];

include_once('Connect.php');
include_once('Crud.php');

if (empty($data) or empty($titulo)) {
    header('Location: FormUpPlan.php');
    exit();
} else {
    $obj = new Crud($conn);
    $obj->updatePlanTitle($id, $data, $titulo, $id_tit);
}