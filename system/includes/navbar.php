<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand text-info" href="#">
            <img src="../assets/img/logo.png" alt="" width="130" class="d-inline-block align-text-top img-fluid" >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="dashboard.php">Inicio</a>
                </li>
                <!-- Opciones según el rol -->
                <?php if ($_SESSION['user_rol_nombre'] == 'Administrador'): ?> <!-- Administrador -->
                    <li class="nav-item">
                        <a class="nav-link" href="./gestion_cursos.php">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./gestion_recursos.php">Recursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./gestion_productos.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./configuracion.php">Configuración</a>
                    </li>
                <?php elseif ($_SESSION['user_rol_nombre'] == 'Usuario'): ?> 
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Servicios
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="cursos.php">Cursos</a></li>
                            <li><a class="dropdown-item" href="recursos.php">Recursos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="configuracion.php">Configuración</a>
                    </li>
                <?php endif;?>

            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link btn btn-secundario" href="./logout.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                        </svg>
                    Cerrar Sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="hstack gap-3">
  <div class="p-2 color-primario"><?php echo $_SESSION['user_nombre']; ?></div>
  <div class="p-2 ms-auto color-secundario"><strong><?php echo $_SESSION['user_rol_nombre']; ?></strong></div>
  <div class="vr"></div>
  <div class="p-2 color-secundario"><strong><?php echo $_SESSION['user_fecha']; ?></strong></div>
</div>

<?php if (isset($_GET['success'])): ?>
    <div class="alert alert-success text-center">
        <?php echo htmlspecialchars($_GET['success']); ?>
    </div>
<?php endif; ?>

<?php if (isset($_GET['error'])): ?>
    <div class="alert alert-danger text-center">
        <?php echo htmlspecialchars($_GET['error']); ?>
    </div>
<?php endif; ?>
