<?php
$id = $_GET['id'];
$id_tit =$_GET['id_tit'];

include_once('Connect.php');
include_once('Crud.php');

$obj = new Crud($conn);
$obj->deletePlan($id, $id_tit);