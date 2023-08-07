<?php
include_once("../connect/connect.php");
include_once("../classes/Crud.php");

session_start();

$id_user = $_SESSION['id'];

extract($_POST);

if($ava == null){
    header("location: ../bookpage.php?id=$id_book");
}else{

$obj = new crud($conn);

$obj->avaliar($id_book,$id_user,$ava);

}
?>