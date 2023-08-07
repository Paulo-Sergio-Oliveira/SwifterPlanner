<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="categories">
        <img src="img/todos.png" heigth="50px" width="50px" alt="" class="logo">
        <button type="button" class="category" value="Fiction">FICÇÃO CIÊNTIFICA</button>
        <button type="button" class="category" value="Horror">TERROR</button>
        <button type="button" class="category" value="Biography">BIOGRAFIA</button>
        <button type="button" class="category" value="Drama">DRAMA</button>
        <button type="button" class="category" value="Philosophy">FILOSOFIA</button>
        <button type="button" class="category" value="Education">EDUCAÇÃO</button>
        <button type="button" class="category" value="Health">SAÚDE</button>
        <button type="button" class="category" value="Psychology">PSICOLOGIA</button>
        <button type="button" class="category" value="Sociology">SOCIOLOGIA</button>
        <a class="link" href="prateleira.php">PRATELEIRA</a>
        <a class="link" href="../ProtectedPage.php">VOLTAR</a>
    </div>
    <div class="container">
        <div id="title" class="center">
            <h1 id="header" class="text-center mt-5" style="color: white">Book Finder</h1>
            <div class="row">
                <div id="input" class="input-group mx-auto col-lg-6 col-md-8 col-sm-12">
                    <input id="search-box" type="text" class="form-control" placeholder="Buscar livros!...">
                    <button id="search"  style="background-color: #6f42c1; border: none;"class="btn btn-primary" onclick="">Buscar</button>
                </div>
            </div>
        </div>
        <div class="book-list" >
            <h2 class="text-center">Resultados Encontrados</h2>
            <div id="list-output" class="">
                <div class="row">
                <!-- card  -->
  
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" 
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" 
    integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" 
    crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
</body>
</html>