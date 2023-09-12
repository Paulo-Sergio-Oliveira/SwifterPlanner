<?php
include_once 'connect.php';
session_start();
$id_user = mysqli_real_escape_string($conn, $_SESSION['id']);
$time = mysqli_escape_string($conn, $_POST['time']);
$monday = mysqli_escape_string($conn, $_POST['monday']);
$tuesday = mysqli_escape_string($conn, $_POST['tuesday']);
$wednesday = mysqli_escape_string($conn, $_POST['wednesday']);
$thursday = mysqli_escape_string($conn, $_POST['thursday']);
$friday = mysqli_escape_string($conn, $_POST['friday']);
$saturday = mysqli_escape_string($conn, $_POST['saturday']);
$sanday = mysqli_escape_string($conn, $_POST['sunday']);


$query = mysqli_query($conn, "INSERT INTO habits (time_, monday, tuesday, wednesday, thursday, friday, saturday, sunday, id_user)
  VALUES ('{$time}', '{$monday}', '{$tuesday}', '{$wednesday}', '{$thursday}', '{$friday}', '{$saturday}', '{$sanday}', '{$id_user}')");

if (!$query) {
  echo json_encode("Erro ao inserir o hábito! ". mysqli_error($conn));
} else {
  echo json_encode('');
}
