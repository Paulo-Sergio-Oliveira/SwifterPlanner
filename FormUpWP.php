<link rel='stylesheet' type='text/css' href='Bootstrap/css/estilo.css'>
<link rel='stylesheet' type='text/css' href='Bootstrap/css/bootstrap.min.css'>

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
        margin: 20px;
  border: none; 
  background-color: #7ff5ff;
  padding: 0.4rem 1rem;
  border-radius: 5px;
  cursor: pointer;
}
.button:hover {
  background-color: #6b63fff1;
}
</style>
<?php
$id = $_GET['id'];
include_once('Connect.php');
include_once('Crud.php');
$obj = new Crud($conn);
$weekplan = $obj->getWPlan($id);
echo '<form action="UpdateWP.php?id='.$id.'" method="POST">
        <table border="1">
        <tr><th>Domingo</th>
        <th>Segunda</th>
        <th>Terça</th>
        <th>Quarta</th>
        <th>Quinta</th>
        <th>Sexta</th>
        <th>Sábado</th></tr>';
foreach ($weekplan as $key) {
    echo '<tr align="center">
    <td> <textarea name="dom" cols="15" rows="5">'.$key['domingo'].'</textarea></td>
    <td> <textarea name="seg" cols="15" rows="5">'.$key['segunda'].'</textarea></td>
    <td> <textarea name="ter" cols="15" rows="5">'.$key['terca'].'</textarea></td>
    <td> <textarea name="qua" cols="15" rows="5">'.$key['quarta'].'</textarea></td>
    <td> <textarea name="qui" cols="15" rows="5">'.$key['quinta'].'</textarea></td>
    <td> <textarea name="sex" cols="15" rows="5">'.$key['sexta'].'</textarea></td>
    <td> <textarea name="sab" cols="15" rows="5">'.$key['sabado'].'</textarea></td></tr>';
}
?>
</table>
<button type="submit" class="button">Alterar</button>
<a href="WeekPlan.php"><button class="button" type="button">Voltar</button></a>
</form>