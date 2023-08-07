<!DOCTYPE html>
<html>

<head>
  <title>Metas Diárias</title>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>

<body class="body1" onload="carregarPagina()">


  <form action="metas.php" method="post">
    <label class="label1" for="metas">Escolha a meta a ser adicionada:</label>

    <select class="select1" name="metas" id="metas">
      <option value="Vida Pessoal">Vida Pessoal</option>
      <option value="Vida Acadêmica">Vida acadêmica</option>
      <option value="Autocuidado">Autocuidado</option>
      <option value="Família e Relacionamentos">Família e Relacionamentos</option>
      <option value="Felicidade e Lazer">Felicidade e lazer</option>
    </select>
    <br><br>

    <!-- <div id="selectMeses"></div> NÃO TIRE, O CÓDIGO NÃO FUNCIONA SEM ELE KKK-->
    <select class="select2" name="meses" id="select">
    </select>

    <input  class="input1" placeholder="Digite a meta:" type="text" name="meta_add" id="add">
    <br>
    <input class="btn1" type="button" value="Inserir" onclick="inserirMeta()">
    </div>
    <a href="metas.php"> <button class="btn2" type="submit">Ver metas</button></a>
    <a href="../ProtectedPage.php"> <button class="btn3" type="button">Voltar</button></a>
  </form>
  
  

  <script src="js2.js"></script>
  <script src="js1.js"></script>
</body>
</html>
