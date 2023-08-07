<?php session_start();?>
<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
<title>Atualização</title>
<style> 
body{
    background: #2f2e6a;
}

h2{
    color: white;
}

.input-group-text{
    background-color: black;
    border: none;
    margin-bottom: 5px;
    color: #fff;
}
</style>
<script>
        function fMasc(objeto,mascara) {
            obj=objeto
            masc=mascara
        setTimeout("fMascEx()",1)
        }

        function fMascEx() {
            obj.value=masc(obj.value)
        }

        function mCPF(cpf){
            cpf=cpf.replace(/\D/g,"")
            cpf=cpf.replace(/(\d{2})(\d)/,"$1/$2")
            cpf=cpf.replace(/(\d{2})(\d)/,"$1/$2")
            return cpf
        }
    </script>
<div class="container" style="margin-top: 20px;">
    <header> <h2>Alterar Cadastro</h2> </header>
        <form method="POST" action="Update.php?id=<?=$_SESSION['id'];?>">
            <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">Nome</span>
                <input autofocus type="text" value="<?=$_SESSION['nome'];?>" name="nome" class="form-control" placeholder="Insira o Nome aqui" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">E-mail</span>
                <input type="email" value="<?=$_SESSION['email'];?>" name="email" class="form-control" placeholder="Exemplo@gmail.com" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <div class="mb-3">
                <span class="input-group-text" id="inputGroup-sizing-lg">Data de nascimento</span>
                <input type="text" name="data" value="<?=$_SESSION['data_nasc'];?>" maxlength="10" onkeydown="javascript: fMasc(this,mCPF)" class="form-control" placeholder="Insira sua data de nascimento aqui" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>
            <div style="display: none;">
                <input type="text" name="usuario" value="<?=$_SESSION['user'];?>">
            </div>
            <div style="display: none;">
                <input type="text" name="senha" value="<?=$_SESSION['pass'];?>">
            </div>
            <button type="submit" class="btn btn-primary btn-dark">Alterar Dados</button>
            <a href="ProtectedPage.php"><button type="button" class="btn btn-primary btn-dark">Voltar</button> </a>
        </form>
</div>