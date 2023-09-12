<?php
include_once 'connect.php';
session_start();
$id = $_POST['id'];
$id_user = $_SESSION['id'];
$query = mysqli_query($conn, "SELECT * FROM habits WHERE id_user = '{$id_user}' AND NOT id = '{$id}'");
$time = mysqli_escape_string($conn, $_POST['timeUp']);
while ($row = mysqli_fetch_assoc($query)) {
    if ($row['time_'] == $time) {
        echo 'error';
        die;
    }
}
if ($time == '') {
    echo '';
} else {
    $monday = mysqli_escape_string($conn, $_POST['mondayUp']);
    $tuesday = mysqli_escape_string($conn, $_POST['tuesdayUp']);
    $wednesday = mysqli_escape_string($conn, $_POST['wednesdayUp']);
    $thursday = mysqli_escape_string($conn, $_POST['thursdayUp']);
    $friday = mysqli_escape_string($conn, $_POST['fridayUp']);
    $saturday = mysqli_escape_string($conn, $_POST['saturdayUp']);
    $sunday = mysqli_escape_string($conn, $_POST['sundayUp']);
    $query = mysqli_query($conn, "UPDATE habits SET time_ = '{$time}', monday = '{$monday}', tuesday = '{$tuesday}',
    wednesday = '{$wednesday}', thursday = '{$thursday}', friday = '{$friday}', saturday = '{$saturday}', sunday = '{$sunday}'
    WHERE id = '{$id}'");
    if ($query) {
        echo 'sucess';
    }
}

