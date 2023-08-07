<?php
session_start();
if (isset($_SESSION['id'])) {
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='estilo/prinpag44.css'>
    <link rel="shortcut icon" type="imagex/png" href="img/logoico.ico">
    <title>Página Principal</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  </head>

  <body>
    <div class="cont">
      <div class="sidebar active">
        <div class="menu-btn">
          <i class='bx bx-chevrons-left'></i>
        </div>
        <div class="head">
          <div class="user-img">
            <img src="img/logo.png" alt="" />
          </div>
          <div class="user-details">
            <p class="title"> Usúario: </p>
            <p class="name"> <?php echo $_SESSION['user'] ?> </p>
          </div>
        </div>
        <div class="nav">
          <div class="menu">
            <p class="title"> Perfil </p>
            <ul>
              <li>
                <a href="#">
                  <i class="bx bxs-user"></i>
                  <span class="text"> Perfil </span>
                  <i class='bx bx-chevron-down'></i>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a href="#">
                      <span class="text"> Usuário: <?php echo $_SESSION['user'] ?> </span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="text"> Nome: <?php echo $_SESSION['nome'] ?> </span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="text"> Data de Nascimento: <?php echo date('d/m/Y', strtotime($_SESSION['data_nasc'])) ?> </span>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <span class="text"> Email: <?php echo $_SESSION['email'] ?> </span>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="menu">
            <p class="title"> Funções </p>
            <ul>
              <li>
                <a href="#">
                  <i class='bx bxs-timer'></i>
                  <span class="text"> Modo SMART </span>
                </a>
              </li>
              <li>
                <a href="Pmidias/index.php">
                  <i class='bx bxs-book-reader'></i>
                  <span class="text"> Controle de Leituras </span>
                </a>
              </li>
              <li>
                <a href="Diarios.php">
                  <i class='bx bxs-book-heart'></i>
                  <span class="text"> Diário Emocional </span>
                </a>
              </li>
              <li>
                <a href="WeekPlan.php">
                  <i class='bx bxs-calendar'></i>
                  <span class="text"> Cronograma </span>
                </a>
              </li>
              <li>
                <a href="Planejamentos.php">
                  <i class='bx bxs-book-bookmark'></i>
                  <span class="text"> Agenda </span>
                </a>
              </li>
              <li>
                <a href="#">
                  <i class='bx bxs-calendar-check'></i>
                  <span class="text"> Rotina </span>
                </a>
              </li>
              <li>
                <a href="Habitos.php">
                  <i class='bx bx-list-check'></i>
                  <span class="text"> Hábitos </span>
                </a>
              </li>
              <li>
                <a href="Metas/index.php">
                  <i class='bx bx-line-chart'></i>
                  <span class="text"> Metas </span>
                </a>
            </ul>
          </div>
        </div>
        <div class="menu">
          <p class="title"> Exit </p>
          <ul>
            <li>
              <a class="logout" href="LogOff.php">
                <i class='bx bx-log-out'></i>
                <span class="text"> Logout </span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="timeline">
        <div class="container left-container">
          <img src="img/modSmart.png">
          <div class="text-box">
            <h2> Modo SMART </h2>
            <p> Ofertar acesso à playlist de estudos e cronômetro, que vai armazenar o tempo estudado, para sua visualização posterior e, assim, ajudar a manter a motivação pela percepção do avanço nos estudos; </p>
            <span class="left-container-arrow"></span>
          </div>
        </div>
        <div class="container right-container">
          <img src="img/contLei.png">
          <div class="text-box">
            <h2> Controle de Leituras </h2>
            <p> Facilitar o hábito da leitura por meio da viabilidade do acompanhamento nessa aba; </p>
            <span class="right-container-arrow"></span>
          </div>
        </div>
        <div class="container left-container">
          <img src="img/diaEmoc.png">
          <div class="text-box">
            <h2> Diário Emocional </h2>
            <p> Possibilita registros utilizados para o reconhecimento das emoções vivenciadas a cada dia e a sua visualização posterior. </p>
            <span class="left-container-arrow"></span>
          </div>
        </div>
        <div class="container right-container">
          <img src="img/crono.png">
          <div class="text-box">
            <h2> Cronograma </h2>
            <p> Organização das atividades que serão realizadas a cada semana em cada dia dela; </p>
            <span class="right-container-arrow"></span>
          </div>
        </div>
        <div class="container left-container">
          <img src="img/age.png">
          <div class="text-box">
            <h2> Agenda </h2>
            <p> Registro de compromissos fixos futuros; </p>
            <span class="left-container-arrow"></span>
          </div>
        </div>
        <div class="container right-container">
          <img src="img/rot.png">
          <div class="text-box">
            <h2> Quadro-horário da Rotina </h2>
            <p> Essa funcionalidade tem como propósito ajudar a manter uma rotina de bem-estar e hábitos saudáveis, por intermédio da disponibilização de um espaço em que você vai fixar seus horários e o que será feito em cada momento do seu dia; </p>
            <span class="right-container-arrow"></span>
          </div>
        </div>
        <div class="container left-container">
          <img src="img/hab.png">
          <div class="text-box">
            <h2> Rastreador de Hábitos </h2>
            <p> Viabilizar um acompanhamento dos hábitos que se deseja cultivar; </p>
            <span class="left-container-arrow"></span>
          </div>
        </div>
        <div class="container right-container">
          <img src="img/met.png">
          <div class="text-box">
            <h2> Metas </h2>
            <p> Permite a produção e visualização de um panorama de planejamento dos estudos e de outras áreas da vida pessoal, para agir como facilitadores da organização da vida em geral, para ajudar a alcançar os seus objetivos. </p>
            <span class="right-container-arrow"></span>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.js" integrity="sha512-8Z5++K1rB3U+USaLKG6oO8uWWBhdYsM3hmdirnOEWp8h2B1aOikj5zBzlXs8QOrvY9OxEnD2QDkbSKKpfqcIWw==" crossorigin="anonymous"></script>
  <script>
    $('html, body').animate({scrollTop:0}, 'slow');
    $(".menu > ul > li").click(function(e) {

      $(this).siblings().removeClass("active");

      $(this).toggleClass("active");

      $(this).find("ul").slideToggle();

      $(this).siblings().find("ul").slideUp();

      $(this).siblings().find("ul").find("li").removeCLass("active");

      $(".sidebar").toggleClass("oi");
    });

    $(".menu-btn").click(function() {
      $(".sidebar").toggleClass("active");
    });
  </script>

  </html>
<?php
} else {
  echo 'Acesso Negado.';
}
?>