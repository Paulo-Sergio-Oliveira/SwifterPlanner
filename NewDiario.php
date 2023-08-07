<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	color: white;
}
.button {
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
    <title>Novo Diário</title>
</head>
<body>
    <h1>Meu Diário</h1>
	<form action="InsertD.php" method="post">
		<label for="titulo">Título:</label><br>
		<input type="text" id="titulo" name="titulo"><br>
		<label for="conteudo">Conteúdo:</label><br>
		<textarea id="conteudo" name="conteudo"></textarea><br><br>
		<input class="button" type="submit" value="Salvar">  
		<a href="ProtectedPage.php"><button class="button" type="button">Voltar</button></a>
	</form>
</body>
</html>