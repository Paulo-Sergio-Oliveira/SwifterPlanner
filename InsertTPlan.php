<?php
session_start();
$id = $_SESSION['id'];
include_once('Connect.php');
include_once('Crud.php');

$titulo = $_POST["titulo"];
$data = $_POST["data"];

if (empty($titulo) or empty($data)) {
    header('Location: Planejamentos.php');
    exit();
} else {
    $obj = new Crud($conn);
    $obj->setNewPlan($titulo, $data, $id);
    $obj->newPlanTitle();
}
?>