<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="estilo/homer.css">
    <title>Bem-Vindo!</title>
</head>
<body>
    <div class="banner">
        <img class="layer-1" src="img/background.png">
        <img class="layer-2" src="img/meteor.png">

        <div class="layer-3">
            <h1> Bem - Vindo </h1>
            <p> Aprimore sua organização pessoal e profissional com o melhor sistema online de planejamento e gerenciamento. Faça seu cadastro ou login agora e aproveite os diferenciais integrados que oferecemos. </p>
            <a href="Cadastro.php"> Começar </a>
        </div>
        <img class="layer-4" src="img/4.png">
        <img class="layer-5" src="img/5.png">
        <img class="layer-6" src="img/6.png">
    </div>

    <div class="content">
        <h1> Swift Planner </h1>
        <p>  Apresentamos o sistema online de organização e planejamento pessoal e profissional, equipado com diferenciais integrados, como o diário emocional e acesso a artigos científicos. Essa plataforma foi desenvolvida especialmente para auxiliar estudantes na organização de sua rotina, proporcionando um ambiente propício para um planejamento consistente. Além disso, oferecemos um espaço dedicado ao diário emocional e à exposição de artigos científicos relacionados à saúde mental. Desfrute de todas essas funcionalidades em um único lugar, tornando sua jornada de aprendizado mais eficiente e saudável. 
        </p>
        <p> Tendo em vista a situação de dificuldade de organização vivenciada nos ambientes educacionais, é possível perceber como a dificuldade em se planejar por parte dessas pessoas pode afetar a saúde mental. Posto isso, convém referenciar a pesquisa realizada pelo Datafolha, divulgada em julho de 2022, a qual indica que 34% dos estudantes estão com dificuldades de gerenciar suas emoções desde que voltaram a ter aulas presenciais – percentual que sobe para 40% no Ensino Médio. Além disso, 24% dos alunos estão se sentindo sobrecarregados. A partir dessa conjuntura, é preocupante que muitos dos estudantes da Região Centro-Sul, assim como o fato elencado, não têm a oportunidade de ter acesso a meios de cuidar da saúde mental e, por conseguinte, cada vez mais, em decorrência da falta de constância para manter uma rotina eficaz que promova o bem-estar emocional, estão submetidos à ausência de hábitos benéficos e um estilo de vida saudável, a exemplo da escassez de tempo para o autocuidado e para o descanso pleno.   </p>


    </div>
    <script type="text/javascript">

        let layer_1 = document.querySelector('.layer-1');
        let layer_2 = document.querySelector('.layer-2');
        let layer_3 = document.querySelector('.layer-3');
        let layer_4 = document.querySelector('.layer-4');
        let layer_5 = document.querySelector('.layer-5');

        window.onscroll = function(){
            let Y = window.scrollY;

            layer_1.style.transform = 'translateY('+ Y/1.5 +'px)';
            layer_2.style.transform = 'translateY('+ Y/2 +'px)';
            layer_3.style.transform = 'translateY('+ Y/1.5 +'px)';
            layer_4.style.transform = 'translateY('+ Y/2 +'px)';
            layer_5.style.transform = 'translateY('+ Y/3 +'px)';
        }
    </script>
    <!-- <header>
        <div>
        <header> <h2>Página Inicial</h2> </header>
            <a href="Login.php"><button type="button" >Entrar</button> </a>
            <a href="Cadastro.php"><button type="button">Cadastrar</button> </a>
        </div>
    </header> -->
</body>
</html>