<?php
$plan = $_POST['plan'];
$hora_de = $_POST['hora_de'];
$hora_ate = $_POST['hora_ate'];
$id = $_GET['id'];
$id_tit = $_GET['id_tit'];

include_once('Connect.php');
include_once('Crud.php');

if (empty($plan) or empty($hora_de) or empty($hora_ate)) {
    header('Location: FormUpPlan.php');
    exit();
} else {
    $obj = new Crud($conn);
    $obj->updatePlanLine($id, $plan, $hora_de, $hora_ate, $id_tit);
}
