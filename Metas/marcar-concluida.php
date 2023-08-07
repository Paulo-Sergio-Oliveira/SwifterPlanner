<?php
include_once("conect.php"); //importando o arquivo de conexão
include_once("Crud.php"); //importando a classe

if (isset($_POST['id'])) {
  $id = $_POST['id'];

  $obj = new Crud($con);
  $obj->updateConcluido($id, 1);
}
?>