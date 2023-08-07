<?php
session_start();
include_once('Connect.php');
include_once('Crud.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus Hábitos</title>
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
  margin-top: 10px;
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
    font-size: 25px;
}

.bxs-edit-alt{
    color: #7ff5ff;
}

</style>
</head>
<body>
    <form action="InsertH.php" method="POST">
    Insira um novo hábito:
    <input type="text" class="form-control" id="exampleFormControlTextarea1" rows="3" name="titulo">
    <button class="button">Inserir</button>
    </form>
    <br>
    <form action="SalvarHab.php" method="POST">
    <table class="table table-bordered">
    <?php
        if (date('D')=='Sun') {
          $data = date('d/m/Y', strtotime("sunday"))." a ".date('d/m/Y', strtotime("saturday +0 week"));
        } else {
          $data = date('d/m/Y', strtotime("sunday -1 week"))." a ".date('d/m/Y', strtotime("saturday +0 week"));
        }
        ?>
    <tr><th colspan="9">Semana: <?=$data?></th></tr>
    <tr><th>Hábito</th><th>Domingo</th><th>Segunda</th><th>Terça</th><th>Quarta</th><th>Quinta</th><th>Sexta</th><th>Sábado</th><th>Função</th></tr>
    <?php 
        $obj = new Crud($conn);
        $id = $_SESSION['id'];
        $dado = $obj->getHabitos($id);
        foreach($dado as $info) {
            echo '<tr align="center">
            <td>'.$info['titulo'].'</td>
            <td><input class="form-check-input" id="flexCheckDefault" type="checkbox" value="domingo" name="domingo'.$info['id'].'" '.$info['domingo'].'></td>
            <td><input class="form-check-input" id="flexCheckDefault" type="checkbox" value="segunda" name="segunda'.$info['id'].'" '.$info['segunda'].'></td>
            <td><input class="form-check-input" id="flexCheckDefault" type="checkbox" value="terca" name="terca'.$info['id'].'" '.$info['terca'].'></td>
            <td><input class="form-check-input" id="flexCheckDefault" type="checkbox" value="quarta" name="quarta'.$info['id'].'" '.$info['quarta'].'></td>
            <td><input class="form-check-input" id="flexCheckDefault" type="checkbox" value="quinta" name="quinta'.$info['id'].'" '.$info['quinta'].'></td>
            <td><input class="form-check-input" id="flexCheckDefault" type="checkbox" value="sexta" name="sexta'.$info['id'].'" '.$info['sexta'].'></td>
            <td><input class="form-check-input" id="flexCheckDefault" type="checkbox" value="sabado" name="sabado'.$info['id'].'" '.$info['sabado'].'></td>
            <td><a href=DeleteH.php?id='.$info['id'].'><i class="bx bx-trash-alt"></i></a></td>
            </tr>';
        }
    ?>
    </table>
    <br>
    <a href='ProtectedPage.php'><button class="button" type='button'>Voltar</button> </a>
    <a href='ClearHab.php'><button class="button" type='button'>Limpar</button> </a>
    <button class="button" type='submit'>Salvar</button>
    <a href='Acompanhamento.php'><button class="button" type='button'>Desempenho</button> </a>
    </form>
</body>
</html>