<?php
//incluindo a conexão e as classes no arquivo
include_once("../connect/connect.php");
include_once("../classes/sessao.php");

//extraindo as variaveis
extract($_POST);

//chama a função da sessao
$obj = new sessao($conn);

//está lendo os usuarios do bando de dados e pegando esses dados em uma array
$dados = $obj->readUsers();

//uso foreach para percorrer a array *$dados*
foreach($dados as $key => $valores){
    //verifica o hash comparando com o nome de usuario e senha
    if($nome == $valores->nome && $senha == $valores->senha){
        Sessao::autorizado($valores->id); 
        break;
    }else{
        //se não achar usuario e senha, não irá efetuar o login
        $loginNot = true; 
    }   
}
if($loginNot){
    //caso não efetue o login
    echo "Usuário não encontrado, tente novamente! <br>";
}

?>