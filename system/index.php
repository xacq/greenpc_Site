<?php
session_start();

// Si el usuario ya ha iniciado sesión, redirigirlo al dashboard
if (isset($_SESSION['usuario_id'])) {
    header("Location: dashboard.php");
    exit;
}

// Incluimos el archivo head.php
include './includes/head.php';
?>

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


<!-- Contenido de la página -->
<div class="container mt-5 text-center ">

    <a href="../index.php"><img src="../assets/img/logo.png" alt="" class="img-fluid mb-4" width="250px"></a> 

    <p class="lead mt-4">Inicia sesión o Regístrate para acceder a nuestros servicios.</p>
    
    <div class="mt-5">
        <a href="./login.php" class="btn btn-primario btn-lg mx-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-bounding-box" viewBox="0 0 20 20">
            <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5"/>
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
            </svg>
        Iniciar Sesión</a>
    </div>
    
    <div class="mt-3">

        <a href="./register.php" class="btn btn-secundario btn-lg mx-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-textarea-resize" viewBox="0 0 20 20">
        <path d="M0 4.5A2.5 2.5 0 0 1 2.5 2h11A2.5 2.5 0 0 1 16 4.5v7a2.5 2.5 0 0 1-2.5 2.5h-11A2.5 2.5 0 0 1 0 11.5zM2.5 3A1.5 1.5 0 0 0 1 4.5v7A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5v-7A1.5 1.5 0 0 0 13.5 3zm10.854 4.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708l3-3a.5.5 0 0 1 .708 0m0 2.5a.5.5 0 0 1 0 .708l-.5.5a.5.5 0 0 1-.708-.708l.5-.5a.5.5 0 0 1 .708 0"/>
        </svg>    
        Registrarse</a>
    </div>
</div>

<div class="container p-4 text-center text-secondary">
    <a class="link-primario link-offset-2 link-underline link-underline-opacity-0" href="./politicasprivacidad.php">Politica de Privacidad</a>
</div>

<?php
include './includes/footer.php';
?>
