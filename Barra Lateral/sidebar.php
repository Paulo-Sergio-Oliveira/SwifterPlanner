<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
            <p class="title"> Usuário: </p>
            <p class="name"> <?php echo $_SESSION['user'] ?> </p>
          </div>
        </div>
        <div class="nav">
          <div class="menu">
            <p class="title"> Main </p>
            <ul>
              <li>
                <a href="ProtectedPage.php">
                  <i class="bx bxs-home"></i>
                  <span class="text"> Home </span>
                </a>
              </li>
            </ul>
          </div>
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
                    <a>
                      <span class="text"> Usuário: <?php echo $_SESSION['user'] ?> </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="text"> Nome: <?php echo $_SESSION['nome'] ?> </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="text"> Data de Nascimento: <?php echo date('d/m/Y', strtotime($_SESSION['data_nasc'])) ?> </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="text"> Email: <?php echo $_SESSION['email'] ?> </span>
                    </a>
                  </li>
                  <li>
                    <a class="edit" href="">
                     <i class='bx bxs-edit-alt' ></i>
                     <span id="edit" class="text"> EDITAR </span>
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
                <a href="#">
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
                <a href="#">
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
    </div>