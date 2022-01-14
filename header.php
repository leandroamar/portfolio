<header class="container">
    <nav class="navbar navbar-expand-md mb-4">
      <div class="container-fluid px-0">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
          aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
            <li class="nav-item px-3 pe-sm-3">
              <a class="nav-link py-2 px-4 <?php echo ($pg == "inicio") ? "active" : "" ?>" href="index.php">Inicio</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link px-3 <?php echo ($pg == "sobre-mi") ? "active" : "" ?>" href="sobre-mi.php">Sobre mí</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link px-3 <?php echo ($pg == "proyectos") ? "active" : "" ?>" href="proyectos.php">Proyectos</a>
            </li>
            <li class="nav-item px-3">
              <a class="nav-link px-3 <?php echo ($pg == "contacto") ? "active" : "" ?>" href="contacto.php">Contacto</a>
            </li>
          </ul>
          <div class="nav-item px-3 pe-sm-3">
                <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
          </div>
        </div>
      </div>
    </nav>
  </header>