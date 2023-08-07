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
        margin: 20px;
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
<form action="InsertWP.php" method="POST">
<table border="1">
        <tr><th>Semana</th>
        <th>Domingo</th>
        <th>Segunda</th>
        <th>Terça</th>
        <th>Quarta</th>
        <th>Quinta</th>
        <th>Sexta</th>
        <th>Sábado</th></tr>
        <tr align="center">
        <td><select name="semana">
          <?php
          for ($i=0; $i < 10; $i++) {
            $pri = -1+$i; 
            $data = date('d/m/Y', strtotime("sunday $pri week"))." a ".date('d/m/Y', strtotime("saturday +$i week"));
            echo "<option value='".$data."'>".$data."</option>";
          }
          ?>
        </select></td>
        <td> <textarea name="dom" cols="14" rows="5"></textarea></td>
        <td> <textarea name="seg" cols="14" rows="5"></textarea></td>
        <td> <textarea name="ter" cols="14" rows="5"></textarea></td>
        <td> <textarea name="qua" cols="14" rows="5"></textarea></td>
        <td> <textarea name="qui" cols="14" rows="5"></textarea></td>
        <td> <textarea name="sex" cols="14" rows="5"></textarea></td>
        <td> <textarea name="sab" cols="14" rows="5"></textarea></td></tr>
</table>
<button class="button" type="submit">Inserir</button>
<a href="WeekPlan.php"><button class="button" type="button">Voltar</button></a>
</form>