<?php
$id = $_GET['id'];
$dom = $_POST['dom'];
$seg = $_POST['seg'];
$ter = $_POST['ter'];
$qua = $_POST['qua'];
$qui = $_POST['qui'];
$sex = $_POST['sex'];
$sab = $_POST['sab'];

include_once('Connect.php');
include_once('Crud.php');
$obj = new Crud($conn);
$obj->updateWeekPlan($id, $dom, $seg, $ter, $qua, $qui, $sex, $sab);