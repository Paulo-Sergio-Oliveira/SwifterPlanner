<?php
session_start();
include_once('Connect.php');
include_once('Crud.php');
$obj = new Crud($conn);
$plantitle = $obj->getPlanTitle();

foreach ($plantitle as $key) {
    $id = $key["id"];
    echo "<h2>".$key["titulo"]."</h2>";
    echo "<p>Data: ".date('d/m/Y',strtotime($key['data']))."</p>";
}
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Planejamento</title>
    <link rel='stylesheet' type='text/css' href='Bootstrap/css/estilo.css'>
<link rel='stylesheet' type='text/css' href='Bootstrap/css/bootstrap.min.css'>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200;300;400;500&family=Open+Sans:wght@300;400;500;600&display=swap');
* {
    font-family: 'Inter', sans-serif;
}


body{
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
</head>
<body>
	<form action="InsertPlan.php?id=<?=$id;?>" method="post">
        <label for="plan">Planejamento:</label>
        <input type="text" id="plan" name="plan">
		<label for="hora_de">De:</label>
		<input type="time" id="hora_de" name="hora_de">
        <label for="hora_ate">Até:</label>
		<input type="time" id="hora_ate" name="hora_ate">
		<input class="button" type="submit" value="Inserir">
	</form>
    <?php
    foreach ($plantitle as $key) {
        $id_tit = $key['id'];
        $plan = $obj->getAllPlan($id_tit);
        foreach ($plan as $line) {
            echo "<p>Plano: ".$line["planejamento"]." - Início: ".$line["hora_de"]." - Fim: ".$line["hora_ate"]."</p>";
        }
    }
?>
    <a href="Planejamentos.php"><button class="button" type="button">Concluir</button></a>
</body>
</html>

