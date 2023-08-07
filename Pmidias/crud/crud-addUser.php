<?php
//incluindo a conexão e as classes no arquivo
include_once("../connect/connect.php");
include_once("../classes/Cad.php");

//extraindo as variaveis
extract($_POST); 

    //chama a função do cad
$obj = new cad($conn);

    //esta setando o nome, senha e email nas variaveis la no Cad.php
$obj->setDadosCad($nome,$senha);

    //Está inserindo os dados no Banco de Dados :)
$obj->insertCad();
?>