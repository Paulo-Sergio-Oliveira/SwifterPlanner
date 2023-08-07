<?php
session_start();
$id = $_SESSION['id'];
include_once('Connect.php');
include_once('Crud.php');
$obj = new Crud($conn);
$diario = $obj->getDiario($id);
?>
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
    justify-content: flex-start;
    flex-direction: column;
    align-items: center;
    background: #2f2e6a;
    padding: 40px;
}
button {
  border: none; 
  background-color: #7ff5ff;
  padding: 0.4rem 1rem;
  border-radius: 5px;
  cursor: pointer;
}

button:hover {
  background-color: #6b63fff1;
}

#excluir{
    background-color: #d63031;
}

#excluir:hover{
    background-color: #c0392b;
}

.col{
    border: 1px solid white;

    padding: 20px;
}

.container{
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    justify-content: center;
    margin-top: 10px;
    margin-bottom: 10px;
    color: #fff;
    }
    .conte{
        background-color: #fff;
        border-radius: 10px;
        padding: 10px;
        color: #000;    
    }
    span{
        font-size: 13px;
        color: #fff;
    }



</style>
    <title>Diários</title>
    <script>
    function mudar() {
        document.getElementById("suma").style.display = "none";
        let pesquisa = document.getElementById("Search").value;
        console.log(pesquisa);
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
    <form action="ReadDiario.php" method="POST">
    <span>Pesquisar por:</span>
    <select class="form-select-sm" aria-label="Default select example" id="Search" name="pesquisa" onchange="mudar()">
        <option id="suma">Selecione a opção</option>
        <option value='data'>Data</option>
        <option value='titulo'>Título</option>
    </select>
    <div class="data">
    <span>Diários da data</span>
        <select name="data">
            <option value=''>Selecione a Data</option>
            <?php foreach ($diario as $key) {
                if ($date == $key['data']) {
                }else {
                    echo "<option value='".$key['data']."'>".date('d/m/Y',strtotime($key['data']))."</option>";
                }
                $date = $key['data'];
            }?> 
        </select>
        <button type="submit">Pesquisar</button>
    </div>
    <div class="titulo">
    <span>Diários com Título</span>
        <select class="form-select-sm" aria-label="Default select example" name="titulo">
            <option value=''>Selecione o Título</option>
            <?php foreach ($diario as $key) {
                if ($title == $key['titulo']) {
                }else {
                    echo "<option value='".$key['titulo']."'>".$key['titulo']."</option>";
                }
                $title = $key['titulo'];
            }?>
        </select>
        <button type="submit">Pesquisar</button>
    </div>     
    </form>
<div class="container">  
<?php

foreach ($diario as $key) {
    
    echo "
            <div class='col'>
             <h2>".$key["titulo"]."</h2>";
    echo "<p> Data: ".date('d/m/Y',strtotime($key['data']))."</p>";
    echo "<p class='conte'>".$key["conteudo"]."</p>";
    echo '<a href="DeleteD.php?id='.$key["id"].'"><button id="excluir"; type="button">Excluir Diário</button></a>
            </div>';
}

?>
</div>
<div class="links">
<a href="NewDiario.php"><button type="button">Inserir Diário</button></a>
<a href="ProtectedPage.php"><button type="button">Voltar</button></a>

</div>