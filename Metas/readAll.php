<?php
include_once("conect.php"); //importando o arquivo de conexão
include_once("Crud.php"); //importando a classe
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Style.css">
</head>
<body class="body3">
    
</body>
</html>
<?php
$id = $_SESSION['id'];
$obj = new Crud($con);
//Recebe o array retornado
$resultado = $obj->pegaConcluidas($id);

if (count($resultado) === 0) {
    echo "Todas as metas cumpridas, PARABÉNS! :)";
} else {

    echo "<table class='table table-bordered' border = '1' >";
    echo "<tr> <th> MÊS </th> <th> ANO </th> <th> META </th> <th> ÁREA </th> <th> CONCLUIDA </th> <th> EXCLUIR </th> </tr>";
    foreach ($resultado as $row) {

        $valorAno = $row['anoIns'];
        $valorAnoAtual = date('Y');
        //echo $valorAnoAtual;
        //echo $valorAno;
        switch ($row['mesSelecionado']) {
            case 'Janeiro':
            $valormes = 1;
            break;
            case 'Fevereiro':
            $valormes = 2;
            break;
            case 'Março':
            $valormes = 3;
            break;
            case 'Abril':
            $valormes = 4;
            break;
            case 'Maio':
            $valormes = 5;
            break;
            case 'Junho':
            $valormes = 6;
            break;
            case 'Julho':
            $valormes = 7;
            break;
            case 'Agosto':
            $valormes = 8;
            break;
            case 'Setembro':
            $valormes = 9;
            break;
            case 'Outubro':
            $valormes = 10;
            break;
            case 'Novembro':
            $valormes = 11;
            break;
            case 'Dezembro':
            $valormes = 12;
            break;
        }
        $valorMesAtual = date('m');

        echo "<tr>
            <td>".$row['mesSelecionado']."</td>
            <td>".$row['anoIns']."</td>
            <td>".$row['metas']."</td>
            <td>".$row['areaMeta']."</td>
            <td>";
            if ($row['concluido'] == 1 && $valormes < $valorMesAtual && $valorAno < $valorAnoAtual) {
                echo "Concluída com Pendência";
            } else if ($row['concluido'] == 1 && $valormes < $valorMesAtual) {
                echo "Concluída com Pendência";
            } else if ($row['concluido'] == 1 && $valorAno < $valorAnoAtual) {
                echo "Concluída com Pendência";
            } else if ($row['concluido'] == 1) {
                echo "Concluída";
            } else {
                echo "<a href='javascript:void(0)' onclick='marcarConcluida(".$row['id'].")'>Marcar como concluída</a>";
            }
        echo "</td>
                <td>
                <a href='javascript:void(0)' onclick='excluirMeta(".$row['id'].")'>Excluir</a>
                </td>";
                
                if ($row['concluido'] == 0 && $valormes < $valorMesAtual && $valorAno < $valorAnoAtual) {
                    echo "<td style='color: red;'>Atrasada</td>";
                } else if ($row['concluido'] == 0 && $valormes < $valorMesAtual) {
                    echo "<td style='color: red;'>Atrasada</td>";
                } else if ($row['concluido'] == 0 && $valorAno < $valorAnoAtual) {
                  echo "<td style='color: red;'>Atrasada</td>";
                }

        echo "</tr>";
    }
    echo "</table>";
}
echo "<p><a href='metas.php'><button class='btn2' type='button'>Gerenciar Metas</button></a></p>";
echo "<script src='js1.js'></script>";
?>