<?php
session_start();
session_regenerate_id(true);

if (!isset($_SESSION['user_id'])){
    header("Location: ../index.php?error=Usuario no se ha logeado correctamente.");
    exit();
}

include './db.php'; 
include './includes/head.php';
include './includes/navbar.php';

try {
    $stmt = $conn->prepare("SELECT id, nombre, email FROM usuarios WHERE estado = 0");
    $stmt->execute();
    $result = $stmt->get_result();
} catch (Exception $e) {
    die("Error en la consulta: " . $e->getMessage());
}

try {
    $stmt1 = $conn->prepare("SELECT * FROM usuarios WHERE rol_id = 3");
    $stmt1->execute();
    $result_users = $stmt1->get_result();
} catch (Exception $e) {
    die("Error en la consulta: " . $e->getMessage());
}

// Consulta para obtener los roles
$query = "SELECT * FROM roles";
$result_rol = $conn->query($query);

// Productos con stock menor a 10
try {
    $stmtProductos = $conn->prepare("SELECT id, nombre, tipo_id, stock, precio FROM productos WHERE stock < 10");
    $stmtProductos->execute();
    $resultProductos = $stmtProductos->get_result();
} catch (Exception $e) {
    die("Error en la consulta de productos: " . $e->getMessage());
}


?>


<div class="container mt-4 text-center">
    <h1 class="text-center color-primario">
    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z"/>
        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z"/>
        </svg>
    Panel de Control</h1>
    <?php if ($_SESSION['user_rol_nombre'] == 'Administrador'): ?> <!-- Administrador -->
        <div class="row mt-5">
            <div class="col-sm-6 b-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title color-secundario">Cursos</h5>
                        <p class="card-text"></p>
                        <a href="./personalizados.php" class="btn btn-primario btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z"/>
                            </svg>
                            Personalizados
                        </a>
                        <a href="./videos.php"  class="btn btn-primario btn-lg">

                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-camera-reels" viewBox="0 0 20 20">
                            <path d="M6 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0M1 3a2 2 0 1 0 4 0 2 2 0 0 0-4 0"/>
                            <path d="M9 6h.5a2 2 0 0 1 1.983 1.738l3.11-1.382A1 1 0 0 1 16 7.269v7.462a1 1 0 0 1-1.406.913l-3.111-1.382A2 2 0 0 1 9.5 16H2a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm6 8.73V7.27l-3.5 1.555v4.35zM1 8v6a1 1 0 0 0 1 1h7.5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1"/>
                            <path d="M9 6a3 3 0 1 0 0-6 3 3 0 0 0 0 6M7 3a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
                            </svg>
                            Videos
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-6 mb-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title color-secundario">Tecnologías</h5>
                        <p class="card-text"></p>
                        <a href="./frameworks.php" class="btn btn-primario btn-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-front" viewBox="0 0  20">
                            <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2zm5 10v2a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V6a1 1 0 0 0-1-1h-2v5a2 2 0 0 1-2 2z"/>
                            </svg>
                            Frameworks
                        </a>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

</div>
<!-- Tabla de usuarios en espera de ser aprobados -->
    <?php if ($_SESSION['user_rol_nombre'] == 'Administrador'): ?> <!-- Administrador -->
        <div class="container mt-4 text-center">
            <h1 class="text-center color-secundario">Usuarios Pendientes de Aprobación</h1>
            <?php if ($result->num_rows > 0): ?>
                <div class="table-responsive">
                    <table class="table table-info table-hover table-striped mt-4 col-sm-6">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Email</th>
                                <th colspan="2">Acción</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php while ($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?php if ($_SESSION['user_rol'] == 1): echo $row['nombre']; endif ?></td>
                                    <td><?php if ($_SESSION['user_rol'] == 1): echo $row['email']; endif ?></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <form action="./aprobar_usuario.php" method="POST">
                                                    <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <select name="role" id="role" class="form-control mt-1" required>
                                                                <option value="">Seleccionar Rol</option>
                                                                    <?php
                                                                    // Verificamos si hay resultados
                                                                    if ($result_rol->num_rows > 0) {
                                                                        // Salida de datos de cada fila
                                                                        while ($row = $result_rol->fetch_assoc()) {
                                                                            echo '<option value="' . htmlspecialchars($row['id']) . '">' . htmlspecialchars($row['nombre']) . '</option>';
                                                                        }
                                                                    } else {
                                                                        echo '<option value="">No hay roles disponibles</option>';
                                                                    }
                                                                    ?>
                                                                </select>
                                                            </div>   
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <button type="submit" class="form-control btn btn-outline-info mt-1">Aprobar</button>
                                                            </div>
                                                        </div>
                                                    </div>   
                                                </form>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="co-sm-12">
                                            <form action="./usuario/rechazar_usuario.php" method="POST">
                                                <input type="hidden" name="user_id" value="<?php echo $row['id']; ?>">
                                                <button type="submit" class=" form-control btn btn-outline-danger mt-1">Rechazar</button>
                                            </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            <?php else: ?>
                <div class="alert alert-info text-center">No hay usuarios pendientes de aprobación.</div>
            <?php endif; ?>
            <!-- Tabla de productos con stock menor a 10 -->
        </div>
        <!-- Tabla de productos con stock menor a 10 -->

    <?php endif ?>

    <?php if ($_SESSION['user_rol_nombre'] == 'Administrador'): ?>
        </div>
            <div class="container mt-4 text-center">
            <h1 class="text-center color-secundario">Lista de usuarios</h1>

                <div class="table-responsive">
                    <table class="table table-info table-hover table-striped mt-4">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Hora Inicio</th>
                                <th>Servicio</th>
                                <th>Valor</th>
                                <th>Acción</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                        
                        </tbody>
                    </table>
                    <div class="alert alert-info text-center">No hay usuarios.</div>
                </div>    

        </div>
    <?php endif ?>


<?php
        $conn->close();
include './includes/footer.php'; 
?>
