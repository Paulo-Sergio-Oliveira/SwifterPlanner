<?php
session_start();
$id2 = $_SESSION['id'];
include_once('Connect.php');
include_once('Crud.php');

$titulo = $_POST["titulo"];
if (empty($titulo)) {
    header('Location: Habitos.php');
    exit();
} else {
    $obj = new Crud($conn);
    $obj->setDadosHabitos($titulo, $id2);
    $obj->newHabito();
    if (date('D')=='Sun') {
        $semana = date('d/m/Y', strtotime("sunday"))." a ".date('d/m/Y', strtotime("saturday +0 week"));
      } else {
        $semana = date('d/m/Y', strtotime("sunday -1 week"))." a ".date('d/m/Y', strtotime("saturday +0 week"));
      }
    $dado = $obj->getHabitos($id2);
    foreach($dado as $info) {
        $total = 0;
        $titulo = $info['titulo'];
        $id = $info['id'];
        $prova = $obj->getWeekHabitos($id, $semana);
        if ($prova==null) {
            $obj->setWeekHabitos($titulo, $semana, $total, $id, $id2);
            $obj->newWeekHabito();
        }
    }
}
header("Location: Habitos.php");
die();