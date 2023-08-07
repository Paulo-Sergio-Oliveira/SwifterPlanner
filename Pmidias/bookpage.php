<?php
session_start();

if(isset($_SESSION['user'])) {
    
    include_once("connect/connect.php");
    include_once("classes/Crud.php");
    
    $obj = new Crud($conn);
    
    $id_user = $_SESSION['id'];
    
    $id_book = $_GET["id"];

    $dado = $obj->verify($id_user, $id_book);

    $ava = $obj->verifyAva($id_user, $id_book);

    foreach ($ava as $value) {
        $avaliacao = $value['avaliacao'];
    }

    $geral = $obj->geralAva($id_book);

    if(!$dado){
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/book.css">
    <title>Document</title>
</head>
<body>
  <div class="barra">
  <a style="color:#6f42c1;"href="index.php">INICIO</a> 
    <a style="color:#6f42c1;"href="prateleira.php">PRATELEIRA</a>
  </div>
    <center><input type="hidden" id="id" value="<?=$id_book?>">
    <form action="crud/crud-addPrateleira.php" method="post">
        <div style="margin-left: 35%;" id="book"></div>
        <br>
        <button type="submit">
        ADICIONAR A PRATELEIRA</button>
    </form>
    <br>
<?php
if(!$ava){
?>
    <form  action="crud/crud-avaliar.php" method="post">
        <br><br><br>
        <h2>AVALIAÇÃO</h2>
        <h3>Avaliação Geral: <?=$geral[0]?> (<?=$geral[1]?>) </h3>
        <input type="radio" name="ava" value="5">
        <label>5 estrelas</label><br>
        <input type="radio" name="ava" value="4">
        <label>4 estrelas</label><br>
        <input type="radio" name="ava" value="3">
        <label>3 estrelas</label><br>
        <input type="radio" name="ava" value="2">
        <label>2 estrelas</label><br>
        <input type="radio" name="ava" value="1">
        <label>1 estrela</label><br>
        <input type="hidden" name="id_book" value="<?=$id_book?>">
        <br>
        <button type="submit">AVALIAR</button></center>
    </form>
    <br>
<?php
}else{
    echo "<h3>Avaliação Geral: ". $geral[0] ."(". $geral[1] .")</h3>";
    echo "Sua Avaliação: $avaliacao estrelas";
}
?>
</body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" 
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" 
    integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" 
    crossorigin="anonymous"></script>
    <script src="js/book.js"></script>
</html>
<?php
    }else{
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/book.css">
    <title>Document</title>
</head>
<body>

<div class="barra">
  <a style="color:#6f42c1;"href="index.php">INICIO</a> 
    <a style="color:#6f42c1;"href="prateleira.php">PRATELEIRA</a>
  </div>
    <center><input type="hidden" id="id" value="<?=$id_book?>">
    <form class="avaliacao" action="crud/crud-addPrateleira.php" method="post">
        <div style="margin-left: 35%;" id="book"></div>
        <h3 type="submit">na prateleira</h3>
    </form>
<?php
if(!$ava){
?>
    <form action="crud/crud-avaliar.php" method="post">
        <br><br>
        <h2>AVALIAÇÃO</h2>
        <h3>Avaliação Geral: <?=$geral[0]?> (<?=$geral[1]?>)</h3>
        <input type="radio" name="ava" value="5">
        <label>5 estrelas</label><br>
        <input type="radio" name="ava" value="4">
        <label>4 estrelas</label><br>
        <input type="radio" name="ava" value="3">
        <label>3 estrelas</label><br>
        <input type="radio" name="ava" value="2">
        <label>2 estrelas</label><br>
        <input type="radio" name="ava" value="1">
        <label>1 estrela</label><br>
        <input type="hidden" name="id_book" value="<?=$id_book?>">
        <button  type="submit">AVALIAR</button>
    </form>
<?php
}else{
    echo "<h3>Avaliação Geral: ". $geral[0] ."(". $geral[1] .")</h3>";
    echo "Sua Avaliação: $avaliacao estrelas";
}
?>
</body>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" 
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" 
    integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" 
    crossorigin="anonymous"></script>
    <script src="js/book.js"></script>
</html>
<?php
    }
}else{
    header("location: index.php");
}
?>