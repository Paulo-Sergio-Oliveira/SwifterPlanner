<?php
include_once("../connect/connect.php");
include_once("../classes/Crud.php");

session_start();

$id_user = $_SESSION['id'];

extract($_POST);

$obj = new crud($conn);

$obj->setDados($id_book,$img,$title,$author,0,$id_user);

$obj->insertDados();

?>