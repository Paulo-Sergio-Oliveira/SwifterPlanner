<?php

session_start();

include_once("../connect/connect.php");
include_once("../classes/Crud.php");
    
$obj = new Crud($conn);

$id_book = $_GET['id'];
$id_user = $_SESSION['id']; 

$obj->deleteBook($id_book, $id_user);

?>