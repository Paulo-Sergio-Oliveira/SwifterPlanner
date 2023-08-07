<?php
session_start();
include_once('Connect.php');
include_once('Crud.php');
$obj = new Crud($conn);
$id = $_SESSION['id'];
$dado = $obj->getHabitos($id);
foreach($dado as $info) {
    $dom = null;
    $seg = null;
    $ter = null;
    $qua = null;
    $qui = null;
    $sex = null;
    $sab = null;
    $id = $info['id'];
    $obj->updateHab($id, $dom, $seg, $ter, $qua, $qui, $sex, $sab);
}
$dado = $obj->getWeekHabitos2($id);
$semana = date('d/m/Y', strtotime("sunday -1 week"))." a ".date('d/m/Y', strtotime("saturday +0 week"));;
foreach($dado as $info) {
    $total = 0;
    $id = $info['id'];
    $obj->updateWeekHab($id, $total, $semana);
}
header("Location: Habitos.php");
die();