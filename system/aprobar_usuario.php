<?php
// Incluimos la verificación de sesión si es necesario
session_start();

if (!isset($_SESSION['user_id'])){
    header("Location: ../index.php?error=Usuario no se ha logeado correctamente.");
    exit();
}
// Incluimos la conexión a la base de datos
include './db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtenemos el ID del usuario y el nombre del rol seleccionado
    $user_id = $_POST['user_id'];
    $role_id = $_POST['role'];  // es el id del rol

    // Validamos que se haya seleccionado un rol
    if (empty($role_id)) {
        header("Location: dashboard.php?error=Debes seleccionar un rol.");
        exit();
    }
    // Iniciamos una transacción para asegurar consistencia en los datos
    $conn->begin_transaction();

    try {
        // Asignamos el rol al usuario y cambiamos su estado a 1 (aprobado)
        $stmt = $conn->prepare("UPDATE usuarios SET estado = 1, rol_id = ? WHERE id = ?");
        $stmt->bind_param("ii", $role_id, $user_id);
        $stmt->execute();
        if ($stmt->affected_rows == 0) {
            throw new Exception("Error al aprobar el usuario o asignar el rol.");
        }

        // Confirmamos la transacción
        $conn->commit();
        header("Location: dashboard.php?success=Usuario aprobado y rol asignado correctamente.");
    } catch (Exception $e) {
        // Si ocurre algún error, revertimos la transacción y mostramos el error
        $conn->rollback();
        header("Location: dashboard.php?error=" . $e->getMessage());
    }
}
?>
