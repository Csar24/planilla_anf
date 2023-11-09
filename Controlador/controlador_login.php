<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["usuario"];
    $contrasena = $_POST["contrasena"];
    
    // Llama al modelo para verificar la autenticación
    require "../Modelo/usuario.php";
    
    if (validarCredenciales($usuario, $contrasena)) {
        // Las credenciales son válidas, redirige a la página principal
        header("Location: ../Vista/home.php");
        exit();
    } else {
        // Las credenciales no son válidas, redirige a login.php con un error
        header("Location: ../Vista/login.php?error=1");
        exit();
    }
}
