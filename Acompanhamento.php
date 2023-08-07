<?php
session_start();
$id = $_SESSION['id'];
include_once('Connect.php');
include_once('Crud.php');
$obj = new Crud($conn);
$resultado = $obj->getWeekHab($id);
if (empty($resultado)) {
    echo '<div class="centro">
<h2>Não há nada por aqui :(<br></h2>
</div>';
}
$week = null;
$vetor = array();;
foreach ($resultado as $key) {
    if ($week == $key['semana']) {
    }else {
        $vetor = array_merge($vetor,array($key['semana']));
    }
    $week = $key['semana'];
}
?>

<link rel='stylesheet' type='text/css' href='Bootstrap/css/estilo.css'>
<title>Diários</title>
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
.centro{
display: flex;
align-items: center;
justify-content: center;
}
.b{
border: 1px solid black;
border-radius: 5%; 
margin-right: 10px;
}
.bd{
border-right: 1px solid black;
}
</style>
<?php
foreach ($vetor as $semana) {
echo '<div class="centro">
<h2>Semana: '.$semana.'<br></h2>
</div>
<div class="centro">
<table class="b">
<tr><th class="bd">Hábito</th><th>Total de Dias</th></tr>';
$resultado = $obj->readHab($id, $semana);
foreach ($resultado as $key) {
    echo "<tr align='center'><td class='bd'>".$key["titulo"]."</td><td>".$key["total"]."</td>";
}
echo '</table>
</div>';
}
?>
<div class="centro">
<p><a href="Habitos.php"><button type="button" class="button">Voltar</button></a></p>
</div>