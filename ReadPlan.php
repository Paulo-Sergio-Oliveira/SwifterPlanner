<?php
session_start();
$id = $_SESSION['id'];
$diasemana = array('Domingo', 'Segunda-Feira', 'Terça-Feira', 'Quarta-Feira', 'Quinta-Feira', 'Sexta-Feira', 'Sábado');
$pesquisa = $_POST['pesquisa'];
include_once('Connect.php');
include_once('Crud.php');
$obj = new Crud($conn);
if (empty($_POST['data']) or $pesquisa == "titulo") {
    if (empty($_POST['titulo']) or $pesquisa == "data") {
        header('Location: Planejamentos.php');
        die();
    } else {
        $titulo = $_POST['titulo'];
        $plantitle = $obj->ReadPlanT($id, $titulo);
    }
} else {
    $data = $_POST['data'];
    $plantitle = $obj->ReadPlanD($id, $data);
}
$planeja = $obj->getAllPlanTitle($id);
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .roxo{
            background: #2f2e6a;
        }
        .branco{
            background: white;
            border-radius: 5px;
            width: fit-content;
            border: solid 2px black;
        }
        .baixa{
            padding-bottom: 5px;
        }
        .centro{
            display: flex;
            flex-direction: row;
            justify-content: center;
        }
        .espace{
            padding: 5px;
            margin: 3px;
        }
        .container{
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content: center;
    margin-top: 10px;
    margin-bottom: 10px;
    }
    .meio{
        margin-top: 55px;
    }
    .conte{
        background-color: #fff;
        border-radius: 10px;
        padding: 10px;
        color: #000;    
    }
    </style>
    <script>
    function mudar() {
        document.getElementById("suma").style.display = "none";
        let pesquisa = document.getElementById("Search").value;
        if (pesquisa == "data") {
            document.querySelector(".data").style.display = "block";
            document.querySelector(".titulo").style.display = "none";
        } 
        if (pesquisa == "titulo"){
            document.querySelector(".data").style.display = "none";
            document.querySelector(".titulo").style.display = "block";
        }
    };
    </script>
    <link rel='stylesheet' type='text/css' href='Bootstrap/css/estilo.css'>
    <link rel='stylesheet' type='text/css' href='Bootstrap/css/bootstrap.min.css'>
    <title>Planejamentos</title>  
</head>
<body class="roxo">
    <div class="container">
    <div class="meio">
    <form action="ReadPlan.php" method="POST">
    <div class="branco espace">
    <span>Pesquisar por</span>
    <select id="Search" class="form-select-sm" aria-label="Default select example" name="pesquisa" onchange="mudar()">
        <option id="suma">Selecione a opção</option>
        <option value='data'>Data</option>
        <option value='titulo'>Título</option>
    </select>
        <div class="data">
        <span>Planejamentos da data</span>
        <select name="data" class="form-select-sm" aria-label="Default select example">
            <option value=''>Selecione a Data</option>
            <?php foreach ($plantitle as $key) {
                if ($date == $key['data']) {
                }else {
                    echo "<option value='".$key['data']."'>".date('d/m/Y',strtotime($key['data']))."</option>";
                }
                $date = $key['data'];
            }?> 
        </select>
        <button type="submit" class="btn btn-info">Pesquisar</button>
        </div>
        <div class="titulo">
        <span>Planejamentos com Título</span>
        <select class="form-select-sm" aria-label="Default select example" name="titulo">
            <option value=''>Selecione o Título</option>
            <?php foreach ($plantitle as $key) {
                if ($title == $key['titulo']) {
                }else {
                    echo "<option value='".$key['titulo']."'>".$key['titulo']."</option>";
                }
                $title = $key['titulo'];
            }?>
        </select>
        <button type="submit" class="btn btn-info">Pesquisar</button>
        </div>
        </div>
    </form>
    </div>
    <br>
    <div class="branco espace">
    <b>Novo Planejamento</b>
	<br><form action="InsertTPlan.php" method="post">
    <div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputPassword6" class="col-form-label">Data</label>
    </div>
    <div class="col-auto baixa">
        <input type="date" id="data" name="data" class="form-control">
    </div>
    </div>
    <div class="row g-3 align-items-center">
    <div class="col-auto">
        <label for="inputPassword6" class="col-form-label">Título</label>
    </div>
    <div class="col-auto baixa">
        <input type="text" id="titulo" name="titulo" class="form-control">
    </div>
    </div>
    <input type="submit" value="Salvar" class="btn btn-info">
    </div>
    </div>
    <br>
	</form>
    <div class="container">
    <?php
    foreach ($plantitle as $key) {
    $id_tit = $key['id'];
    $plan = $obj->getAllPlan($id_tit);
    $diasemana_numero = date('w', strtotime($key['data']));
    echo "<div class='branco espace'> <b>Título: ".$key["titulo"]."</b> <br> Dia: ".$diasemana[$diasemana_numero]." - Data: ".date('d/m/Y',strtotime($key['data']))."<hr>";
    foreach ($plan as $line) {
        echo "<p>Plano: ".$line["planejamento"]." - Início: ".date('H:i',strtotime($line["hora_de"]))." - Fim: ".date('H:i',strtotime($line["hora_ate"]))."</p>";
    }
    echo '<hr><a href="DeleteP.php?id='.$key["id"].'"><button type="button" class="btn btn-info">Excluir</button> </a>';
    echo '<a href="FormUpPlan.php?id='.$key["id"].'"><button type="button" class="btn btn-info">Alterar</button></a>';
    echo "</div><br>";
    }
    ?>
    </div>
    <br>
<a href="Planejamentos.php" class="centro"><button type="button" class="btn btn-info">Voltar</button></a>
</body>
</html>