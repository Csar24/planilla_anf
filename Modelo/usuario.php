<?php
function validarCredenciales($usuario, $contrasena) {
    // Conéctate a la base de datos y verifica las credenciales
    require "conexion.php"; // Requiere el archivo de conexión a la base de datos

    // Prevenir SQL injection utilizando sentencias preparadas
    $sql = "SELECT * FROM usuarios WHERE usuario = ? AND contrasena = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("ss", $usuario, $contrasena);

        if ($stmt->execute()) {
            $stmt->store_result();
            
            if ($stmt->num_rows == 1) {
                // Las credenciales son válidas
                return true;
            }
        }
        
        $stmt->close();
    }
    
    // Las credenciales no son válidas
    return false;
}

