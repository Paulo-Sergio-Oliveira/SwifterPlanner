<!DOCTYPE html>
<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href="estilo/cad.css">
    <title>Insert</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <form method="POST" action="InsertC.php">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se</h1>
                    </div>
                    <div class="login-button">
                        <button><a href="index.php">Voltar</a></button>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label >Nome</label>
                        <input type="text" name="nome" placeholder="Digite seu nome" required>
                    </div>

                    <div class="input-box">
                        <label >E-mail</label>
                        <input type="email" name="email" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label >Data de Nascimento</label>
                        <input maxlength="10" type="text" name="data" onkeydown="javascript: fMasc(this,mCPF)" placeholder="Digite sua data de nascimento" required>
                    </div>

                    <div class="input-box">
                        <label >Usuário</label>
                        <input  type="text" name="user" placeholder="Digite seu usuário" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Senha</label>
                        <input minlength="8" id="password" type="password" name="pass" placeholder="Digite sua senha" required>
                    </div>

                    <div class="input-box">
                        <label for="confirmPassword">Confirme sua Senha</label>
                        <input minlength="8" id="confirmPassword" type="password" name="conpass" placeholder="Digite sua senha novamente" required>
                    </div>

                </div>

                <div class="continue-button">
                    <button type="submit"><a >Continuar</a> </button>
                    
                </div>
                <div class="plogin">
                <a href="Login.php"> Já Possui Login?</a>
                </div>
            </form>
        </div>
    </div>

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

</body>

</html>