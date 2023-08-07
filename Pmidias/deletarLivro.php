<?php

session_start();

include_once("connect/connect.php");
include_once("classes/Crud.php");
    
$id_book = $_GET['id'];
$id_user = $_SESSION['id'];

$obj = new Crud($conn);

$dados = $obj->verify($id_user, $id_book);

foreach ($dados as $value) {
    $title = $value['title'];
}

?>

<!DOCTYPE html>
<html lang="en">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap');
*{
  font-family: 'Inter', sans-serif;
}
        body{
            background-color: #2f2e6a;
            text-align: center;
            margin: 13rem;
        }
        a{
            color:white;
            text-decoration:none;
            margin:5px;
        }
        h2,h1{
            color:white;
        }
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Livro</title>
</head>
<body>
   <h1>Deletar <?= $title ?>?</h1>
    <h2><a href="crud/crud-deletarLivro.php?id=<?=$id_book?>">Sim</a></h2>
    <h2><a href="prateleira.php">Não</a></h2>
</body>


