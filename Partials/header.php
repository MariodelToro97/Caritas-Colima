<header id="headerProyecto" class="">
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background: rgba(236, 24, 12, 1)">
      <a href="">
        <img class="rounded" src="../Pictures/LogoC.png" style="height:50px; weight: 50px;">
        <a class="navbar-brand ml-3" style="font-size: 24px; color: rgb(255, 255, 255)" href="../Views/Menu.php"> Cáritas Colima</a>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <li class="nav-item dropdown">
            <a style="color: rgb(255, 255, 255)" class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Grupos
            </a>
            <div class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">
              <a style="color: rgb(0, 0, 0)" class="dropdown-item" href="instituciones.php" id="verGrupo">Visualizar Grupos</a>
              <a style="color: rgb(0, 0, 0)" class="dropdown-item" data-toggle="modal" data-target="#agregarGrupo" id="addGrupos" href="">Agregar Grupo</a>
            </div>
          </li>

          <li class="nav-item dropdown">
            <a style="color: rgb(255, 255, 255)" class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Actividades
            </a>
            <div class="dropdown-menu bg-danger" aria-labelledby="navbarDropdown">
              <a style="color: rgb(0, 0, 0)" class="dropdown-item" href="actividades.php" id="verActividad">Visualizar Actividades</a>
              <a style="color: rgb(0, 0, 0)" class="dropdown-item" href="" data-toggle="modal" data-target="#agregarActividad" href="" id="addActivity">Agregar Actividad</a>
            </div>
          </li>
           <div class="dropdown-divider"></div>

           <?php
           if ($_SESSION['rol'] == 2) {
             $nombre = 'Niños';
           } else {
             $nombre = 'Adultos';
           }
            ?>

           <a style="color: rgb(255, 255, 255);" class="nav-item nav-link active ml-5 font-italic font-weight-bold">Sesión Iniciada con el rol: <a style="color: rgb(255, 255, 255); font-size: 18px;" class="nav-item nav-link active ml-2 font-italic font-weight-bold"><?php echo $nombre; ?></a></a>
            <a style="color: rgb(255, 255, 255);" class="nav-item nav-link active ml-5" data-toggle="modal" data-target="#cerrarSesion" href="">Cerrar Sesión</a>
        </div>
      </div>
    </nav>
</header>
