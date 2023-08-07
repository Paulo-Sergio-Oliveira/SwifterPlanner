<title>Mudar Planos</title>
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
$plantitle = $obj->getPlan($id);

foreach ($plantitle as $key) {
    echo '<form action="UpdateTP.php?id='.$key['id'].'&id_tit='.$key['id'].'" method="post">
        <label for="data">Data:</label>
        <input type="date" id="data" name="data" value="'.$key['data'].'">
		<label for="titulo">Título:</label>
		<input type="text" id="titulo" name="titulo" value="'.$key['titulo'].'">
        <input class="button" type="submit" value="Alterar">
        </form>';
    $id_tit = $key['id'];
    $plan = $obj->getAllPlan($id_tit);
    foreach ($plan as $line) {
        echo '<form action="UpdateLP.php?id='.$line['id'].'&id_tit='.$key['id'].'" method="post">
        <label for="plan">Planejamento:</label>
        <input type="text" id="plan" name="plan" value="'.$line['planejamento'].'">
		<label for="hora_de">De:</label>
		<input type="time" id="hora_de" name="hora_de" value="'.$line['hora_de'].'">
        <label for="hora_ate">Até:</label>
		<input type="time" id="hora_ate" name="hora_ate" value="'.$line['hora_ate'].'">
        <a href="DeleteLP.php?id='.$line["id"].'&id_tit='.$key['id'].'"><button type="button">Excluir</button></a>
        <input type="submit" value="Alterar"><br>
        </form>';
    }
    echo '<a href="Planejamentos.php"><button class="button" type="button">Concluir</button></a>';
}
?>