<?php
session_start();

include_once("connect/connect.php");
include_once("classes/Crud.php");
    
$id_book = $_GET['id'];
$id_user = $_SESSION['id'];

$obj = new Crud($conn);

$dados = $obj->verify($id_user, $id_book);

foreach ($dados as $value) {
    $status = $value['status'];
    $title = $value['title'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar Leitura</title>
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
        h1,label,a{
            color:white;
            text-decoration:none;
        }
        button{
            color: white;
            background-color: #6f42c1;
            border:none;
            padding: 10px;
        }
</style>
</head>
<body>
    <form action="crud/crud-atualizarLeitura.php" method="post">
        <h1>Atualizar Leitura <?= $title ?></h1>

<?php

if ($status == 0) {

?>


<input type="radio" name="status" value="0" checked>
<label for="html">PRATELEIRA</label><br>
<input type="radio" name="status" value="1">
<label for="css">LENDO</label><br>
<input type="radio" name="status" value="2">
<label for="javascript">LIDO</label>
<input type="hidden" name="id_book" value="<?=$id_book?>">
<br>
<?php

}else if($status == 1){

?>

<input type="radio" name="status" value="0">
<label for="html">PRATELEIRA</label><br>
<input type="radio" name="status" value="1" checked>
<label for="css">LENDO</label><br>
<input type="radio" name="status" value="2">
<label for="javascript">LIDO</label>
<input type="hidden" name="id_book" value="<?=$id_book?>">

<?php
}else{

?>

<input type="radio" name="status" value="0">
<label for="html">PRATELEIRA</label><br>
<input type="radio" name="status" value="1">
<label for="css">LENDO</label><br>
<input type="radio" name="status" value="2" checked>
<label for="javascript">LIDO</label>
<input type="hidden" name="id_book" value="<?=$id_book?>">

<?php
}
?>
    <br>
    <button type="submit">ATUALIZAR</button>
    <br>
    <a href="prateleira.php">VOLTAR</a>
    </form>
</body>
</html>