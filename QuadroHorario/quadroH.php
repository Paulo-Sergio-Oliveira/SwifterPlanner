<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quadro-Horário</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body onload="onloading()">
<header>
  <h2>Tabela de Hábitos e Horários</h2>
  <a href="index.php"><button type="button">Voltar</button></a>
</header>
  <table class="habitos-table">
  <thead>
      <tr>
        <th>Horário</th>
        <th>Segunda-feira</th>
        <th>Terça-feira</th>
        <th>Quarta-feira</th>
        <th>Quinta-feira</th>
        <th>Sexta-feira</th>
        <th>Sábado</th>
        <th>Domingo</th>
        <th colspan="2" >Ações</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
    <tr hidden id="insertH">
      <td><input type="time" id="time"></td>
      <td><input type="text"id="monday"></td>
      <td><input type="text"id="tuesday"></td>
      <td><input type="text"id="wednesday"></td>
      <td><input type="text"id="thursday"></td>
      <td><input type="text"id="friday"></td>
      <td><input type="text"id="saturday"></td>
      <td><input type="text"id="sunday"></td>
      <td colspan="2" ><button class="add-button" onclick="insertHabit()" type="button">Adicionar Hábito</button></td>
    </tr>
  </table>
  <br>
  <button type="button" id="+" class="add-button" onclick="addHabits(this)"><i class="fa-solid fa-folder-plus"></i></button>
  <button type="button" id="-" class="add-button" hidden onclick="removeHabits(this)" type="button">-</button>
  </table>
  <script src="javascript.js"></script>
</body>
</html>