<?php
session_start();
$id = $_SESSION['id'];
include_once('Connect.php');
include_once('Crud.php');
$obj = new Crud($conn);
$weekplan = $obj->getWeekPlan($id);
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='Bootstrap/css/style.css'>
    <title>Planejamento Semanal</title>
    <link rel='stylesheet' type='text/css' href='Bootstrap/css/estilo.css'>
<link rel='stylesheet' type='text/css' href='Bootstrap/css/bootstrap.min.css'>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap');
* {
    font-family: 'Inter', sans-serif;
}


body{
    padding: 40px;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
	background: #2f2e6a;
	color: white;
}
.button {
  border: none; 
  background-color: #7ff5ff;
  padding: 0.4rem 1rem;
  border-radius: 5px;
  cursor: pointer;

}
.button:hover {
  background-color: #6b63fff1;
}

.table{
    color: white;
}
.bx{
    color: #d63031;
    font-size: 40px;
}

.bxs-edit-alt{
    color: #7ff5ff;
}
</style>
</head>
<body>
    <table class="table table-bordered">
        <tr><th>Semana</th>
        <th>Domingo</th>
        <th>Segunda</th>
        <th>Terça</th>
        <th>Quarta</th>
        <th>Quinta</th>
        <th>Sexta</th>
        <th>Sábado</th>
        <th colspan="2">Opções</th>
        <?php 
        $n = 1;
        foreach ($weekplan as $info) {
            echo '<tr align="center"><td>'.$info['data'].'</td>
            <td>'.nl2br($info['domingo']).'</td>
            <td>'.nl2br($info['segunda']).'</td>
            <td>'.nl2br($info['terca']).'</td>
            <td>'.nl2br($info['quarta']).'</td>
            <td>'.nl2br($info['quinta']).'</td>
            <td>'.nl2br($info['sexta']).'</td>
            <td>'.nl2br($info['sabado']).'</td>
            <td><a href="DeleteWP.php?id='.$info["id"].'"><i class="bx bx-x-circle"></i></a></td>
            <td><a href="FormUpWP.php?id='.$info["id"].'"><i class="bx bxs-edit-alt"></i></a></td>
            </tr>';
            $n++;
        }
        ?>
        <tr align="center"><td colspan="10"><a href="NewWeekPlan.php"><button class="button" type="button">Inserir planejamentos</button></a></td></tr>
    </table>
    <hr>
    <a href="ProtectedPage.php"><button  class="button" type="button">Voltar</button></a>
</body>
</html>