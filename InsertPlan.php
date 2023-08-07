<?php
session_start();
$id = $_SESSION['id'];
$id_tit = $_GET['id'];
include_once('Connect.php');
include_once('Crud.php');

$plan = $_POST["plan"];
$hora_de = $_POST["hora_de"];
$hora_ate = $_POST["hora_ate"];

if (empty($plan) or empty($hora_de) or empty($hora_ate)) {
    header('Location: NewPlan.php');
    exit();
} else {
    $obj = new Crud($conn);
    $obj->setPlanejamento($plan, $hora_de, $hora_ate, $id, $id_tit);
    $obj->newPlan();
}
?>