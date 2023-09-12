<?php
include_once 'connect.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM habits WHERE id = '{$id}'");
if ($query) {
    echo json_encode('sucess');
}