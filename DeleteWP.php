<?php
$id = $_GET['id'];

include_once('Connect.php');
include_once('Crud.php');

$obj = new Crud($conn);
$obj->deleteWeekPlan($id);