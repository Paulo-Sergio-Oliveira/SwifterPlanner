<?php

session_start();

include_once("../connect/connect.php");
include_once("../classes/Crud.php");
    
$obj = new Crud($conn);
    
extract($_POST);

$id_user = $_SESSION['id']; 

$obj->updateStatus($status, $id_book, $id_user);
?>