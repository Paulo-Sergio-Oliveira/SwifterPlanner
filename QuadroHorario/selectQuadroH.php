<?php

include_once 'connect.php';
session_start();
$id = $_SESSION['id'];
$query = mysqli_query($conn, "SELECT * FROM habits WHERE id_user = '{$id}' ORDER BY time_");
$response = '';
while ($row = mysqli_fetch_assoc($query)) {
    $response .= '<tr id="'.$row['id'].'">
    <td>'.$row['time_'].'</td>
    <td>'.$row['monday'].'</td>
    <td>'.$row['tuesday'].'</td>
    <td>'.$row['wednesday'].'</td>
    <td>'.$row['thursday'].'</td>
    <td>'.$row['friday'].'</td>
    <td>'.$row['saturday'].'</td>
    <td>'.$row['sunday'].'</td>
    <td><button onclick="deleteH('.$row['id'].')" class="remove-button" type="button"><i class="fa-solid fa-trash-can"></button></td>
    <td><button onclick="updateH('.$row['id'].', this)" class="alter-button" type="button"><i class="fa-solid fa-file-pen"></i></button></td>
</tr>';
}
echo json_encode($response);
?>

