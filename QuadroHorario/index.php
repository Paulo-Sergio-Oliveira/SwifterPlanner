<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="nome">nome:</label>
        <input type="text" name="nome" id="nome">
        <label for="action">fazer:</label>
        <select name="action">
            <option value="cad">cadastro</option>
            <option value="log">login</option>
        </select>
        <button type="submit">Fazer ação</button>
    </form>
</body>
</html>
<?php
include_once 'connect.php';
session_start();
if (!empty($_POST)) {
    if ($_POST['action'] == 'cad') {
        $nome = mysqli_real_escape_string($conn, $_POST['nome']);
        $query = mysqli_query($conn, "INSERT INTO users (nome) VALUES ('{$nome}')");
        if ($query) {
            $_SESSION['id'] = mysqli_insert_id($conn);
            header('location: quadroH.php');
        }
    } else {
        $nome = mysqli_real_escape_string($conn, $_POST['nome']);
        $query = mysqli_query($conn, "SELECT * FROM users WHERE nome = '{$nome}'");
        if (mysqli_num_rows($query) > 0) {
            $result = mysqli_fetch_assoc($query);
            $_SESSION['id'] = $result['id'];
            header('location: quadroH.php');
        }
    }
}