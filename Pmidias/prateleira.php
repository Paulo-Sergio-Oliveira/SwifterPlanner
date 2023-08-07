<?php

session_start();

if(isset($_SESSION['user'])) {

    include_once("connect/connect.php");
    include_once("classes/Crud.php");

    $obj = new Crud($conn);

    $id_user = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/prateleira.css">
    <title>Prateleira</title>
</head>
<body>
    <section>
        <a href="index.php"><h3>VOLTAR</h3></a>
        <h1>PRATELEIRA</h1>
        <br>
    </section>
</body>
</html>

<?php

$dados = $obj->readPrateleira($id_user);

    if ($dados) {
        echo "<table border='1'>";
        echo "<tr><th> IMG </th> <th> Título </th> <th> Autor </th> <th> Visualizar </th> 
        <th> Atualizar Leitura </th> <th> Deletar </th>"; 

        foreach ($dados as $info) {
        
            echo "<tr> 
            <td> <img src='" .$info['img']. "'> </td>
            <td>" .$info['title']. "</td>
            <td>" .$info['author']. "</td>
            <td> <a href='bookpage.php?id=".$info['id_book']."'> VISUALIZAR </a></td>
            <td> <a href='atualizarLeitura.php?id=".$info['id_book']."'> ATUALIZAR LEITURA </a></td>
            <td> <a href='deletarLivro.php?id=".$info['id_book']."'> DELETAR </a></td>
        </tr>";
}
            
echo "</table>";

    }else{
        echo "<h3> Você não possui nada na sua prateleira :( </h3>";
    }

echo "<br>
        <h2>LENDO</h2>
        <br>";

$dados = $obj->readLendo($id_user);

    if ($dados) {
        echo "<table border='1'>";
        echo "<tr><th> IMG </th> <th> Título </th> <th> Autor </th> <th> Visualizar </th> 
        <th> Atualizar Leitura </th> <th> Deletar </th>"; 

        foreach ($dados as $info) {
        
            echo "<tr> 
            <td> <img src='" .$info['img']. "'> </td>
            <td>" .$info['title']. "</td>
            <td>" .$info['author']. "</td>
            <td> <a href='bookpage.php?id=".$info['id_book']."'> VISUALIZAR </a></td>
            <td> <a href='atualizarLeitura.php?id=".$info['id_book']."'> ATUALIZAR LEITURA </a></td>
            <td> <a href='deletarLivro.php?id=".$info['id_book']."'> DELETAR </a></td>
        </tr>";
}
            
echo "</table>";

    }else{
        echo "<h3> Você não possui leituras em andamento :( </h3>";
    }

echo "<br>
    <h2>LIDO</h2>
    <br>";

$dados = $obj->readLido($id_user);

    if ($dados) {
        echo "<table border='1'>";
        echo "<tr><th> IMG </th> <th> Título </th> <th> Autor </th> <th> Visualizar </th> 
        <th> Atualizar Leitura </th> <th> Deletar </th>"; 

        foreach ($dados as $info) {
        
            echo "<tr> 
            <td> <img src='" .$info['img']. "'> </td>
            <td>" .$info['title']. "</td>
            <td>" .$info['author']. "</td>
            <td> <a href='bookpage.php?id=".$info['id_book']."'> VISUALIZAR </a></td>
            <td> <a href='atualizarLeitura.php?id=".$info['id_book']."'> ATUALIZAR LEITURA </a></td>
            <td> <a href='deletarLivro.php?id=".$info['id_book']."'> DELETAR </a></td>
        </tr>";
}
            
echo "</table>";

    }else{
        echo "<h3> Você não possui leituras finalizadas :( </h3>";
    }


}else{
    header("location: index.php");
}
?>