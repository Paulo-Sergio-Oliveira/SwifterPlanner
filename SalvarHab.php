<?php
session_start();
include_once('Connect.php');
include_once('Crud.php');
$obj = new Crud($conn);
$id2 = $_SESSION['id'];
if (date('D')=='Sun') {
    $semana = date('d/m/Y', strtotime("sunday"))." a ".date('d/m/Y', strtotime("saturday +0 week"));
  } else {
    $semana = date('d/m/Y', strtotime("sunday -1 week"))." a ".date('d/m/Y', strtotime("saturday +0 week"));
  }
$dado = $obj->getHabitos($id2);
foreach($dado as $info) {
    $total = 0;
    if (!empty($_POST['domingo'.$info['id']])) {
        $dom = "checked";
        $total += 1;
    } else {
        $dom = null;
    }
    if (!empty($_POST['segunda'.$info['id']])) {
        $seg = "checked";
        $total += 1;
    } else {
        $seg = null;
    }
    if (!empty($_POST['terca'.$info['id']])) {
        $ter = "checked";
        $total += 1;
    } else {
        $ter = null;
    }
    if (!empty($_POST['quarta'.$info['id']])) {
        $qua = "checked";
        $total += 1;
    } else {
        $qua = null;
    }
    if (!empty($_POST['quinta'.$info['id']])) {
        $qui = "checked";
        $total += 1;
    } else {
        $qui = null;
    }
    if (!empty($_POST['sexta'.$info['id']])) {
        $sex = "checked";
        $total += 1;
    } else {
        $sex = null;
    }
    if (!empty($_POST['sabado'.$info['id']])) {
        $sab = "checked";
        $total += 1;
    } else {
        $sab = null;
    }
    $titulo = $info['titulo'];
    $id = $info['id'];
    $obj->updateHab($id, $dom, $seg, $ter, $qua, $qui, $sex, $sab);
    $prova = $obj->getWeekHabitos($id, $semana);
    if ($prova==null) {
        $obj->setWeekHabitos($titulo, $semana, $total, $id, $id2);
        $obj->newWeekHabito();
    } else {
        $obj->updateWeekHab($id, $total, $semana);
    }
}
header("Location: Habitos.php");
die();