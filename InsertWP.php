<?php
session_start();
$id = $_SESSION['id'];
include_once('Connect.php');
include_once('Crud.php');

$data = $_POST['semana'];
$seg = $_POST['seg'];
$ter = $_POST['ter'];
$qua = $_POST['qua'];
$qui = $_POST['qui'];
$sex = $_POST['sex'];
$sab = $_POST['sab'];
$dom = $_POST['dom'];
$obj = new Crud($conn);
$obj->setWeekPlan($data, $seg, $ter, $qua, $qui, $sex, $sab, $dom, $id);
$obj->newWeekPlan();
?>