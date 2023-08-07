<?php
session_start();
$id = $_SESSION['id'];
include_once("conect.php"); //importando o arquivo de conexão
include_once("Crud.php"); //importando a classe


if (isset($_POST['metas']) && isset($_POST['areaMeta']) && isset($_POST['mes'])) {
  $meta = $_POST['metas'];
  $area = $_POST['areaMeta'];
  $mes = $_POST['mes'];
  $concluida = 0;
  switch ($mes) {
    case 'Janeiro':
      $mesAtual = 1;
      break;
    case 'Fevereiro':
      $mesAtual = 2;
      break;
    case 'Março':
      $mesAtual = 3;
      break;
    case 'Abril':
      $mesAtual = 4;
      break;
    case 'Maio':
      $mesAtual = 5;
      break;
    case 'Junho':
      $mesAtual = 6;
      break;
    case 'Julho':
      $mesAtual = 7;
      break;
    case 'Agosto':
      $mesAtual = 8;
      break;
    case 'Setembro':
      $mesAtual = 9;
      break;
    case 'Outubro':
      $mesAtual = 10;
      break;
    case 'Novembro':
      $mesAtual = 11;
      break;
    case 'Dezembro':
      $mesAtual = 12;
      break;
  }
  $anoIns = date('Y');

  // Aqui vai  normal, pega os dados atravéz do AJAX e mando pro BD, só isso
  $obj = new Crud($con);
  $obj->setDados($mes,$area,$concluida,$meta,$anoIns,$id);
  $obj->insertDados();

  echo "Meta inserida com sucesso!";
}

?>